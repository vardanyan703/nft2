@extends('cabinet.layouts.app')
@section('title','NFT Grower - Withdrawals')
@push('style')
    <style>
        .Waiting {
            color: rgba(44, 46, 60, 0.3); !important;
        }

        .Rejec§ted {
            color: #FF1515 !important;
        }
    </style>
@endpush

@section('cabinet-content')
    <div class="content">
        <div class="container-fluid">
            <div class="cardfon">
                <div class="row row-deck row-cards">

                    <div class="col-lg-12">
                        <div class="card alert-main alert-main-error">
                            <svg width="40" height="33" viewBox="0 0 40 33" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M39.6514 29.8646L21.6762 1.008C21.6762 1.008 21.1924 0 20 0C18.8076 0 18.3238 1.008 18.3238 1.008L0.348571 29.8646C0.348571 29.8646 0 30.336 0 30.9725C0 32.0333 0.852381 32.8925 1.90476 32.8925H38.0952C39.1476 32.8925 40 32.0333 40 30.9725C40 30.336 39.6514 29.8646 39.6514 29.8646Z"
                                      fill="#14151B"/>
                                <path d="M20.0131 29.0525C19.316 29.0525 18.7408 28.8394 18.2874 28.4132C17.8341 27.9869 17.6074 27.4714 17.6074 26.8647C17.6074 26.2321 17.836 25.7137 18.2941 25.3095C18.7512 24.9053 19.3246 24.7037 20.0131 24.7037C20.7103 24.7037 21.2817 24.9082 21.7255 25.3162C22.1703 25.7252 22.3922 26.2407 22.3922 26.8647C22.3922 27.4973 22.1722 28.0196 21.7322 28.4324C21.2922 28.8452 20.7188 29.0525 20.0131 29.0525ZM22.1293 10.5447L21.6712 22.2327C21.6569 22.5898 21.3655 22.8721 21.0112 22.8721H18.936C18.5808 22.8721 18.2893 22.5889 18.276 22.2308L17.8427 10.5437C17.8284 10.1665 18.1284 9.85254 18.5027 9.85254H21.4703C21.8446 9.85254 22.1446 10.1665 22.1293 10.5447Z"
                                      fill="white"/>
                            </svg>
                            <div>
                                Save your payment details in the "Settings" section
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="card card-grey card-tokens">
                            <h4 class="title title-small text-uppercase title-line mb-2">Withdraw funds</h4>
                            <div class="mt-lg-4 mt-3">
                                @if($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li style="color: red">{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                @if(session()->has('message'))
                                    <div class="alert alert-danger">
                                        <ul>
                                            <li style="color: red">{{ session()->get('message') }}</li>
                                        </ul>
                                    </div>
                                @endif

                                <form action="{{ route('cabinet.withdraw.create') }}" method="post">
                                    <input type="hidden" name="do" value="wallet_withdraw">
                                    <input type="hidden" name="antipovtor" value="1658428494">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-6 mb-lg-0 mb-3" translate="no">
                                            <label class="form-label" translate="yes">Select a payment system</label>
                                            <div class="choices" data-type="select-one" tabindex="0" role="listbox"
                                                 aria-haspopup="true" aria-expanded="false">
                                                <select name="wallet_type"
                                                        onchange="get_wallet_minmax(this);"
                                                        class="form-select form-control form-select-main table-white form-select-main__big"
                                                        id="selects"
                                                        hidden=""
                                                        tabindex="-1"
                                                >
                                                    <option value="">Payment system</option>
                                                    @foreach($cryptos as $crypto)
                                                        <option value="{{ $crypto->network }}">
                                                            {{ $crypto->name }}
                                                            ( {{ $crypto->user->count() ? number_format($crypto->user[0]->pivot->balance,4) .' | $'.number_format(\App\Facades\CryptoFacade::xChangeToUSDT($crypto->user[0]->pivot->balance,$crypto->network,'USD'),2) : number_format(0,2).' | $0.00' }}
                                                            )
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6" translate="no">
                                            <label class="form-label" translate="yes">Enter amount (USD)</label>
                                            <input class="form-control form-input-main table-white form-input-main__big"
                                                   autocomplete="off" name="m_amount" type="text"
                                                   placeholder="" disabled="" inputmode="text">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="form-footer">
                                                <button type="submit" name="submit" id="form"
                                                        class="w-full btn btn-yellow btn-big text-uppercase btn-main btn-primary">
                                                    Withdraw
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="card card-grey card-tokens">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h4 class="title title-small text-uppercase title-line mb-2">Withdrawal history</h4>
                                </div>
                                <div class="col-lg-12">
                                    @if(!$withdraws->isEmpty())
                                    <div class="statistics statistics-1 w-full">
                                        @forelse($withdraws as $withdraw)
                                            <div class="statistic-item card card-sm card-white card-statistic mx-0">
                                                <div class="row align-items-center">
                                                    <div class="col-md-10 col-sm-12 col">
                                                        <div class="card-statistic__price" translate="no">
                                                            <div class="d-xxl-none d-block card-statistic-mobile-1">
                                                                <img
                                                                        src="{{ asset("assets/cabinet/style/default/img/ps/".$withdraw->crypto->image) }}"
                                                                        alt="" style="max-width: 48px">
                                                            </div>
                                                            <span>
                                                                {{ $withdraw->crypto->name }}
                                                            </span>
                                                        </div>
                                                        <div class="card-statistic__list">
                                                            <div class="card-statistic__item">
                                                                <div class="card-statistic__left">
                                                                    <svg width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <rect width="8" height="8" fill="#FCD535"/>
                                                                    </svg>
                                                                    Amount
                                                                </div>
                                                                <div class="card-statistic__right">
                                                                    {{  $withdraw->amount }} {{ $withdraw->network }}
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card-statistic__status {{ \App\Models\WithdrawQuestion::WITHDRAW_QUESTION_STATUSES[$withdraw->status] }}"
                                                             translate="no">
                                                            {{ \App\Models\WithdrawQuestion::WITHDRAW_QUESTION_STATUSES[$withdraw->status] == 'Affiliate' ? 'COMPLETED' : \App\Models\WithdrawQuestion::WITHDRAW_QUESTION_STATUSES[$withdraw->status]}}
                                                        </div>


                                                    </div>
                                                    <div class="col-md-2 col-sm-12 col-12 text-center d-xxl-block d-none">
                                                        <img
                                                                src="{{ asset("assets/cabinet/style/default/img/ps/".$withdraw->crypto->image) }}"
                                                                alt="" style="max-width: 58px;width: 100%;">
                                                    </div>
                                                </div>
                                            </div>
                                        @empty
                                            <div class="row w-full">
                                                <div class="col-lg-12">
                                                    <div class="main-empty ">
                                                        <h4 class="main-empty__title">
                                                            YOU DON'T HAVE ANY WITHDRAWALS
                                                        </h4>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforelse
                                    </div>
                                        @else
                                        <div class="main-empty ">
                                            <h4 class="main-empty__title">
                                                YOU DON'T HAVE ANY WITHDRAWALS
                                            </h4>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <script type="text/javascript">
                  $("input[name='m_amount']").inputmask({
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
@endsection
