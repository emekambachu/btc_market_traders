@extends('layouts.main')

@section('title')
    About
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
                            <h2 class="title-head">About <span>Us</span></h2>
                            <!-- Title Ends -->
                            <hr>
                            <!-- Breadcrumb Starts -->
                            <ul class="breadcrumb">
                                <li><a href="{{ url('/') }}"> home</a></li>
                                <li>About</li>
                            </ul>
                            <!-- Breadcrumb Ends -->
                        </div>
                    </div>
                    <!-- Section Title Ends -->
                </div>
            </div>
        </div>
    </section>

    <section class="about-us">
        <div class="container">
            <!-- Section Title Starts -->
            <div class="row text-center">
                <h2 class="title-head">About <span>Us</span></h2>
                <div class="title-head-subtitle">
                    <p>a commercial website that lists wallets, exchanges and other bitcoin related info</p>
                </div>
            </div>
            <!-- Section Title Ends -->
            <!-- Section Content Starts -->
            <div class="row about-content">
                <!-- Image Starts -->
                <div class="col-sm-12 col-md-5 col-lg-6 text-center">
                    <img id="about-us" class="img-responsive img-about-us" src="{{ asset('main/images/about-us.png') }}" alt="about us">
                </div>
                <!-- Image Ends -->
                <!-- Content Starts -->
                <div class="col-sm-12 col-md-7 col-lg-6">
                    <h3 class="title-about">BITCOIN MARKET TRADERS</h3>
                    <p class="about-text">We are a value-oriented investment firm that applies a private equity approach to investing in the public markets. BMI manages long and Short term capital for Private investors, endowments, foundations, family, offices and other institutional investors.<br>

                        We invest in a concentrated long/short portfolio of cryptocurrencies of small to middle market companies. This strategy is the core of DMI’s activities and has the flexibility to take advantage of the best public and private opportunities in this segment of the market. Digital Metrics Investment seeks to achieve investment gains through traditional trading with best rate in the the market.</p>
                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#menu1">Our Mission</a></li>
                        <li><a data-toggle="tab" href="#menu2">Our advantages</a></li>
                        <li><a data-toggle="tab" href="#menu3">Our guarantees</a></li>
                    </ul>
                    <div class="tab-content">
                        <div id="menu1" class="tab-pane fade in active">
                            <p>Bitcoin is based on a protocol known as the blockchain, which allows to create, transfer and verify ultra-secure financial data without interference of third parties.</p>
                        </div>
                        <div id="menu2" class="tab-pane fade">
                            <p>Our mission as an official partner of Bitcoin Foundation is to help you enter and better understand the world of #1 cryptocurrency and avoid any issues you may encounter.</p>
                        </div>
                        <div id="menu3" class="tab-pane fade">
                            <p>We are here because we are passionate about open, transparent markets and aim to be a major driving force in widespread adoption, we are the first and the best in cryptocurrency. </p>
                        </div>
                    </div>
                    <a class="btn btn-primary" href="{{ url('about') }}">Read More</a>
                </div>
                <!-- Content Ends -->
            </div>
            <!-- Section Content Ends -->
        </div>
    </section>

    <section class="blog">
        <div class="container">
            <!-- Section Title Starts -->
            <div class="row text-center">
                <h2 class="title-head">Investment <span>Strategies</span></h2>
                <div class="title-head-subtitle">
                    <p>Digital Metrics Investment seeks to invest in assets that offer the potential for highly attractive risk adjusted returns. We will continue to focus primarily on:</p>
                </div>
            </div>
            <!-- Section Title Ends -->
            <!-- Section Content Starts -->
            <div class="row latest-posts-content">

                <!-- Article Starts -->
                <div class="col-sm-4 col-md-4 col-xs-12">
                    <div class="latest-post">
                        <!-- Featured Image Starts -->
                        <a href=""><img class="img-responsive" src="{{ asset('main/images/blog/blog-post-small-1.jpg') }}" alt="img"></a>
                        <!-- Featured Image Ends -->
                        <!-- Article Content Starts -->
                        <div class="post-body">
                            <h4 class="post-title">
                                <a href="">Compelling Opportunities in a dynamic industry</a>
                            </h4>
                            <div class="post-text">
                                <p>Compelling opportunities in strong secondary markets to capitalize on the changing demographics, preferences, and supply/demand imbalances through investments in Equity, Bonds, Crypto currency, Forex</p>
                            </div>
                        </div>
                        <!-- Article Content Ends -->
                    </div>
                </div>
                <!-- Article Ends -->

                <!-- Article Starts -->
                <div class="col-sm-4 col-md-4 col-xs-12">
                    <div class="latest-post">
                        <!-- Featured Image Starts -->
                        <a href="">
                            <img class="img-responsive" src="{{ asset('main/images/blog/blog-post-small-2.jpg') }}" alt="img"></a>
                        <!-- Featured Image Ends -->
                        <!-- Article Content Starts -->
                        <div class="post-body">
                            <h4 class="post-title">
                                <a href="">Modest Equity Requirements</a>
                            </h4>
                            <div class="post-text">
                                <p>Investments with more modest equity requirements ($5 to $95 million) that are often avoided by larger institutional investment funds. Growth markets including strong middle markets exhibiting job creation and stable economic performance.
                                </p>
                            </div>
                        </div>
                        <!-- Article Content Ends -->
                    </div>
                </div>
                <!-- Article Ends -->

                <!-- Article Start -->
                <div class="col-sm-4 col-md-4 col-xs-12">
                    <div class="latest-post">
                        <!-- Featured Image Starts -->
                        <a href=""><img class="img-responsive" src="{{ asset('main/images/blog/blog-post-small-3.jpg') }}" alt="img"></a>
                        <!-- Featured Image Ends -->
                        <!-- Article Content Starts -->
                        <div class="post-body">
                            <h4 class="post-title">
                                <a href="">Opportunity Development</a>
                            </h4>
                            <div class="post-text">
                                <p>Distressed opportunities including non-performing loans, bank owned assets, and equity recapitalizations. Select development opportunities within high barrier to entry locations in major metropolitan areas and growing secondary cities.
                                </p>
                            </div>
                        </div>
                        <!-- Article Content Ends -->
                    </div>
                </div>

            </div>
            <!-- Section Content Ends -->
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
                <div class="col-md-4 ts-padding bg-image-1"></div>
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
