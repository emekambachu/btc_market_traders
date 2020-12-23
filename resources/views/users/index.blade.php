@extends('layouts.users')

@section('title')
    Dashboard
    @endsection

@section('contents')
    <div class="layout-px-spacing">
        <div class="page-header">
            <div class="page-title">
                <h3 class="text-white">Dashboard</h3>
            </div>

        </div>

        <div class="row layout-top-spacing">

            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                <!-- TradingView Widget BEGIN -->
                <div class="tradingview-widget-container">
                    <div id="tradingview_fe7fb"></div>
                    <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/symbols/NASDAQ-AAPL/" rel="noopener" target="_blank"></a></div>
                    <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
                    <script type="text/javascript">
                        new TradingView.widget(
                            {
                                "width": "100%",
                                "height": 500,
                                "symbol": "NASDAQ:AAPL",
                                "interval": "D",
                                "timezone": "Etc/UTC",
                                "theme": "dark",
                                "style": "1",
                                "locale": "en",
                                "toolbar_bg": "#f1f3f6",
                                "enable_publishing": false,
                                "allow_symbol_change": true,
                                "container_id": "tradingview_fe7fb"
                            }
                        );
                    </script>
                </div>
                <!-- TradingView Widget END -->
            </div>

            <div class="col-lg-4 col-md-4 col-sm-6 col-12 layout-spacing">
                <div class="widget widget-card-four">
                    <div class="widget-content">
                        <div class="w-content">
                            <div class="">
                                <div class="w-icon">
                                    <img width="100" src="{{ asset('users/icons/pie_chart.png') }}"/>
                                </div>
                            </div>

                            <div class="w-info">
                                <h6 class="value">
                                @if($recentInvestment)
                                {{ $recentInvestment->investmentPackage ? $recentInvestment->investmentPackage->name : Null }}
                                @else
                                No Current Investment Plan<br>
                                <a href="{{ route('investments.create') }}">
                                    <button class="btn btn-success btn-sm" style="float: left;">Add New</button>
                                </a>
                                @endif
                                </h6>
                                <p class="">Investment Plan</p>
                            </div>
                        </div>
{{--                        <div class="progress">--}}
{{--                            <div class="progress-bar bg-gradient-secondary" role="progressbar" style="width: 57%" aria-valuenow="57" aria-valuemin="0" aria-valuemax="100"></div>--}}
{{--                        </div>--}}
                    </div>
                </div>
            </div>

            <div class="col-lg-2 col-md-3 col-sm-6 col-12 layout-spacing">
                <div class="widget widget-card-four">
                    <div class="widget-content">
                        <div class="w-content">
                            <div class="">
                                <div class="w-icon">
                                    <img width="100" src="{{ asset('users/icons/rising_dollar.png') }}"/>
                                </div>
                            </div>
                            <div class="w-info">
                                <h6 class="value">$ {{ number_format($user->wallet->amount) }}</h6>
                                <p class="">Balance</p>
                            </div>
                        </div>
{{--                        <div class="progress">--}}
{{--                            <div class="progress-bar bg-gradient-secondary" role="progressbar" style="width: 57%" aria-valuenow="57" aria-valuemin="0" aria-valuemax="100"></div>--}}
{{--                        </div>--}}
                    </div>
                </div>
            </div>

            <div class="col-lg-2 col-md-3 col-sm-6 col-12 layout-spacing">
                <div class="widget widget-card-four">
                    <div class="widget-content">
                        <div class="w-content">
                            <div class="">
                                <div class="w-icon">
                                    <img width="100" src="{{ asset('users/icons/bar_chart.png') }}"/>
                                </div>
                            </div>
                            <div class="w-info">
                                <h6 class="value">$ {{ number_format($user->wallet->profit) }}</h6>
                                <p class="">Profit</p>
                            </div>
                        </div>
{{--                        <div class="progress">--}}
{{--                            <div class="progress-bar bg-gradient-secondary" role="progressbar" style="width: 57%" aria-valuenow="57" aria-valuemin="0" aria-valuemax="100"></div>--}}
{{--                        </div>--}}
                    </div>
                </div>
            </div>

            <div class="col-lg-2 col-md-3 col-sm-6 col-12 layout-spacing">
                <div class="widget widget-card-four">
                    <div class="widget-content">
                        <div class="w-content">
                            <div class="">
                                <div class="w-icon">
                                    <img width="100" src="{{ asset('users/icons/line_chart.png') }}"/>
                                </div>
                            </div>
                            <div class="w-info">
                                <h6 class="value">$ {{ number_format($user->wallet->commission) }}</h6>
                                <p class="">Commission</p>
                            </div>
                        </div>
{{--                        <div class="progress">--}}
{{--                            <div class="progress-bar bg-gradient-secondary" role="progressbar" style="width: 57%" aria-valuenow="57" aria-valuemin="0" aria-valuemax="100"></div>--}}
{{--                        </div>--}}
                    </div>
                </div>
            </div>

            <div class="col-lg-2 col-md-3 col-sm-6 col-12 layout-spacing">
                <div class="widget widget-card-four">
                    <div class="widget-content">
                        <div class="w-content">
                            <div class="">
                                <div class="w-icon">
                                    <img width="100" src="{{ asset('users/icons/line_chart.png') }}"/>
                                </div>
                            </div>
                            <div class="w-info">
                                <h6 class="value">$ {{ number_format($user->wallet->bonus) }}</h6>
                                <p class="">Bonus</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-6 col-lg-6 col-md-6 col-12 layout-spacing">
                <div class="widget widget-table-one">
                    <div class="widget-heading">
                        <h5 class="">Transactions</h5>
                    </div>

                    <div class="widget-content">

                        @foreach($transactions as $trans)
                        <div class="transactions-list">
                            <div class="t-item">
                                <div class="t-company-name">
                                    <div class="t-icon">
                                        <div class="icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                                        </div>
                                    </div>
                                    <div class="t-name">
                                        <h4>{{ $trans->description }}</h4>
                                        <p class="meta-date">{{ \Carbon\Carbon::parse($trans->created_at)->format('j F, Y') }}</p>
                                    </div>

                                </div>
                                @if(!empty($trans->debit))
                                <div class="t-rate rate-dec">
                                    <p><span>${{ number_format($trans->debit) }}</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                             fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                             stroke-linejoin="round" class="feather feather-arrow-down">
                                            <line x1="12" y1="5" x2="12" y2="19"></line>
                                            <polyline points="19 12 12 19 5 12"></polyline></svg></p></div>
                                @else
                                <div class="t-rate rate-inc">
                                    <p><span>${{ number_format($trans->credit) }}</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                         stroke-linejoin="round" class="feather feather-arrow-up">
                                        <line x1="12" y1="5" x2="12" y2="19"></line>
                                        <polyline points="19 12 12 19 5 12"></polyline></svg></p></div>
                                @endif
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>

            <div id="tableDropdown" class="col-lg-6 col-md-6 col-12 layout-spacing">
                <div class="statbox widget box box-shadow">
                    <div class="widget-header">
                        <div class="row">
                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                <h4>Your Investments</h4>
                                <a href="{{ route('investments.create') }}">
                                    <button class="btn btn-success btn-sm" style="float: left;">Add New</button>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="widget-content widget-content-area">
                        <div class="table-responsive">
                            <table class="table table-bordered mb-4">
                                <thead>
                                <tr>
                                    <th scope="col">Investment ID</th>
                                    <th scope="col">Package</th>
                                    <th scope="col">Amount</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Status</th>
                                </tr>
                                </thead>
                                <tbody>

                                @foreach($investments as $invest)
                                    <tr>
                                        <td>{{ $invest->invest_id }}</td>
                                        <td>{{ $invest->investmentPackage ? $invest->investmentPackage->name : '' }}</td>
                                        <td>${{ number_format($invest->amount) }}</td>
                                        <td>{{ $invest->created_at->format('d M Y') }}</td>
                                        <td>
                                            @if($invest->is_approved)
                                                <span class="badge badge-success">Approved</span>
                                            @else
                                                <span class="badge badge-danger">Un-Approved</span>
                                            @endif
                                            </td>
                                    </tr>
                                @endforeach

                                </tbody>
                            </table>
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
