@extends('layouts.main')

@section('title')
    Admin Login
@endsection

@section('contents')

    <section class="main-container" id="main-container" style="background-color: #1D1D1D;">
        <!-- container end-->
        <div class="gap-60"></div>
        <div class="ts-form" id="ts-form">
            <div class="container">

                @include('includes.alerts')

                <h2 class="column-title title-small">
                    <span style="color: #FCAB10; font-weight: bold;">Admin Login</span></h2>

                <div class="row">
                    <div class="col-lg-7 col-12">

                        <form class="contact-form" method="POST" action="{{ route('admin-login') }}">
                            @csrf
                            <div class="row">

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Username</label>
                                        <input class="form-control @error('username') is-invalid @enderror" type="text" name="username"
                                               value="{{ old('username') }}" placeholder="Username *" required>
                                        @error('username')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div><!-- /.form-grp -->
                                </div><!-- /.col-md-6 -->

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input class="form-control @error('password') is-invalid @enderror" type="password" name="password"
                                               placeholder="password" required>
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div><!-- /.form-grp -->
                                </div><!-- /.col-md-6 -->

                                <div class="col-md-12" style="margin-top: 6px;">
                                    <button class="btn btn-primary tw-mt-30" type="submit">Login</button>
                                </div><!-- /.col-md-6 -->

                            </div><!-- /.row -->
                        </form>

                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
