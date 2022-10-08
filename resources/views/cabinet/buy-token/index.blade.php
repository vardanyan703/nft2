@extends('cabinet.layouts.app')

@section('title','NFT Grower - Buy NFTs')

@section('cabinet-content')
    <div class="content">
        <div class="container-fluid">
            <div class="cardfon">
                <div class="row row-deck row-cards">
                    <div class="col-md-12">
                        <div class="card alert-main alert-main-error mb-3">
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
                                When paying for NFT, send exactly the amount specified in the payment request. After
                                paying for NFT with cryptocurrency, your token will appear in the "Your tokens" section
                                within 1 to 60 minutes.
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="card card-grey card-tokens">
                            <div class="row">
                                <div class="col-md-12">
                                    <h4 class="title title-small text-uppercase title-line mb-2">Tariff plans</h4>
                                </div>
                                @foreach($tariffs as $key => $tariff)
                                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="card" style="background: #fff;color: #000;">
                                            <div class="card-body">
                                                <form action="{{ route('cabinet.buy-token.payment.confirm') }}"
                                                      class="buy-tariff" method="post" target="_blank">
                                                    @csrf
                                                    <input type="hidden" name="do" value="wallet_invest_pay">
                                                    <input type="hidden" name="antipovtor" value="1658428429">
                                                    <input type="hidden" name="tarif_plan" value="{{ $tariff->id }}">
                                                    <div class="row">
                                                        <div class="col-12 text-center img_plans">
                                                            <img src="{{ $tariff->attachment[0]->url() }}" width="209"
                                                                 alt="">
                                                        </div>
                                                        <div class="col-12 pt-3">
                                                            <h5 class="title title-small-2 text-uppercase text-center m-auto mb-3 pb-0"
                                                                style="max-width: 359px;"
                                                                translate="no">{{ $tariff->name }}</h5>
                                                            <table class="table table-main">
                                                                <tbody>
                                                                <tr>
                                                                    <td class="text-left">
                                                                        <div class="d-flex-main">
                                                                            <svg width="22" height="22"
                                                                                 viewBox="0 0 22 22" fill="none"
                                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M11 2C6.03884 2 2 6.03884 2 11C2 15.9612 6.03884 20 11 20C15.9612 20 20 15.9612 20 11C20 6.03884 15.9612 2 11 2ZM11 3.58824C15.1028 3.58824 18.4118 6.89719 18.4118 11C18.4118 15.1028 15.1028 18.4118 11 18.4118C6.89719 18.4118 3.58824 15.1028 3.58824 11C3.58824 6.89719 6.89719 3.58824 11 3.58824Z"
                                                                                    fill="#14151B"/>
                                                                                <path
                                                                                    d="M6.37988 8.92243C6.37988 8.36209 6.58311 7.89645 6.98955 7.52551C7.39599 7.14669 7.8901 6.95728 8.47188 6.95728C9.05365 6.95728 9.54776 7.14669 9.95421 7.52551C10.3607 7.89645 10.5639 8.36209 10.5639 8.92243C10.5639 9.47489 10.3567 9.94447 9.94225 10.3312C9.53581 10.71 9.04568 10.8994 8.47188 10.8994C7.89807 10.8994 7.40396 10.71 6.98955 10.3312C6.58311 9.94447 6.37988 9.47489 6.37988 8.92243ZM7.92198 14.9126L12.4766 7.09934H14.0904L9.52385 14.9126H7.92198ZM9.00982 8.92243C9.00982 8.74881 8.95802 8.60675 8.85441 8.49625C8.75878 8.38576 8.63525 8.33052 8.48383 8.33052C8.31647 8.33052 8.18099 8.38576 8.07739 8.49625C7.98175 8.59885 7.93394 8.74091 7.93394 8.92243C7.93394 9.10395 7.98175 9.24996 8.07739 9.36045C8.17302 9.46305 8.3085 9.51435 8.48383 9.51435C8.63525 9.51435 8.75878 9.46305 8.85441 9.36045C8.95802 9.24996 9.00982 9.10395 9.00982 8.92243ZM11.4365 13.0658C11.4365 12.5055 11.6398 12.0399 12.0462 11.6689C12.4526 11.2901 12.9468 11.1007 13.5285 11.1007C14.1103 11.1007 14.6044 11.2901 15.0109 11.6689C15.4173 12.0399 15.6205 12.5055 15.6205 13.0658C15.6205 13.6183 15.4133 14.0879 14.9989 14.4746C14.5925 14.8534 14.1023 15.0428 13.5285 15.0428C12.9547 15.0428 12.4606 14.8534 12.0462 14.4746C11.6398 14.0879 11.4365 13.6183 11.4365 13.0658ZM14.0665 13.0658C14.0665 12.8922 14.0147 12.7502 13.9111 12.6397C13.8154 12.5292 13.6919 12.4739 13.5405 12.4739C13.3731 12.4739 13.2376 12.5292 13.134 12.6397C13.0384 12.7423 12.9906 12.8843 12.9906 13.0658C12.9906 13.2474 13.0384 13.3934 13.134 13.5039C13.2297 13.6065 13.3652 13.6578 13.5405 13.6578C13.6919 13.6578 13.8154 13.6065 13.9111 13.5039C14.0147 13.3934 14.0665 13.2474 14.0665 13.0658Z"
                                                                                    fill="#14151B"/>
                                                                            </svg>
                                                                            Token Bid
                                                                        </div>
                                                                    </td>
                                                                    <td class="text-right">
                                                                        {{ $tariff->token_bid }} %
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="text-left">
                                                                        <div class="d-flex-main">
                                                                            <svg width="22" height="22"
                                                                                 viewBox="0 0 22 22" fill="none"
                                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M10.9997 1.83325C5.9452 1.83325 1.83301 5.94545 1.83301 10.9999C1.83301 16.0544 5.9452 20.1666 10.9997 20.1666C16.0541 20.1666 20.1663 16.0544 20.1663 10.9999C20.1663 5.94545 16.0541 1.83325 10.9997 1.83325ZM10.9997 3.20825C15.311 3.20825 18.7913 6.68856 18.7913 10.9999C18.7913 15.3113 15.311 18.7916 10.9997 18.7916C6.68831 18.7916 3.20801 15.3113 3.20801 10.9999C3.20801 6.68856 6.68831 3.20825 10.9997 3.20825ZM10.7598 5.49007C10.5776 5.49292 10.404 5.56796 10.2771 5.69871C10.1502 5.82946 10.0804 6.00523 10.083 6.18742V11.6874C10.083 11.8697 10.1555 12.0446 10.2844 12.1735C10.4133 12.3025 10.5882 12.3749 10.7705 12.3749H14.4372C14.5283 12.3762 14.6187 12.3594 14.7033 12.3254C14.7878 12.2914 14.8648 12.241 14.9296 12.177C14.9945 12.1131 15.046 12.0368 15.0812 11.9528C15.1164 11.8687 15.1345 11.7785 15.1345 11.6874C15.1345 11.5963 15.1164 11.5061 15.0812 11.4221C15.046 11.338 14.9945 11.2618 14.9296 11.1978C14.8648 11.1338 14.7878 11.0834 14.7033 11.0494C14.6187 11.0155 14.5283 10.9986 14.4372 10.9999H11.458V6.18742C11.4593 6.0954 11.4422 6.00405 11.4075 5.91879C11.3729 5.83353 11.3215 5.75609 11.2564 5.69106C11.1913 5.62603 11.1138 5.57473 11.0285 5.54021C10.9431 5.50568 10.8518 5.48863 10.7598 5.49007Z"
                                                                                    fill="#14151B"/>
                                                                            </svg>
                                                                            Period
                                                                        </div>
                                                                    </td>
                                                                    <td class="text-right">
                                                                        {{ $tariff->period / 24 }} d.
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="text-left">
                                                                        <div class="d-flex-main">
                                                                            <svg width="22" height="22"
                                                                                 viewBox="0 0 22 22" fill="none"
                                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M5.72917 2.75C4.09203 2.75 2.75 4.09203 2.75 5.72917V16.2708C2.75 17.908 4.09203 19.25 5.72917 19.25H16.2708C17.908 19.25 19.25 17.908 19.25 16.2708V5.72917C19.25 4.09203 17.908 2.75 16.2708 2.75H5.72917ZM5.72917 4.125H16.2708C17.1646 4.125 17.875 4.83539 17.875 5.72917V6.41667H4.125V5.72917C4.125 4.83539 4.83539 4.125 5.72917 4.125ZM4.125 7.79167H17.875V16.2708C17.875 17.1646 17.1646 17.875 16.2708 17.875H5.72917C4.83539 17.875 4.125 17.1646 4.125 16.2708V7.79167ZM7.10417 9.625C6.80027 9.625 6.50883 9.74572 6.29394 9.96061C6.07905 10.1755 5.95833 10.4669 5.95833 10.7708C5.95833 11.0747 6.07905 11.3662 6.29394 11.5811C6.50883 11.7959 6.80027 11.9167 7.10417 11.9167C7.40806 11.9167 7.69951 11.7959 7.91439 11.5811C8.12928 11.3662 8.25 11.0747 8.25 10.7708C8.25 10.4669 8.12928 10.1755 7.91439 9.96061C7.69951 9.74572 7.40806 9.625 7.10417 9.625ZM11 9.625C10.6961 9.625 10.4047 9.74572 10.1898 9.96061C9.97489 10.1755 9.85417 10.4669 9.85417 10.7708C9.85417 11.0747 9.97489 11.3662 10.1898 11.5811C10.4047 11.7959 10.6961 11.9167 11 11.9167C11.3039 11.9167 11.5953 11.7959 11.8102 11.5811C12.0251 11.3662 12.1458 11.0747 12.1458 10.7708C12.1458 10.4669 12.0251 10.1755 11.8102 9.96061C11.5953 9.74572 11.3039 9.625 11 9.625ZM14.8958 9.625C14.5919 9.625 14.3005 9.74572 14.0856 9.96061C13.8707 10.1755 13.75 10.4669 13.75 10.7708C13.75 11.0747 13.8707 11.3662 14.0856 11.5811C14.3005 11.7959 14.5919 11.9167 14.8958 11.9167C15.1997 11.9167 15.4912 11.7959 15.7061 11.5811C15.9209 11.3662 16.0417 11.0747 16.0417 10.7708C16.0417 10.4669 15.9209 10.1755 15.7061 9.96061C15.4912 9.74572 15.1997 9.625 14.8958 9.625ZM7.10417 13.75C6.80027 13.75 6.50883 13.8707 6.29394 14.0856C6.07905 14.3005 5.95833 14.5919 5.95833 14.8958C5.95833 15.1997 6.07905 15.4912 6.29394 15.7061C6.50883 15.9209 6.80027 16.0417 7.10417 16.0417C7.40806 16.0417 7.69951 15.9209 7.91439 15.7061C8.12928 15.4912 8.25 15.1997 8.25 14.8958C8.25 14.5919 8.12928 14.3005 7.91439 14.0856C7.69951 13.8707 7.40806 13.75 7.10417 13.75ZM11 13.75C10.6961 13.75 10.4047 13.8707 10.1898 14.0856C9.97489 14.3005 9.85417 14.5919 9.85417 14.8958C9.85417 15.1997 9.97489 15.4912 10.1898 15.7061C10.4047 15.9209 10.6961 16.0417 11 16.0417C11.3039 16.0417 11.5953 15.9209 11.8102 15.7061C12.0251 15.4912 12.1458 15.1997 12.1458 14.8958C12.1458 14.5919 12.0251 14.3005 11.8102 14.0856C11.5953 13.8707 11.3039 13.75 11 13.75Z"
                                                                                    fill="#14151B"/>
                                                                            </svg>
                                                                            Interval
                                                                        </div>
                                                                    </td>
                                                                    <td class="text-right">
                                                                        {{ $tariff->interval / 24 }} d.
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="text-left">
                                                                        <div class="d-flex-main">
                                                                            <svg width="22" height="22"
                                                                                 viewBox="0 0 22 22" fill="none"
                                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M10.9997 1.83325C5.9452 1.83325 1.83301 5.94545 1.83301 10.9999C1.83301 16.0544 5.9452 20.1666 10.9997 20.1666C16.0541 20.1666 20.1663 16.0544 20.1663 10.9999C20.1663 5.94545 16.0541 1.83325 10.9997 1.83325ZM10.9997 3.20825C15.311 3.20825 18.7913 6.68856 18.7913 10.9999C18.7913 15.3113 15.311 18.7916 10.9997 18.7916C6.68831 18.7916 3.20801 15.3113 3.20801 10.9999C3.20801 6.68856 6.68831 3.20825 10.9997 3.20825ZM14.4237 8.24365C14.2452 8.24886 14.0757 8.32334 13.9511 8.45133L9.85384 12.5486L8.04826 10.743C7.98491 10.677 7.90903 10.6243 7.82507 10.5881C7.7411 10.5518 7.65074 10.5326 7.55928 10.5317C7.46782 10.5307 7.37708 10.5481 7.2924 10.5826C7.20772 10.6172 7.13078 10.6683 7.06611 10.733C7.00143 10.7977 6.9503 10.8746 6.91573 10.9593C6.88116 11.044 6.86383 11.1347 6.86476 11.2262C6.86569 11.3177 6.88486 11.408 6.92115 11.492C6.95743 11.5759 7.01011 11.6518 7.07609 11.7152L9.36776 14.0068C9.49669 14.1357 9.67154 14.2081 9.85384 14.2081C10.0361 14.2081 10.211 14.1357 10.3399 14.0068L14.9233 9.4235C15.0224 9.32691 15.0902 9.20262 15.1175 9.0669C15.1449 8.93119 15.1307 8.79037 15.0767 8.66287C15.0227 8.53538 14.9315 8.42715 14.815 8.35235C14.6985 8.27755 14.5621 8.23967 14.4237 8.24365Z"
                                                                                    fill="#14151B"/>
                                                                            </svg>
                                                                            Deposit
                                                                        </div>
                                                                    </td>
                                                                    <td class="text-right">
                                                                        {{ $tariff->deposit }}</td>
                                                                </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                        <div class="col-12 mb-2" translate="no">
                                                            {{--                                                            <label class="form-label" translate="yes"> Select a paymentsystem</label>--}}
                                                            <div class="choices" data-type="select-one" tabindex="0"
                                                                 role="listbox" aria-haspopup="true"
                                                                 aria-expanded="false">
                                                                <select name="wallet_type"
                                                                        class="form-select form-select-main form-control"
                                                                        id="selects">
                                                                    <option value=""> Select a paymentsystem</option>
                                                                    @foreach($cryptos as $crypto)
                                                                        <option value="{{ $crypto->network }}">
                                                                            {{ $crypto->name }}
                                                                        </option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-12" translate="no">
                                                            <input class="form-control form-input-main"
                                                                   autocomplete="off"
                                                                   name="m_amount"
                                                                   id="tdep_minmax" type="text"
                                                                   placeholder="Enter amount (USD)"
                                                                   inputmode="text"
                                                            >
                                                        </div>
                                                    </div>
                                                    <div class="form-footer mt-3 pt-lg-2" style="margin-top: 1.1rem;">
                                                        <button type="button" name="submit" id="form"
                                                                data-min="{{ $tariff->min_price }}"
                                                                data-max="{{ $tariff->max_price }}"
                                                                data-key="{{$key}}"
                                                                class="btn btn-big btn-yellow btn-main text-uppercase mb-2 buy"
                                                                style="width: 100%;">
                                                            Buy a token
                                                        </button>


                                                        <button class="hidden fin" style="display: none" type="submit">
                                                            SS
                                                        </button>

                                                        <button
                                                            class="btn btn-big btn-yellow btn-main text-uppercase mb-2 loading d-none"
                                                            style="width: 100%;" type="button" disabled>
                                                            <span class="spinner-border spinner-border-sm" role="status"
                                                                  aria-hidden="true"></span>
                                                            Loading...
                                                        </button>
                                                        <span class="error-message" style="color: #a11818;"></span>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12" id="render_history">
                        <div class="card card-grey card-tokens">
                            <div class="row">
                                <div class="col-md-12">
                                    <h4 class="title title-small text-uppercase title-line mb-2">Payment history</h4>
                                </div>
                                <div class="mt-3">
                                    @if(!$transactions->isEmpty())
                                        <div class="table-responsive">
                                            <table class="table table-new history">
                                                @foreach($transactions as $transaction)

                                                    @php
                                                        $image = $cryptos->where('network',$transaction->currency1)->first()->image
                                                    @endphp

                                                    <tr class="table-white" id="tr-{{ $transaction->id }}">
                                                        <th scope="row">
                                                            <img
                                                                src="{{ asset("assets/cabinet/style/default/img/ps/$image") }}"
                                                                alt="" style="max-width: 40px">
                                                        </th>
                                                        <th scope="row">
                                                            <span> Payment system</span>
                                                            <br> {{ $transaction->currency1 }}
                                                        </th>
                                                        <th><span>Date</span> <br> {{ $transaction->created_at }}</th>
                                                        <th>
                                                            <span>Amount</span>
                                                            <br>
                                                            {{ $transaction->amount2 }} {{ $transaction->currency1 }}
                                                        </th>
                                                        <th class="status"><span>Status</span>
                                                            <br> {{ $transaction->status_text }}
                                                        </th>
                                                        <th class="received_confirms">
                                                            <span>Confirmation</span> <br>
                                                            {{ $transaction->received_confirms ?? 0 }}
                                                            of {{ $transaction->confirms_needed }}
                                                        </th>
                                                        <th class="table-btn-th" style=" vertical-align: center;">
                                                            <button type="button"
                                                                    class="btn btn-big btn-yellow btn-main text-uppercase mb-2 @if($transaction->status != 0) btn-yellow-disabled @else open-details  @endif"
                                                                    data-id="{{ $transaction->id }}"
                                                                    style="width: 100%;">
                                                                Details
                                                            </button>
                                                        </th>
                                                    </tr>
                                                @endforeach
                                            </table>
                                        </div>
                                        <br>
                                        {!! $transactions->withQueryString()->links() !!}
                                    @else
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="main-empty ">
                                                    <h4 class="main-empty__title">
                                                        YOU DON’T HAVE PAYMENTS YET
                                                    </h4>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <script type="text/javascript">
                    function b64DecodeUnicode(str) {
                        return decodeURIComponent(atob(str).split('').map(function (c) {
                            return '%' + ('00' + c.charCodeAt(0).toString(16)).slice(-2);
                        }).join(''));
                    }

                    function set_tarif_percent_calc(tarif_this) {
                        var tarif_selector = $('option:selected', tarif_this);
                        calc_plan_percent = parseFloat(b64DecodeUnicode(tarif_selector.attr('tarif_percent'))) + 100;
                        dep_calc();
                    }

                    $("#tdep_minmax").inputmask({
                        regex: "[0-9]{1,16}[.][0-9]{1,8}",
                        showMaskOnHover: false,
                        showMaskOnFocus: false,
                        placeholder: ""
                    });
                </script>
            </div>
        </div>
    </div>
    <section id="modal-html"></section>

