
<img src="{{ asset('main/images/btcmarkettraders_logo.png') }}" width="100">

<h3>Hello {{ $name }}</h3>

<p>
    @if($status === 'activated')
        Congratulations, Your Account has been activated. <a href="{{ route('login') }}"><strong>Login</strong></a> to start trading.
    @else
        Your Account has been deactivated. Contact <strong>support@btcmarkettraders.com</strong> for more info
    @endif
</p>

<p align="center">Need more information?<br>
    Please contact <strong>support@btcmarkettraders.com</strong>.</p>
