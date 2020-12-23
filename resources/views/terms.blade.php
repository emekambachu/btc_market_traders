@extends('layouts.main')

@section('title')
    Terms and Conditions
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
                            <h2 class="title-head">Terms and Conditions</h2>
                            <!-- Title Ends -->
                            <hr>
                            <!-- Breadcrumb Starts -->
                            <ul class="breadcrumb">
                                <li><a href="{{ url('/') }}"> home</a></li>
                                <li>Terms and Conditions</li>
                            </ul>
                            <!-- Breadcrumb Ends -->
                        </div>
                    </div>
                    <!-- Section Title Ends -->
                </div>
            </div>
        </div>
    </section>

    <section class="about-page">
        <div class="container">
            <!-- Section Content Starts -->
            <div class="row about-content">
                <!-- Content Starts -->
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="feature-about">
                        <h3 class="title-about">General</h3>
                        <p>The terms and conditions contained herein apply to the investment services of Bitcoin Market Traders investment company made available through its official website at www.btcmarkettraders.com All information made available to the investor/client pertaining to this Promotion, including information contained within websites of Bitcoin Market Traders, form a legal agreement between the investor/client and Bitcoin Market Traders.<br>
                            By electing to participate in any of the investment businesses of Bitcoin Market Traders, you are indicating you agree to be bound by the terms and conditions contained herein and contained within website materials of Bitcoin Market Traders, coupled with any Client Agreement(s) executed.<br>
                            Bitcoin Market Traders reserves the right to amend these terms and conditions at any time. Such modifications shall become effective immediately at the time the amendment is executed and posted on the Bitcoin Market Traders website. Bitcoin Market Traders is not required to make announcements as to such amendments. </p>
                    </div>

                    <div class="feature-about">
                        <h3 class="title-about">Eligible Accounts</h3>
                        <p>To be eligible to participate in any of the services of Bitcoin Market Traders, clients/investors or their representatives must be eighteen (18) years of age or older, or the legal age of majority in the client's/investor's home country, state or province; be legally entitled to use our services in accordance with applicable law; currently maintain a cryptocurrency account with a Wallet; and make a deposit with Bitcoin Market Traders totaling no less than the stipulated account on the chosen investment product (the Initial Deposit) during the investment Period as defined herein.</p>
                    </div>

                    <div class="feature-about">
                        <h3 class="title-about">Account Restrictions</h3>
                        <p>If there are promotions of bonuses on accounts within Bitcoin Market Traders, these promotions will be based on a One bonus per account per client. Also, accounts are only transferable with requests made, reviewed, and granted by the management of Bitcoin Market Traders.</p>
                    </div>

                    <div class="feature-about">
                        <h3 class="title-about">Account Activation and Operation</h3>
                        <p>Bitcoin Market Traders will credit all Eligible Accounts, as defined herein, with deposits (as made by investor) totaling an amount determined by the initial deposit made by client, as set forth in the table of plans. Such deposit must be made within 48 hours of creating an investment account or the said account shall be deleted.<br>
                            Client must complete the required lots (as stipulated in the chosen plan) prior to the activation of the investment account within 48 hours of opening the account. Charges on investment account operation and/or maintenance shall be deducted upon completion of investment cycle. Withdrawals can only be made after an account completes its initial investment cycle (IIC) as stipulated in the plan details.</p>
                    </div>

                    <div class="feature-about">
                        <h3 class="title-about">Release and Withdrawal Restrictions</h3>
                        <p>Client is unable to withdraw or transfer any funds from Client account before or during the initial investment cycle, unless there's a court order to withdraw the account, or Client gives the investment company a 48-hour prior notification of withdrawal by mail or phone call.<br>
                            Should Bitcoin Market Traders receive a request by mail or phone to withdraw funds prior to the account cycle satisfying the stipulated time, it is then authorized to process such request only after it has debited the account in an amount equal to the operation and/or maintenance fee. Should Client make a withdrawal request during the initial investment cycle and prior to the completion of the cycle, any bonus shall be terminated.<br>
                            Bitcoin Market Traders's Client agrees that Bitcoin Market Traders is not liable for any market losses, including margin calls, as a result of a withdrawal made by Bitcoin Market Traders in order to make payout or retain operation/maintenance charges.</p>
                    </div>

                    <div class="feature-about">
                        <h3 class="title-about">Exploitation, Misuse, Conditions</h3>
                        <p>Bitcoin Market Traders offers its services and bonuses in good faith to its Clients actively investing within its market with exposure to economic risk. Client acknowledges that his/her subscription to the services of Bitcoin Market Traders is for the purposes of investment only. Client's invested fund shall be utilized in legitimate trading within the market that Bitcoin Market Traders offers.<br>
                            In need emergence of a new market, Client shall be notified before any form of diversification is inclined to the Client's fund. This condition also requires that the Client does not associate any abusive, exploitive or improper conduct (Exploitative Activity) while being subscribed to the Bitcoin Market Traders investment offered services. Exploitative Activity shall include, without limitation:<br>
                            -- Client, by himself or acting with others (including an Introducing Broker, Money Manager), establishes an investment position or positions which have the purpose or effect of extracting the funds credited as part of the offered services; and/or the profits generated by such funds, without exposure to economic risk, including without limitation loss of the funds credited as part of the offered services or the Client's capital (or the capital of others).<br>

                            -- Client, whether personally or through a third-party, hedges investment position(s) for purposes of capturing credited funds on a risk-free basis, by utilizing additional trading account(s) at other institutions, whether maintained by Client or an associate thereof, or by utilizing an additional account at Bitcoin Market Traders held by a third-party or alias, or by any other means<br>
                            Client agrees and acknowledges that the offered services shall be granted by Bitcoin Market Traders only as a result of representations made by Client, including Client's representation that he/she will not undertake Exploitative Activity, as defined herein. Bitcoin Market Traders shall have the authority to, at its sole discretion, elect to retroactively cancel the investment terms, remove any credited bonus/promotional funds from a Client's account and retroactively cancel any investment activity conducted, should Bitcoin Market Traders determine the Client has undertaken Exploitative.</p>
                    </div>
                </div>
                <!-- Content Ends -->

            </div>
            <!-- Section Content Ends -->
        </div><!--/ Content row end -->
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
