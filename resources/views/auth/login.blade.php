@extends('layouts.main')

@section('title')
    Login
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
                            <h2 class="title-head">Login</h2>
                            <!-- Title Ends -->
                            <hr>
                            <!-- Breadcrumb Starts -->
                            <ul class="breadcrumb">
                                <li><a href="{{ url('/') }}"> home</a></li>
                                <li>Login</li>
                            </ul>
                            <!-- Breadcrumb Ends -->
                        </div>
                    </div>
                    <!-- Section Title Ends -->
                </div>
            </div>
        </div>
    </section>

    <div class="container-fluid user-auth">
        <div class="hidden-xs col-sm-4 col-md-4 col-lg-4">
            <!-- Logo Starts -->
            <a class="logo" href="{{ url('/') }}">
                <img id="logo-user" class="img-responsive" src="{{ asset('main/images/btcmarkettraders_logo.png') }}" alt="logo">
            </a>
            <!-- Logo Ends -->
            <!-- Slider Starts -->
            <div id="carousel-testimonials" class="carousel slide carousel-fade" data-ride="carousel">
                <!-- Indicators Starts -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-testimonials" data-slide-to="0" class=""></li>
                    <li data-target="#carousel-testimonials" data-slide-to="1" class=""></li>
                    <li data-target="#carousel-testimonials" data-slide-to="2" class="active"></li>
                </ol>
                <!-- Indicators Ends -->
                <!-- Carousel Inner Starts -->
                <div class="carousel-inner">
                    <!-- Carousel Item Starts -->
                    <div class="item item-1">
                        <div>
                            <blockquote>
                                <p>This is a realistic program for anyone looking for site to invest. Paid to me regularly, keep up good work!</p>
                                <footer><span>Lucy Smith</span>, England</footer>
                            </blockquote>
                        </div>
                    </div>
                    <!-- Carousel Item Ends -->
                    <!-- Carousel Item Starts -->
                    <div class="item item-2">
                        <div>
                            <blockquote>
                                <p>Bitcoin doubled in 7 days. You should not expect anything more. Excellent customer service!</p>
                                <footer><span>Slim Hamdi</span>, Tunisia</footer>
                            </blockquote>
                        </div>
                    </div>
                    <!-- Carousel Item Ends -->
                    <!-- Carousel Item Starts -->
                    <div class="item item-3 active">
                        <div>
                            <blockquote>
                                <p>My family and me want to thank you for helping us find a great opportunity to make money online. Very happy with how things are going!</p>
                                <footer><span>Rawia Chniti</span>, Russia</footer>
                            </blockquote>
                        </div>
                    </div>
                    <!-- Carousel Item Ends -->
                </div>
                <!-- Carousel Inner Ends -->
            </div>
            <!-- Slider Ends -->
        </div>
        <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
            <!-- Logo Starts -->
            <a class="visible-xs" href="{{ url('/') }}">
                <img id="logo" class="img-responsive mobile-logo" src="{{ asset('main/images/btcmarkettraders_logo.png') }}" alt="logo">
            </a>
            <!-- Logo Ends -->
            <div class="form-container">
                <div>
                    <!-- Section Title Starts -->
                    <div class="row text-center">
                        <h2 class="title-head hidden-xs">Member <span>login</span></h2>
                        <p class="info-form">Send, receive and securely store your coins in your wallet</p>
                    </div>
                    <!-- Section Title Ends -->

                    <!-- Form Starts -->
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <!-- Input Field Starts -->
                        <div class="form-group">
                            <label>Email</label>
                            <input class="form-control @error('email') is-invalid @enderror" type="text" name="email"
                                   value="{{ old('email') }}" placeholder="Email Address *" required>
                            @error('email')
                            <span class="invalid-feedback text-warning" role="alert">
                                <strong>{{ $message }}</strong></span>
                            @enderror
                        </div>
                        <!-- Input Field Ends -->

                        <!-- Input Field Starts -->
                        <div class="form-group">
                            <label>Password</label>
                            <input class="form-control @error('password') is-invalid @enderror"
                                   type="password" name="password"
                                   placeholder="password" required>
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong></span>
                            @enderror
                        </div>
                        <!-- Input Field Ends -->

                        <div class="form-group">
                            <div style="display: block;">
                                <label>Remember me</label>
                                <input style="display: inline; width: 50px;" type="checkbox" name="remember" id="remember"
                                    {{ old('remember') ? 'checked' : '' }}>
                            </div>
                        </div><!-- /.form-grp -->

                        <!-- Submit Form Button Starts -->
                        <div class="form-group">
                            <button class="btn btn-primary" type="submit">login</button>
                            <p class="text-center">
                                don't have an account ? <a href="{{ route('register') }}">register now</a></p>
                        </div>
                        <!-- Submit Form Button Ends -->
                    </form>
                    <!-- Form Ends -->

                </div>
            </div>
        </div>
    </div>
@endsection
