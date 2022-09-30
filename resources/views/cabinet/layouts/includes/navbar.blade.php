<aside class="navbar navbar-vertical navbar-expand-lg navbar-dark m-0 rounded-0">
    <div class="w-full">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu">
            <span class="navbar-toggler-icon"></span>
        </button>
        <h1 class="navbar-brand navbar-brand-autodark p-0  logo-img">
            {{--<img src="{{ asset('assets/cabinet/style/default/img/logos/Group_1632519773.png') }}" alt="">--}}
            <a href="{{ route('cabinet.index') }}">
                <img src="{{ asset('assets/cabinet/style/default/img/logos/Group_1632519773.png') }}" alt="">
            </a>
            {{--<a href="{{ route('cabinet.index') }}"><span class="navbar-brand-span" translate="no">NFT<span style="color: #FFDC40;">mainer</span></span></a>--}}
        </h1>
        <div class="collapse navbar-collapse" id="navbar-menu">
            <ul class="navbar-nav text-uppercase pt-lg-4">
                <li class="nav-item @if(Route::currentRouteName() === 'cabinet.index') active @endif">
                    <a class="nav-link" href="{{ route('cabinet.index') }}">
                        <span class="nav-link-title" style="margin-left: 5px;">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item @if(Route::currentRouteName() === 'cabinet.buy-token.index') active @endif">
                    <a class="nav-link" href="{{ route('cabinet.buy-token.index') }}">
                        <span class="nav-link-title" style="margin-left: 5px;">Buy NFTs</span>
                    </a>
                </li>
                <li class="nav-item @if(Route::currentRouteName() === 'cabinet.my-tokens.index') active @endif">
                    <a class="nav-link" href="{{ route('cabinet.my-tokens.index') }}">
                        <span class="nav-link-title" style="margin-left: 5px;">Your Tokens</span>
                    </a>
                </li>
                <li class="nav-item @if(Route::currentRouteName() === 'cabinet.withdraw.index') active @endif">
                    <a class="nav-link" href="{{ route('cabinet.withdraw.index') }}">
                        <span class="nav-link-title" style="margin-left: 5px;"></span>Withdrawals
                    </a>
                </li>
                <li class="nav-item @if(Route::currentRouteName() === 'cabinet.referrals.index') active @endif">
                    <a class="nav-link" href="{{ route('cabinet.referrals.index') }}">
                        <span class="nav-link-title" style="margin-left: 5px;">Referrals</span>
                    </a>
                </li>
                <li class="nav-item @if(Route::currentRouteName() === 'cabinet.referrals.history.index') active @endif">
                    <a class="nav-link" href="{{ route('cabinet.referrals.history.index') }}">
                        <span class="nav-link-title" style="margin-left: 5px;">Referral Statistics</span>
                    </a>
                </li>
{{--                <li class="nav-item @if(Route::currentRouteName() === 'cabinet.banner.index') active @endif">--}}
{{--                    <a class="nav-link" href="{{ route('cabinet.banner.index') }}">--}}
{{--                        <span class="nav-link-title" style="margin-left: 5px;">Banners</span>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li class="nav-item @if(Route::currentRouteName() === 'cabinet.VeV5sHqAUS.index') active @endif">--}}
{{--                    <a class="nav-link" href="{{ route('cabinet.news.index') }}">--}}
{{--                            <span class="nav-link-title" style="margin-left: 5px;">News&nbsp;<font--}}
{{--                                        class="pulse_news"></font></span>--}}
{{--                    </a>--}}
{{--                </li>--}}
                <li class="nav-item @if(Route::currentRouteName() === 'cabinet.my-wallets.index') active @endif">
                    <a class="nav-link" href="{{ route('cabinet.my-wallets.index') }}">
                        <span class="nav-link-title" style="margin-left: 5px;">Settings</span>
                    </a>
                </li>
                <li class="nav-item @if(Route::currentRouteName() === 'cabinet.support.index') active @endif">
                    <a class="nav-link" href="{{ route('cabinet.support.index') }}">
                        <span class="nav-link-title" style="margin-left: 5px;">Support</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        <span class="nav-link-title" style="margin-left: 5px;">Log Out</span>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>
            </ul>
        </div>
    </div>
</aside>
