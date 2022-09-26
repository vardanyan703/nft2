@extends('cabinet.layouts.app')

@section('title','NFT Grower - Buy NFTs')

@section('cabinet-content')
    <div class="content">
        <div class="container-fluid">
            <div class="cardfon">
                <div class="row row-deck row-cards">
                    <div class="col-md-12">
                        <div class="card card-sm">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-md-2 col-sm-12 col-12 text-center">
                                        <span class="bg-blue text-white avatar">!</span>
                                    </div>
                                    <div class="col-md-10 col-sm-12 col-12">
                                        <div class="font-weight-medium" style="font-size: 1rem;">When paying for NFT, send exactly the amount specified in the payment request. After paying for NFT with cryptocurrency, your token will appear in the "Your tokens" section within 1 to 60 minutes.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="card">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card-header">
                                        <h4 class="card-title">Tariff plans</h4>
                                    </div>
                                </div>
                                @foreach($tariffs as $key => $tariff)
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                                        <div class="card" style="background: #fff;color: #000;">
                                            <div class="card-body">
                                                <form action="{{ route('cabinet.buy-token.payment.confirm') }}"
                                                      class="buy-tariff" method="post" target="_blank">
                                                    @csrf
                                                    <input type="hidden" name="do" value="wallet_invest_pay">
                                                    <input type="hidden" name="antipovtor" value="1658428429">
                                                    <input type="hidden" name="tarif_plan" value="{{ $tariff->id }}">
                                                    <div class="row">
                                                        <style>
                                                            .img_plans img {
                                                                border-radius: 16px;
                                                            }
                                                        </style>
                                                        <div class="col-12 text-center img_plans">
                                                            <img src="{{ $tariff->attachment[0]->url() }}" width="256"
                                                                 alt="">
                                                        </div>
                                                        <div class="col-12 pt-3">
                                                            <h5 class="card-title text-center font-weight-bold"
                                                                translate="no">{{ $tariff->name }}</h5>
                                                            <table class="table">
                                                                <tbody>
                                                                <tr>
                                                                    <td class="text-left"><i
                                                                            class="bi bi-chevron-compact-right"></i>
                                                                        Token
                                                                        Bid:
                                                                    </td>
                                                                    <td class="text-right">
                                                                        <strong>{{ $tariff->token_bid }} %</strong></td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="text-left"><i
                                                                            class="bi bi-chevron-compact-right"></i>
                                                                        Period:
                                                                    </td>
                                                                    <td class="text-right"><strong>{{ $tariff->period / 24 }}
                                                                            d.</strong></td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="text-left"><i
                                                                            class="bi bi-chevron-compact-right"></i>
                                                                        Interval:
                                                                    </td>
                                                                    <td class="text-right">
                                                                        <strong>{{ $tariff->interval / 24 }} d.</strong></td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="text-left"><i
                                                                            class="bi bi-chevron-compact-right"></i>
                                                                        Deposit:
                                                                    </td>
                                                                    <td class="text-right">
                                                                        <strong>{{ $tariff->deposit }}</strong></td>
                                                                </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                        <div class="col-12 mb-3" translate="no">
                                                            <label class="form-label" translate="yes"> Select a payment
                                                                system</label>

                                                            <div class="choices" data-type="select-one" tabindex="0"
                                                                 role="listbox" aria-haspopup="true"
                                                                 aria-expanded="false">
                                                                <select name="wallet_type"
                                                                        class="form-select form-control"
                                                                        id="selects">
                                                                    <option value="">Select a payment</option>
                                                                    @foreach($cryptos as $crypto)
                                                                        <option
                                                                            value="{{ $crypto->network }}">{{ $crypto->name }}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-12" translate="no">
                                                            <label class="form-label" translate="yes">Enter
                                                                amount (USD)</label>
                                                            <input class="form-control" autocomplete="off"
                                                                   name="m_amount"
                                                                   id="tdep_minmax" type="text" placeholder=""
                                                                   inputmode="text"
                                                            >
                                                        </div>
                                                    </div>
                                                    <div class="form-footer" style="margin-top: 1.1rem;">
                                                        <button type="button" name="submit" id="form"
                                                                data-min="{{ $tariff->min_price }}"
                                                                data-max="{{ $tariff->max_price }}"
                                                                data-key="{{$key}}"
                                                                class="btn btn-primary mb-2 buy" style="width: 100%;">
                                                            <i
                                                                class="bi bi-cart-plus" style="margin-right: 3px"></i> Buy a token
                                                        </button>


                                                        <button class="hidden fin" style="display: none" type="submit">SS</button>

                                                        <button class="btn btn-primary mb-2 loading d-none" style="width: 100%;" type="button" disabled>
                                                            <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
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
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card-header">
                                        <h4 class="card-title">Payment history</h4>
                                    </div>
                                </div>
                                <div class="table-responsive mt-3" style="border-radius: 20px">
                                    @if(!$transactions->isEmpty())
                                        <table class="table text-center">
                                            @foreach($transactions as $transaction)

                                                @php
                                                    $image = $cryptos->where('network',$transaction->currency1)->first()->image
                                                @endphp

                                                <tr class="table-light">
                                                    <th scope="row"><img
                                                            src="{{ asset("assets/cabinet/style/default/img/ps/$image") }}"
                                                            alt="" style="max-width: 40px"></th>
                                                    <th scope="row">Payment system <br> {{ $transaction->currency1 }}
                                                    </th>
                                                    <th>Date <br> {{ $transaction->created_at }}</th>
                                                    <th>Amount
                                                        <br> {{ $transaction->amount2 }} {{ $transaction->currency1 }}
                                                    </th>
                                                    <th>Status <br> {{ $transaction->status_text }}</th>
                                                    <th>Confirmation <br> {{ $transaction->received_confirms ?? 0 }}
                                                        of {{ $transaction->confirms_needed }}</th>
                                                </tr>
                                            @endforeach
                                        </table>
                                        <br>
                                        {!! $transactions->withQueryString()->links() !!}
                                    @else
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <h3 class="card-title">YOUR PARTNERS HAVE NOT INVESTED YET</h3>
                                                    </div>
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

