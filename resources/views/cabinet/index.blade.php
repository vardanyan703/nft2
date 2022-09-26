@extends('cabinet.layouts.app')

@section('title','NFT Grower - Dashboard')

@section('cabinet-content')
    <div class="content">
        <div class="container-fluid">
            <div class="cardfon">
                <div class="row row-deck row-cards">
                    <div class="col-md-3">
                        <div class="card card-sm" style="background: #FFDC40;color: #000;">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-md-12">
                                        <span style="font-size: 34px;font-weight: 900;"
                                              translate="no">{{ auth()->user()->name }}</span>
                                    </div>
                                    <div class="col-md-12">
                                        <img src="{{ asset('assets/cabinet/style/default/img/monky.png') }}" alt="">
                                    </div>
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="table-responsive">
                                                    <table class="table table-vcenter card-table">
                                                        <tbody>
                                                        <tr>
                                                            <td>Your email:</td>
                                                            <td translate="no">{{ auth()->user()->email }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Your Upline:</td>
                                                            <td translate="no">{{ auth()->user()->parent->name ?? 'No invitation' }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>IP at registration:</td>
                                                            <td translate="no">{{ $geos->last()->ip_address }}</td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="card-header">
                                                    <h4 class="card-title">Referral link</h4>
                                                </div>
                                                <div class="card-body">
                                                    <form>
                                                        <div class="input-group">
                                                            <input type="text" class="form-control"
                                                                   value="{{ route('referral',['username' => auth()->user()->name]) }}"
                                                                   id="copyreflink">
                                                            <button class="btn" type="button" onclick="myFunction()">
                                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon"
                                                                     width="24" height="24" viewBox="0 0 24 24"
                                                                     stroke-width="2" stroke="currentColor" fill="none"
                                                                     stroke-linecap="round" stroke-linejoin="round">
                                                                    <path stroke="none" d="M0 0h24v24H0z"
                                                                          fill="none"></path>
                                                                    <path
                                                                        d="M19 8.268a2 2 0 0 1 1 1.732v8a2 2 0 0 1 -2 2h-8a2 2 0 0 1 -2 -2v-8a2 2 0 0 1 2 -2h3"></path>
                                                                    <path
                                                                        d="M5.003 15.734a2 2 0 0 1 -1.003 -1.734v-8a2 2 0 0 1 2 -2h8a2 2 0 0 1 2 2v8a2 2 0 0 1 -2 2h-3"></path>
                                                                </svg>
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
                                                       class="btn btn-primary mb-3" target="_blank" style="width: 100%;white-space: break-spaces;"
                                                    >Affiliate Presentation</a>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="card-header">
                                                    <h4 class="card-title">Authorization logs</h4>
                                                </div>
                                                <div class="table-responsive">
                                                    <table class="table table-vcenter card-table" translate="no">
                                                        <tbody>
                                                        @foreach($geos as $log)
                                                            <tr>
                                                                <td><i class="bi bi-calendar4-event"
                                                                       style="color: #000000;"></i> {{ $log->login_at }}
                                                                </td>
                                                                <td>{{ $log->ip_address }}</td>
                                                            </tr>
                                                        @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card card-sm">
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col-md-2 col-sm-12 col-12 text-center">
                                                <span class="bg-blue text-white avatar">!</span>
                                            </div>
                                            <div class="col-md-10 col-sm-12 col-12">
                                                <div class="font-weight-medium" style="font-size: 1rem;">
                                                    @if(\Illuminate\Support\Facades\Auth::user()->cryptos->count())
                                                        You can earn even more if you buy more NFTs and use our <a target="_blank" style="color: black;font-weight: bolder;"  href="{{ route('affiliate') }}">Affiliate Program.</a>
                                                    @else
                                                        Buy your first NFT in the "Buy NFTs" section and start earning.
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card card-sm">
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col-md-10 col-sm-12 col-12 text-center">
                                                <div class="card-header">
                                                    <h4 class="card-title">Total Deposits</h4>
                                                </div>
                                                <div class="font-weight-medium" style="font-size: 2rem;" translate="no">
                                                    {{ number_format($deposit,2) }}
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-sm-12 col-12 text-center">
                                                <span class="bg-blue text-white avatar" translate="no">USD</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card card-sm">
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col-md-10 col-sm-12 col-12 text-center">
                                                <div class="card-header">
                                                    <h4 class="card-title">Total Withdraw</h4>
                                                </div>
                                                <div class="font-weight-medium" style="font-size: 2rem;" translate="no">
                                                    {{ number_format($withdraw,2) }}
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-sm-12 col-12 text-center">
                                                <span class="bg-blue text-white avatar" translate="no">USD</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card card-sm">
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col-md-10 col-sm-12 col-12 text-center">
                                                <div class="card-header">
                                                    <h4 class="card-title">Available Balance</h4>
                                                </div>
                                                <div class="font-weight-medium" style="font-size: 2rem;" translate="no">
                                                    {{ number_format($total_balance,2)}}
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-sm-12 col-12 text-center">
                                                <span class="bg-blue text-white avatar" translate="no">USD</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Financial statistics</h4>
                                    </div>
                                    <div class="row">
                                        @foreach($currencies as $currency)
                                            <div class="col-md-6">
                                                <div class="card card-sm" style="background: #000;">
                                                    <div class="card-body">
                                                        <div class="row align-items-center">
                                                            <div class="col-md-10 col-sm-12 col-12">
                                                                <div class="card-header">
                                                                    <h4 class="card-title" style="color: #FFDC40;"
                                                                        translate="no">{{ $currency->name }}</h4>
                                                                </div>
                                                                <div class="text-muted" style="color: #fff !important;">
                                                                    <i
                                                                        class="bi bi-chevron-compact-right"></i> Total
                                                                    deposits&nbsp;
                                                                    <b translate="no">{{ $currency->user->count() ? number_format($currency->user[0]->pivot->deposit,4) : number_format(0,4)  }} {{ $currency->network }}</b></div>
                                                                <div class="text-muted" style="color: #fff !important;">
                                                                    <i
                                                                        class="bi bi-chevron-compact-right"></i> Earned
                                                                    total
                                                                    <b translate="no">{{ $currency->user->count() ? number_format($currency->user[0]->pivot->earned_total,4) : number_format(0,4)  }} {{ $currency->network }}</b></div>
                                                                <div class="font-weight-medium"
                                                                     style="font-size: 1.5rem;"
                                                                     translate="no"><span
                                                                        style="color: #FFDC40;">{{ $currency->user->count() ? number_format($currency->user[0]->pivot->balance,4) : number_format(0,4) }} {{ $currency->name }}</span>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2 col-sm-12 col-12 text-center">
                                                                <img
                                                                    src="{{ asset("assets/cabinet/style/default/img/ps/$currency->image") }}"
                                                                    alt="" style="max-width: 50px">
                                                            </div>
                                                        </div>
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
@endsection
