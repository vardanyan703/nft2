@extends('cabinet.layouts.app')
@section('title','NFT Grower - Referral Statistics')
@section('cabinet-content')
    <div class="content">
        <div class="container-fluid">
            <div class="cardfon">
                <div class="row row-deck row-cards">
                    <form action="{{ route('cabinet.referrals.history.index') }}" method="GET" class="form-support">
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="col-xxl-8">
                                    <div class="card card-grey card-tokens">
                                        <div class="row">
                                            <div class="col-lg-6 mb-lg-0 mb-3">
                                                <label class="form-label">Search by your referrals</label>
                                                <div class="choices" data-type="select-one" tabindex="0"
                                                     role="listbox" aria-haspopup="true" aria-expanded="false">
                                                    <select class="form-select form-control form-select-main table-white form-select-main__big"
                                                            name="referal_search"
                                                            id="selects" >
                                                        <option value="">Select a search method</option>
                                                        <option @if(request()->get('referal_search') === 'name') selected
                                                                @endif value="name">By name
                                                        </option>
                                                        <option @if(request()->get('referal_search') === 'email') selected
                                                                @endif value="email">By Email
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <label class="form-label">Enter value</label>
                                                <input class="form-control form-input-main table-white form-input-main__big" autocomplete="off" type="text"
                                                       name="referal_search_val"
                                                       value="{{ request()->get('referal_search_val') }}"
                                                       placeholder=""
                                                       @if(request()->get('referal_search_val') == '') disabled=""
                                                       @endif
                                                       required="">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="row form-footer">
                                                    <div class="col-lg-6 d-lg-none mb-lg-0 mb-3">
                                                        <a href="#" class="reset-search">
                                                            <button type="button" onclick="reset_form();" class="w-full btn btn-border-grey btn-big text-uppercase btn-main btn-primary">
                                                                Reset search parameters
                                                            </button>
                                                        </a>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <button type="submit"
                                                                class="w-full btn btn-yellow btn-big text-uppercase btn-main btn-primary">
                                                            Search
                                                        </button>
                                                    </div>
                                                    <div class="col-lg-6 d-none d-lg-block">
                                                        <a href="#" class="reset-search">
                                                            <button type="button" onclick="reset_form();" class="w-full btn btn-border-grey btn-big text-uppercase btn-main btn-primary">
                                                                Reset search parameters
                                                            </button>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-4 col-lg-8">
                                    <div class="card card-grey card-tokens">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <label class="form-label">Sorting records</label>
                                                    <div class="choices" data-type="select-one" tabindex="0"
                                                         role="listbox" aria-haspopup="true" aria-expanded="false">
                                                        <select
                                                                class="form-select form-control form-select-main table-white form-select-main__big" name="referal_sort"
                                                                id="selects">
                                                            <option value="asc">Default</option>
                                                            <option @if(request()->get('referal_sort') === 'asc') selected
                                                                    @endif value="asc">Date (new to old)
                                                            </option>
                                                            <option @if(request()->get('referal_sort') === 'desc') selected
                                                                    @endif value="desc">Date (old to new)
                                                            </option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="form-footer">
                                                        <button type="submit"
                                                                class="w-full btn btn-yellow btn-big text-uppercase btn-main btn-primary">
                                                            Apply
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="col-lg-12">
                        <div class="card card-grey card-tokens">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h4 class="title title-small text-uppercase title-line mb-2">Investments of your
                                        referrals</h4>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                @if(!$referral_histories->isEmpty())
                                    <div class="table-responsive mt-3" style="border-radius: 20px">
                                        <table class="table table-new">
                                            @foreach($referral_histories as $history)
                                                <tr class="table-white">
                                                    <th scope="row"><span>Name</span> <br> {{ $history->referrals->name }}</th>
                                                    <th>
                                                        <span>Profit from referral's deposit</span><br>
                                                        {{ number_format($history->referral_deposit_cash_back,5) }} TRC20
                                                    </th>
                                                    <th><span>Level</span> <br> {{ $history->level }}</th>
                                                </tr>
                                            @endforeach
                                        </table>
                                        {!! $referral_histories->withQueryString()->links() !!}
                                    </div>
                                @else
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="main-empty">
                                                <h4 class="main-empty__title">
                                                    YOUR PARTNERS HAVE NOT INVESTED YET
                                                </h4>
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

                        $('.reset-search').on('click', function (e) {
                          e.preventDefault();
                          let url = new URL(window.location.href);
                          let params = new URLSearchParams(url.search);

                          params.delete('referal_search_val');
                          params.delete('referal_search');
                          window.location.href = window.location.origin + window.location.pathname + '?' + params.toString()
                        });
                      });
                    </script>
                @endpush
            </div>
        </div>
    </div>

@endsection

@push('scripts')
    <script>
        function reset_form(){
            $('.form-support')[0].reset();
        }
    </script>
@endpush
