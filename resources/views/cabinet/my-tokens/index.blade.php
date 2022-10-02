@extends('cabinet.layouts.app')
@section('title','NFT Grower - Your Tokens')
@section('cabinet-content')
    <div class="content">
        <div class="container-fluid">
            <div class="cardfon">
                <div class="row row-deck row-cards">
                    <div class="col-12">
                        <div class="card card-grey card-tokens">
                                <h4 class="title title-small text-uppercase title-line mb-md-2">Reinvest funds</h4>
                            <div class="mt-xl-4 mt-2">
                                {{ debug($errors) }}

                                @if($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li style="color: red">{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                <form action="{{ route('cabinet.buy-token.payment.balance') }}"  method="post">
                                    <input type="hidden" name="do" value="wallet_reinvest_pay">
                                    <input type="hidden" name="duplicate" value="1658428473">
                                    @csrf
                                    <div class="row">
                                        <div class="col-xl-4 col-lg-6 mb-xl-2 mb-lg-4 mb-3" translate="no">
                                            <label class="form-label" translate="yes">Select a token</label>
                                            <select class="form-select form-control form-select-main table-white form-select-main__big" id="tarif_plan_reinvest"
                                                    name="tarif_plan_reinvest"
                                                    onchange="tarif_plan_reinvest_setinfo(this);">
                                                @foreach($tariffs as $tariff)
                                                    <option value="{{ $tariff->id }}">
                                                        {{ $tariff->name }}
                                                    </option>
                                                @endforeach

                                            </select>
                                        </div>
                                        <div class="col-xl-4 col-lg-6 mb-xl-2 mb-lg-4 mb-3" translate="no">
                                            <label class="form-label" translate="yes">Select a payment system</label>
                                            <div class="choices" data-type="select-one" tabindex="0" role="listbox"
                                                 aria-haspopup="true" aria-expanded="false">
                                                <select name="wallet_type"
                                                        onchange="get_wallet_minmax(this);"
                                                        class="form-select form-control form-select-main table-white form-select-main__big"
                                                        id="selects" hidden="" tabindex="-1"
                                                >
                                                    <option value="">Payment system</option>
                                                    @foreach($cryptos as $crypto)
                                                        <option
                                                            value="{{ $crypto->network }}">
                                                            {{ $crypto->name }}( {{ $crypto->user->count() ? (number_format($crypto->user[0]->pivot->balance,4) .' | $'.number_format(\App\Facades\CryptoFacade::xChangeToUSDT($crypto->user[0]->pivot->balance,$crypto->network,'USD'),2)) : '0.00 | $0.00'}} )
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-6" translate="no">
                                            <label class="form-label" translate="yes">Enter amount (USD)</label>
                                            <input class="form-control form-input-main table-white form-input-main__big"  autocomplete="off" name="m_amount"
                                                   id="tdep_minmax" type="text" placeholder="" disabled=""
                                                   inputmode="text">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-4 col-lg-6">
                                            <div class="form-footer">
                                                <button onclick="return reinvest();" type="submit" name="submit" id="form"
                                                        class="w-full btn btn-yellow btn-big text-uppercase btn-main btn-primary">
                                                    Buy a token
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <script>
                                        function reinvest() {
                                            if (confirm("Are you sure you want to reinvest funds?")) {
                                                return true;
                                            } else {
                                                return false;
                                            }
                                        }
                                    </script>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="card card-grey card-tokens">
                            <div class="row">
                                <div class="col-md-12">
                                    <h4 class="title title-small text-uppercase title-line mb-2">Your tokens</h4>
                                </div>
                                <div class="col-md-12">
                                    <div class="row">
                                        @forelse($tokens as $idx =>$token)
                                            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                                                <div class="card" style="background: #fff;color: #000;">
                                                    <div class="card-body">
                                                        <form action="" method="post">
                                                            <input type="hidden" name="do"
                                                                   value="wallet_invest_pay">
                                                            <input type="hidden" name="antipovtor"
                                                                   value="1658428429">
                                                            <input type="hidden" name="tarif_plan" value="1">
                                                            <div class="row">
                                                                <div class="col-12 text-center img_plans">
                                                                    <img
                                                                        src="{{ $token->tariff->attachment[0]->url }}"
                                                                        alt=""
                                                                        width="209"
                                                                    >
                                                                </div>
                                                                <div class="col-12 pt-3">
                                                                    <h5 class="title title-small-2 text-uppercase text-center m-auto mb-3 pb-0"
                                                                        style="max-width: 359px;"
                                                                        translate="no">{{ $token->tariff->name }}</h5>
                                                                    <table class="table">
                                                                        <tbody>
                                                                        <tr>
                                                                            <td class="text-left">
                                                                                <div class="d-flex-main">
                                                                                <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                    <path d="M5.72917 2.75C4.09203 2.75 2.75 4.09203 2.75 5.72917V16.2708C2.75 17.908 4.09203 19.25 5.72917 19.25H16.2708C17.908 19.25 19.25 17.908 19.25 16.2708V5.72917C19.25 4.09203 17.908 2.75 16.2708 2.75H5.72917ZM5.72917 4.125H16.2708C17.1646 4.125 17.875 4.83539 17.875 5.72917V6.41667H4.125V5.72917C4.125 4.83539 4.83539 4.125 5.72917 4.125ZM4.125 7.79167H17.875V16.2708C17.875 17.1646 17.1646 17.875 16.2708 17.875H5.72917C4.83539 17.875 4.125 17.1646 4.125 16.2708V7.79167ZM7.10417 9.625C6.80027 9.625 6.50883 9.74572 6.29394 9.96061C6.07905 10.1755 5.95833 10.4669 5.95833 10.7708C5.95833 11.0747 6.07905 11.3662 6.29394 11.5811C6.50883 11.7959 6.80027 11.9167 7.10417 11.9167C7.40806 11.9167 7.69951 11.7959 7.91439 11.5811C8.12928 11.3662 8.25 11.0747 8.25 10.7708C8.25 10.4669 8.12928 10.1755 7.91439 9.96061C7.69951 9.74572 7.40806 9.625 7.10417 9.625ZM11 9.625C10.6961 9.625 10.4047 9.74572 10.1898 9.96061C9.97489 10.1755 9.85417 10.4669 9.85417 10.7708C9.85417 11.0747 9.97489 11.3662 10.1898 11.5811C10.4047 11.7959 10.6961 11.9167 11 11.9167C11.3039 11.9167 11.5953 11.7959 11.8102 11.5811C12.0251 11.3662 12.1458 11.0747 12.1458 10.7708C12.1458 10.4669 12.0251 10.1755 11.8102 9.96061C11.5953 9.74572 11.3039 9.625 11 9.625ZM14.8958 9.625C14.5919 9.625 14.3005 9.74572 14.0856 9.96061C13.8707 10.1755 13.75 10.4669 13.75 10.7708C13.75 11.0747 13.8707 11.3662 14.0856 11.5811C14.3005 11.7959 14.5919 11.9167 14.8958 11.9167C15.1997 11.9167 15.4912 11.7959 15.7061 11.5811C15.9209 11.3662 16.0417 11.0747 16.0417 10.7708C16.0417 10.4669 15.9209 10.1755 15.7061 9.96061C15.4912 9.74572 15.1997 9.625 14.8958 9.625ZM7.10417 13.75C6.80027 13.75 6.50883 13.8707 6.29394 14.0856C6.07905 14.3005 5.95833 14.5919 5.95833 14.8958C5.95833 15.1997 6.07905 15.4912 6.29394 15.7061C6.50883 15.9209 6.80027 16.0417 7.10417 16.0417C7.40806 16.0417 7.69951 15.9209 7.91439 15.7061C8.12928 15.4912 8.25 15.1997 8.25 14.8958C8.25 14.5919 8.12928 14.3005 7.91439 14.0856C7.69951 13.8707 7.40806 13.75 7.10417 13.75ZM11 13.75C10.6961 13.75 10.4047 13.8707 10.1898 14.0856C9.97489 14.3005 9.85417 14.5919 9.85417 14.8958C9.85417 15.1997 9.97489 15.4912 10.1898 15.7061C10.4047 15.9209 10.6961 16.0417 11 16.0417C11.3039 16.0417 11.5953 15.9209 11.8102 15.7061C12.0251 15.4912 12.1458 15.1997 12.1458 14.8958C12.1458 14.5919 12.0251 14.3005 11.8102 14.0856C11.5953 13.8707 11.3039 13.75 11 13.75Z" fill="#14151B"/>
                                                                                </svg>
                                                                                Date
                                                                                </div>
                                                                            </td>
                                                                            <td class="text-right">
                                                                               {{ $token->created_at }}
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="text-left">
                                                                                <div class="d-flex-main">
                                                                                <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                    <path d="M3.89567 4.125C2.25853 4.125 0.916504 5.46703 0.916504 7.10417V14.8958C0.916504 16.533 2.25853 17.875 3.89567 17.875H18.104C19.7411 17.875 21.0832 16.533 21.0832 14.8958V7.10417C21.0832 5.46703 19.7411 4.125 18.104 4.125H3.89567ZM3.89567 5.5H18.104C18.9978 5.5 19.7082 6.21039 19.7082 7.10417V7.79167H2.2915V7.10417C2.2915 6.21039 3.00189 5.5 3.89567 5.5ZM2.2915 9.625H19.7082V14.8958C19.7082 15.7896 18.9978 16.5 18.104 16.5H3.89567C3.00189 16.5 2.2915 15.7896 2.2915 14.8958V9.625ZM14.4373 13.2917C14.3462 13.2904 14.2558 13.3072 14.1712 13.3412C14.0867 13.3752 14.0098 13.4256 13.9449 13.4896C13.88 13.5535 13.8285 13.6297 13.7933 13.7138C13.7582 13.7979 13.74 13.8881 13.74 13.9792C13.74 14.0703 13.7582 14.1605 13.7933 14.2445C13.8285 14.3286 13.88 14.4048 13.9449 14.4688C14.0098 14.5327 14.0867 14.5832 14.1712 14.6172C14.2558 14.6511 14.3462 14.668 14.4373 14.6667H17.1873C17.2784 14.668 17.3689 14.6511 17.4534 14.6172C17.538 14.5832 17.6149 14.5327 17.6798 14.4688C17.7447 14.4048 17.7962 14.3286 17.8314 14.2445C17.8665 14.1605 17.8846 14.0703 17.8846 13.9792C17.8846 13.8881 17.8665 13.7979 17.8314 13.7138C17.7962 13.6297 17.7447 13.5535 17.6798 13.4896C17.6149 13.4256 17.538 13.3752 17.4534 13.3412C17.3689 13.3072 17.2784 13.2904 17.1873 13.2917H14.4373Z" fill="#14151B"/>
                                                                                </svg>
                                                                                Payment system
                                                                                </div>
                                                                            </td>
                                                                            <td class="text-right">
                                                                              {{ \App\Models\Crypto::nameByNetwork($token->network) }}
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="text-left">
                                                                                <div class="d-flex-main">
                                                                                <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                    <path d="M11.0002 1.83333C5.94569 1.83333 1.8335 5.94553 1.8335 11C1.8335 16.0545 5.94569 20.1667 11.0002 20.1667C16.0546 20.1667 20.1668 16.0545 20.1668 11C20.1668 5.94553 16.0546 1.83333 11.0002 1.83333ZM11.0002 3.20833C15.3115 3.20833 18.7918 6.68863 18.7918 11C18.7918 15.3114 15.3115 18.7917 11.0002 18.7917C6.6888 18.7917 3.2085 15.3114 3.2085 11C3.2085 6.68863 6.6888 3.20833 11.0002 3.20833Z" fill="#14151B"/>
                                                                                    <path d="M10.5471 16.08V5.74001H11.6471V16.08H10.5471ZM10.9431 14.892C10.3271 14.892 9.73677 14.8113 9.17211 14.65C8.60744 14.4813 8.15277 14.265 7.80811 14.001L8.41311 12.659C8.74311 12.8937 9.13177 13.088 9.57911 13.242C10.0338 13.3887 10.4921 13.462 10.9541 13.462C11.3061 13.462 11.5884 13.429 11.8011 13.363C12.0211 13.2897 12.1824 13.1907 12.2851 13.066C12.3878 12.9413 12.4391 12.7983 12.4391 12.637C12.4391 12.4317 12.3584 12.2703 12.1971 12.153C12.0358 12.0283 11.8231 11.9293 11.5591 11.856C11.2951 11.7753 11.0018 11.702 10.6791 11.636C10.3638 11.5627 10.0448 11.4747 9.72211 11.372C9.40677 11.2693 9.11711 11.1373 8.85311 10.976C8.58911 10.8147 8.37277 10.602 8.20411 10.338C8.04277 10.074 7.96211 9.73667 7.96211 9.32601C7.96211 8.88601 8.07944 8.48634 8.31411 8.12701C8.55611 7.76034 8.91544 7.47067 9.39211 7.25801C9.87611 7.03801 10.4811 6.92801 11.2071 6.92801C11.6911 6.92801 12.1678 6.98667 12.6371 7.10401C13.1064 7.21401 13.5208 7.38267 13.8801 7.61001L13.3301 8.96301C12.9708 8.75767 12.6114 8.60734 12.2521 8.51201C11.8928 8.40934 11.5408 8.35801 11.1961 8.35801C10.8514 8.35801 10.5691 8.39834 10.3491 8.47901C10.1291 8.55967 9.97144 8.66601 9.87611 8.79801C9.78077 8.92267 9.73311 9.06934 9.73311 9.23801C9.73311 9.43601 9.81377 9.59734 9.97511 9.72201C10.1364 9.83934 10.3491 9.93467 10.6131 10.008C10.8771 10.0813 11.1668 10.1547 11.4821 10.228C11.8048 10.3013 12.1238 10.3857 12.4391 10.481C12.7618 10.5763 13.0551 10.7047 13.3191 10.866C13.5831 11.0273 13.7958 11.24 13.9571 11.504C14.1258 11.768 14.2101 12.1017 14.2101 12.505C14.2101 12.9377 14.0891 13.3337 13.8471 13.693C13.6051 14.0523 13.2421 14.342 12.7581 14.562C12.2814 14.782 11.6764 14.892 10.9431 14.892Z" fill="#14151B"/>
                                                                                </svg>
                                                                                Deposit
                                                                                </div>
                                                                            </td>
                                                                            <td class="text-right">
                                                                                {{  number_format($token->deposit,5) }}
                                                                                {{ $token->network }}
                                                                            </td>
                                                                        </tr>
{{--                                                                        <tr>--}}
{{--                                                                            <td class="text-left"><i--}}
{{--                                                                                    class="bi bi-chevron-compact-right"></i>--}}
{{--                                                                                <strong> Accruals </strong>--}}
{{--                                                                            </td>--}}
{{--                                                                            <td class="text-right">--}}
{{--                                                                                <strong>0 of 1</strong></td>--}}
{{--                                                                        </tr>--}}
                                                                        <tr>
                                                                            <td class="text-left">
                                                                                <div class="d-flex-main">
                                                                                <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                    <path d="M11.0002 1.83334C5.94569 1.83334 1.8335 5.94554 1.8335 11C1.8335 16.0545 5.94569 20.1667 11.0002 20.1667C16.0546 20.1667 20.1668 16.0545 20.1668 11C20.1668 5.94554 16.0546 1.83334 11.0002 1.83334ZM11.0002 3.20834C15.3115 3.20834 18.7918 6.68864 18.7918 11C18.7918 15.3114 15.3115 18.7917 11.0002 18.7917C6.6888 18.7917 3.2085 15.3114 3.2085 11C3.2085 6.68864 6.6888 3.20834 11.0002 3.20834ZM14.4242 8.24374C14.2457 8.24894 14.0762 8.32342 13.9516 8.45142L9.85433 12.5487L8.04875 10.7431C7.9854 10.6771 7.90952 10.6244 7.82555 10.5881C7.74159 10.5519 7.65123 10.5327 7.55977 10.5318C7.4683 10.5308 7.37757 10.5482 7.29289 10.5827C7.20821 10.6173 7.13127 10.6684 7.06659 10.7331C7.00192 10.7978 6.95079 10.8747 6.91622 10.9594C6.88164 11.0441 6.86432 11.1348 6.86525 11.2263C6.86618 11.3177 6.88535 11.4081 6.92163 11.4921C6.95792 11.576 7.0106 11.6519 7.07658 11.7153L9.36825 14.0069C9.49718 14.1358 9.67202 14.2082 9.85433 14.2082C10.0366 14.2082 10.2115 14.1358 10.3404 14.0069L14.9237 9.42359C15.0229 9.32699 15.0906 9.2027 15.118 9.06699C15.1454 8.93127 15.1312 8.79045 15.0772 8.66296C15.0232 8.53546 14.932 8.42724 14.8155 8.35244C14.699 8.27764 14.5626 8.23975 14.4242 8.24374Z" fill="#14151B"/>
                                                                                </svg>
                                                                                Status
                                                                                </div>
                                                                            </td>
                                                                            <td class="text-right">
                                                                                @if($token->status === \App\Models\UserTariff::START)
                                                                                    <span style="background: orange; width: 10px;height: 10px;display: inline-block;border-radius: 50%;"></span>
                                                                                @else
                                                                                    <span style="background: green; width: 10px;height: 10px;display: inline-block;border-radius: 50%;"></span>
                                                                                @endif
                                                                                    {{ $token->status }}
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="text-left">
                                                                                <div class="d-flex-main">
                                                                                <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                    <path d="M11.0002 1.83334C5.94569 1.83334 1.8335 5.94554 1.8335 11C1.8335 16.0545 5.94569 20.1667 11.0002 20.1667C16.0546 20.1667 20.1668 16.0545 20.1668 11C20.1668 5.94554 16.0546 1.83334 11.0002 1.83334ZM11.0002 3.20834C15.3115 3.20834 18.7918 6.68864 18.7918 11C18.7918 15.3114 15.3115 18.7917 11.0002 18.7917C6.6888 18.7917 3.2085 15.3114 3.2085 11C3.2085 6.68864 6.6888 3.20834 11.0002 3.20834ZM10.9894 6.40682C10.8072 6.40967 10.6336 6.48471 10.5067 6.61546C10.3799 6.74621 10.3101 6.92199 10.3127 7.10417V10.3125H7.10433C7.01323 10.3112 6.92278 10.328 6.83824 10.362C6.7537 10.396 6.67675 10.4464 6.61187 10.5104C6.54699 10.5744 6.49547 10.6506 6.46031 10.7346C6.42515 10.8187 6.40704 10.9089 6.40704 11C6.40704 11.0911 6.42515 11.1813 6.46031 11.2654C6.49547 11.3494 6.54699 11.4256 6.61187 11.4896C6.67675 11.5536 6.7537 11.604 6.83824 11.638C6.92278 11.672 7.01323 11.6888 7.10433 11.6875H10.3127V14.8958C10.3114 14.9869 10.3282 15.0774 10.3622 15.1619C10.3961 15.2465 10.4466 15.3234 10.5106 15.3883C10.5745 15.4532 10.6507 15.5047 10.7348 15.5399C10.8188 15.575 10.9091 15.5931 11.0002 15.5931C11.0913 15.5931 11.1815 15.575 11.2655 15.5399C11.3496 15.5047 11.4258 15.4532 11.4898 15.3883C11.5537 15.3234 11.6042 15.2465 11.6381 15.1619C11.6721 15.0774 11.689 14.9869 11.6877 14.8958V11.6875H14.896C14.9871 11.6888 15.0775 11.672 15.1621 11.638C15.2466 11.604 15.3236 11.5536 15.3885 11.4896C15.4533 11.4256 15.5049 11.3494 15.54 11.2654C15.5752 11.1813 15.5933 11.0911 15.5933 11C15.5933 10.9089 15.5752 10.8187 15.54 10.7346C15.5049 10.6506 15.4533 10.5744 15.3885 10.5104C15.3236 10.4464 15.2466 10.396 15.1621 10.362C15.0775 10.328 14.9871 10.3112 14.896 10.3125H11.6877V7.10417C11.689 7.01215 11.6718 6.92081 11.6372 6.83554C11.6025 6.75028 11.5512 6.67284 11.486 6.60781C11.4209 6.54278 11.3434 6.49148 11.2581 6.45696C11.1728 6.42243 11.0814 6.40538 10.9894 6.40682Z" fill="#14151B"/>
                                                                                </svg>

                                                                                Profit
                                                                                </div>
                                                                            </td>
                                                                            <td class="text-right">
                                                                              <span class="amount"
                                                                                    data-stop="{{ $token->stop_at }}"
                                                                                    data-p="{{ $token->total_deposit }}"
                                                                                    data-start="{{ now()  }}"
                                                                                    data-period="{{ $token->tariff->period }}">0.0</span>
                                                                                {{ $token->network }}
                                                                            </td>
                                                                        </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        @empty
                                            <div class="col-md-12">
                                                <div class="main-empty ">
                                                    <h4 class="main-empty__title">
{{--                                                        YOU DON'T HAVE ANY DEPOSITS--}}
                                                        You don’t have any tokens
                                                    </h4>
                                                </div>
                                            </div>
                                        @endforelse
                                    </div>
                                </div>
                            </div>
                        </div>
                        <script type="text/javascript">
                            window.addEventListener('load', function () {
                                const num_pad = x => ~(x + '').indexOf('.') ? (x + '').split('.')[1].length : 0;

                                function ParseFloat(str, val) {
                                    str = str.toString();
                                    str = str.slice(0, str.indexOf(".") + val + 1);

                                    return Number(str);
                                }

                                $("span[id='profit']").each(function () {
                                    var current_block = $('span[each="' + $(this).attr('each') + '"]');
                                    var sum_start = parseFloat(current_block.attr('sum_start'));
                                    var sum_interval = parseFloat(current_block.attr('sum_interval'));
                                    var sum_final = parseFloat(current_block.attr('sum_final'));
                                    var deptarif_infoid_period = parseFloat(current_block.attr('deptarif_infoid_period'));
                                    if (sum_interval > 0) {
                                        var nstart = new Date().getTime(), mtime = 0, melapsed = '0.0';

                                        function profit_instance() {
                                            mtime += 100;
                                            melapsed = Math.floor(mtime / 100) / 10;
                                            if (Math.round(melapsed) == melapsed) {
                                                melapsed += '.0';
                                            }

                                            sum_start = Number(Number(sum_start, 11) + sum_interval, 11);
                                            if (deptarif_infoid_period > 0 && sum_start >= sum_final) {
                                                var cb_result = Number(sum_final, 11)
                                                current_block.html(cb_result.toFixed(11));
                                            } else {
                                                var cb_result = Number(sum_start, 11);
                                                current_block.html(cb_result.toFixed(11));
                                                var mdiff = (new Date().getTime() - nstart) - mtime;
                                                window.setTimeout(profit_instance, (100 - mdiff));
                                            }
                                        }

                                        window.setTimeout(profit_instance, 100);
                                    } else {
                                        var cb_result = Number(sum_start, 11);
                                        current_block.html(cb_result.toFixed(11));
                                    }
                                });
                            });

                            function b64DecodeUnicode(str) {
                                return decodeURIComponent(atob(str).split('').map(function (c) {
                                    return '%' + ('00' + c.charCodeAt(0).toString(16)).slice(-2);
                                }).join(''));
                            }

                            function tarif_plan_reinvest_setinfo(tarif_this) {
                                $("select[name='wallet_type']").change();
                            }

                            $("#tdep_minmax").inputmask({
                                regex: "[0-9]{1,16}[.][0-9]{1,8}",
                                showMaskOnHover: false,
                                showMaskOnFocus: false,
                                placeholder: ""
                            });
                        </script>
                        <script type="text/javascript">
                            function get_wallet_minmax(option) {
                                $("input[name='m_amount']").attr('disabled', false);
                            }
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@push('scripts')
    <script src="{{ asset('js/jquery.postpone.min.js') }}"></script>
    <script src="https://momentjs.com/downloads/moment-with-locales.min.js"></script>
    <script src="https://momentjs.com/downloads/moment-timezone-with-data.js"></script>
    <script>
        $(function () {
            function tracker() {
                $('span.amount').each(function () {
                    const p = $(this).data('p');
                    const stop = $(this).data('stop')
                    const period = $(this).data('period');
                    const id = $(this).data('id');

                    const bud_time = moment().tz("Europe/Budapest").format('YYYY-MM-DD HH:mm:ss');

                    var duration = moment.duration(moment(stop).diff(bud_time));
                    var diff = duration.asSeconds();

                    if(diff < 0) return $(this).text(p.toFixed(5));

                    const pice_per_sec = p / (period * 3600);

                    const worked_time = (period * 3600) - diff;

                    let worked = pice_per_sec * worked_time;

                    if(0 > worked){
                        worked = Math.abs(worked);
                    }
                    $(this).text(worked.toFixed(5));
                })
            }

            $.every(100, 'Avaq').progress(function (name) {
                tracker();
            });

            window.Echo.private('monkey-check-{{auth()->id()}}').listen('MonkeyCheckEvent',function (e){
                window.location.reload();
            })
        })
    </script>
@endpush
