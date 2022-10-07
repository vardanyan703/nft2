<header class="header">
    <div class="wrapper">
        <div class="header-inner">
            <a class="header-logo logo" href="{{ route('home') }}">
                <img src="/images/logo.svg" alt="">
            </a>
            <nav class="header-menu menu">
                <ul class="header-menu__list menu__list">
                    <li class="header-menu__item menu__item">
                        <a href="{{ Route::currentRouteName() == 'home' ? '#about' : route('home').'#about' }}"
                           class="header-menu__link menu__link">ABOUT US</a>
                    </li>
                    <li class="header-menu__item menu__item">
                        <a href="{{ Route::currentRouteName() == 'home' ? '#ntfs' : route('home').'#ntfs' }}"
                           class="header-menu__link menu__link">NFTs</a>
                    </li>
                    <li class="header-menu__item menu__item">
                        <a href="{{ Route::currentRouteName() == 'home' ? '#roadmap' : route('home').'#roadmap' }}"
                           class="header-menu__link menu__link">ROADMAP</a>
                    </li>
                    <li class="header-menu__item menu__item">
                        <a href="{{ Route::currentRouteName() == 'home' ? '#faq' : route('home').'#faq' }}"
                           class="header-menu__link menu__link" translate="no">FAQ</a>
                    </li>
                </ul>
            </nav>
            <div class="header-btns">
                <div class="header-lang">
                    <div class="header-lang__info" translate="no">
                        <span>
                            <svg width="35" height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10.9375 9.479H29.1667C29.9717 9.479 30.625 10.1323 30.625 10.9373V29.1665C30.625 29.9715 29.9717 30.6248 29.1667 30.6248H18.9583L10.9375 9.479Z" fill="#CFD8DC"/>
                                <path d="M19.3693 25.6668L18.6667 24.3119L19.3486 23.9617C19.3954 23.9381 24.0283 21.5144 26.2849 17.0163L26.627 16.3335L28 17.0148L27.6571 17.6976C25.1712 22.6534 20.259 25.2121 20.0512 25.3182L19.3693 25.6668Z" fill="#2C2E3C"/>
                                <path d="M27.7222 24.7915L27.0878 24.4342C26.9369 24.3496 23.3749 22.3189 20.8928 18.8437L22.0792 17.9964C24.368 21.2004 27.7703 23.145 27.8038 23.164L28.4375 23.5228L27.7222 24.7915ZM18.9583 16.0415H29.1667V17.4998H18.9583V16.0415Z" fill="#2C2E3C"/>
                                <path d="M23.3333 14.5835H24.7917V17.5002H23.3333V14.5835Z" fill="#2C2E3C"/>
                                <path d="M24.0625 25.5208H5.83333C5.02833 25.5208 4.375 24.8675 4.375 24.0625V5.83333C4.375 5.02833 5.02833 4.375 5.83333 4.375H16.0417L24.0625 25.5208Z" fill="#FFDC40"/>
                                <path d="M18.9583 30.6252L16.7708 25.521H24.0625L18.9583 30.6252Z" fill="#A98F1C"/>
                                <path d="M13.9796 17.5002H10.8004L10.0654 19.6877H8.02083L11.4946 10.2085H13.2767L16.7708 19.6877H14.7255L13.9796 17.5002ZM11.2612 16.0418H13.5224L12.3856 12.6045L11.2612 16.0418Z" fill="#2C2E3C"/>
                            </svg>
                        </span>
                        <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M8.13793 1.96656C8.01585 1.84448 7.81814 1.84448 7.69605 1.96656L5.00022 4.6624L2.3046 1.96656C2.18251 1.84448 1.9848 1.84448 1.86272 1.96656L0.508555 3.32073C0.386471 3.44281 0.386471 3.64052 0.508555 3.7626L4.77939 8.03344C4.84022 8.09469 4.92022 8.1251 5.00022 8.1251C5.08022 8.1251 5.16022 8.09469 5.22126 8.03365L9.49209 3.76281C9.61418 3.64073 9.61418 3.44302 9.49209 3.32094L8.13793 1.96656Z"
                                fill="white"/>
                        </svg>

                    </div>
                    <div class="header-lang__more">
                        <div class="header-lang__list" translate="no">
                            <div onclick="doGTranslate('en|en');return false;" class="header-lang__item"><img
                                    src="/assets/theme/style/flags/usa.svg" alt="EN">English
                            </div>
                            <div onclick="doGTranslate('en|ru');return false;" class="header-lang__item"><img
                                    src="/assets/theme/style/flags/russia.svg" alt="RU">Русский
                            </div>
                            <div onclick="doGTranslate('en|de');return false;" class="header-lang__item"><img
                                    src="/assets/theme/style/flags/germany.svg" alt="DE">Deutsch
                            </div>
                            <div onclick="doGTranslate('en|it');return false;" class="header-lang__item"><img
                                    src="/assets/theme/style/flags/italy.svg" alt="IT">Italiano
                            </div>
                            <div onclick="doGTranslate('en|pl');return false;" class="header-lang__item"><img
                                    src="/assets/theme/style/flags/poland.svg" alt="PL">Polski
                            </div>
                            <div onclick="doGTranslate('en|tr');return false;" class="header-lang__item"><img
                                    src="/assets/theme/style/flags/turkey.svg" alt="TR">Türk
                            </div>
                            <div onclick="doGTranslate('en|es');return false;" class="header-lang__item"><img
                                    src="/assets/theme/style/flags/spain.svg" alt="ES">Español
                            </div>
                            <div onclick="doGTranslate('en|es');return false;" class="header-lang__item"><img
                                    src="/assets/theme/style/flags/georgia.svg" alt="KA">Gorgia
                            </div>
                        </div>
                    </div>
                </div>
                <a class="btn" href="{{ route('login') }}">Log in</a>
                <a class="btn btn-primary" href="{{ route('register') }}">Sign Up</a>
            </div>
            <button class="burger">
                <svg viewBox="0 0 64 48">
                    <path d="M19,15 L45,15 C70,15 58,-2 49.0177126,7 L19,37"></path>
                    <path d="M19,24 L45,24 C61.2371586,24 57,49 41,33 L32,24"></path>
                    <path d="M45,33 L19,33 C-8,33 6,-2 22,14 L45,37"></path>
                </svg>
            </button>
            <div class="header-mobile">
                <div class="wrapper">
                    <div class="header-mobile__inner">
                        <nav class="header-menu menu">
                            <ul class="header-menu__list menu__list">
                                <li class="header-menu__item menu__item">
                                    <a href="#about" class="header-menu__link menu__link">ABOUT US</a>
                                </li>
                                <li class="header-menu__item menu__item">
                                    <a href="#ntfs" class="header-menu__link menu__link">NFTs</a>
                                </li>
                                <li class="header-menu__item menu__item">
                                    <a href="#roadmap" class="header-menu__link menu__link">ROADMAP</a>
                                </li>
                                <li class="header-menu__item menu__item">
                                    <a href="#faq" class="header-menu__link menu__link" translate="no">FAQ</a>
                                </li>
                            </ul>
                        </nav>
                        <div class="header-btns">
                            <div class="header-langs">
                                <div class="header-lang">
                                    <div class="header-lang__info" translate="no">
                                        <span>
                                            <svg width="35" height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M10.9375 9.479H29.1667C29.9717 9.479 30.625 10.1323 30.625 10.9373V29.1665C30.625 29.9715 29.9717 30.6248 29.1667 30.6248H18.9583L10.9375 9.479Z" fill="#CFD8DC"/>
                                                <path d="M19.3693 25.6668L18.6667 24.3119L19.3486 23.9617C19.3954 23.9381 24.0283 21.5144 26.2849 17.0163L26.627 16.3335L28 17.0148L27.6571 17.6976C25.1712 22.6534 20.259 25.2121 20.0512 25.3182L19.3693 25.6668Z" fill="#2C2E3C"/>
                                                <path d="M27.7222 24.7915L27.0878 24.4342C26.9369 24.3496 23.3749 22.3189 20.8928 18.8437L22.0792 17.9964C24.368 21.2004 27.7703 23.145 27.8038 23.164L28.4375 23.5228L27.7222 24.7915ZM18.9583 16.0415H29.1667V17.4998H18.9583V16.0415Z" fill="#2C2E3C"/>
                                                <path d="M23.3333 14.5835H24.7917V17.5002H23.3333V14.5835Z" fill="#2C2E3C"/>
                                                <path d="M24.0625 25.5208H5.83333C5.02833 25.5208 4.375 24.8675 4.375 24.0625V5.83333C4.375 5.02833 5.02833 4.375 5.83333 4.375H16.0417L24.0625 25.5208Z" fill="#FFDC40"/>
                                                <path d="M18.9583 30.6252L16.7708 25.521H24.0625L18.9583 30.6252Z" fill="#A98F1C"/>
                                                <path d="M13.9796 17.5002H10.8004L10.0654 19.6877H8.02083L11.4946 10.2085H13.2767L16.7708 19.6877H14.7255L13.9796 17.5002ZM11.2612 16.0418H13.5224L12.3856 12.6045L11.2612 16.0418Z" fill="#2C2E3C"/>
                                            </svg>

                                        </span>
                                        <svg width="10" height="10" viewBox="0 0 10 10" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M8.13793 1.96656C8.01585 1.84448 7.81814 1.84448 7.69605 1.96656L5.00022 4.6624L2.3046 1.96656C2.18251 1.84448 1.9848 1.84448 1.86272 1.96656L0.508555 3.32073C0.386471 3.44281 0.386471 3.64052 0.508555 3.7626L4.77939 8.03344C4.84022 8.09469 4.92022 8.1251 5.00022 8.1251C5.08022 8.1251 5.16022 8.09469 5.22126 8.03365L9.49209 3.76281C9.61418 3.64073 9.61418 3.44302 9.49209 3.32094L8.13793 1.96656Z"
                                                fill="white"/>
                                        </svg>

                                    </div>
                                    <div class="header-lang__more">
                                        <div class="header-lang__list" translate="no">
                                            <div onclick="doGTranslate('en|en');return false;"
                                                 class="header-lang__item"><img src="/assets/theme/style/flags/usa.svg"
                                                                                alt="EN">English
                                            </div>
                                            <div onclick="doGTranslate('en|ru');return false;"
                                                 class="header-lang__item"><img
                                                    src="/assets/theme/style/flags/russia.svg" alt="RU">Русский
                                            </div>
                                            <div onclick="doGTranslate('en|de');return false;"
                                                 class="header-lang__item"><img
                                                    src="/assets/theme/style/flags/germany.svg" alt="DE">Deutsch
                                            </div>
                                            <div onclick="doGTranslate('en|it');return false;"
                                                 class="header-lang__item"><img
                                                    src="/assets/theme/style/flags/italy.svg" alt="IT">Italiano
                                            </div>
                                            <div onclick="doGTranslate('en|pl');return false;"
                                                 class="header-lang__item"><img
                                                    src="/assets/theme/style/flags/poland.svg" alt="PL">Polski
                                            </div>
                                            <div onclick="doGTranslate('en|tr');return false;"
                                                 class="header-lang__item"><img
                                                    src="/assets/theme/style/flags/turkey.svg" alt="TR">Türk
                                            </div>
                                            <div onclick="doGTranslate('en|es');return false;"
                                                 class="header-lang__item"><img
                                                    src="/assets/theme/style/flags/spain.svg" alt="ES">Español
                                            </div>
                                            <div onclick="doGTranslate('en|es');return false;"
                                                 class="header-lang__item"><img
                                                    src="/assets/theme/style/flags/georgia.svg" alt="KA">Gorgia
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a class="btn" href="{{ route('login') }}">Log in</a>
                            <a class="btn btn-primary" href="{{ route('register') }}">Sign Up</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

</header>
@push('scripts')
    {{--    <script>--}}
    {{--        $(function (){--}}
    {{--            $('.header-lang__item').click(function (){--}}
    {{--                let lang = readCookie('googtrans');--}}
    {{--                if(lang === undefined) lang = '/en/ENG';--}}
    {{--                $('.header-lang__info_span').text(lang.split('/')[2])--}}
    {{--            })--}}
    {{--        })--}}
    {{--    </script>--}}
@endpush
