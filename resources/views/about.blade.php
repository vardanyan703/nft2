@extends('layout.app')

@section('header')
    @include('layout.includes.header')
@endsection

@section('content')
    <div class="inner-header-main">
        <div class="container-fluid">
            <div class="wrapper">
                <h2 class="heading heading-h2">About Us</h2>
            </div>
        </div>
    </div>
    <div class="cal-to-action-main">
        <div class="container-fluid">
            <div class="wrapper">
                <h2 class="heading heading-h2">NFT Collection. P2E Metaverse. Investment Pool.</h2>
            </div>
            <div class="row row-custom">
                <div class="col-lg-12 col-detail-otr">
                    <div class="col-detail-inr">
                        <p class="desc desc-4 heading-S" style="padding: 10px;">

                            NFT Grower is an NFT collection that gives you the opportunity to earn up to 1.2% daily and participate in one of the world's top crypto community. Soon, NFT Grower will launch its metaverse and every owner of NFT Grower tokens will have access to new opportunities to earn more and improve their lives.
                            <br><br>
                            NFT Grower it is a investment pool that every minute buy and sell a large number of NFTs. We also pump up the price of some collections ourselves and make profit from it. We arbitrage NFT, which means we buy cheaper and sell higher, and the more funds we manage, the better results we can show, because we can not only look for earning opportunities, but also create them.
                            <br><br>
                            NFT Grower is a company by joining which you can earn daily from investments, as well as participate in NFT presales to earn on it, and soon every member of our community will be able to join our metaverse and build a new bright and beautiful life.
                            <br><br>
                            Each member of our community has the opportunity to take advantage of the 4-level referral program and earn even more by expanding and improving our community. You can learn more about this  <a href="{{ route('affiliate') }}" class="d-inline" target="_blank" >by reading our presentation.</a>
                            <br><br>
                            We collaborate with the best influencers in all possible social networks, TV, online publications and other media sources, thereby popularizing the NFT Grower community every day. Soon we will announce partnerships with major exchanges and crypto companies.
                            <br><br>
                            <a href="{{ route('register') }}" class="d-inline"> Join NFT Grower</a> to start earning and grow yourself.
                            <br><br>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
