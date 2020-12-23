@extends('layouts.main')

@section('title')
    Registration Complete
@endsection

@section('contents')
    <div class="banner-area" id="banner-area" style="background-image:url({{ asset('header.jpg') }});">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col">
                    <div class="banner-heading">
                        <h2 class="banner-title">Registration Complete</h2>
                        <ol class="breadcrumb">
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li>Registration Complete</li>
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

                <h2 class="column-title title-small">
                    <span style="color: #0f3e68; font-weight: bold;">Registration Complete</span></h2>

                <div class="row">
                    <div class="col-lg-7 col-12">
                        <p class="heading--desc">Hello <strong>{{ Session::get('name') }}</strong><br>
                            Thanks for taking your time to register on our trading platform. Your account has been activated, you can choose any of our investments packages so we will commence trading on your account immediately.<br>
                            <a href="{{ route('login') }}"><strong>Login</strong></a> to start investing
                        </p>
                    </div>

                    <div class="col-lg-5 col-12">
                        <img width="400" class="img-responsive" src="{{ asset('main/login.jpg') }}"/>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
