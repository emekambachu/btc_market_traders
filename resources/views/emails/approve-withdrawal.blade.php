
<img src="{{ asset('main/images/btcmarkettraders_logo.png') }}" width="200">

<h3>Hello {{ $name }}</h3>

<p>
    @if($is_approved)
        Your Withdrawal of ${{ $amount }} has been Approved.<br>
        You will receive payment in 24 hours
    @else
        Your Withdrawal of ${{ $amount }} has been Cancelled.
    @endif
</p>

<p align="center">Need more information?<br>
    Please contact <strong>support@btcmarkettraders.com</strong>.</p>
