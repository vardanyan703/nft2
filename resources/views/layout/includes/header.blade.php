<div class="navbar-main-2">
    <div class="wrapper">
        <div class="logo-otr">
            <a href="/" class="logo-a" translate="no">

                <img src="{{ asset('assets/img/logos/Group_16325197722.svg') }}" alt="">
            </a>
        </div>
        <div class="navigation-otr">
            <ul class="navigation-inr">
                <li class="navigation-li nav-li3"><a href="{{ route('home') }}" class="nav-a heading-SB">Home</a></li>
                <li class="navigation-li nav-li3"><a href="{{ route('about') }}" class="nav-a heading-SB">About Us</a>
                </li>
{{--                <li class="navigation-li nav-li3"><a href="{{ route('main-news') }}" class="nav-a heading-SB">News</a>--}}
                </li>
{{--                <li class="navigation-li nav-li3"><a href="{{ route('video-reviews') }}" class="nav-a heading-SB">Video--}}
{{--                        Review</a></li>--}}
                <li class="navigation-li nav-li3"><a href="{{ route('faq') }}" class="nav-a heading-SB" translate="no">FAQ</a>
                </li>
                <li class="navigation-li nav-li3"><a href="{{ route('rules') }}" class="nav-a heading-SB">Rules</a></li>
                <li class="navigation-li nav-li3 nav-item dropdown">
                    <a class="nav-link dropdown-toggle nav-a heading-SB" href="#" id="dropdown03"
                       data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-language"
                                                                          style="font-size: 27px;"></i></a>
                    <ul class="dropdown-menu" aria-labelledby="dropdown03" translate="no">
                        <li><a href="#" onclick="doGTranslate('en|en');return false;"
                               class="dropdown-item"><img src="{{ asset('assets/theme/style/flags/usa.svg') }}"
                                                          style="height: 33px;width: auto;" alt="EN">
                                English</a></li>
                        <li><a href="#" onclick="doGTranslate('en|ru');return false;"
                               class="dropdown-item"><img src="{{ asset('assets/theme/style/flags/russia.svg') }}"
                                                          style="height: 33px;width: auto;" alt="RU">
                                Русский</a></li>
                        <li><a href="#" onclick="doGTranslate('en|de');return false;"
                               class="dropdown-item"><img src="{{ asset('assets/theme/style/flags/germany.svg') }}"
                                                          style="height: 33px;width: auto;" alt="DE">
                                Germany</a></li>
                        <li><a href="#" onclick="doGTranslate('en|it');return false;"
                               class="dropdown-item"><img src="{{ asset('assets/theme/style/flags/italy.svg') }}"
                                                          style="height: 33px;width: auto;" alt="IT">
                                Italian</a></li>
                        <li><a href="#" onclick="doGTranslate('en|pl');return false;"
                               class="dropdown-item"><img src="{{ asset('assets/theme/style/flags/poland.svg') }}"
                                                          style="height: 33px;width: auto;" alt="PL"> Poland</a>
                        </li>
                        <li><a href="#" onclick="doGTranslate('en|tr');return false;"
                               class="dropdown-item"><img src="{{ asset('assets/theme/style/flags/turkey.svg') }}"
                                                          style="height: 33px;width: auto;" alt="TR"> Turkey</a>
                        </li>
                        <li><a href="#" onclick="doGTranslate('en|es');return false;"
                               class="dropdown-item"><img src="{{ asset('assets/theme/style/flags/spain.svg') }}"
                                                          style="height: 33px;width: auto;" alt="ES"> Spain</a>
                        </li>
                        <li><a href="#" onclick="doGTranslate('en|ka');return false;"
                               class="dropdown-item"><img src="{{ asset('assets/theme/style/flags/georgia.svg') }}"
                                                          style="height: 33px;width: auto;" alt="KA"> Gorgia</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="action-nav">
            <div class="action right-space">
                @auth
                    <a href="{{ route('cabinet.index') }}" class="btn-primary-1 heading-SB">My Account</a>
                @endauth
                @guest
                    <a href="{{ route('register') }}" class="btn-primary-1 heading-SB">Sign Up</a>
                @endguest
            </div>
            <div class="burger-icon-otr">
                <i class="fas fa-bars burger-icon"></i>
            </div>
        </div>
    </div>
</div>
