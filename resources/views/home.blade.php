@extends('layout.app')

@section('content')
    <main>
        <div class="home-banner">
            <div class="home-banner__bg">
                <div class="wrapper">
                    <div class="home-banner__inner">
                        <h1 class="title title-big title-line title-line__white  d-tab__none" translate="no">
                            JOIN <span>US</span> <span>AND</span> <span class="title title-medium ">EARN ON NFT</span>
                        </h1>
                        <h1 class="title title-big title-line title-line__white d-tab d-tab__min-none" translate="no">
                            JOIN <span>US</span> <span class="title title-medium "> AND EARN ON NFT</span>
                        </h1>
                        <h1 class="title title-big title-line title-line__white d-tab__min" translate="no">
                            JOIN <br> <span>US AND</span> <span class="title title-medium ">  EARN ON NFT</span>
                        </h1>
                        <p class="home-desc">
                            Earn daily from the investment pool, own some of the best NFTs on Binance, and be part of a new world in the metaverse.


{{--                            Earn up to 1.3% daily from the investment pool, own some of the best NFTs--}}
{{--                            on Binance, and--}}
{{--                            be part of a new world in the metaverse.</p>--}}
                        <div class="home-banner__btns">
                            <button onclick="window.location.href = '{{ route('register') }}'" class="btn btn-primary">
                                Get Started
                            </button>
                            <div class="social">
                                <a class="btn btn-dashed" href="https://t.me/nftgrower" target="_blank">
                                      <span class="btn-dashed__inner">
                                        <span>
                                      <svg width="32" height="32" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M21.2037 4.05858C20.9047 4.07159 20.6302 4.15759 20.3892 4.25261C20.1664 4.34032 19.3667 4.67647 18.0931 5.21063C16.8196 5.74479 15.1321 6.45302 13.3333 7.20954C9.73585 8.72259 5.6932 10.4246 3.62174 11.2963C3.55061 11.3259 3.26171 11.4144 2.94264 11.6581C2.62283 11.9024 2.26758 12.4325 2.26758 13.0122C2.26758 13.4799 2.50105 13.9563 2.78297 14.229C3.06489 14.5017 3.35061 14.6292 3.58941 14.7242C4.28801 15.0024 6.44681 15.8645 7.38512 16.24C7.71382 17.2251 8.48587 19.5455 8.66652 20.1166H8.6645C8.81146 20.5814 8.9547 20.8844 9.15362 21.1372C9.25308 21.2637 9.3718 21.3783 9.51742 21.4687C9.5733 21.5034 9.63517 21.5303 9.6973 21.5556C9.70596 21.5593 9.71489 21.5602 9.72358 21.5637L9.69933 21.5576C9.71734 21.5649 9.73351 21.5756 9.75188 21.5819C9.7818 21.5922 9.80254 21.5919 9.84283 21.6001C9.9846 21.6437 10.1261 21.6729 10.2572 21.6729C10.8197 21.6729 11.1647 21.3677 11.1647 21.3677L11.1869 21.3515L13.6163 19.296L16.5914 22.0468C16.6446 22.1219 17.07 22.6996 18.0568 22.6996C18.6447 22.6996 19.1115 22.4106 19.4089 22.1054C19.7063 21.8001 19.8915 21.4878 19.9748 21.0645V21.0604V21.0584C20.0327 20.7579 22.8893 6.41928 22.8893 6.41928L22.8833 6.44353C22.9719 6.04787 22.9981 5.66524 22.8934 5.27531C22.7886 4.88538 22.506 4.50485 22.1657 4.30516C21.8254 4.10547 21.5027 4.04557 21.2037 4.05858ZM20.7954 6.32428C20.6832 6.88764 18.141 19.6592 17.9759 20.5067L15.021 17.7761C14.2593 17.0719 13.0717 17.0471 12.2803 17.7155L10.7726 18.9908L11.577 15.8459C11.577 15.8459 17.1263 10.2287 17.4605 9.90171C17.7296 9.6399 17.7859 9.54812 17.7859 9.45706C17.7859 9.33598 17.7236 9.24888 17.5798 9.24888C17.4504 9.24888 17.2747 9.37283 17.1816 9.43078C15.9931 10.1718 10.9045 13.0718 8.44015 14.4735C8.34759 14.4181 8.25654 14.3606 8.15517 14.3199C7.34658 13.9963 5.79242 13.3732 4.88294 13.0102C7.02944 12.1068 10.7089 10.5588 14.1357 9.1175C15.9342 8.36111 17.6212 7.65224 18.8935 7.11859C19.9675 6.66812 20.5277 6.43488 20.7954 6.32428ZM17.9436 20.6562H17.9456C17.9455 20.6565 17.9437 20.664 17.9436 20.6643C17.9453 20.6555 17.9424 20.6626 17.9436 20.6562Z"
                                            fill="white"/>
                                      </svg>
                                    </span>
                                      <span class="btn-hidden">
                                        Telegram channel
                                        <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <g clip-path="url(#clip0_104_53084)">
                                            <path
                                                d="M1.96656 1.86207C1.84448 1.98415 1.84448 2.18186 1.96656 2.30395L4.6624 4.99978L1.96656 7.6954C1.84448 7.81749 1.84448 8.0152 1.96656 8.13728L3.32073 9.49145C3.44281 9.61353 3.64052 9.61353 3.7626 9.49145L8.03344 5.22061C8.09469 5.15978 8.1251 5.07978 8.1251 4.99978C8.1251 4.91978 8.09469 4.83978 8.03365 4.77874L3.76281 0.507905C3.64073 0.385821 3.44302 0.385821 3.32094 0.507905L1.96656 1.86207Z"
                                                fill="white"/>
                                          </g>
                                          <defs>
                                            <clipPath id="clip0_104_53084">
                                              <rect width="10" height="10" fill="white" transform="translate(0 10) rotate(-90)"/>
                                            </clipPath>
                                          </defs>
                                        </svg>
                                      </span>
                                      </span>
                                </a>
                                <a class="btn btn-dashed" href="https://t.me/nftgrowerchat" target="_blank">
                                      <span class="btn-dashed__inner">
                                    <span>
                                     <svg width="32" height="32" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                      <path
                                          d="M8.21392 3.55737C7.02387 3.55737 5.97845 4.17815 5.37825 5.11466C5.46104 5.10949 5.54407 5.10961 5.62686 5.10961H17.5274C19.6694 5.10961 21.4079 6.84812 21.4079 8.99021V17.2688C21.4079 17.3516 21.4081 17.4346 21.4029 17.5174C22.3394 16.9172 22.9602 15.8718 22.9602 14.6818V8.99021C22.9602 5.99439 20.5232 3.55737 17.5274 3.55737H8.21392ZM5.62686 6.14444C3.77869 6.14444 2.26367 7.65945 2.26367 9.50762V17.2688C2.26367 19.117 3.77869 20.632 5.62686 20.632H5.88556V22.9785C5.88556 23.9881 7.12359 24.6196 7.94006 24.0255L12.6059 20.632H17.0099C18.8581 20.632 20.3731 19.117 20.3731 17.2688V9.50762C20.3731 7.65945 18.8581 6.14444 17.0099 6.14444H5.62686ZM5.62686 7.69668H17.0099C18.0189 7.69668 18.8209 8.49863 18.8209 9.50762V17.2688C18.8209 18.2778 18.0189 19.0798 17.0099 19.0798H12.3532C12.1891 19.0797 12.0292 19.1317 11.8964 19.2283L7.4378 22.4712V19.8559C7.43778 19.65 7.356 19.4526 7.21046 19.3071C7.06491 19.1616 6.86752 19.0798 6.66168 19.0798H5.62686C4.61787 19.0798 3.81591 18.2778 3.81591 17.2688V9.50762C3.81591 9.3815 3.82839 9.25827 3.85229 9.13977C4.01959 8.31033 4.74399 7.69668 5.62686 7.69668Z"
                                          fill="white"/>
                                     </svg>
                                    </span>
                                      <span class="btn-hidden">
                                        Telegram Chat
                                        <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <g clip-path="url(#clip0_104_53084)">
                                            <path
                                                d="M1.96656 1.86207C1.84448 1.98415 1.84448 2.18186 1.96656 2.30395L4.6624 4.99978L1.96656 7.6954C1.84448 7.81749 1.84448 8.0152 1.96656 8.13728L3.32073 9.49145C3.44281 9.61353 3.64052 9.61353 3.7626 9.49145L8.03344 5.22061C8.09469 5.15978 8.1251 5.07978 8.1251 4.99978C8.1251 4.91978 8.09469 4.83978 8.03365 4.77874L3.76281 0.507905C3.64073 0.385821 3.44302 0.385821 3.32094 0.507905L1.96656 1.86207Z"
                                                fill="white"/>
                                          </g>
                                          <defs>
                                            <clipPath id="clip0_104_53084">
                                              <rect width="10" height="10" fill="white" transform="translate(0 10) rotate(-90)"/>
                                            </clipPath>
                                          </defs>
                                        </svg>
                                      </span>
                                      </span>
                                </a>
                                <a class="btn btn-dashed" href="https://twitter.com/nftgrower_io" target="_blank">
                                    <span class="btn-dashed__inner">
                                    <span>
                                      <svg width="32" height="32" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M16.7512 4.07471C13.9409 4.07471 11.6602 6.34549 11.5993 9.14172C9.1146 8.8437 7.49657 7.91469 6.50403 6.9993C5.40332 5.98415 5.05487 5.08225 5.05487 5.08225C5.004 4.95407 4.9199 4.84176 4.81122 4.75687C4.70255 4.67198 4.57321 4.61758 4.43653 4.59926C4.29985 4.58094 4.16076 4.59937 4.03357 4.65264C3.90637 4.70591 3.79566 4.79211 3.71283 4.90237C3.71283 4.90237 2.78109 6.14436 2.78109 7.9553C2.78109 8.99064 3.10798 9.7567 3.49758 10.4059C3.48323 10.3992 3.38642 10.3655 3.38642 10.3655C3.26272 10.3038 3.12477 10.2762 2.98683 10.2856C2.8489 10.295 2.71598 10.3411 2.60182 10.4191C2.48766 10.4971 2.3964 10.6041 2.33749 10.7292C2.27857 10.8543 2.25414 10.9928 2.2667 11.1305C2.2667 11.1305 2.56543 13.3141 4.61831 14.9101L4.40406 14.9636C4.28777 14.9927 4.17978 15.0482 4.08855 15.126C3.99733 15.2037 3.92536 15.3016 3.87827 15.4118C3.83118 15.522 3.81026 15.6417 3.81715 15.7613C3.82404 15.881 3.85855 15.9974 3.91798 16.1015C3.91798 16.1015 4.26609 16.6904 4.99525 17.3102C5.42757 17.6776 6.06266 18.0568 6.81125 18.4077C5.89191 18.7436 4.52105 19.0797 2.52238 19.0797C2.37324 19.0797 2.22725 19.1226 2.10187 19.2034C1.9765 19.2842 1.87706 19.3994 1.81544 19.5352C1.75382 19.671 1.73263 19.8217 1.75442 19.9692C1.7762 20.1168 1.84003 20.2549 1.93827 20.3671C1.93827 20.3671 2.53134 21.0205 3.70374 21.5889C4.87613 22.1574 6.68211 22.7016 9.24875 22.7016C13.7604 22.7016 17.002 20.5373 19.025 17.7942C21.048 15.0512 21.9254 11.764 21.9254 9.24884C21.9254 9.08924 21.9154 8.93189 21.9011 8.77589C22.9935 7.7233 23.4034 6.93198 23.423 6.89319C23.5213 6.69606 23.4847 6.4593 23.3321 6.30201C23.18 6.1442 22.9442 6.09976 22.7439 6.19186L22.66 6.23026C22.5881 6.26337 22.5162 6.2967 22.4438 6.32929C22.6544 5.99349 22.8206 5.63464 22.9359 5.26314C23.0001 5.05824 22.9308 4.83372 22.7611 4.70126C22.5914 4.5688 22.3576 4.55462 22.174 4.6669C21.5416 5.05125 20.9354 5.32032 20.3044 5.50062C19.3759 4.61979 18.1259 4.07471 16.7512 4.07471ZM16.7512 5.62695C18.7604 5.62695 20.3731 7.23963 20.3731 9.24884C20.3731 11.3904 19.5689 14.4415 17.776 16.8726C15.9831 19.3036 13.2744 21.1493 9.24875 21.1493C7.30058 21.1493 6.00467 20.7969 5.03365 20.4157C6.05079 20.2577 6.92657 20.0469 7.55604 19.8033C8.64761 19.3807 9.23662 18.8927 9.23662 18.8927C9.34466 18.8 9.42511 18.6793 9.46918 18.544C9.51325 18.4086 9.51923 18.2637 9.48646 18.1251C9.4537 17.9866 9.38346 17.8597 9.28343 17.7584C9.1834 17.6571 9.05743 17.5852 8.9193 17.5507C7.51053 17.1985 6.60701 16.6289 6.04018 16.1541L6.84965 15.952C7.00973 15.912 7.15292 15.8221 7.25843 15.6952C7.36394 15.5684 7.42629 15.4112 7.43643 15.2466C7.44657 15.0819 7.40396 14.9182 7.31481 14.7794C7.22565 14.6406 7.09457 14.5338 6.9406 14.4745C5.26153 13.8287 4.55645 12.9154 4.19589 12.1502C4.63464 12.241 5.04316 12.3533 5.62686 12.3533C5.80164 12.3532 5.97127 12.294 6.10826 12.1855C6.24526 12.0769 6.34161 11.9253 6.38171 11.7552C6.42182 11.5851 6.40333 11.4064 6.32924 11.2481C6.25515 11.0898 6.1298 10.9611 5.97348 10.8829C5.97348 10.8829 4.33332 10.1284 4.33332 7.9553C4.33332 7.56515 4.44138 7.31803 4.52028 7.02255C4.79098 7.38633 5.01407 7.73726 5.45102 8.14024C6.78318 9.36885 8.98506 10.6216 12.3118 10.8001C12.4171 10.8057 12.5224 10.7898 12.6213 10.7534C12.7202 10.717 12.8107 10.6608 12.8872 10.5883C12.9637 10.5157 13.0246 10.4284 13.0662 10.3315C13.1079 10.2347 13.1293 10.1304 13.1293 10.025V9.24884C13.1293 7.23963 14.742 5.62695 16.7512 5.62695Z"
                                            fill="white"/>
                                      </svg>
                                    </span>
                                     <span class="btn-hidden">
                                        Twitter
                                        <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <g clip-path="url(#clip0_104_53084)">
                                            <path
                                                d="M1.96656 1.86207C1.84448 1.98415 1.84448 2.18186 1.96656 2.30395L4.6624 4.99978L1.96656 7.6954C1.84448 7.81749 1.84448 8.0152 1.96656 8.13728L3.32073 9.49145C3.44281 9.61353 3.64052 9.61353 3.7626 9.49145L8.03344 5.22061C8.09469 5.15978 8.1251 5.07978 8.1251 4.99978C8.1251 4.91978 8.09469 4.83978 8.03365 4.77874L3.76281 0.507905C3.64073 0.385821 3.44302 0.385821 3.32094 0.507905L1.96656 1.86207Z"
                                                fill="white"/>
                                          </g>
                                          <defs>
                                            <clipPath id="clip0_104_53084">
                                              <rect width="10" height="10" fill="white" transform="translate(0 10) rotate(-90)"/>
                                            </clipPath>
                                          </defs>
                                        </svg>
                                      </span>
                                      </span>
                                </a>
                            </div>
                        </div>
                        <div class="home-banner__logos">
                            <div class="home-banner__logo-inner">
                                <a href="#" class="home-banner__logo">
                                    <img src="images/ft.svg" alt="">
                                </a>
                                <a href="https://www.binance.com" target="_blank" class="home-banner__logo">
                                    <img src="images/binance-big.svg" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section class="statistic">
            <div class="wrapper">
                <div class="statistic__inner">
                    <h2 class="title title-line">live statistics</h2>
                    <div class="statistic__info">
                        <div class="statistic__info-item">
                            <div class="title investment-pool" translate="no" >$34 329 428,323</div>
                            <div class="desc">Investment Pool</div>
                        </div>
                        <div class="statistic__info-item">
                            <div class="title holders" >5074</div>
                            <div class="desc">Community</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-bg section-grower" id="about">
            <div class="wrapper">
                <div class="section-grower__inner">
                    <div class="section-grower__left">
                        <video loop autoplay playsinline muted>
                            <source src="images/gif.mp4" type="video/mp4">
                        </video>
                    </div>
                    <div class="section-grower__right">
                        <h2 class="title">What is <span>NFT GROWER?</span></h2>
                        <div class="desc">NFT Grower is an NFT collection of 11,111 unique monkey characters powered by
                            the Binance
                            blockchain.
                        </div>
                        <div class="section-grower__list">
                            <div class="section-grower__item">
                                <div class="title-line title-line__dark mb-md-3 mb-5"></div>
                                <div class="desc">By purchasing NFT Grower tokens on Binance, you become a co-owner of
                                    the NFT Grower
                                    Metaverse with many gaming and financial mechanics, where the income from the
                                    project will be
                                    distributed among all NFT owners.
                                </div>
                            </div>
                            <div class="section-grower__item">
                                <div class="title-line title-line__dark mb-md-3 mb-5"></div>
                                <div class="desc">By purchasing NFT Grower tokens in your personal account, you get
                                    access to the
                                    investment pool and can earn up to 1.3% per day from the value of your NFTs for the
                                    duration of the NFT.
                                </div>
                            </div>
                        </div>
                        <div class="desc mb-7">Each member of the NFT Grower Сommunity has access to a 4-level referral
                            program to
                            invite
                            friends to join us and earn even more with them.
                        </div>
                        <a class="more" href="{{ route('affiliate') }}" target="_blank">
                            Affiliate Presentation
                            <div class="more-icon">
                                <svg width="18" height="19" viewBox="0 0 18 19" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M0.640839 0.998047H16.2641C17.2228 0.998047 18 1.77524 18 2.73396V18.3572H14.5282V6.92484L2.45496 18.998L0 16.5431L12.0732 4.46988H0.640839V0.998047Z"
                                          fill="#2C2E3C"/>
                                </svg>
                            </div>
                        </a>

                    </div>
                </div>
            </div>
        </section>

        <section class="featured">
            <div class="wrapper">
                <h2 class="title title-line">As featured in</h2>
                <ul class="featured__list">
                    <li class="featured__item">
                        <a href="#" class="featured__link">
                            <img src="images/featured-1.png" alt="">
                        </a>
                    </li>

                    <li class="featured__item">
                        <a href="#" class="featured__link">
                            <img src="images/featured-2.png" alt="">
                        </a>
                    </li>
                    <li class="featured__item">
                        <a href="#" class="featured__link">
                            <img src="images/featured-3.png" alt="">
                        </a>
                    </li>
                    <li class="featured__item">
                        <a href="#" class="featured__link">
                            <img src="images/featured-4.png" alt="">
                        </a>
                    </li>
                    <li class="featured__item">
                        <a href="https://blockonomi.com/nft-grower-monkeys-win-the-hearts-of-crypto-community-nft-collection-metaverse-investment-pool/" target="_blank" class="featured__link">
                            <img src="images/featured-5.png" alt="">
                        </a>
                    </li>
                </ul>
            </div>
        </section>

        <section class="tokens" id="ntfs">
            <div class="wrapper">
                <div class="tokens-header">
                    <h2 class="title title-line tokens-title">NFT tokens</h2>
                    <div class="swiper-arrows">
                        <div class="swiper-arrow swiper-button-prev">
                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M3.53944 9.39793C3.31969 9.17818 3.31969 8.82231 3.53944 8.60256L11.2269 0.915057C11.4467 0.695307 11.8026 0.695307 12.0223 0.915057L14.4598 3.35256C14.6796 3.57231 14.6796 3.92818 14.4598 4.14793L9.60769 9.00006L14.4602 13.8522C14.6799 14.0719 14.6799 14.4278 14.4602 14.6476L12.0227 17.0851C11.9128 17.1953 11.7688 17.2501 11.6248 17.2501C11.4808 17.2501 11.3368 17.1953 11.2269 17.0854L3.53944 9.39793Z"
                                    fill="#303640"/>
                            </svg>
                        </div>
                        <div class="swiper-arrow swiper-button-next">
                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M14.4606 9.39793C14.6803 9.17818 14.6803 8.82231 14.4606 8.60256L6.77306 0.915057C6.55331 0.695307 6.19744 0.695307 5.97769 0.915057L3.54019 3.35256C3.32044 3.57231 3.32044 3.92818 3.54019 4.14793L8.39231 9.00006L3.53981 13.8522C3.32006 14.0719 3.32006 14.4278 3.53981 14.6476L5.97731 17.0851C6.08719 17.1953 6.23119 17.2501 6.37519 17.2501C6.51919 17.2501 6.66319 17.1953 6.77306 17.0854L14.4606 9.39793Z"
                                    fill="#303640"/>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tokens__inner">
                <div class="wrapper wrapper-tokens">
                    <div class="swiper mySwiper">
                        <div class="swiper-wrapper tokens__list">
                            @foreach($tariffs as $tariff)
                                <div class="swiper-slide tokens__item">
                                    <div class="tokens__img">
                                        <img src="{{ $tariff->attachment[0]->url()}}" alt="">
                                    </div>
                                    <div class="tokens__content">
                                        <div class="tokens__title">{{ $tariff->home_page_name }}</div>
                                        <ul class="tokens-info__list">
                                            <li class="tokens-info__item">
                                                <div class="tokens-info__left">
                                                    <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M11.0002 1.83325C5.94569 1.83325 1.8335 5.94545 1.8335 10.9999C1.8335 16.0544 5.94569 20.1666 11.0002 20.1666C16.0546 20.1666 20.1668 16.0544 20.1668 10.9999C20.1668 5.94545 16.0546 1.83325 11.0002 1.83325ZM11.0002 3.20825C15.3115 3.20825 18.7918 6.68856 18.7918 10.9999C18.7918 15.3113 15.3115 18.7916 11.0002 18.7916C6.6888 18.7916 3.2085 15.3113 3.2085 10.9999C3.2085 6.68856 6.6888 3.20825 11.0002 3.20825ZM9.38525 5.9484C9.20307 5.95125 9.02947 6.02629 8.90258 6.15704C8.77569 6.2878 8.70588 6.46357 8.7085 6.64575V8.00732L7.42749 8.26335C7.33785 8.27993 7.25241 8.31417 7.17613 8.36408C7.09984 8.41399 7.03425 8.47857 6.98316 8.55407C6.93206 8.62956 6.89649 8.71446 6.87851 8.80383C6.86053 8.8932 6.86051 8.98525 6.87843 9.07463C6.89635 9.16401 6.93187 9.24893 6.98292 9.32446C7.03396 9.39998 7.09952 9.4646 7.17577 9.51456C7.25202 9.56452 7.33744 9.59882 7.42707 9.61546C7.51669 9.6321 7.60873 9.63075 7.69783 9.61149L8.7085 9.40918V10.299L7.42749 10.555C7.33785 10.5716 7.25241 10.6058 7.17613 10.6558C7.09984 10.7057 7.03425 10.7702 6.98316 10.8457C6.93206 10.9212 6.89649 11.0061 6.87851 11.0955C6.86053 11.1849 6.86051 11.2769 6.87843 11.3663C6.89635 11.4557 6.93187 11.5406 6.98292 11.6161C7.03396 11.6916 7.09952 11.7563 7.17577 11.8062C7.25202 11.8562 7.33744 11.8905 7.42707 11.9071C7.51669 11.9238 7.60873 11.9224 7.69783 11.9032L8.7085 11.7008V15.3541C8.70851 15.5364 8.78095 15.7113 8.90988 15.8402C9.03881 15.9691 9.21367 16.0416 9.396 16.0416C9.396 16.0416 12.897 16.0893 14.9748 13.4921C15.0312 13.4216 15.0732 13.3406 15.0983 13.2539C15.1235 13.1671 15.1313 13.0762 15.1213 12.9865C15.1113 12.8967 15.0838 12.8098 15.0402 12.7306C14.9966 12.6515 14.9379 12.5817 14.8673 12.5253C14.7968 12.4689 14.7159 12.4269 14.6291 12.4018C14.5423 12.3766 14.4515 12.3688 14.3617 12.3788C14.2719 12.3888 14.185 12.4163 14.1059 12.4599C14.0267 12.5035 13.957 12.5622 13.9006 12.6327C12.6413 14.2068 10.8976 14.4737 10.0835 14.5538V11.426L12.2812 10.9865C12.3708 10.9699 12.4563 10.9357 12.5325 10.8858C12.6088 10.8358 12.6744 10.7713 12.7255 10.6958C12.7766 10.6203 12.8122 10.5354 12.8301 10.446C12.8481 10.3566 12.8482 10.2646 12.8302 10.1752C12.8123 10.0858 12.7768 10.0009 12.7257 9.92538C12.6747 9.84985 12.6091 9.78523 12.5329 9.73527C12.4566 9.68532 12.3712 9.65102 12.2816 9.63438C12.192 9.61774 12.0999 9.61909 12.0108 9.63835L10.0835 10.0242V9.13436L12.2812 8.69482C12.3708 8.67824 12.4563 8.644 12.5325 8.59409C12.6088 8.54418 12.6744 8.4796 12.7255 8.4041C12.7766 8.32861 12.8122 8.24371 12.8301 8.15434C12.8481 8.06497 12.8482 7.97292 12.8302 7.88354C12.8123 7.79416 12.7768 7.70924 12.7257 7.63371C12.6747 7.55819 12.6091 7.49357 12.5329 7.44361C12.4566 7.39365 12.3712 7.35935 12.2816 7.34271C12.192 7.32607 12.0999 7.32742 12.0108 7.34668L10.0835 7.7325V6.64575C10.0848 6.55373 10.0676 6.46239 10.033 6.37713C9.99838 6.29187 9.94698 6.21442 9.88187 6.14939C9.81676 6.08436 9.73925 6.03306 9.65394 5.99854C9.56864 5.96402 9.47727 5.94697 9.38525 5.9484Z"
                                                            fill="#14151B"/>
                                                    </svg>
                                                    Profit
                                                </div>
                                                <div class="tokens-info__right">
                                                    {{ $tariff->token_bid }}%
                                                </div>
                                            </li>
                                            <li class="tokens-info__item">
                                                <div class="tokens-info__left">
                                                    <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M11.0002 1.83325C5.94569 1.83325 1.8335 5.94545 1.8335 10.9999C1.8335 16.0544 5.94569 20.1666 11.0002 20.1666C16.0546 20.1666 20.1668 16.0544 20.1668 10.9999C20.1668 5.94545 16.0546 1.83325 11.0002 1.83325ZM11.0002 3.20825C15.3115 3.20825 18.7918 6.68856 18.7918 10.9999C18.7918 15.3113 15.3115 18.7916 11.0002 18.7916C6.6888 18.7916 3.2085 15.3113 3.2085 10.9999C3.2085 6.68856 6.6888 3.20825 11.0002 3.20825ZM10.7603 5.49007C10.5781 5.49292 10.4045 5.56796 10.2776 5.69871C10.1507 5.82946 10.0809 6.00523 10.0835 6.18742V11.6874C10.0835 11.8697 10.156 12.0446 10.2849 12.1735C10.4138 12.3025 10.5887 12.3749 10.771 12.3749H14.4377C14.5288 12.3762 14.6192 12.3594 14.7038 12.3254C14.7883 12.2914 14.8652 12.241 14.9301 12.177C14.995 12.1131 15.0465 12.0368 15.0817 11.9528C15.1168 11.8687 15.135 11.7785 15.135 11.6874C15.135 11.5963 15.1168 11.5061 15.0817 11.4221C15.0465 11.338 14.995 11.2618 14.9301 11.1978C14.8652 11.1338 14.7883 11.0834 14.7038 11.0494C14.6192 11.0155 14.5288 10.9986 14.4377 10.9999H11.4585V6.18742C11.4598 6.0954 11.4426 6.00405 11.408 5.91879C11.3734 5.83353 11.322 5.75609 11.2569 5.69106C11.1918 5.62603 11.1142 5.57473 11.0289 5.54021C10.9436 5.50568 10.8523 5.48863 10.7603 5.49007Z"
                                                            fill="#14151B"/>
                                                    </svg>
                                                    After
                                                </div>
                                                <div class="tokens-info__right">
                                                    {{ $tariff->period/24 }} day
                                                </div>
                                            </li>
                                            <li class="tokens-info__item">
                                                <div class="tokens-info__left">
                                                    <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M14.7462 1.83325C14.0781 1.83325 13.4356 2.09859 12.963 2.57178L12.7849 2.74992H10.1629C9.49474 2.74992 8.85225 3.01526 8.37969 3.48844L0.738416 11.1306C-0.240279 12.1093 -0.240279 13.7165 0.738416 14.6952L5.47124 19.429C6.44994 20.4076 8.05806 20.4076 9.03676 19.429L10.0036 18.4613L10.0546 18.5123C11.0333 19.491 12.6414 19.491 13.6201 18.5123L21.2623 10.8701C21.7348 10.3976 22.0008 9.75611 22.0008 9.08781V3.89575C22.0001 2.76504 21.0683 1.83325 19.9374 1.83325H14.7462ZM14.7462 3.20825H19.9374C20.3254 3.20825 20.6256 3.50755 20.6258 3.89575V9.08781C20.6258 9.39117 20.5042 9.68297 20.2892 9.89795L12.6479 17.5392C12.1948 17.9924 11.4808 17.9924 11.0276 17.5392L6.29392 12.8064C5.84078 12.3533 5.84078 11.6393 6.29392 11.1861L13.9361 3.54395C14.151 3.32872 14.4418 3.20825 14.7462 3.20825ZM10.1629 4.12492H11.4099L5.32175 10.2139C4.34305 11.1926 4.34305 12.7999 5.32175 13.7786L9.03139 17.4891L8.06459 18.4559C7.61145 18.909 6.89745 18.909 6.44431 18.4559L1.71058 13.7231C1.25745 13.2699 1.25745 12.5559 1.71058 12.1028L9.35276 4.46061C9.5677 4.24538 9.85847 4.12492 10.1629 4.12492ZM17.8749 4.58325C17.5102 4.58325 17.1605 4.72812 16.9026 4.98598C16.6448 5.24384 16.4999 5.59358 16.4999 5.95825C16.4999 6.32292 16.6448 6.67266 16.9026 6.93052C17.1605 7.18839 17.5102 7.33325 17.8749 7.33325C18.2396 7.33325 18.5893 7.18839 18.8472 6.93052C19.105 6.67266 19.2499 6.32292 19.2499 5.95825C19.2499 5.59358 19.105 5.24384 18.8472 4.98598C18.5893 4.72812 18.2396 4.58325 17.8749 4.58325Z"
                                                            fill="#14151B"/>
                                                    </svg>
                                                    Price
                                                </div>
                                                <div class="tokens-info__right">
                                                    {{ \App\Models\Tariff::money_format($tariff->min_price) }}
                                                    - {{ \App\Models\Tariff::money_format($tariff->max_price) }} USD
                                                </div>
                                            </li>
                                            <li class="tokens-info__item">
                                                <div class="tokens-info__left">
                                                    <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M11.0002 1.83325C5.94569 1.83325 1.8335 5.94545 1.8335 10.9999C1.8335 16.0544 5.94569 20.1666 11.0002 20.1666C16.0546 20.1666 20.1668 16.0544 20.1668 10.9999C20.1668 5.94545 16.0546 1.83325 11.0002 1.83325ZM11.0002 3.20825C15.3115 3.20825 18.7918 6.68856 18.7918 10.9999C18.7918 15.3113 15.3115 18.7916 11.0002 18.7916C6.6888 18.7916 3.2085 15.3113 3.2085 10.9999C3.2085 6.68856 6.6888 3.20825 11.0002 3.20825ZM14.4242 8.24365C14.2457 8.24886 14.0762 8.32334 13.9516 8.45133L9.85433 12.5486L8.04875 10.743C7.9854 10.677 7.90952 10.6243 7.82555 10.5881C7.74159 10.5518 7.65123 10.5326 7.55977 10.5317C7.4683 10.5307 7.37757 10.5481 7.29289 10.5826C7.20821 10.6172 7.13127 10.6683 7.06659 10.733C7.00192 10.7977 6.95079 10.8746 6.91622 10.9593C6.88164 11.044 6.86432 11.1347 6.86525 11.2262C6.86618 11.3177 6.88535 11.408 6.92163 11.492C6.95792 11.5759 7.0106 11.6518 7.07658 11.7152L9.36825 14.0068C9.49718 14.1357 9.67202 14.2081 9.85433 14.2081C10.0366 14.2081 10.2115 14.1357 10.3404 14.0068L14.9237 9.4235C15.0229 9.32691 15.0906 9.20262 15.118 9.0669C15.1454 8.93119 15.1312 8.79037 15.0772 8.66287C15.0232 8.53538 14.932 8.42715 14.8155 8.35235C14.699 8.27755 14.5626 8.23967 14.4242 8.24365Z"
                                                            fill="#14151B"/>
                                                    </svg>
                                                    Status
                                                </div>
                                                <div class="tokens-info__right">
                                                    {{ $tariff->published ? 'AVAILABLE' : 'Closed' }}
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            @endforeach
                            <div class="swiper-slide tokens__item"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="roadmap" id="roadmap">
            <div class="wrapper">
                <h2 class="title  title-line title-center">Roadmap</h2>
                <div class="roadmap__inner">
                    <div class="box box-left">
                        <div class="rm-box ">
                            <div class="corner-box">
                                <h3 class="title title-line roadmap-title">Preparing for a project, main foundation</h3>
                                <div class="desc">Collection and analysis of technical requirements, creation of a
                                    functional prototype, formation of a team of WEB 3.0 industry
                                    leaders.
                                </div>
                            </div>
                        </div>
                        <div class="rm-box ">
                            <div class="corner-box">
                                <h3 class="title title-line roadmap-title">Community</h3>
                                <div class="desc">Development of a referral program, creation of platforms for the community and involvement
                                    of influencers to create an initial community.
                                </div>
                            </div>
                        </div>
                        <div class="rm-box ">
                            <div class="corner-box">
                                <h3 class="title title-line roadmap-title">Launch of an investment pool</h3>
                                <p class="desc">Launch with an initial capital of $3M and the start of sales of temporary NFT Grower tokens
                                    on the official website with a profit up to 0.8% per day.
                                    Reply</p>
                            </div>
                        </div>
                        <div class="rm-box ">
                            <div class="corner-box">
                                <h3 class="title title-line roadmap-title">Active development and growth</h3>
                                <p class="desc">Collection and analysis of technical requirements, creation of a
                                    functional prototype, formation of a team of WEB 3.0 industry
                                    leaders.
                                </p>
                            </div>
                        </div>
                        <div class="rm-box  soon">
                            <div class="corner-box">
                                <p class="soon-text">Coming soon</p>
                                <h3 class="title title-line roadmap-title">Metaverse and P2E Game development</h3>
                                <p class="desc">Creation of interactive prototypes in accordance with the concept and documentation, active
                                    testing within the team and with some community members.</p>
                            </div>
                        </div>
                        <div class="rm-box soon">
                            <div class="corner-box">
                                <p class="soon-text">Coming soon</p>

                                <h3 class="title title-line roadmap-title">Full-scale launch Metaverse with P2E Game</h3>
                                <p class="desc">Public launch of the Metaverse with an integrated P2E game that will have unique features
                                    and unite the real and cyber worlds. New collaborations with major influencers, companies, marketplaces,
                                    etc.</p>
                            </div>
                        </div>
                    </div>
                    <div class="box box-right">
                        <div class="rm-box">
                            <div class="corner-box">
                                <h3 class="title title-line roadmap-title">Tokenomics</h3>
                                <div class="desc">Development of project tokenomics, automation of mutual settlements between community
                                    members and the investment pool.
                                </div>
                            </div>
                        </div>
                        <div class="rm-box">
                            <div class="corner-box">
                                <h3 class="title title-line roadmap-title">Development & Team</h3>
                                <p class="desc">Creation of the project structure, design, usability testing. Hiring the best financial and
                                    technical specialists previously working in leading WEB 3.0 projects and crypto companies. Creation of a
                                    team of super-heroes.</p>
                            </div>
                        </div>
                        <div class="rm-box">
                            <div class="corner-box">
                                <h3 class="title title-line roadmap-title">Active marketing campaign</h3>
                                <p class="desc">Initially, our team understood that NFT Grower is a project for the whole world, and after
                                    the launch of our investment pool, we began an active marketing campaign, attracting the best experts,
                                    celebrities and influencers from all over the world to our community.</p>
                            </div>
                        </div>
                        <div class="rm-box soon">
                            <div class="corner-box">
                                <p class="soon-text">Coming soon</p>
                                <h3 class="title title-line roadmap-title">Launching our collection on Binance NFT</h3>
                                <p class="desc">Our collection of 11,111 unique characters is divided into four
                                    equal parts: I Drop - $139, II Drop - $199, III Drop - $239, IV
                                    Drop - $299.</p>
                            </div>
                        </div>
                        <div class="rm-box soon">
                            <div class="corner-box">
                                <p class="soon-text">Coming soon</p>
                                <h3 class="title title-line roadmap-title">Beta testing of the game and the metaverse</h3>
                                <p class="desc">Final tests and launch of the P2E game and the metaverse, collecting feedback together with
                                    partners and the largest holders of NFT Grower tokens.</p>
                            </div>
                        </div>
                    </div>
                    <div class="roadmap__inner-text">
                        this is just the beginning...
                    </div>
                </div>
                <div class="roadmap__inner roadmap__inner-mobile">
                    <div class="box box-right">
                        <div class="rm-box ">
                            <div class="corner-box">
                                <h3 class="title title-line roadmap-title">Preparing for a project, main foundation</h3>
                                <div class="desc">Collection and analysis of technical requirements, creation of a
                                    functional prototype, formation of a team of WEB 3.0 industry
                                    leaders.
                                </div>
                            </div>
                        </div>
                        <div class="box box-right">
                            <div class="rm-box">
                                <div class="corner-box">
                                    <h3 class="title title-line roadmap-title">Tokenomics</h3>
                                    <div class="desc">Development of project tokenomics, automation of mutual settlements between community
                                        members and the investment pool.
                                    </div>
                                </div>
                            </div>
                            <div class="rm-box">
                                <div class="corner-box">
                                    <h3 class="title title-line roadmap-title">Community</h3>
                                    <div class="desc">Development of a referral program, creation of platforms for the community and
                                        involvement of influencers to create an initial community.
                                    </div>
                                </div>
                            </div>
                            <div class="rm-box">
                                <div class="corner-box">
                                    <h3 class="title title-line roadmap-title">Development & Team</h3>
                                    <p class="desc">Creation of the project structure, design, usability testing. Hiring the best financial
                                        and
                                        technical specialists previously working in leading WEB 3.0 projects and crypto companies. Creation of a
                                        team of super-heroes.</p>
                                </div>
                            </div>
                            <div class="rm-box">
                                <div class="corner-box">
                                    <h3 class="title title-line roadmap-title">Launch of an investment pool</h3>
                                    <p class="desc">Launch with an initial capital of $3M and the start of sales of temporary NFT Grower
                                        tokens on the official website with a profit up to 0.8% per day.
                                        Reply</p>
                                </div>
                            </div>
                            <div class="rm-box">
                                <div class="corner-box">
                                    <h3 class="title title-line roadmap-title">Active marketing campaign</h3>
                                    <p class="desc">Initially, our team understood that NFT Grower is a project for the whole world, and after
                                        the launch of our investment pool, we began an active marketing campaign, attracting the best experts,
                                        celebrities and influencers from all over the world to our community.</p>
                                </div>
                            </div>
                            <div class="rm-box">
                                <div class="corner-box">
                                    <h3 class="title title-line roadmap-title">Active development and growth</h3>
                                    <p class="desc">Collection and analysis of technical requirements, creation of a
                                        functional prototype, formation of a team of WEB 3.0 industry
                                        leaders.
                                    </p>
                                </div>
                            </div>
                            <div class="roadmap__inner-text disabled">
                                Coming soon 4
                                <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8.13793 1.96644C8.01585 1.84436 7.81814 1.84436 7.69605 1.96644L5.00022 4.66227L2.3046 1.96644C2.18251 1.84436 1.9848 1.84436 1.86272 1.96644L0.508555 3.32061C0.386471 3.44269 0.386471 3.6404 0.508555 3.76248L4.77939 8.03332C4.84022 8.09457 4.92022 8.12498 5.00022 8.12498C5.08022 8.12498 5.16022 8.09457 5.22126 8.03352L9.49209 3.76269C9.61418 3.64061 9.61418 3.4429 9.49209 3.32082L8.13793 1.96644Z" fill="#2C2E3C"/>
                                </svg>
                            </div>
                            <div class="soon__block">
                                <div class="rm-box soon">
                                    <div class="corner-box">
                                        <p class="soon-text">Coming soon</p>
                                        <h3 class="title title-line roadmap-title">Launching our collection on Binance NFT</h3>
                                        <p class="desc">Our collection of 11,111 unique characters is divided into four
                                            equal parts: I Drop - $139, II Drop - $199, III Drop - $239, IV
                                            Drop - $299.</p>
                                    </div>
                                </div>

                                <div class="rm-box  soon">
                                    <div class="corner-box">
                                        <p class="soon-text">Coming soon</p>
                                        <h3 class="title title-line roadmap-title">Metaverse and P2E Game development</h3>
                                        <p class="desc">Creation of interactive prototypes in accordance with the concept and documentation,
                                            active testing within the team and with some community members.</p>
                                    </div>
                                </div>
                                <div class="rm-box soon">
                                    <div class="corner-box">
                                        <p class="soon-text">Coming soon</p>
                                        <h3 class="title title-line roadmap-title">Beta testing of the game and the metaverse</h3>
                                        <p class="desc">Final tests and launch of the P2E game and the metaverse, collecting feedback together
                                            with partners and the largest holders of NFT Grower tokens.</p>
                                    </div>
                                </div>

                                <div class="rm-box soon">
                                    <div class="corner-box">
                                        <p class="soon-text">Coming soon</p>

                                        <h3 class="title title-line roadmap-title">Full-scale launch Metaverse with P2E Game</h3>
                                        <p class="desc">Public launch of the Metaverse with an integrated P2E game that will have unique
                                            features
                                            and unite the real and cyber worlds. New collaborations with major influencers, companies,
                                            marketplaces,
                                            etc.</p>
                                    </div>
                                </div>
                                <div class="roadmap__inner-text">
                                    this is just the beginning...
                                </div>
                            </div>

                            <div class="roadmap__inner-bg"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-bg section-team">
            <div class="wrapper">
                <div class="section-team__inner">
                    <div class="section-team__bgs">
                        <div class="section-team__bg section-team__bg-left">
                            <img src="/images/heand-1.png" alt="">
                        </div>
                        <div class="section-team__bg section-team__bg-right">
                            <img src="/images/heand-2.png" alt="">
                        </div>
                    </div>
                    <div class="section-team__left">
                        <h2 class="title title-line title-line__dark">Our team</h2>
                        <div class="desc">
                            The NFT Grower team consists of the best specialists and crypto enthusiasts.
                            <br><br>
                            We started our journey with a big idea, which is becoming more and more real every day. Each
                            member of the team is a professional with many years of experience in their field. We have
                            united and invite to our team those who believe in the future of cryptocurrencies, who know
                            that in the next 5-7 years WEB 3.0 will replace the usual Internet and who are ready to be
                            on the wave and make a big and useful project for everyone around the world.
                        </div>
                    </div>
                    <div class="section-team__right">
                        <img src="/images/team.jpg" alt="">
                        <span>93 heroes per team</span>
                    </div>
                </div>
            </div>
        </section>

        <section class="faq" id="faq">
            <div class="wrapper">
                <div class="faq__inner">
                    <h2 class="title title-line title-center">Questions & Answers</h2>
                    <div class="yellow-bg__solid mb-4">
                        <div class="yellow-bg__solid-inner">
                            <h3 class="title sub-title">How can I buy NFTs and start earning?</h3>
                            <div class="faq__info-btns">
                                <button class="btn btn-primary tab" data-item=".tab-1" translate="no">NFT Grower</button>
                                <button class="btn btn-disabled tab" data-item=".tab-2">Binance</button>
                            </div>
                            <div class="tab-contents">
                                <div class="tab-content tab-1" style="display:block;">
                                    <ul class="progress">
                                        <li class="progress__item">
                                            <div class="progress__number">01</div>
                                            <div class="progress__text">Create an NFT Grower account</div>
                                        </li>
                                        <li class="progress__item">
                                            <div class="progress__number">02</div>
                                            <div class="progress__text">Go to the Buy NFTs section</div>
                                        </li>
                                        <li class="progress__item">
                                            <div class="progress__number">03</div>
                                            <div class="progress__text">Choose the tokens that suits you and buy them
                                            </div>
                                        </li>
                                        <li class="progress__item">
                                            <div class="progress__number">04</div>
                                            <div class="progress__text">The tokens is available in the Your Tokens
                                                section
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-content tab-2">
                                    <ul class="progress">
                                        <li class="progress__item">
                                            <div class="progress__number">01</div>
                                            <div class="progress__text">Create an account on the Binance</div>
                                        </li>
                                        <li class="progress__item">
                                            <div class="progress__number">02</div>
                                            <div class="progress__text">Find the NFT Grower collection using the
                                                official links
                                            </div>
                                        </li>
                                        <li class="progress__item">
                                            <div class="progress__number">03</div>
                                            <div class="progress__text">Choose your favorite tokens and buy them</div>
                                        </li>
                                        <li class="progress__item">
                                            <div class="progress__number">04</div>
                                            <div class="progress__text">The tokens is available in the Your Binance
                                                account
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="yellow-bg__solid">
                        <div class="yellow-bg__solid-inner">
                            <p class="desc-info">You can buy NFT Grower tokens on the official website using all the
                                leading
                                chains/cryptocurrencies (Bitcoin, Ethereum, BNB, TRON, HECO, MATIC, AVAX, OKT, EOS, FTM,
                                Polkadot, Cosmos,
                                IOST, etc..</p>
                            <ul class="coin__list">
                                <li class="coin__item ">
                                    <img src="images/coin-1.png" alt="">
                                </li>
                                <li class="coin__item ">
                                    <img src="images/coin-2.png" alt="">
                                </li>
                                <li class="coin__item ">
                                    <img src="images/coin-3.png" alt="">
                                </li>
                                <li class="coin__item ">
                                    <img src="images/coin-4.png" alt="">
                                </li>
                                <li class="coin__item ">
                                    <img src="images/coin-5.png" alt="">
                                </li>
                                <li class="coin__item ">
                                    <img src="images/coin-6.png" alt="">
                                </li>
                                <li class="coin__item ">
                                    <img src="images/coin-7.png" alt="">
                                </li>
                                <li class="coin__item ">
                                    <img src="images/coin-8.png" alt="">
                                </li>
                                <li class="coin__item ">
                                    <img src="images/coin-9.png" alt="">
                                </li>
                                <li class="coin__item ">
                                    <img src="images/coin-10.png" alt="">
                                </li>
                                <li class="coin__item ">
                                    <img src="images/coin-11.png" alt="">
                                </li>
                                <li class="coin__item ">
                                    <img src="images/coin-12.png" alt="">
                                </li>
                                <li class="coin__item ">
                                    <img src="images/coin-13.png" alt="">
                                </li>
                                <li class="coin__item ">
                                    <img src="images/coin-14.png" alt="">
                                </li>
                            </ul>
                        </div>

                    </div>

                    <div class="accordion__list">
                        <div class="accordion">
                            @foreach($faq->list as $key => $list)
                                @if((int)$list['left'])
                                    <div class="accordion__item">
                                        <div class="accordion__header accordion-toggle" data-show=".accordion__content"
                                             data-parent=".accordion__item">
                                            <div class="accordion__title"> {{ $list['question'] }}</div>
                                            <div class="accordion__arrow">
                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M13.021 3.14638C12.8256 2.95104 12.5093 2.95104 12.314 3.14638L8.00065 7.45971L3.68765 3.14638C3.49231 2.95104 3.17598 2.95104 2.98065 3.14638L0.81398 5.31304C0.618647 5.50838 0.618647 5.82471 0.81398 6.02004L7.64731 12.8534C7.74465 12.9514 7.87265 13 8.00065 13C8.12865 13 8.25665 12.9514 8.35431 12.8537L15.1876 6.02038C15.383 5.82505 15.383 5.50871 15.1876 5.31338L13.021 3.14638Z"
                                                        fill="#14151B"/>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="accordion__content" style="display: none;">
                                            <div class="accordion__body">
                                                <div class="desc"> {!!  $list['answer']  !!}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                        <div class="accordion">
                            @foreach($faq->list as $key => $list)
                                @if((int)$list['right'])
                                    <div class="accordion__item">
                                        <div class="accordion__header accordion-toggle" data-show=".accordion__content"
                                             data-parent=".accordion__item">
                                            <div class="accordion__title"> {{ $list['question'] }}</div>
                                            <div class="accordion__arrow">
                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M13.021 3.14638C12.8256 2.95104 12.5093 2.95104 12.314 3.14638L8.00065 7.45971L3.68765 3.14638C3.49231 2.95104 3.17598 2.95104 2.98065 3.14638L0.81398 5.31304C0.618647 5.50838 0.618647 5.82471 0.81398 6.02004L7.64731 12.8534C7.74465 12.9514 7.87265 13 8.00065 13C8.12865 13 8.25665 12.9514 8.35431 12.8537L15.1876 6.02038C15.383 5.82505 15.383 5.50871 15.1876 5.31338L13.021 3.14638Z"
                                                        fill="#14151B"/>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="accordion__content" style="display: none;">
                                            <div class="accordion__body">
                                                <div class="desc"> {!!  $list['answer']  !!}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="started">
            <div class="wrapper">
                <div class="started__inner">
                    <h2 class="title title-line title-center">Getting started is Easy</h2>
                    <p class="desc text-center">Join our community, invite your friends and buy NFT Grower tokens to
                        earn every day and be part of a project that creates the future</p>
                    <div class="started__info-btns">
                        <a class="btn btn-primary" href="{{ route('register') }}">Get Started</a>
                        <a class="btn" href="{{ route('affiliate') }}" target="_blank">Affiliate Presentation</a>
                    </div>
                </div>
            </div>
            <div class="started-img">
                <div class="wrapper">
                    <div class="started-img__inner">
                        <img src="images/started-bg.png" alt="">
                    </div>
                </div>
            </div>
        </section>


    </main>
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

        const day_sec = 86400;
        const end_d = moment().tz("Europe/Budapest").endOf('day');

        function nh_f(){
            const bud_time = moment().tz("Europe/Budapest")
            const duration = moment.duration(end_d.diff(bud_time));
            const seconds = duration.asSeconds();

            const nh = Math.round(nhs + ((nhe - nhs) * (day_sec - seconds) / day_sec));


            const lp = lps + ((lpe - lps) * (day_sec - seconds) / day_sec);

            $('.holders').text(nh);
            $('.investment-pool').text('$'+new Intl.NumberFormat().format(lp));
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