@endsection


@push('scripts')
    <script id="scr">
        window.Echo.private('payment-callback-{{ \Illuminate\Support\Facades\Auth::user()->name }}').listen('PaymentCallbackEvent', (e) => {
            window.paymentCallback(e)
        });

        $(function () {

            $('button.buy').on('click',function () {
                let amount = $(this).parent('.form-footer').siblings().find('input[name="m_amount"]').val();
                let min = $(this).data('min');
                let max = $(this).data('max');
                let select = $(this).parents('form').find('select#selects').val();

                if(!select){
                    $(this).parent('.form-footer').find('.error-message').text('Please choose payment system')
                    return;
                }

                if (amount >= min  && amount <= max){
                    $(this).siblings('button.fin').click()
                    $(this).parent('.form-footer').find('.error-message').text('')

                    setTimeout(function (){
                        window.location.reload();
                    },5000)
                    return
                }

                $(this).parent('.form-footer').find('.error-message').text('Please enter the valid amount')


            })
            // $('.buy-tariff').on('submit', function (e) {
            //     e.preventDefault();
            //     const form = new FormData($(this)[0])
            //     $(this).find('button[type=submit]').prop('disabled','disabled');
            //     $(this).find('span.error-message').text('');
            //     $(this).find('button.buy').addClass('d-none');
            //     $(this).find('button.loading').removeClass('d-none');
            //
            //     axios.post('/cabinet/buy-token/payment/confirm', form).then(res => {
            //         $(this).find('button[type=submit]').prop('disabled',false);
            //         $(this).find('button.buy').removeClass('d-none');
            //         $(this).find('button.loading').addClass('d-none');
            //         window.location.href = res.data
            //     }).catch(error => {
            //         $(this).find('span.error-message').text(error.response.data.message);
            //         $(this).find('button[type=submit]').prop('disabled',false);
            //         $(this).find('button.buy').removeClass('d-none');
            //         $(this).find('button.loading').addClass('d-none');
            //     // })
            // });

        })
    </script>
@endpush
