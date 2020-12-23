@extends('layouts.admin')

@section('title')
    Account Settings
@endsection

@section('contents')
    <div id="content-page" class="content-page">
        <div class="container-fluid">

            <div class="row">

                <div class="col-12 center">
                    @include('includes.alerts')
                </div>

                <div class="col-sm-12 col-lg-6">
                    <div class="iq-card">

                        <div class="iq-card-header d-flex justify-content-between">
                            <div class="iq-header-title">
                                <h4 class="card-title">Update your Bitcoin Address</h4>
                            </div>
                        </div>

                        <div class="iq-card-body">
                            <form method="post" action="{{ route('admin.update.wallet-address') }}" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="form-row">
                                    <div class="col-md-6 mb-3">
                                        <label for="validationDefault01">Amount</label>
                                        <input name="address" type="text" class="form-control mb-3"
                                               value="{{ !empty($wallet->address) ? $wallet->address : ''}}"
                                               id="validationDefault01" required="">

                                        <label for="validationDefault01">Barcode</label>
                                        <input name="image" type="file" class="form-control">
                                    </div>
                                    @if(!empty($wallet->image))
                                    <img src="{{ asset("photos/{$wallet->image}") }}" width="200"/>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <button class="btn brand-color" type="submit">Update</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>

                <div class="col-sm-12 col-lg-6">
                    <div class="iq-card">

                        <div class="iq-card-header d-flex justify-content-between">
                            <div class="iq-header-title">
                                <h4 class="card-title">Update your account</h4>
                            </div>
                        </div>

                        <div class="iq-card-body">
                            <form method="post" action="{{ route('admin.update-account') }}" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label>Name *</label>
                                    <input type="text" class="form-control" name="name" value="{{ Auth::user()->name }}" required>
                                </div>

                                <div class="form-group">
                                    <label>Email *</label>
                                    <input type="email" class="form-control" name="email" value="{{ Auth::user()->email }}" required>
                                </div>

                                <div class="form-group">
                                    <label>Username *</label>
                                    <input type="text" class="form-control" name="username" value="{{ Auth::user()->username }}" required>
                                </div>

                                <div class="form-group">
                                    <label>Password *</label>
                                    <input type="password" class="form-control" name="password">
                                </div>

                                <button type="submit" class="btn btn-secondary" style="background-color: #002D55; color: #fff;">Update</button>
                            </form>
                        </div>

                    </div>
                </div>



            </div>

        </div>
    </div>
    </div>
@endsection
