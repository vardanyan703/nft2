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
                                <th class="status"><span>Status</span> <br> {{ $transaction->status_text }}
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
