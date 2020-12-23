<?php

namespace App\Http\Controllers;

use App\Investment;
use App\InvestmentPackage;
use App\Transaction;
use App\User;
use App\Withdrawal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Create a new controller instance.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */

    public function index(){

        // Check if users is logged in
        if(Auth::check()){
            $user = Auth::user();
        }else{
            return redirect()->route('login');
        }

        $investments = Investment::where('user_id', Auth::user()->id)->orderBy('created_at', 'desc')->get();

        $totalInvestments = Investment::where([

            ['user_id', Auth::user()->id],
            ['is_approved', true],

        ])->sum('amount');

        $recentInvestment = Investment::where([

            ['user_id', Auth::user()->id],
            ['is_approved', true],

        ])->orderBy('created_at', 'desc')->get()->first();

        $total_withdrawals = Withdrawal::where([

            [ 'user_id', Auth::user()->id],
            [ 'is_approved', 1],

        ])->orderBy('created_at', 'desc')->get();

        $transactions = Transaction::where('user_id', $user->id)->orderBy('created_at', 'desc')->limit(6)->get();

        return view('users.index',
            compact('user', 'investments', 'totalInvestments', 'recentInvestment', 'total_withdrawals', 'transactions'));
    }

    public function withdrawal(){

        // Check if users is logged in
        if(Auth::check()){
            $user = Auth::user();
        }else{
            return redirect()->route('login');
        }

        return view('users.withdrawal', compact('user'));
    }

    public function withdrawAmount(Request $request){

        if($request->input('amount') > Auth::user()->wallet->amount){
            //session notification
            Session::flash('warning', 'Insufficient Funds');
            return redirect()->back();
        }

        $withdraw = Withdrawal::create([

            'user_id' => Auth::user()->id,
            'bitcoin_address' => $request->input('bitcoin_address'),
            'amount' => $request->input('amount'),
            'is_approved' => 0,

        ]);

        Transaction::addTransaction($withdraw->user_id, $withdraw->amount, 0, 'You made a withdrawal request');

        $data = [
            'amount' => $withdraw->amount,
            'is_approved' => $withdraw->is_approved,
            'name' => Auth::user()->name,
            'email' => Auth::user()->email,
        ];

        // Send Email to registered User
        Mail::send('emails.users.withdrawal-request', $data, static function ($message) use ($data) {
            $message->from('support@btcmarkettraders.com', 'Bitcoin Market Traders');
            $message->to($data['email'], $data['name'])->cc('support@btcmarkettraders.com');
            $message->replyTo('support@btcmarkettraders.com', 'Bitcoin Market Traders');
            $message->subject('Withdrawal request of '.$data['amount']);
        });

        Session::flash('success', 'Your withdrawal request has been successful');
        return redirect()->back();
    }

    public function accountSettings(){

        // Check if users is logged in
        if(Auth::check()){
            $user = Auth::user();
        }else{
            return redirect()->route('login');
        }

        return view('users.account-settings', compact('user'));
    }

    public function updateAccount(Request $request){

        //Get Image
        if($file = request()->file('image')){

            if(!empty(request()->file('image'))){

                if(!File::exists('photos')) {
                    // create path
                    File::makeDirectory('photos', $mode = 0777, true, true);
                }

                // Add current time in seconds to image
                $name = time() . $file->getClientOriginalName();

                //Move image to photos directory
                $file->move('photos', $name);

                $data['image'] = $name;

            }else{
                $data['image'] = Auth::user()->image;
            }

        }

        if(!empty($request->input('password'))){
            $input['password'] = bcrypt($request->input('password'));
        }else{
            $input['password'] = Auth::user()->password;
        }

        if(!empty($request->input('country'))){
            $input['country'] = $request->input('country');
        }else{
            $input['country'] = Auth::user()->country;
        }

        if(!empty($request->input('state'))){
            $input['state'] = $request->input('state');
        }else{
            $input['state'] = Auth::user()->state;
        }

        $input['name'] = $request->input('name');
        $input['email'] = $request->input('email');
        $input['mobile'] = $request->input('mobile');
        $input['address'] = $request->input('address');

        User::where([
            ['id', '=', Auth::user()->id]
        ])->update($input);

        Session::flash('success', 'Your User Details has been updated');
        return redirect()->back();
    }

}
