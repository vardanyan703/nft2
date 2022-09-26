@extends('cabinet.layouts.app')
@section('title','NFT Grower - Referral Statistics')
@section('cabinet-content')
    <div class="content">
        <div class="container-fluid">
            <div class="cardfon">
                <div class="row row-deck row-cards">
                    <form action="{{ route('cabinet.referrals.history.index') }}" method="GET">
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
                                                <button type="submit" class="btn btn-primary mb-1">Search</button>&nbsp;
                                                <a href="#" class="reset-search">
                                                    <button type="button" class="btn btn-primary mb-1"><i
                                                                class="bi bi-chevron-compact-right"></i> Reset search parameters
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
                                <h4 class="card-title">Investments of your referrals</h4>
                            </div>
                            <div class="table-responsive mt-3" style="border-radius: 20px">
                                @if(!$referral_histories->isEmpty())
                                    <table class="table text-center">
                                        @foreach($referral_histories as $history)
                                            <tr class="table-light">
                                                <th scope="row">Name <br> {{ $history->referrals->name }}</th>
                                                <th>Profit from referral's deposit<br> {{ $history->referral_deposit_cash_back }} TRC20</th>
                                                <th>Level <br> {{ $history->level }}</th>
                                            </tr>
                                        @endforeach
                                    </table>
                                    {!! $referral_histories->withQueryString()->links() !!}
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
                @push('scripts')
                <script type="text/javascript">
                    document.addEventListener("DOMContentLoaded", function (event) {
                        $("select[name='referal_search']").on('change', function () {
                            var cur_value = this.value;
                            if (cur_value == 'login' || cur_value == 'name' || cur_value == 'email') {
                                $("input[name='referal_search_val']").attr('placeholder', 'Example: demo');
                                $("input[name='referal_search_val']").attr('disabled', false);
                                $("input[name='referal_search_val']").val('');
                                $("input[name='referal_search_val']").inputmask('');
                            } else if (cur_value == 'amount') {
                                $("input[name='referal_search_val']").attr('placeholder', 'Example: 20');
                                $("input[name='referal_search_val']").attr('disabled', false);
                                $("input[name='referal_search_val']").val('');
                                $("input[name='referal_search_val']").inputmask({
                                    regex: "[0-9]{1,16}[.][0-9]{1,8}",
                                    showMaskOnHover: false,
                                    showMaskOnFocus: false,
                                    placeholder: ""
                                });
                            } else {
                                $("input[name='referal_search_val']").attr('placeholder', '');
                                $("input[name='referal_search_val']").attr('disabled', true);
                                $("input[name='referal_search_val']").val('');
                                $("input[name='referal_search_val']").inputmask('');
                            }
                        });

                        $('.reset-search').on('click',function (e) {
                            e.preventDefault();
                            let url = new URL(window.location.href);
                            let params = new URLSearchParams(url.search);

                            params.delete('referal_search_val');
                            params.delete('referal_search');
                            window.location.href = window.location.origin +  window.location.pathname +'?' + params.toString()
                        });
                    });
                </script>
                @endpush
            </div>
        </div>
    </div>
@endsection
