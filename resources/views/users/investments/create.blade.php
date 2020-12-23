@extends('layouts.users')

@section('title')
    Create Investment
@endsection

@section('contents')
    <div class="layout-px-spacing">
        <div class="page-header">
            <div class="page-title">
                <h3 class="text-white">Add New Investment</h3>
            </div>

        </div>

        <div class="row layout-top-spacing">

            <div id="flStackForm" class="col-lg-6 col-md-6 col-12 layout-spacing layout-top-spacing">
                <div class="statbox widget box box-shadow">
                    <div class="widget-header">
                        <div class="row">
                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                <h4>Add New Investment</h4>
                            </div>
                            <p>After making your payment, submit you bitcoin payment details.</p>
                            @include('includes.alerts')
                        </div>
                    </div>
                    <div class="widget-content widget-content-area">
                        <form method="post" action="{{ url('users/submit-investments') }}">
                            @csrf
                            <div class="form-group mb-3">
                                <label for="validationDefault01">Amount</label>
                                <input name="amount" type="number" class="form-control" id="validationDefault01" required="">
                            </div>
                            <div class="form-group mb-4">
                                <label for="validationDefault02">Package</label>
                                <select name="package" class="form-control" required>
                                    <option disabled>Select Investment Plan</option>
                                    @foreach($packages as $pack)
                                        <option value="{{ $pack->id }}">{{ $pack->name }} | {{ !empty($pack->min) ? '$'.number_format($pack->min) : 0 }} to {{ !empty($pack->max) ? '$'.number_format($pack->max) : 'Unlimited' }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <button type="submit" class="btn btn-primary mt-3">Submit</button>
                        </form>

                    </div>
                </div>
            </div>

            <div id="card_2" class="col-md-5 col-12 layout-spacing">
                <div class="statbox widget box box-shadow">

                    <div class="widget-content widget-content-area">

                        <div class="card component-card_2">

                            <div class="card-body">
                                <p class="card-text"> Make payment using the bitcoin address below</p>
                                <h5 class="card-title">{{ $wallet->address }}</h5>
                            </div>
                            <img width="200" src="{{ asset("photos/{$wallet->image}") }}" class="card-img-top" alt="widget-card-2">

                        </div>

                    </div>
                </div>
            </div>

        </div>

        <div class="footer-wrapper">
            <div class="footer-section f-section-1">
                <p class="">Copyright © {{ date('Y') }}
                    <a target="_blank" href="{{ url('/') }}">Bitcoin Market Traders</a>, All rights reserved.</p>
            </div>
        </div>

    </div>
@endsection
