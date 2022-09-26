@extends('layout.app')

@section('header')
    @include('layout.includes.header')
    <div class="row row-custom">
        <div class="col-lg-6 col-content-otr">
            <div class="col-content-inr">
                <h1 class="heading heading-h1">Buy an <span style="color: #ffffff;">NFTs</span> and Earn Daily</h1>
                <p class="desc heading-L">Every day you will earn from reselling and pumping top NFT collections
                    together with our team</p>
                <div class="action">
                    @guest
                        <a href="{{ route('register') }}" class="btn-primary-1 btn-hero heading-SB">Sign Up</a>
                        <a href="{{ route('login') }}" class="btn-primary-1 btn-hero heading-SB">Login</a>
                    @endguest
                    <a href="https://t.me/nftgrower" target="_blank" class="btn-primary-3 btn-hero heading-SB" translate="no"><i
                            class="far fa-paper-plane"></i> Channel</a>
                    <a href="https://t.me/nftgrowerchat" target="_blank" class="btn-primary-3 btn-hero heading-SB" translate="no"><i
                            class="far fa-paper-plane"></i> Chat</a>
                </div>
            </div>
        </div>
    </div>
    <img class="hero-img" src="{{ asset('assets/theme/style/img/monky.png') }}" alt="img">
@endsection

@section('content')
    <div class="auction-main">
        <div class="container-fluid">
            <div class="wrapper">
                <h2 class="heading heading-h2">NFT Tokens</h2>
            </div>
            <div class="row-auction owl-carousel owl-theme owl-loaded owl-drag" id="live-auctions">


                <div class="owl-stage-outer">
                    <div class="owl-stage"
                         style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 10820px;">
                        @foreach($tariffs as $tariff)
                            <div class="owl-item active" style="width: 517px; margin-right: 24px;">
                                <div class="col-otr">
                                    <div class="col-inr box-1">
                                        <div class="cover-img-otr">
                                            <a href="{{ route('register') }}"><img class="cover-img"
                                                                                   src="{{ $tariff->attachment[0]->url()}}"
                                                                                   alt=""></a>
                                        </div>
                                        <div class="art-name heading-MB-Mon"
                                             translate="no">{{ $tariff->home_page_name }}</div>
                                        <div class="bid-main mb-3">
                                            <p class="bid heading-S">Profit</p>
                                            <p class="Price heading-SB"><b>{{ $tariff->token_bid }} %</b></p>
                                        </div>
                                        <div class="bid-main mb-3">
                                            <p class="bid heading-S">After</p>
                                            <p class="Price heading-SB">{{ $tariff->period/24 }} day</p>
                                        </div>
                                        <div class="bid-main mb-3">
                                            <p class="bid heading-S">Price</p>
                                            <p class="Price heading-SB" translate="no"><b>{{ \App\Models\Tariff::money_format($tariff->min_price) }}
                                                    -  {{ \App\Models\Tariff::money_format($tariff->max_price)  }} USD</b></p>
                                        </div>
                                        <div class="bid-main">
                                            <p class="bid heading-S">Status</p>
                                            <p class="Price heading-SB">
                                                <b>{{ $tariff->published ? 'Opened' : 'Closed' }}</b></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="owl-nav">

                </div>
                <div class="owl-dots disabled"></div>
            </div>
        </div>
    </div>
    <div class="creator-home2-main">
        <div class="container-fluid">
            <div class="wrapper">
                <h2 class="heading heading-h2">Live <span style="color: #FFDC40;">Statistic</span></h2>
            </div>
            <div class="row row-creator">
                <div class="col-lg-4 col-md-4 col-sm-6 col-otr">
                    <div class="col-inr box-1">
                        <div class="col-box">
                            <div class="avtar-otr" style="margin: 0 auto;">
                                <img src="{{ asset('assets/theme/style/img/gnome.png') }}" alt="">
                            </div>
                            <div class="content-otr" style="margin: 0 auto;text-align: center;">
                                <p class="creator-name heading-MB-Mon">NFT Holders</p>
                                <p class="price heading-M holders" translate="no"></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-otr">
                    <div class="col-inr box-1">
                        <div class="col-box">
                            <div class="avtar-otr" style="margin: 0 auto;">
                                <img src="{{ asset('assets/theme/style/img/money-bag.png') }}" alt="">
                            </div>
                            <div class="content-otr" style="margin: 0 auto;text-align: center;">
                                <p class="creator-name heading-MB-Mon">Investment Pool</p>
                                <p class="price heading-M investment-pool" translate="no">
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-otr">
                    <div class="col-inr box-1">
                        <div class="col-box">
                            <div class="avtar-otr" style="margin: 0 auto;">
                                <img src="{{ asset('assets/theme/style/img/wallet.png') }}" alt="">
                            </div>
                            <div class="content-otr" style="margin: 0 auto;text-align: center;">
                                <p class="creator-name heading-MB-Mon">Total Profit</p>
                                <p class="price heading-M total-profit" translate="no">
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="cal-to-action-main">
        <div class="container-fluid">
            <div class="row row-custom">
                <div class="col-lg-6 col-content-otr">
                    <div class="col-content-inr">
                        <h2 class="heading heading-h2">Getting Started <span class="heading-inr">Is Easy</span></h2>
                        <p class="desc heading-M">Join us and our affiliate program to earn on NFT and earn ongoing passive income from your affiliate team.</p>
                        <div class="btn-otr">
                            <div class="action text-center">
                                <a href="{{ route('register') }}" class="btn-primary-1 btn-action heading-SB">Get Started</a>
                            </div>
                            <div class="action text-center">
                                <a href="{{ route('affiliate') }}" target="_blank" class="btn-primary-1 btn-action heading-SB">Affiliate Presentation</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <img class="art-img" src="{{ asset('assets/theme/style/img/call-to-action-img.png') }}" alt="art-img">
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('js/jquery.postpone.min.js') }}"></script>
    <script src="https://momentjs.com/downloads/moment-with-locales.min.js"></script>
    <script src="https://momentjs.com/downloads/moment-timezone-with-data.js"></script>
    <script>
        const nhs = parseInt('{{ $live->nft_holders_start }}')
        const nhe = parseInt('{{ $live->nft_holders_end }}')

        const lps = parseInt('{{ $live->investment_pool_start }}')
        const lpe = parseInt('{{ $live->investment_pool_end }}')

        const tps = parseInt('{{ $live->total_profit_start }}')
        const tpe = parseInt('{{ $live->total_profit_end }}')

        const day_sec = 86400;
        const end_d = moment().tz("Europe/Budapest").endOf('day');

        function nh_f(){
            const bud_time = moment().tz("Europe/Budapest")
            const duration = moment.duration(end_d.diff(bud_time));
            const seconds = duration.asSeconds();

            const nh = Math.round(nhs + ((nhe - nhs) * (day_sec - seconds) / day_sec));


            const lp = lps + ((lpe - lps) * (day_sec - seconds) / day_sec);
            const tp = tps + ((tpe - tps) * (day_sec - seconds) / day_sec);

            $('.holders').text(nh);
            $('.investment-pool').text('$'+new Intl.NumberFormat().format(lp));
            $('.total-profit').text('$'+new Intl.NumberFormat().format(tp));
        }

        nh_f()
        $.every(1000, 'Avaq').progress(function (name) {
            const r = Math.floor(Math.random() * 30) * 1000;

           setTimeout(nh_f,r);
        });

    </script>

    <script>
        $(function (){
            $('script').remove();
        })
    </script>
@endpush