@endsection


@push('scripts')

    <script src="https://momentjs.com/downloads/moment-with-locales.min.js"></script>
    <script src="https://momentjs.com/downloads/moment-timezone-with-data.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.10/clipboard.min.js"></script>

    <script id="scr">
        window.Echo.private('payment-callback-{{ \Illuminate\Support\Facades\Auth::user()->name }}').listen('PaymentCallbackEvent', (e) => {
            if (e.transaction_id == window.$transaction_id) {
                $('#modal-html').html(e.html);

                $('#buy-modal').fadeIn();
            }

            $('#render_history').html(e.table)

        });

        $(function () {
            function hideTooltip() {
                setTimeout(function() {
                    $('.modal_copy_button').tooltip('hide');
                }, 1000);
            }


            var clipboard = new ClipboardJS('.modal_copy_button');

            clipboard.on('success', function(e) {
                const el = $('.modal_copy_button');
                const address = el.data('clipboard-text');

                el.text('Copied!')

                setTimeout(() => {
                    el.text(address);
                },1000)

                hideTooltip();
            });

            clipboard.on('error', function(e) {
                const el = $('.modal_copy_button');
                const address = el.data('clipboard-text');

                el.text('Failed!')

                setTimeout(() => {
                    el.text(address);
                },1000)

                hideTooltip();
            });


            $('button.buy').on('click', function (e) {
                e.preventDefault();
                $("body").css("overflow", "hidden");
                let amount = $(this).parent('.form-footer').siblings().find('input[name="m_amount"]').val();
                let min = $(this).data('min');
                let max = $(this).data('max');
                let select = $(this).parents('form').find('select#selects').val();

                if (!select) {
                    $(this).parent('.form-footer').find('.error-message').text('Please choose payment system')
                    return;
                }

                if (amount >= min && amount <= max) {
                    $(this).siblings('button.fin').click()
                    $(this).parent('.form-footer').find('.error-message').text('')
                    return
                }

                $(this).parent('.form-footer').find('.error-message').text('Please enter the valid amount')


            })
            $('.buy-tariff').on('submit', function (e) {
                e.preventDefault();

                const form = new FormData($(this)[0])
                $(this).find('button[type=submit]').prop('disabled', 'disabled');
                $(this).find('span.error-message').text('');
                $(this).find('button.buy').addClass('d-none');
                $(this).find('button.loading').removeClass('d-none');

                axios.post('/dashboard/buy-nfts/payment/confirm', form).then(res => {
                    $(this).find('button[type=submit]').prop('disabled', false);
                    $(this).find('button.buy').removeClass('d-none');
                    $(this).find('button.loading').addClass('d-none');

                    $('#modal-html').html(res.data.html);

                    $('#buy-modal').fadeIn();

                    $('#render_history').html(res.data.history)
                    //window.location.href = res.data
                }).catch(error => {
                    $(this).find('span.error-message').text(error.response.data.message);
                    $(this).find('button[type=submit]').prop('disabled', false);
                    $(this).find('button.buy').removeClass('d-none');
                    $(this).find('button.loading').addClass('d-none');
                    // })
                });
            })

            $("body").on("click", '.modal .modal__container', function (e) {
                e.stopPropagation();
            });

            $("body").on("click", ".modal .close, .modal, .modal-close, .have_paid", function (e) {
                e.preventDefault();
                $(".modal").fadeOut(function () {
                    clearInterval(window.x);
                    window.$transaction_id = null;
                    $("body").css("overflow", "auto");
                });
            });

            $('.open-details').click(function () {

                let id = $(this).data('id');

                axios.post('/dashboard/buy-nfts/payment/details', {id: id}).then(res => {
                    $('#modal-html').html(res.data);
                    $('#buy-modal').fadeIn();
                })
            })

        });
    </script>
@endpush
