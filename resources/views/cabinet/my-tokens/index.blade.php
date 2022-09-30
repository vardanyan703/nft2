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
                                            <div class="col-xl-4 col-lg-5 col-md-5 col-sm-12 col-12">
                                                <div class="card" style="background: #fff;color: #000;">
                                                    <div class="card-body">
                                                        <form action="" method="post">
                                                            <input type="hidden" name="do"
                                                                   value="wallet_invest_pay">
                                                            <input type="hidden" name="antipovtor"
                                                                   value="1658428429">
                                                            <input type="hidden" name="tarif_plan" value="1">
                                                            <div class="row">
                                                                <style>
                                                                    .img_plans img {
                                                                        border-radius: 16px;
                                                                    }
                                                                </style>
                                                                <div class="col-12 text-center img_plans">
                                                                    <img
                                                                        src="{{ $token->tariff->attachment[0]->url }}"
                                                                        alt=""
                                                                        width="256"
                                                                    >
                                                                </div>
                                                                <div class="col-12 pt-3">
                                                                    <h5 class="card-title text-center font-weight-bold"
                                                                        translate="no">{{ $token->tariff->name }}</h5>
                                                                    <table class="table">
                                                                        <tbody>
                                                                        <tr>
                                                                            <td class="text-left"><i
                                                                                    class="bi bi-chevron-compact-right"></i>
                                                                                <strong> Date </strong>
                                                                            </td>
                                                                            <td class="text-right">
                                                                                <strong>{{ $token->created_at }}</strong>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="text-left"><i
                                                                                    class="bi bi-chevron-compact-right"></i>
                                                                                <strong>Payment system</strong>
                                                                            </td>
                                                                            <td class="text-right">
                                                                                <strong>{{ \App\Models\Crypto::nameByNetwork($token->network) }}</strong>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="text-left"><i
                                                                                    class="bi bi-chevron-compact-right"></i>
                                                                                <strong>Deposit</strong>
                                                                            </td>
                                                                            <td class="text-right">
                                                                                <strong>{{  number_format($token->deposit,5) }}
                                                                                    {{ $token->network }}</strong></td>
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
                                                                            <td class="text-left"><i
                                                                                    class="bi bi-chevron-compact-right"></i>
                                                                                <strong> Status </strong>
                                                                            </td>
                                                                            <td class="text-right">
                                                                                @if($token->status === \App\Models\UserTariff::START)
                                                                                    <span style="background: orange; width: 10px;height: 10px;display: inline-block;border-radius: 50%;"></span>
                                                                                @else
                                                                                    <span style="background: green; width: 10px;height: 10px;display: inline-block;border-radius: 50%;"></span>
                                                                                @endif
                                                                                <strong>{{ $token->status }}</strong>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="text-left"><i
                                                                                    class="bi bi-chevron-compact-right"></i>
                                                                                <strong> Profit </strong>
                                                                            </td>
                                                                            <td class="text-right">
                                                                                <strong>
                                                                                     <span class="amount"
                                                                                           data-stop="{{ $token->stop_at }}"
                                                                                           data-p="{{ $token->total_deposit }}"
                                                                                           data-start="{{ now()  }}"
                                                                                           data-period="{{ $token->tariff->period }}">0.0</span>
                                                                                    {{ $token->network }}
                                                                                </strong>
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
