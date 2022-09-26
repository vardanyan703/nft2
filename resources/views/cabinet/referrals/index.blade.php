@extends('cabinet.layouts.app')
@section('title','NFT Grower - Referrals')
@section('cabinet-content')
    <div class="content">
        <div class="container-fluid">
            <div class="cardfon">
                <div class="row row-deck row-cards">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="card card-sm" style="background: #fff;">
                                        <div class="card-body">
                                            <div class="row align-items-center">
                                                <div class="col-md-10 col-sm-12 col-12 text-center">
                                                    <div class="card-header">
                                                        <h4 class="card-title">Affiliate program</h4>
                                                    </div>
                                                    <div class="font-weight-medium" style="font-size: 2rem;">
                                                        {{ implode('%-',$affiliate_percents).'%' }}
                                                    </div>
                                                </div>
                                                <div class="col-md-2 col-sm-12 col-12 text-center">
                                                    <span class="bg-blue text-white avatar"><i
                                                                class="bi bi-percent"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card card-sm" style="background: #fff;">
                                        <div class="card-body">
                                            <div class="row align-items-center">
                                                <div class="col-md-10 col-sm-12 col-12 text-center">
                                                    <div class="card-header">
                                                        <h4 class="card-title">Total referrals</h4>
                                                    </div>
                                                    <div class="font-weight-medium" style="font-size: 2rem;">{{ $user->referrals_count }}</div>
                                                </div>
                                                <div class="col-md-2 col-sm-12 col-12 text-center">
                                                    <span class="bg-blue text-white avatar"><i class="bi bi-people"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card card-sm" style="background: #fff;">
                                        <div class="card-body">
                                            <div class="row align-items-center">
                                                <div class="col-md-10 col-sm-12 col-12 text-center">
                                                    <div class="card-header">
                                                        <h4 class="card-title">Total profit</h4>
                                                    </div>
                                                    <div class="font-weight-medium" style="font-size: 2rem;">{{ number_format($user_referrals_deposit_cash_back_sum, 2, '.', ',') }}
                                                        USD
                                                    </div>
                                                </div>
                                                <div class="col-md-2 col-sm-12 col-12 text-center">
                                                    <span class="bg-blue text-white avatar"><i
                                                                class="bi bi-cash-stack"></i></span>
                                                </div>
                                            </div>
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
                                        <h4 class="card-title">Referral link</h4>
                                    </div>
                                    <div class="card-body">
                                        <form>
                                            <div class="input-group">
                                                <input type="text" class="form-control"
                                                       value="{{ route('referral',['username' => auth()->user()->name]) }}" id="copyreflink">
                                                <button class="btn" type="button" onclick="myFunction()">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24"
                                                         height="24" viewBox="0 0 24 24" stroke-width="2"
                                                         stroke="currentColor" fill="none" stroke-linecap="round"
                                                         stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path d="M19 8.268a2 2 0 0 1 1 1.732v8a2 2 0 0 1 -2 2h-8a2 2 0 0 1 -2 -2v-8a2 2 0 0 1 2 -2h3"></path>
                                                        <path d="M5.003 15.734a2 2 0 0 1 -1.003 -1.734v-8a2 2 0 0 1 2 -2h8a2 2 0 0 1 2 2v8a2 2 0 0 1 -2 2h-3"></path>
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
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <form action="{{ route('cabinet.referrals.index') }}" method="GET">
                    <div class="col-md-12">
                        <div class="row">

                            <div class="col-md-8">
                                <div class="card">
                                    <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label class="form-label">Search by your referrals</label>
                                                    <div class="choices" data-type="select-one" tabindex="0"
                                                         role="listbox" aria-haspopup="true" aria-expanded="false">

                                                        <select
                                                                class="form-select form-control" name="referal_search"
                                                                id="selects"
                                                                >
                                                            <option value="">Select a search method</option>
                                                            <option @if(request()->get('referal_search') === 'name') selected @endif value="name">By name</option>
                                                            <option @if(request()->get('referal_search') === 'email') selected @endif value="email">By Email</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="form-label">Enter value</label>
                                                    <input class="form-control" autocomplete="off" type="text"
                                                           name="referal_search_val" value="{{ request()->get('referal_search_val') }}" placeholder=""
                                                           @if(request()->get('referal_search_val') == '') disabled="" @endif
                                                           required="">
                                                </div>
                                            </div>
                                            <div class="form-footer">
                                                <button type="submit" class="btn btn-primary mb-1"><i
                                                            class="bi bi-chevron-compact-right"></i> Search
                                                </button>&nbsp;
                                                <a href="#" class="reset-search">
                                                    <button type="button" class="btn btn-primary mb-1"><i
                                                                class="bi bi-chevron-compact-right"></i> Reset search
                                                        parameters
                                                    </button>
                                                </a>
                                            </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <label class="form-label">Sorting records</label>
                                                    <div class="choices" data-type="select-one" tabindex="0"
                                                         role="listbox" aria-haspopup="true" aria-expanded="false">
                                                        <select
                                                                class="form-select form-control" name="referal_sort"
                                                                id="selects">
                                                            <option value="asc">by default</option>
                                                            <option @if(request()->get('referal_sort') === 'asc') selected @endif value="asc">asc</option>
                                                            <option @if(request()->get('referal_sort') === 'desc') selected @endif value="desc">desc</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-footer">
                                                <button type="submit" class="btn btn-primary mb-1"><i
                                                            class="bi bi-chevron-compact-right"></i> Apply
                                                </button>&nbsp;
                                            </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    </form>
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Your referrals</h4>
                            </div>

                            <div class="table-responsive">
                                @if(!$referrals->isEmpty())
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Registered At</th>
                                            <th class="text-center">Total referrals</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($referrals as $referral)
                                                <tr>
                                                    <td>{{ $referral->name }}</td>
                                                    <td><i class="bi bi-clock"></i> {{ $referral->created_at }}</td>
                                                    <td class="text-center">{{ $referral->referrals_count }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    <hr>
                                    <br>
                                    {!! $referrals->withQueryString()->links() !!}
                                @else
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h3 class="card-title">YOU DON'T HAVE ANY REFERRALS</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>

                @push('scripts')
                    <script type="text/javascript">
                        document.addEventListener("DOMContentLoaded", function (event) {
                            $("select[name='referal_search']").on('change', function () {
                                var cur_value = this.value;
                                console.log(cur_value);
                                if (cur_value == 'login' || cur_value == 'name' || cur_value == 'email') {
                                    $("input[name='referal_search_val']").attr('placeholder', 'Example: demo');
                                    $("input[name='referal_search_val']").attr('disabled', false);
                                } else {
                                    $("input[name='referal_search_val']").attr('placeholder', '');
                                    $("input[name='referal_search_val']").attr('disabled', true);
                                }
                            });
                        });

                        $('.reset-search').on('click',function (e) {
                            e.preventDefault()
                            let url = new URL(window.location.href);
                            let params = new URLSearchParams(url.search);

                            params.delete('referal_search_val');
                            params.delete('referal_search');
                            window.location.href = window.location.origin +  window.location.pathname +'?' + params.toString()
                        });

                        $("input[name='refback_percent_form']").inputmask({
                            regex: "[0-9]{1,3}[.][0-9]{1,4}",
                            showMaskOnHover: false,
                            showMaskOnFocus: false,
                            placeholder: ""
                        });
                    </script>
                @endpush

            </div>
        </div>
    </div>
@endsection
