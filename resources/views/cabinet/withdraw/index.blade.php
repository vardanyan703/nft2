@extends('cabinet.layouts.app')
@section('title','NFT Grower - Withdrawals')
@push('style')
    <style>
        .Waiting{
            color: orange !important;
        }

        .Rejected{
            color: red !important;
        }
    </style>
@endpush

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
                                        <div class="font-weight-medium" style="font-size: 1rem;">
                                            Save your payment details in the "Settings" section
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Withdraw funds</h4>
                            </div>
                            <div class="card-body">
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
                                        <div class="col-md-6" translate="no">
                                            <label class="form-label" translate="yes">Select a payment system</label>
                                            <div class="choices" data-type="select-one" tabindex="0" role="listbox"
                                                 aria-haspopup="true" aria-expanded="false">
                                                <select name="wallet_type"
                                                        onchange="get_wallet_minmax(this);"
                                                        class="form-select form-control"
                                                        id="selects"
                                                        hidden=""
                                                        tabindex="-1"
                                                >
                                                    <option value="">Payment system</option>
                                                    @foreach($cryptos as $crypto)
                                                        <option value="{{ $crypto->network }}">
                                                            {{ $crypto->name }}
                                                            ( {{ $crypto->user->count() ? number_format($crypto->user[0]->pivot->balance,4) .' | $'.number_format(\App\Facades\CryptoFacade::xChangeToUSDT($crypto->user[0]->pivot->balance,$crypto->network,'USD'),2) : number_format(0,2).' | $0.00' }} )
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6" translate="no">
                                            <label class="form-label" translate="yes">Enter amount (USD)</label>
                                            <input class="form-control" autocomplete="off" name="m_amount" type="text"
                                                   placeholder="" disabled="" inputmode="text">
                                        </div>
                                    </div>
                                    <div class="form-footer">
                                        <button type="submit" name="submit" id="form" class="btn btn-primary"><i
                                                class="bi bi-chevron-compact-right"></i> Withdraw
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card-header">
                                        <h4 class="card-title">Withdrawal history</h4>
                                    </div>
                                </div>
                                @forelse($withdraws as $withdraw)
                                    <div class="col-md-3 col-lg-3 col-sm-4">
                                        <div class="card card-sm" style="background: #fff;">
                                            <div class="card-body">
                                                <div class="row align-items-center">
                                                    <div class="col-md-10 col-sm-12 col-12">
                                                        <div class="card-header">
                                                            <h4 class="card-title"  translate="no">{{ $withdraw->crypto->name }}</h4>
                                                        </div>
                                                        <div class="text-muted"><i class="bi bi-chevron-compact-right"></i> Total deposits&nbsp; <b translate="no">{{  $withdraw->amount }} {{ $withdraw->network }}</b></div>
                                                        <div class="font-weight-medium {{ \App\Models\WithdrawQuestion::WITHDRAW_QUESTION_STATUSES[$withdraw->status] }}" style="font-size: 1.5rem;color: #6F9D75;" translate="no" > {{ \App\Models\WithdrawQuestion::WITHDRAW_QUESTION_STATUSES[$withdraw->status] == 'Affiliate' ? 'Paid' : \App\Models\WithdrawQuestion::WITHDRAW_QUESTION_STATUSES[$withdraw->status]}}</div>
                                                    </div>
                                                    <div class="col-md-2 col-sm-12 col-12 text-center">
                                                         <img src="{{ asset("assets/cabinet/style/default/img/ps/".$withdraw->crypto->image) }}" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @empty
                                    <div class="col-md-12">
                                        <div class="card card-sm">
                                            <div class="card-body">
                                                <div class="row align-items-center">
                                                    <div class="col-12">
                                                        <h4 class="card-title">You don't have any payments</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforelse
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
