@extends('layouts.main')

@section('title')
    Services
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
                            <h2 class="title-head">Our <span>Services</span></h2>
                            <!-- Title Ends -->
                            <hr>
                            <!-- Breadcrumb Starts -->
                            <ul class="breadcrumb">
                                <li><a href="{{ url('/') }}"> home</a></li>
                                <li>Services</li>
                            </ul>
                            <!-- Breadcrumb Ends -->
                        </div>
                    </div>
                    <!-- Section Title Ends -->
                </div>
            </div>
        </div>
    </section>

    <section class="services">
        <div class="container">

            <div class="row">
                <!-- Service Box Starts -->
                <div class="col-md-12 service-box">
                    <div>
                        <img id="download-bitcoin" src="{{ asset('main/images/icons/orange/download-bitcoin.png') }}">
                        <div class="service-box-content">
                            <h3>Cryptocurrencies</h3>
                            <p>Cryptocurrency is the future and with awesome rates and the best trading team, we help grow your crypto currencies with diversified portfolios across various market.</p>
                        </div>
                    </div>
                </div>
                <!-- Service Box Ends -->
                <!-- Service Box Starts -->
                <div class="col-md-12 service-box">
                    <div>
                        <img id="add-bitcoins" src="{{ asset('main/images/icons/orange/add-bitcoins.png') }}" alt="add bitcoins">
                        <div class="service-box-content">
                            <h3>Forex</h3>
                            <p>Options for investing cash including certificates of deposit and the money market funds. With CDs. </p>
                        </div>
                    </div>
                </div>
                <!-- Service Box Ends -->
            </div>

            <div class="row">
                <!-- Service Box Starts -->
                <div class="col-md-12 service-box">
                    <div>
                        <img id="buy-sell-bitcoins" src="{{ asset('main/images/icons/orange/buy-sell-bitcoins.png') }}" alt="buy and sell bitcoins">
                        <div class="service-box-content">
                            <h3>Options Trading</h3>
                            <p>We offer the best Forex and Options trading services operating closely with an expert team. </p>
                        </div>
                    </div>
                </div>
                <!-- Service Box Ends -->
                <!-- Service Box Starts -->
                <div class="col-md-12 service-box">
                    <div>
                        <img id="strong-security" src="{{ asset('main/images/icons/orange/strong-security.png') }}" alt="strong security">
                        <div class="service-box-content">
                            <h3>Advisor Network</h3>
                            <p>Specialized guidance from independent local advisor for high-net-worth investors. Our agents are always readily available to assist and give great support to investors 24 hours.</p>
                        </div>
                    </div>
                </div>
                <!-- Service Box Ends -->
            </div>

        </div>
    </section>

    <section class="image-block">
        <div class="container-fluid">
            <div class="row">
                <!-- Features Starts -->
                <div class="col-md-8 ts-padding img-block-left">
                    <div class="gap-20"></div>
                    <div class="row">

                        <!-- Feature Starts -->
                        <div class="col-sm-6 col-md-6 col-xs-12">
                            <div class="feature text-center">
                                    <span class="feature-icon">
										<img id="strong-security" src="{{ asset('main/images/icons/orange/strong-security.png') }}" alt="strong security"/>
									</span>
                                <h3 class="feature-title">Strong Security</h3>
                                <p>Protection against DDoS attacks, <br>full data encryption</p>
                            </div>
                        </div>

                        <!-- Feature Ends -->
                        <div class="gap-20-mobile"></div>
                        <!-- Feature Starts -->
                        <div class="col-sm-6 col-md-6 col-xs-12">
                            <div class="feature text-center">
                                    <span class="feature-icon">
										<img id="world-coverage" src="{{ asset('main/images/icons/orange/world-coverage.png') }}" alt="world coverage"/>
									</span>
                                <h3 class="feature-title">World Coverage</h3>
                                <p>Providing services in 99% countries<br> around all the globe</p>
                            </div>
                        </div>
                        <!-- Feature Ends -->
                    </div>

                    <div class="gap-20"></div>
                    <div class="row">
                        <!-- Feature Starts -->
                        <div class="col-sm-6 col-md-6 col-xs-12">
                            <div class="feature text-center">
                                    <span class="feature-icon">
										<img id="cost-efficiency" src="{{ asset('main/images/icons/orange/cost-efficiency.png') }}" alt="cost efficiency"/>
									</span>
                                <h3 class="feature-title">Cost efficiency</h3>
                                <p>Reasonable trading fees for takers<br> and all market makers</p>
                            </div>
                        </div>
                        <!-- Feature Ends -->
                        <div class="gap-20-mobile"></div>
                        <!-- Feature Starts -->
                        <div class="col-sm-6 col-md-6 col-xs-12">
                            <div class="feature text-center">
                                    <span class="feature-icon">
										<img id="high-liquidity" src="{{ asset('main/images/icons/orange/high-liquidity.png') }}" alt="high liquidity"/>
									</span>
                                <h3 class="feature-title">High Liquidity</h3>
                                <p>Fast access to high liquidity orderbook<br> for top currency pairs</p>
                            </div>
                        </div>
                        <!-- Feature Ends -->
                    </div>
                </div>
                <!-- Features Ends -->
                <!-- Video Starts -->
                <div class="col-md-4 ts-padding bg-image-1">
                </div>
                <!-- Video Ends -->
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
