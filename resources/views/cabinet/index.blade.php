@extends('cabinet.layouts.app')

@section('title','NFT Grower - Dashboard')
@push('style')
    <style>
        .select2-dropdown {
            z-index: 99999 !important;
        }
    </style>
@endpush
@section('cabinet-content')
    <div class="content">
        <div class="container-fluid">
            <div class="cardfon">
                <div class="row row-deck row-cards d-flex">
                    <div class="w-full person-info" style="max-width: 373px">
                        <div class="card card-sm" style="background: #FFDC40;color: #000;">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="profile-img__inner">
                                                    <div class="profile-img">
                                                        <img
                                                            src="{{ asset('assets/cabinet/style/default/img/monky.png') }}"
                                                            alt="">
                                                    </div>
                                                    <div class="text-center profile-name-margin">
                                                    <span class="profile-name text-uppercase " translate="no">
                                                        {{ auth()->user()->name }}
                                                    </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="profile-info__list">
                                                    <div class="profile-info__item">
                                                        <div class="profile-info__left">
                                                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M4.58301 3.6665C3.14384 3.6665 1.96113 4.77567 1.84196 6.18734L10.9997 11.1323L20.1574 6.18734C20.0382 4.77567 18.8555 3.6665 17.4163 3.6665H4.58301ZM1.83301 7.74137V15.5832C1.83301 17.1003 3.06592 18.3332 4.58301 18.3332H17.4163C18.9334 18.3332 20.1663 17.1003 20.1663 15.5832V7.74137L11.3255 12.5216C11.2247 12.5766 11.1143 12.604 10.9997 12.604C10.8851 12.604 10.7747 12.5766 10.6738 12.5216L1.83301 7.74137Z"
                                                                    fill="#14151B"/>
                                                            </svg>
                                                            Your email:
                                                        </div>
                                                        <div class="profile-info__right" translate="no">
                                                            {{ auth()->user()->email }}
                                                        </div>
                                                    </div>
                                                    <div class="profile-info__item">
                                                        <div class="profile-info__left">
                                                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M17.4264 4.36747C17.2439 4.36358 17.0644 4.41426 16.9108 4.51302C16.7573 4.61179 16.6368 4.75414 16.5647 4.92184C16.4925 5.08955 16.4721 5.27496 16.506 5.45434C16.54 5.63371 16.6266 5.79887 16.755 5.92867C19.4775 8.76546 19.4775 13.2343 16.755 16.0711C16.6716 16.158 16.6062 16.2604 16.5624 16.3726C16.5186 16.4847 16.4974 16.6044 16.4999 16.7248C16.5023 16.8452 16.5285 16.9639 16.5769 17.0742C16.6252 17.1844 16.6949 17.2841 16.7817 17.3674C16.8686 17.4508 16.9711 17.5162 17.0833 17.56C17.1954 17.6037 17.3151 17.625 17.4355 17.6225C17.5559 17.62 17.6746 17.5938 17.7849 17.5454C17.8951 17.497 17.9947 17.4274 18.0781 17.3405C21.4698 13.8064 21.4698 8.19335 18.0781 4.6593C17.9945 4.56954 17.8938 4.49746 17.7818 4.44733C17.6699 4.3972 17.549 4.37005 17.4264 4.36747ZM4.54652 4.36837C4.30832 4.38038 4.08419 4.48474 3.92168 4.6593C0.530013 8.19335 0.530013 13.8064 3.92168 17.3405C4.09001 17.5159 4.32114 17.6173 4.56423 17.6223C4.80732 17.6274 5.04245 17.5356 5.2179 17.3673C5.39335 17.199 5.49475 16.9678 5.49979 16.7248C5.50482 16.4817 5.41309 16.2465 5.24476 16.0711C2.52226 13.2343 2.52226 8.76546 5.24476 5.92867C5.37476 5.79725 5.462 5.6296 5.49502 5.44771C5.52804 5.26583 5.50531 5.07821 5.4298 4.90948C5.35429 4.74075 5.22954 4.59878 5.07191 4.50222C4.91428 4.40565 4.73114 4.35899 4.54652 4.36837ZM7.70203 6.86593C7.46406 6.87513 7.239 6.97658 7.07451 7.1488C4.97896 9.27727 4.97896 12.7225 7.07451 14.851C7.15784 14.9413 7.25847 15.0139 7.37042 15.0646C7.48238 15.1152 7.60338 15.1428 7.72622 15.1458C7.84906 15.1487 7.97125 15.127 8.08551 15.0818C8.19978 15.0366 8.30379 14.9689 8.39137 14.8827C8.47894 14.7965 8.5483 14.6935 8.59531 14.58C8.64232 14.4665 8.66602 14.3447 8.66502 14.2218C8.66401 14.0989 8.63831 13.9775 8.58945 13.8647C8.54059 13.752 8.46956 13.6502 8.38058 13.5655C6.97447 12.1373 6.97447 9.86249 8.38058 8.43429C8.51201 8.30448 8.60115 8.13799 8.63634 7.95664C8.67152 7.7753 8.6511 7.58756 8.57774 7.41802C8.50439 7.24848 8.38154 7.10505 8.22527 7.00654C8.06901 6.90802 7.88663 6.85901 7.70203 6.86593ZM14.27 6.86593C14.0878 6.86474 13.9093 6.9179 13.7574 7.0186C13.6056 7.1193 13.4871 7.26299 13.4173 7.4313C13.3474 7.59962 13.3294 7.78493 13.3653 7.96358C13.4013 8.14223 13.4897 8.3061 13.6192 8.43429C15.0253 9.86249 15.0253 12.1373 13.6192 13.5655C13.5302 13.6502 13.4592 13.752 13.4103 13.8647C13.3615 13.9775 13.3358 14.0989 13.3348 14.2218C13.3337 14.3447 13.3575 14.4665 13.4045 14.58C13.4515 14.6935 13.5208 14.7965 13.6084 14.8827C13.696 14.9689 13.8 15.0366 13.9143 15.0818C14.0285 15.127 14.1507 15.1487 14.2735 15.1458C14.3964 15.1428 14.5174 15.1152 14.6293 15.0646C14.7413 15.0139 14.8419 14.9413 14.9253 14.851C17.0208 12.7225 17.0208 9.27727 14.9253 7.1488C14.8405 7.06024 14.7388 6.98957 14.6263 6.94098C14.5137 6.89239 14.3926 6.86687 14.27 6.86593ZM10.9999 9.62488C10.6352 9.62488 10.2855 9.76974 10.0276 10.0276C9.76975 10.2855 9.62489 10.6352 9.62489 10.9999C9.62489 11.3646 9.76975 11.7143 10.0276 11.9721C10.2855 12.23 10.6352 12.3749 10.9999 12.3749C11.3646 12.3749 11.7143 12.23 11.9722 11.9721C12.23 11.7143 12.3749 11.3646 12.3749 10.9999C12.3749 10.6352 12.23 10.2855 11.9722 10.0276C11.7143 9.76974 11.3646 9.62488 10.9999 9.62488Z"
                                                                    fill="#14151B"/>
                                                            </svg>
                                                            Your Upline:
                                                        </div>
                                                        <div class="profile-info__right" translate="no">
                                                            {{ auth()->user()->parent->name ?? 'No invitation' }}
                                                        </div>
                                                    </div>
                                                    <div class="profile-info__item">
                                                        <div class="profile-info__left">
                                                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M10.9997 1.8335C6.70326 1.8335 3.20801 5.32875 3.20801 9.62516C3.20801 11.475 3.87213 13.2703 5.08397 14.6888C5.22238 14.846 8.48801 18.5567 9.57884 19.5967C9.97713 19.9766 10.4882 20.1668 10.9997 20.1668C11.5112 20.1668 12.0222 19.9766 12.421 19.5967C13.6892 18.3871 16.7861 14.8369 16.9218 14.681C18.1272 13.2703 18.7913 11.475 18.7913 9.62516C18.7913 5.32875 15.2961 1.8335 10.9997 1.8335ZM10.9997 11.9168C9.73422 11.9168 8.70801 10.8906 8.70801 9.62516C8.70801 8.3597 9.73422 7.3335 10.9997 7.3335C12.2651 7.3335 13.2913 8.3597 13.2913 9.62516C13.2913 10.8906 12.2651 11.9168 10.9997 11.9168Z"
                                                                    fill="#14151B"/>
                                                            </svg>
                                                            IP at registration:
                                                        </div>
                                                        <div class="profile-info__right" translate="no">
                                                            {{ $geos->last()->ip_address }}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="mt-3">
                                                    <h4 class="title title-small-1 title-line title-line__dark">Referral
                                                        link</h4>
                                                </div>
                                                <div class="w-full mb-sm-4 mb-3">
                                                    <form>
                                                        <div class="input-group input-main-group">
                                                            <input type="text" class="form-control"
                                                                   value="{{ route('referral',['username' => auth()->user()->name]) }}"
                                                                   id="copyreflink">
                                                            <button class="btn btn-main-dark rounded-0" type="button"
                                                                    onclick="myFunction()">
                                                                Copy
                                                            </button>
                                                            @push('scripts')
                                                                <script>
                                                                    function myFunction() {
                                                                        var copyText = document.getElementById('copyreflink');
                                                                        copyText.select();
                                                                        copyText.setSelectionRange(0, 99999)
                                                                        document.execCommand("copy");
                                                                    }
                                                                </script>
                                                            @endpush
                                                        </div>
                                                    </form>

                                                    <a href="{{ route('affiliate') }}"
                                                       class="btn btn-main-dark rounded-0 mb-3" target="_blank"
                                                    >
                                                        Affiliate Presentation
                                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                                             xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                  d="M0.49843 0H12.6498C13.3955 0 14 0.604486 14 1.35016V13.5016H11.2997V4.60972L1.90941 14L0 12.0906L9.39028 2.70031H0.49843V0Z"
                                                                  fill="white"/>
                                                        </svg>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="mt-md-3">
                                                    <h4 class="title title-small-1 title-line title-line__dark">
                                                        Authorization logs
                                                    </h4>

                                                    <div class="profile-info__list profile-info__list-2 pt-1">
                                                        @foreach($geos as $log)
                                                            <div class="profile-info__item profile-info__item-big">
                                                                <div class="profile-info__left">
                                                                    <svg width="8" height="8" viewBox="0 0 8 8"
                                                                         fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <rect width="8" height="8" fill="#14151B"/>
                                                                    </svg>
                                                                    {{ $log->login_at }}
                                                                </div>
                                                                <div class="profile-info__right" translate="no">
                                                                    {{ $log->ip_address }}
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-full" style="flex: 1">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card alert-main alert-main-error">
                                    <svg width="40" height="33" viewBox="0 0 40 33" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M39.6514 29.8646L21.6762 1.008C21.6762 1.008 21.1924 0 20 0C18.8076 0 18.3238 1.008 18.3238 1.008L0.348571 29.8646C0.348571 29.8646 0 30.336 0 30.9725C0 32.0333 0.852381 32.8925 1.90476 32.8925H38.0952C39.1476 32.8925 40 32.0333 40 30.9725C40 30.336 39.6514 29.8646 39.6514 29.8646Z"
                                            fill="#14151B"/>
                                        <path
                                            d="M20.0131 29.0525C19.316 29.0525 18.7408 28.8394 18.2874 28.4132C17.8341 27.9869 17.6074 27.4714 17.6074 26.8647C17.6074 26.2321 17.836 25.7137 18.2941 25.3095C18.7512 24.9053 19.3246 24.7037 20.0131 24.7037C20.7103 24.7037 21.2817 24.9082 21.7255 25.3162C22.1703 25.7252 22.3922 26.2407 22.3922 26.8647C22.3922 27.4973 22.1722 28.0196 21.7322 28.4324C21.2922 28.8452 20.7188 29.0525 20.0131 29.0525ZM22.1293 10.5447L21.6712 22.2327C21.6569 22.5898 21.3655 22.8721 21.0112 22.8721H18.936C18.5808 22.8721 18.2893 22.5889 18.276 22.2308L17.8427 10.5437C17.8284 10.1665 18.1284 9.85254 18.5027 9.85254H21.4703C21.8446 9.85254 22.1446 10.1665 22.1293 10.5447Z"
                                            fill="white"/>
                                    </svg>
                                    <div>
                                        @if(\Illuminate\Support\Facades\Auth::user()->cryptos->count())
                                            You can earn even more if you buy more NFTs and use our <a
                                                target="_blank"
                                                style="color: black;font-weight: bolder;"
                                                href="{{ route('affiliate') }}">Affiliate Program.</a>
                                        @else
                                            Buy your first NFT in the "Buy NFTs" section and start earning.
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4">
                                <div class="card card-sm card-main mt-xxl-4 mt-2 mb-0">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div>
                                            <h4 class="card-main__title">Total Deposits</h4>
                                            <div class="card-main__price" translate="no">
                                                {{ number_format($deposit,2) }}
                                            </div>
                                        </div>
                                        <span class="bg-border-yellow avatar" translate="no">USD</span>
                                    </div>

                                </div>
                            </div>
                            <div class="col-xl-4">
                                <div class="card card-sm card-main mt-xxl-4 mt-2 mb-0">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div>
                                            <h4 class="card-main__title">Total Withdraw</h4>
                                            <div class="card-main__price" translate="no">
                                                {{ number_format($withdraw,2) }}
                                            </div>
                                        </div>
                                        <span class="bg-border-yellow avatar" translate="no">USD</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4">
                                <div class="card card-sm card-main mt-xxl-4 mt-2 mb-0">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div>
                                            <h4 class="card-main__title">Available Balance</h4>
                                            <div class="card-main__price" translate="no">
                                                {{ number_format($total_balance,2)}}
                                            </div>
                                        </div>
                                        <span class="bg-border-yellow avatar" translate="no">USD</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 mt-sm-3 mt-2">
                                <div class="card card-grey px-sm-3">
                                    <div class="px-2">
                                        <div class="pt-3 my-1 ">
                                            <div class="input-search__head">
                                                <h4 class="title title-small text-uppercase title-line mb-2">
                                                    Financial statistics
                                                </h4>
                                                <div class="input-search">
                                                    <input id="input-search__input" type="text" placeholder="Search">
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="statistics">
                                                    @foreach($currencies as $currency)
                                                        <div data-coin="{{ $currency->name }} {{ $currency->image }}"
                                                             class="statistic-item card card-sm card-white card-statistic mx-0">
                                                            <div class="row align-items-center">

                                                                <div class="col-md-10 col-sm-12 col">
                                                                    <div class="card-statistic__price" translate="no">
                                                                        <div
                                                                            class="d-xxl-none d-block card-statistic-mobile-1">
                                                                            <img
                                                                                src="{{ asset("assets/cabinet/style/default/img/ps/$currency->image") }}"
                                                                                alt="" style="max-width: 48px">
                                                                        </div>
                                                                        <span>
                                                                            {{ $currency->user->count() ? number_format($currency->user[0]->pivot->balance,4) : number_format(0,4) }} {{ $currency->name }}
                                                                            <span class="card-statistic__price-min">
                                                                               (${{number_format( \App\Facades\CryptoFacade::xChangeToUSDT( $currency->user->count() ? $currency->user[0]->pivot->balance : 0  , $currency->network ,'USD'),4) }})
                                                                            </span>
                                                                        </span>


                                                                    </div>
                                                                    <div class="card-statistic__list">
                                                                        <div class="card-statistic__item">
                                                                            <div class="card-statistic__left">
                                                                                <svg width="8" height="8"
                                                                                     viewBox="0 0 8 8" fill="none"
                                                                                     xmlns="http://www.w3.org/2000/svg">
                                                                                    <rect width="8" height="8"
                                                                                          fill="#FCD535"/>
                                                                                </svg>
                                                                                Deposits
                                                                            </div>
                                                                            <div class="card-statistic__right">
                                                                                {{ $currency->user->count() ? number_format($currency->user[0]->pivot->deposit,4) : number_format(0,4)  }} {{ $currency->network }}
                                                                            </div>
                                                                        </div>
                                                                        <div class="card-statistic__item">
                                                                            <div class="card-statistic__left">
                                                                                <svg width="8" height="8"
                                                                                     viewBox="0 0 8 8" fill="none"
                                                                                     xmlns="http://www.w3.org/2000/svg">
                                                                                    <rect width="8" height="8"
                                                                                          fill="#FCD535"/>
                                                                                </svg>
                                                                                Earned
                                                                            </div>
                                                                            <div class="card-statistic__right">
                                                                                {{ $currency->user->count() ? number_format($currency->user[0]->pivot->earned_total,4) : number_format(0,4)  }} {{ $currency->network }}
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                                <div
                                                                    class="col-md-2 col-sm-12 col-12 text-center d-xxl-block d-none">
                                                                    <img
                                                                        src="{{ asset("assets/cabinet/style/default/img/ps/$currency->image") }}"
                                                                        alt="" style="max-width: 58px;width: 100%;">
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="statistic-btns">
                                                                    <a href="{{ route('cabinet.withdraw.index') }}"
                                                                       class="statistic-btn">Withdraw</a>
                                                                    <button
                                                                        class="statistic-btn statistic-btn__yellow open__modal top_up"
                                                                        data-open="#modal-coin"
                                                                        data-coin="{{ $currency->network }}">Top up
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="modal-html"></div>
    <div class="modal" id="waiting_modal">
        <div class="modal-inner">
            <div class="modal__container">
                <div class="modal__close close" data-open="#waiting_modal">
                    <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.42333 1.10131C9.29015 0.966229 9.07446 0.966229 8.94128 1.10131L6.00037 4.08426L3.05969 1.10131C2.92651 0.966229 2.71083 0.966229 2.57765 1.10131L1.10037 2.5997C0.967193 2.73479 0.967193 2.95355 1.10037 3.08864L3.97072 6L1.10037 8.91137C0.967193 9.04645 0.967193 9.26521 1.10037 9.4003L2.57765 10.8987C2.71083 11.0338 2.92651 11.0338 3.05969 10.8987L6.00037 7.91574L8.94128 10.8987C9.07446 11.0338 9.29015 11.0338 9.42333 10.8987L10.9006 9.40007C11.0338 9.26498 11.0338 9.04622 10.9006 8.91113L8.03049 6L10.9006 3.08887C11.0338 2.95378 11.0338 2.73502 10.9006 2.59993L9.42333 1.10131Z"
                              fill="#231F20"/>
                    </svg>
                </div>
                <div class="modal__body">
                    <div class="modal__success modal__loading">
                        <svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                  d="M32 10.4C20.0707 10.4 10.4 20.0707 10.4 32H5C5 17.0883 17.0883 5 32 5V10.4ZM32 53.6C43.9294 53.6 53.6 43.9294 53.6 32H59C59 46.9117 46.9117 59 32 59V53.6Z"
                                  fill="#FFDC40"/>
                        </svg>
                    </div>
                    <div class="modal__title title title-line">
                        GREAT, USUALLY A TRANSACTION GETS CONFIRMATION WITHIN 10 SECONDS TO 1 HOUR, IT ALL DEPENDS ON THE BLOCKCHAIN.
                    </div>
                    <div class="modal-desc__more">
                        <span>
                            After confirming the payment, the replenishment amount will be displayed on your Dashboard in the "Available Balance", and after that you can buy NFT in the <a class="buy_nft_modal_href" href="{{ route('cabinet.buy-token.index') }}">BUY NFT</a> section.
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@push('scripts')
    <script src="https://momentjs.com/downloads/moment-with-locales.min.js"></script>
    <script src="https://momentjs.com/downloads/moment-timezone-with-data.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.10/clipboard.min.js"></script>
    <script>
        $(function () {
            $('body').on('click','.modal_contact a, .buy_nft_modal_href',function () {
               window.location.href = $(this).attr('href')
            });

            $('#input-search__input').on('keyup', function () {
                let input = $(this).val();
                let reg = new RegExp(input.toLowerCase(), 'gi');
                let list = $('.statistic-item')
                list.map(item => {
                    let coin = list.eq(item).data('coin').toLowerCase()
                    let test = coin.match(reg)
                    if (test) {
                        list.eq(item).show()
                    } else {
                        list.eq(item).hide()
                    }
                })
            })
        })
        $(document).ready(function () {

            window.Echo.private('payment-callback-{{ \Illuminate\Support\Facades\Auth::user()->name }}').listen('PaymentCallbackEvent', (e) => {
                if (e.transaction_id == window.$transaction_id) {
                    $('#modal-html').html(e.html);

                    $('#buy-modal').fadeIn();
                }
            });

            function copy(className){
                var clipboard = new ClipboardJS(className);

                clipboard.on('success', function(e) {
                    const el = $(className);
                    const address = el.html();

                    el.text('Copied!')

                    setTimeout(() => {
                        el.html(address);
                    },1000)

                    hideTooltip();
                });

                clipboard.on('error', function(e) {
                    const el = $(className);
                    const address = el.html();

                    el.text('Failed!')

                    setTimeout(() => {
                        el.html(address);
                    },1000)

                    hideTooltip();
                });
            }

            function hideTooltip() {
                setTimeout(function() {
                    $('.modal_copy_button').tooltip('hide');
                }, 1000);
            }
            copy('.modal_copy_button');
            copy('.price_text');
            copy('.copy_qr');


            function openModalTopUp(network){
                axios.post('/dashboard/buy-nfts/payment/top_up',{network}).then(res => {
                    window.network = network;
                    window.to = 'USD';
                    $('#modal-html').html(res.data);

                    $('#modal-coin').fadeIn();

            $("#social").select2({
              placeholder: 'Search',
              templateResult: formatState,
              closeOnSelect: false
            }).on("change.select2", function (e) {
              openModalTopUp($("#social").val()[0])
            }).on('select2:close', function (e) {
              $('.show-coins__select').hide()
              $('.show-coins__inner').removeClass('active')
            })
          })
        }

            $('body').on('input','.modal .price',function (){
                axios.get('/dashboard/buy-nfts/payment/xchange',{
                    params : {
                        m_amount : $(this).val(),
                        wallet_type: window.network,
                        to: window.to
                    }
                }).then(res => {
                    $('.modal .show_price').text(window.to +' '+ res.data)
                })
            }).on('focus','.modal .price',function (){
                $(this).attr('placeholder','')

            }).on('click','.xchange_reverse',function (){
                const reverse = window.network;
                window.network = window.to;

                let from_price = $('.modal .price').val()
                const to_price = $('.modal .show_price').text().split(' ')[1];

                if(to_price == 0){
                    $('.modal .price').attr('placeholder',to_price)
                }else{
                    $('.modal .price').val(to_price)
                }

                $('.modal .price_icon').text(window.to)

                window.to = reverse;

                if(from_price == ''){
                    from_price = 0;
                }

                $('.modal .show_price').text(window.to +' '+ from_price)


            }).on('click','.create_payment',function (){

                axios.post('/dashboard/buy-nfts/payment/deposit',{
                    m_amount : $('.modal .price').val(),
                    wallet_type: window.network,
                    to: window.to
                }).then(res => {

                    $('#modal-coin').fadeOut(function () {
                        $("body").css("overflow", "auto");
                    });

                    $('#modal-html').html(res.data);

                    $('#buy-modal').fadeIn();

                }).catch(error => {
                    $('.error_message').text(error.response.data.error)
                })
            })

            $('.top_up').click(function () {
                const network = $(this).data('coin');

                openModalTopUp(network);
            })

            $(".open__modal").on("click", function (e) {
                e.preventDefault();
                const open = $(this).data('open');
                $(open).fadeIn();
            });

            $("body").on("click", ".modal .close, .modal, .modal-close, .have_paid", function (e) {
                const open = $(this).data('open');
                const button = $(this)

                e.preventDefault();
                $(open).fadeOut(function () {
                    window.$transaction_id = null;
                    $('#modal-html').html('');
                    $("body").css("overflow", "auto");
                    if(button.hasClass('have_paid')){
                        $("body").css("overflow", "hidden");
                        $('#waiting_modal').fadeIn();
                    }
                    $('.error_message').text('')

                });
            });

            $('body').on("click",".show-coins__inner", function (e) {
                console.log($(this).has('active'))
                $(this).toggleClass('active')
                $('.show-coins__select ').toggle()
                $('#social').select2('open');
            });


            function formatState(state) {
                console.log(state);
                if (!state.id) {
                    return state.text;
                }
                const img = $(state.element).data('img')
                const $state = $(`<span class="select2-item"><img src="${img}"/>${state.text}</span>`);
                return $state;
            }
        })
    </script>
@endpush

