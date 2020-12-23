@extends('layouts.main')

@section('title')
    Investment Packages
@endsection

@section('contents')
    <section class="banner-area">
        <div class="banner-overlay">
            <div class="banner-text text-center">
                <div class="container">
                    <!-- Section Title Starts -->
                    <div class="row text-center">
                        <div class="col-xs-12">
                            <!-- Title Starts -->
                            <h2 class="title-head">Investment <span>Packages</span></h2>
                            <!-- Title Ends -->
                            <hr>
                            <!-- Breadcrumb Starts -->
                            <ul class="breadcrumb">
                                <li><a href="{{ url('/') }}"> home</a></li>
                                <li>Investment Packages</li>
                            </ul>
                            <!-- Breadcrumb Ends -->
                        </div>
                    </div>
                    <!-- Section Title Ends -->
                </div>
            </div>
        </div>
    </section>

    <section class="pricing">
        <div class="container">
            <!-- Section Content Starts -->
            <h3 class="text-center">Investment Packages</h3>
            <div class="row pricing-tables-content pricing-page">
                <div class="pricing-container">
                    <!-- Pricing Tables Starts -->
                    <ul class="pricing-list bounce-invert">

                        @foreach($packages as $package)
                        <li class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
                            <ul class="pricing-wrapper">
                                <!-- Pricing Table #1 Starts -->
                                <li>
                                    <header class="pricing-header">
                                        <h1 style="color: #FCAB10;">{{ $package->name }}</h1>
                                        <div class="price">
                                            @if(!empty($package->min))
                                                <p style="font-size: 18px;">Minimum: {{ '$'.number_format($package->min) }}</p>
                                            @endif

                                            @if(!empty($package->max))
                                                <p style="font-size: 18px;">Maximum: {{ '$'.number_format($package->max) }}</p>
                                            @else
                                                <p style="font-size: 18px;">and above</p>
                                            @endif

                                            <ul class="list-unstyled">
                                                @if(!empty($package->roi))
                                                    <li style="font-size: 18px;">{{ $package->roi }}</li>
                                                @endif

                                                @if(!empty($package->referral_bonus))
                                                    <li style="font-size: 18px;">{{ $package->referral_bonus }}% Referral Bonus</li>
                                                @endif

                                                @if(!empty($package->expert_advice))
                                                    <li style="font-size: 18px;">{{ $package->expert_advice }}</li>
                                                @endif
                                            </ul>
                                        </div>
                                    </header>
                                    <footer class="pricing-footer">
                                        <a href="{{ route('register') }}" class="btn btn-primary">ORDER NOW</a>
                                    </footer>
                                </li>
                                <!-- Pricing Table #1 Ends -->
                            </ul>
                        </li>
                        @endforeach

                    </ul>
                </div>
            </div>

        </div>
    </section>

    <section class="call-action-all">
        <div class="call-action-all-overlay">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <!-- Call To Action Text Starts -->
                        <div class="action-text">
                            <h2>START TRADING TODAY</h2>
                            <p class="lead">Open account for free and start trading Bitcoins!</p>
                        </div>
                        <!-- Call To Action Text Ends -->
                        <!-- Call To Action Button Starts -->
                        <p class="action-btn"><a class="btn btn-primary" href="{{ route('register') }}">Register Now</a></p>
                        <!-- Call To Action Button Ends -->
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
