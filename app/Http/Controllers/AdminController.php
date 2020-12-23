<?php

namespace App\Http\Controllers;

use App\Admin;
use App\AdminWalletAddress;
use App\Investment;
use App\InvestmentPackage;
use App\Transaction;
use App\User;
use App\Wallet;
use App\Withdrawal;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(){
        $this->middleware('auth:admin');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function index()
    {
        // Check if users is logged in
        if(!Auth::guard('admin')->check()){
            return redirect()->route('admin-login');
        }

        $users = User::all();
        $approvedInvestments = Investment::where('is_approved', True)->get();
        $pendingInvestments = Investment::where('is_approved', False)->get();

        return view('admin.index', compact('users', 'approvedInvestments', 'pendingInvestments'));
    }

    public function manageUsers(){

        $users = User::where([
            ['id', '<>', Auth::user()->id]
        ])->orderBy('created_at', 'desc')->paginate(12);

        return view('admin.manage-users', compact('users'));

    }

    public function approveUser(Request $request, $id){

        $user = User::find($id);

        if($user->is_active){
            $user->is_active = False;
            $status = 'deactivated';
            Session::flash('warning', $user->name.' has been deactivated');

        }else{
            $user->is_active = True;
            $status = 'activated';
            Session::flash('success', $user->name.' has been activated');
        }
        $user->save();

        $data = [
            'name' => $user->name,
            'email' => $user->email,
            'status' => $status,
        ];

        Mail::send('emails.users.verify-user', $data, static function ($message) use ($data) {
            $message->from('support@btcmarkettraders.com', 'Bitcoin Market Traders');
            $message->to($data['email'], $data['name'])->cc('support@btcmarkettraders.com');
            $message->replyTo('support@btcmarkettraders.com', 'Bitcoin Market Traders');
            $message->subject($data['status'] === 'activated' ? 'Your Account has been activated' : 'Your Account has been deactivated');
        });

        return redirect()->back();
    }

    public function deleteUser(Request $request, $id){

        $user = User::find($id);

        // Check if image record exists in table
        if(!empty($user->image) && File::exists(public_path() . '/photos/' . $user->image)) {
            FILE::delete(public_path() . '/photos/' . $user->image);
            $user->delete();
        } else{
            $user->delete();
        }

        //flash notification
        Session::flash('warning', 'Deleted');
        return redirect()->back();
    }

    public function fundWalletPage($id){

        $user = User::find($id);
        return view('admin.fund-wallet', compact('user'));
    }

    public function fundWallet(Request $request, $id){

        $amount = $request->input('amount');
        $description = $request->input('description');

        // current date using laravel carbon
        $now = Carbon::now();
        $time = $now->toDayDateTimeString();

        // get users
        $user = User::find($id);

        // get users wallet
        $wallet = Wallet::find($user->wallet_id);

        // Update User Wallet
        $wallet->amount += $amount;
        $wallet->save();

        // add to transaction
        Transaction::addTransaction($user->id, 0, $wallet->amount, $description);

        //Generate Ref
        function ref($length = 5){
            $characters = '0123456789';
            $charactersLength = strlen($characters);
            $randomString = 'DMI-';
            for ($i = 0; $i < $length; $i++) {
                $randomString .= $characters[rand(0, $charactersLength - 1)];
            }
            return $randomString;
        }

        $data = [
            'name' => $user->name,
            'email' => $user->email,
            'amount' => $amount,
            'description' => $description,
            'time' => $time,
            'ref' => ref(),
            'balance' => $wallet->amount,
        ];

        Mail::send('emails.fund-wallet', $data, static function ($message) use ($data) {
            $message->from('support@btcmarkettraders.com', 'Bitcoin Market Traders');
            $message->to($data['email'], $data['name'])->cc('support@btcmarkettraders.com');
            $message->replyTo('support@btcmarkettraders.com', 'Bitcoin Market Traders');
            $message->subject('Credit Transfer of $' . number_format($data['amount']) . ' From Investment');
        });

        Session::flash('success', 'Wallet has been funded with $'.$amount);
        return redirect()->back();
    }

    public function addProfitPage($id){

        $user = User::find($id);
        return view('admin.add-profit', compact('user'));
    }

    public function addProfit(Request $request, $id){

        $amount = $request->input('amount');
        $description = $request->input('description');

        // current date using laravel carbon
        $now = Carbon::now();
        $time = $now->toDayDateTimeString();

        // get users
        $user = User::find($id);

        // get users wallet
        $wallet = Wallet::find($user->wallet_id);

        // Update User Profit
        $wallet->profit = $amount;
        $wallet->save();

        // add to transaction
//        Transaction::addTransaction($user->id, 0, $wallet->profit, $description);

        Session::flash('success', 'Profit has been funded with $'.$amount);
        return redirect()->back();
    }

    public function addCommissionPage($id){

        $user = User::find($id);
        return view('admin.add-commission', compact('user'));
    }

    public function addCommission(Request $request, $id){

        $amount = $request->input('amount');
        $description = $request->input('description');

        // current date using laravel carbon
        $now = Carbon::now();
        $time = $now->toDayDateTimeString();

        // get users
        $user = User::find($id);

        // get users wallet
        $wallet = Wallet::find($user->wallet_id);

        // Update User Wallet
        $wallet->commission = $amount;
        $wallet->save();

        // add to transaction
//        Transaction::addTransaction($user->id, 0, $wallet->commission, $description);

        Session::flash('success', 'Commission has been updated to $'.$amount);
        return redirect()->back();
    }

    public function addBonusPage($id){

        $user = User::find($id);
        return view('admin.add-bonus', compact('user'));
    }

    public function addBonus(Request $request, $id){

        $amount = $request->input('amount');
        $description = $request->input('description');

        // current date using laravel carbon
        $now = Carbon::now();
        $time = $now->toDayDateTimeString();

        // get users
        $user = User::find($id);

        // get users wallet
        $wallet = Wallet::find($user->wallet_id);

        // Update User Wallet
        $wallet->bonus = $amount;
        $wallet->save();

        // add to transaction
//        Transaction::addTransaction($user->id, 0, $wallet->bonus, $description);

        Session::flash('success', 'Bonus has been updated to $'.$amount);
        return redirect()->back();
    }

    public function manageInvestments(){
        $investments = Investment::orderBy('created_at', 'desc')->paginate(12);
        return view('admin.manage-investments', compact('investments'));
    }

    public function approveInvestment(Request $request, $id){

        $investment = Investment::find($id);

        if($investment->is_approved){
            $investment->is_approved = False;
            $status = 'Sorry, Your Investment has been Cancelled';
            Session::flash('warning', 'This Investment has been Cancelled');

        }else{
            $investment->is_approved = True;
            $status = 'Congratulations, Your Investment Has Been Approved';
            Session::flash('success', 'This Investment has been Approved');

            Transaction::addTransaction($investment->user->id, 0, $investment->amount, $status);
        }

        $investment->save();

        $data = [
            'name' => $investment->user->name,
            'email' => $investment->user->email,
            'amount' => $investment->amount,
            'status' => $status,
            'is_approved' => $investment->is_approved,
        ];

        Mail::send('emails.investments.approve-investment', $data, static function ($message) use ($data) {
            $message->from('support@btcmarkettraders.com', 'Bitcoin Market Traders');
            $message->to($data['email'], $data['name'])->cc('support@btcmarkettraders.com');
            $message->replyTo('support@btcmarkettraders.com', 'Bitcoin Market Traders');
            $message->subject($data['status']);
        });

        return redirect()->back();
    }

    public function addUserInvestmentPage($id){

        $user = User::find($id);
        $packages = InvestmentPackage::all();
        return view('admin.add-user-investment', compact('user', 'packages'));
    }

    public function addUserInvestment(Request $request, $id){

        $input = $request->all();

        // get users
        $user = User::find($id);

        $package = InvestmentPackage::where('id', $input['package'])->get()->first();

        if($input['amount'] < $package->min || $input['amount'] > $package->max){
            //session notification
            Session::flash('warning', 'Enter an amount that falls within your package');
            return redirect()->back();
        }

        //Generate Investment ID
        function InvestmentId($length = 5){
            $characters = '0123456789';
            $charactersLength = strlen($characters);
            $randomString = 'BTF-';
            for ($i = 0; $i < $length; $i++) {
                $randomString .= $characters[random_int(0, $charactersLength - 1)];
            }
            return $randomString;
        }

        $investment = Investment::create([
            'invest_id' => InvestmentId(),
            'investment_package_id' => $package->id,
            'user_id' => $user->id,
            'amount' => $input['amount'],
            'is_approved' => 1,
        ]);

        Transaction::addTransaction($user->id, 0, $investment->amount, 'Your Investment has been approved');

        Session::flash('success', 'Investment Successful');
        return redirect()->back();
    }

    public function withdrawalRequests(){
        $withdrawals = Withdrawal::orderBy('created_at', 'desc')->paginate(12);
        return view('admin.withdrawal-requests', compact('withdrawals'));
    }

    public function approveWithdrawal(Request $request, $id){

        $withdrawal = Withdrawal::find($id);

        if($withdrawal->is_approved){
            $withdrawal->is_approved = False;
            $status = 'Sorry, Your Withdrawal Request has been Cancelled';
            Session::flash('warning', 'This Withdrawal Request has been Cancelled');

        }else{
            $withdrawal->is_approved = True;
            $status = 'Congratulations, Your Withdrawal of $'.$withdrawal->amount.' Has Been Approved';
            Session::flash('success', 'This Withdrawal has been Approved');

            $wallet = Wallet::where('id', $withdrawal->user->wallet_id)->get()->first();
            $wallet->amount -= $withdrawal->amount;
            $wallet->save();

            Transaction::addTransaction($withdrawal->user->wallet_id, $wallet->amount, 0, $status);
        }

        $withdrawal->save();

        $data = [
            'name' => $withdrawal->user->name,
            'email' => $withdrawal->user->email,
            'amount' => $withdrawal->amount,
            'status' => $status,
            'is_approved' => $withdrawal->is_approved,
        ];

        Mail::send('emails.approve-withdrawal', $data, static function ($message) use ($data) {
            $message->from('support@btcmarkettraders.com', 'Bitcoin Market Traders');
            $message->to($data['email'], $data['name'])->cc('support@btcmarkettraders.com');
            $message->replyTo('support@btcmarkettraders.com', 'Bitcoin Market Traders');
            $message->subject($data['status']);
        });

        return redirect()->back();
    }

    public function adminAccountSettings(){

        $wallet = AdminWalletAddress::where('id', 1)->get()->first();

        return view('admin.account-settings', compact('wallet'));
    }

    public function updateAdminAccount(Request $request){

        if(!empty($request->input('password'))){
            $input['password'] = bcrypt($request->input('password'));
        }else{
            $input['password'] = Auth::user()->password;
        }

        $input['name'] = $request->input('name');
        $input['username'] = $request->input('username');

        Admin::where([
            ['id', '=', Auth::user()->id]
        ])->update($input);

        Session::flash('success', 'Your account has been updated');
        return redirect()->back();
    }

    public function updateWalletAddress(Request $request){

        $input = $request->except('_token', '_method');

        //Get Image
        if(($file = request()->file('image'))) {

            if(!File::exists('photos')) {
                // create path
                File::makeDirectory('photos', $mode = 0777, true, true);
            }

            // Add current time in seconds to image
            $name = time() . $file->getClientOriginalName();

            //Move image to photos directory
            $file->move('photos', $name);

            $input['image'] = $name;
        }

        AdminWalletAddress::where([
            ['id', '=', 1]
        ])->update($input);

        Session::flash('success', 'Your Bitcoin Wallet Address is Updated');
        return redirect()->back();
    }
}
