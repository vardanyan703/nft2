<header class="header" >
    <div class="wrapper">
        <div class="header-inner">
            <a class="header-logo logo" href="{{ route('home') }}">
                <img src="images/logo.svg" alt="">
            </a>
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
                <div class="header-lang">
                    <div class="header-lang__info">
                        ENG
                        <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8.13793 1.96656C8.01585 1.84448 7.81814 1.84448 7.69605 1.96656L5.00022 4.6624L2.3046 1.96656C2.18251 1.84448 1.9848 1.84448 1.86272 1.96656L0.508555 3.32073C0.386471 3.44281 0.386471 3.64052 0.508555 3.7626L4.77939 8.03344C4.84022 8.09469 4.92022 8.1251 5.00022 8.1251C5.08022 8.1251 5.16022 8.09469 5.22126 8.03365L9.49209 3.76281C9.61418 3.64073 9.61418 3.44302 9.49209 3.32094L8.13793 1.96656Z"
                                  fill="white"/>
                        </svg>

                    </div>
                    <div class="header-lang__more">
                        <div class="header-lang__list">
                            <div onclick="doGTranslate('en|en');return false;" class="header-lang__item">English</div>
                            <div onclick="doGTranslate('en|ru');return false;" class="header-lang__item">Русский</div>
                            <div onclick="doGTranslate('en|de');return false;" class="header-lang__item">Deutsch</div>
                            <div onclick="doGTranslate('en|it');return false;" class="header-lang__item">Italiano</div>
                            <div onclick="doGTranslate('en|pl');return false;" class="header-lang__item">Polski</div>
                            <div onclick="doGTranslate('en|tr');return false;" class="header-lang__item">Türk</div>
                            <div onclick="doGTranslate('en|es');return false;" class="header-lang__item">Español</div>
                            <div onclick="doGTranslate('en|es');return false;" class="header-lang__item">Gorgia</div>
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
                                    <div class="header-lang__info">
                                        ENG
                                        <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8.13793 1.96656C8.01585 1.84448 7.81814 1.84448 7.69605 1.96656L5.00022 4.6624L2.3046 1.96656C2.18251 1.84448 1.9848 1.84448 1.86272 1.96656L0.508555 3.32073C0.386471 3.44281 0.386471 3.64052 0.508555 3.7626L4.77939 8.03344C4.84022 8.09469 4.92022 8.1251 5.00022 8.1251C5.08022 8.1251 5.16022 8.09469 5.22126 8.03365L9.49209 3.76281C9.61418 3.64073 9.61418 3.44302 9.49209 3.32094L8.13793 1.96656Z"
                                                  fill="white"/>
                                        </svg>

                                    </div>
                                    <div class="header-lang__more">
                                        <div class="header-lang__list">
                                            <div onclick="doGTranslate('en|en');return false;" class="header-lang__item">English</div>
                                            <div onclick="doGTranslate('en|ru');return false;" class="header-lang__item">Русский</div>
                                            <div onclick="doGTranslate('en|de');return false;" class="header-lang__item">Deutsch</div>
                                            <div onclick="doGTranslate('en|it');return false;" class="header-lang__item">Italiano</div>
                                            <div onclick="doGTranslate('en|pl');return false;" class="header-lang__item">Polski</div>
                                            <div onclick="doGTranslate('en|tr');return false;" class="header-lang__item">Türk</div>
                                            <div onclick="doGTranslate('en|es');return false;" class="header-lang__item">Español</div>
                                            <div onclick="doGTranslate('en|es');return false;" class="header-lang__item">Gorgia</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button class="btn">Log in</button>
                            <button class="btn btn-primary">Sign Up</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</header>
