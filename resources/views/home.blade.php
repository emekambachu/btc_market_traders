@extends('layouts.main')

@section('title')
Home
@endsection

@section('contents')
    <div id="main-slide" class="carousel slide carousel-fade" data-ride="carousel">

        <!-- Indicators Starts -->
        <ol class="carousel-indicators visible-lg visible-md">
            <li data-target="#main-slide" data-slide-to="0" class="active"></li>
            <li data-target="#main-slide" data-slide-to="1"></li>
            <li data-target="#main-slide" data-slide-to="2"></li>
        </ol>
        <!-- Indicators Ends -->

        <!-- Carousel Inner Starts -->
        <div class="carousel-inner">

            <!-- Carousel Item Starts -->
            <div class="item active bg-parallax item-1">
                <div class="slider-content">
                    <div class="container">
                        <div class="slider-text text-center">
                            <h3 class="slide-title">
                                <span style="color: #fd961a;">BITCOIN</span> MARKET <span>TRADERS</span><br/>
                            </h3>
                            <p>
                                <a href="{{ url('about') }}" class="slider btn btn-primary">Learn more</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Carousel Item Ends -->

            <!-- Carousel Item Starts -->
            <div class="item bg-parallax item-2">
                <div class="slider-content">
                    <div class="col-md-12">
                        <div class="container">
                            <div class="slider-text text-center">
                                <h3 class="slide-title"><span>Bitcoin</span> Exchange <br/>You can <span>Trust</span> </h3>
                                <p>
                                    <a href="{{ url('pricing') }}" class="slider btn btn-primary">our prices</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Carousel Item Ends -->

        </div>
        <!-- Carousel Inner Ends -->
        <!-- Carousel Controlers Starts -->
        <a class="left carousel-control" href="index-2.html#main-slide" data-slide="prev">
            <span><i class="fa fa-angle-left"></i></span>
        </a>
        <a class="right carousel-control" href="index-2.html#main-slide" data-slide="next">
            <span><i class="fa fa-angle-right"></i></span>
        </a>
        <!-- Carousel Controlers Ends -->
    </div>

    <section class="features">
        <div class="container">
            <div class="row features-row">
                <!-- Feature Box Starts -->
                <div class="feature-box col-md-4 col-sm-12">
                        <span class="feature-icon">
							<img id="download-bitcoin" src="{{ asset('main/images/icons/orange/download-bitcoin.png') }}" alt="download bitcoin">
						</span>
                    <div class="feature-box-content">
                        <h3>Register and Login</h3>
                        <p>Create your account easily and login</p>
                    </div>
                </div>
                <!-- Feature Box Ends -->
                <!-- Feature Box Starts -->
                <div class="feature-box two col-md-4 col-sm-12">
                        <span class="feature-icon">
							<img id="add-bitcoins" src="{{ asset('main/images/icons/orange/add-bitcoins.png') }}" alt="add bitcoins">
						</span>
                    <div class="feature-box-content">
                        <h3>Add coins to your Wallet</h3>
                        <p>Add bitcoins you’ve created or exchanged via credit card.</p>
                    </div>
                </div>
                <!-- Feature Box Ends -->
                <!-- Feature Box Starts -->
                <div class="feature-box three col-md-4 col-sm-12">
                        <span class="feature-icon">
							<img id="buy-sell-bitcoins" src="{{ asset('main/images/icons/orange/buy-sell-bitcoins.png') }}" alt="buy and sell bitcoins">
						</span>
                    <div class="feature-box-content">
                        <h3>Buy/Sell with Wallet</h3>
                        <p>Enter receiver's address, specify the amount and send.</p>
                    </div>
                </div>
                <!-- Feature Box Ends -->
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
                <div class="col-md-4 ts-padding bg-image-1">
                </div>
                <!-- Video Ends -->
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

    <section class="bitcoin-calculator-section">
        <div class="container">
            <div class="row">
                <!-- Section Heading Starts -->
                <div class="col-md-12">
                    <h2 class="title-head text-center"><span>Bitcoin</span> Calculator</h2>
                    <p class="message text-center">Find out the current Bitcoin value with our easy-to-use converter</p>
                </div>
                <!-- Section Heading Ends -->
                <!-- Bitcoin Calculator Form Starts -->
                <div class="col-md-12 text-center">
                    <form class="bitcoin-calculator" id="bitcoin-calculator">
                        <!-- Input #1 Starts -->
                        <input class="form-input" name="btc-calculator-value" value="1">
                        <!-- Input #1 Ends -->
                        <div class="form-info"><i class="fa fa-bitcoin"></i></div>
                        <div class="form-equal">=</div>
                        <!-- Input/Result Starts -->
                        <input class="form-input form-input-result" name="btc-calculator-result">
                        <!-- Input/Result Ends -->
                        <!-- Select Currency Starts -->
                        <div class="form-wrap">
                            <select id="currency-select" class="form-input select-currency select-primary" name="btc-calculator-currency" data-dropdown-class="select-primary-dropdown"></select>
                        </div>
                        <!-- Select Currency Ends -->
                    </form>
                    <p class="info"><i>* Data updated every 15 minutes</i></p>
                </div>
                <!-- Bitcoin Calculator Form Ends -->
            </div>
        </div>
    </section>

    <section class="image-block2">
        <div class="container-fluid">
            <div class="row">

                <!-- Quote Starts -->
                <div class="col-md-4 img-block-quote bg-image-2">
                    <blockquote>
                        <p>Bitcoin is one of the most important inventions in all of human history. For the first time ever, anyone can send or receive any amount of money with anyone else, anywhere on the planet, conveniently and without restriction. It’s the dawn of a better, more free world.</p>
                        <footer><img src="{{ asset('main/images/ceo.jpg') }}" alt="ceo" /> <span>Marc Smith</span> - CEO</footer>
                    </blockquote>
                </div>
                <!-- Quote Ends -->

                <!-- Chart Starts -->
                <div class="col-md-8 bg-grey-chart">
                    <div class="chart-widget dark-chart chart-1">
                        <div>
                            <div class="btcwdgt-chart" data-bw-theme="dark"></div>
                        </div>
                    </div>
                    <div class="chart-widget light-chart chart-2">
                        <div>
                            <div class="btcwdgt-chart" bw-theme="light"></div>
                        </div>
                    </div>
                </div>
                <!-- Chart Ends -->

            </div>
        </div>
    </section>

    <section class="">
        <div class="container">

            <div class="col-md-12">
                <h2 style="color: #07ED83;">News and Updates</h2>
            </div>
            <!-- Title row end-->
            <div class="row">
                <div class="col-md-12">
                    <div class="feedgrabbr_widget" id="fgid_71e82e89566823ac785c365ed"></div>
                    <script>if (typeof (fg_widgets) === "undefined") fg_widgets = new Array(); fg_widgets.push("fgid_71e82e89566823ac785c365ed");</script>
                    <script async src="https://www.feedgrabbr.com/widget/fgwidget.js"></script>
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
