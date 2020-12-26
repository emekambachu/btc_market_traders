@extends('layouts.main')

@section('title')
    Sign up
@endsection

@section('top-assets')
    <script src="{{ asset('js/countries.js') }}" type="text/javascript"></script>
@endsection

@section('contents')
    <div class="banner-area" id="banner-area" style="background-image:url({{ asset('header.jpg') }});">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col">
                    <div class="banner-heading">
                        <h2 class="banner-title">Sign up</h2>
                        <ol class="breadcrumb">
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li>Sign up</li>
                        </ol>
                    </div>
                </div>
                <!-- Col end-->
            </div>
            <!-- Row end-->
        </div>
        <!-- Container end-->
    </div>

    <section class="main-container" id="main-container">
        <!-- container end-->
        <div class="gap-60"></div>
        <div class="ts-form" id="ts-form">
            <div class="container">

                @include('includes.alerts')

                <div class="row">
                    <div class="col-lg-12 col-12">

                        <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="row" style="margin-bottom: 10px;">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Full Name</label>
                                        <input class="form-control @error('name') is-invalid @enderror" type="text"
                                               name="name" value="{{ old('name') }}" placeholder="Your Name *" required>
                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div><!-- /.form-grp -->
                                </div><!-- /.col-md-6 -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input class="form-control @error('email') is-invalid @enderror" type="text"
                                               name="email" value="{{ old('email') }}"
                                               placeholder="Email Address *" required>
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div><!-- /.form-grp -->
                                </div><!-- /.col-md-6 -->
                            </div>

                            <div class="row" style="margin-bottom: 10px;">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Mobile Number</label>
                                        <input class="form-control @error('mobile') is-invalid @enderror" type="tel" name="mobile"
                                               value="{{ old('mobile') }}" placeholder="Mobile Number">
                                        @error('mobile')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div><!-- /.form-grp -->
                                </div><!-- /.col-md-6 -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Image/Valid Government Issued ID</label>
                                        <input class="form-control @error('image') is-invalid @enderror" type="file" name="image">
                                        @error('image')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div><!-- /.form-grp -->
                                </div><!-- /.col-md-6 -->
                            </div>

                            <div class="row" style="margin-bottom: 10px;">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input class="form-control @error('password') is-invalid @enderror" type="password" name="password" placeholder="Password" autocomplete="new-password" required>
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div><!-- /.form-grp -->
                                </div><!-- /.col-md-6 -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Confirm Password</label>
                                        <input class="form-control" type="password" name="password_confirmation"
                                               autocomplete="new-password" placeholder="Confirm Password" required>
                                    </div><!-- /.form-grp -->
                                </div><!-- /.col-md-6 -->
                            </div>

                            <div class="row" style="margin-bottom: 10px;">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Bitcoin Wallet Address (Optional)</label>
                                        <input class="form-control @error('bitcoin_wallet') is-invalid @enderror" type="text"
                                               name="bitcoin_wallet" placeholder="Address" value="{{ old('bitcoin_wallet') }}">
                                        @error('bitcoin_wallet')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div><!-- /.form-grp -->
                                </div><!-- /.col-md-12 -->
                            </div>

                            <div class="row" style="margin-bottom: 10px;">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Country</label>
                                        <select class="form-control" id="country" name="country" required></select>
                                        @error('country')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div><!-- /.form-grp -->
                                </div><!-- /.col-md-6 -->
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>State</label>
                                        <select class="form-control" id="state" name="state"></select>
                                        @error('state')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div><!-- /.form-grp -->
                                </div><!-- /.col-md-6 -->

                                <script language="javascript">
                                    populateCountries("country", "state");
                                    populateCountries("country2");
                                </script>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Address</label>
                                        <input class="form-control @error('address') is-invalid @enderror" type="text"
                                               name="address" placeholder="Address" value="{{ old('address') }}">
                                        @error('address')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div><!-- /.form-grp -->
                                </div><!-- /.col-md-12 -->
                            </div>

                            <button type="submit" class="btn btn-primary tw-mt-30">Sign up</button>
                            <p class="text-center">
                                Already have an account ? <a href="{{ route('login') }}">Sign in</a></p>
                        </form>

                        <!-- Form end-->
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
