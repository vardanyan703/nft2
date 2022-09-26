@extends('cabinet.layouts.app')
@section('title','NFT Grower - Settings')
@section('cabinet-content')
    <div class="content">
        <div class="container-fluid">
            <div class="cardfon">
                <div class="row row-deck row-cards">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Wallets details</h4>
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
                                @if (session('status'))
                                    <div class="alert alert-success" role="alert" >
                                        {{ session('status') }}
                                    </div>
                                @endif
                                <form action="{{ route('cabinet.my-wallets.store') }}" class="wallet_form" method="post">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-12" translate="no">
                                            <label class="form-label" translate="yes">Select a payment system</label>
                                            <div class="choices" data-type="select-one" tabindex="0" role="listbox"
                                                 aria-haspopup="true" aria-expanded="false">

                                                    <select
                                                            class="form-select form-control" name="payment_system"
                                                            id="selects"
                                                    >
                                                        <option value="">Payment system</option>
                                                        @foreach($cryptos as  $key => $crypto)
                                                            <option value="{{ $key }}"> > {{ $crypto }} ( {{ isset($user_current_wallets[$key])  ? $user_current_wallets[$key] : 'no specified' }} ) </option>
                                                        @endforeach
                                                    </select>
                                            </div>
                                        </div>

                                        <div class="bbbb">
                                            <div class="col-md-12 mt-3" translate="no">
                                                <label class="form-label" translate="yes">Enter your wallet or card
                                                    number</label>
                                                <input class="form-control" autocomplete="off" name="wallet_number"
                                                       type="text" value="{{ old('wallet_number') }}">
                                            </div>
                                            <div class="col-md-12 mt-3" translate="no">
                                                <label class="form-label" translate="yes">Tag/Memo</label>
                                                <input class="form-control" autocomplete="off"
                                                       name="tag" value="{{ old('tag') }}" min="0" max="100" type="text"
                                                       placeholder="optional">
                                            </div>
                                            <div class="col-md-12 mt-3" translate="no">
                                                <label class="form-label" translate="yes">PIN code</label>
                                                <input class="form-control" autocomplete="off" name="pincode"
                                                       minlength="4" maxlength="4"
                                                       oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                                                       pattern="[0-9]{4}" title="PIN must contain 4 digits" type="password"
                                                >
                                            </div>


                                            <div class="mt-3">
                                                <label class="form-check form-switch">
                                                    <input class="form-check-input" type="checkbox" value="0"
                                                           name="wallet_allow_edit">
                                                    <span class="form-check-label">Disable editing of <b>installed</b> wallets. <font
                                                                color="red">Irreversible action.</font></span>
                                                </label>
                                            </div>

                                            <div class="form-footer" style="margin-top: 1.1rem;">
                                                <button type="submit"  id="form" class="btn btn-primary"><i
                                                            class="bi bi-chevron-compact-right"></i> Save
                                                </button>
                                            </div>
                                        </div>

                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')

    <script>

        $(function () {
            $("body").on('change',".form-select", function (event) {
                let cryptoId = $(this).val();
                event.stopImmediatePropagation();
                $.ajax({
                    url: `{{route('cabinet.my-wallets.getUserWallet')}}`,
                    type: "post",
                    data:{
                        crypto_id :cryptoId
                    },
                    success: function(response) {
                        $('.bbbb').html(response.html);
                        // $('input[name="wallet_number"]').val(response.data.wallet_number);
                        // $('input[name="tag"]').val(response.data.tag);

                        if ($('input[name="wallet_number"]').val() === ''){
                            $('button[type="submit"]').html(`<i class="bi bi-chevron-compact-right"></i>Save`)
                            $('.wallet_form').attr('action',`{{ route('cabinet.my-wallets.store') }}`)
                        }else{
                            $('button[type="submit"]').html((`<i class="bi bi-chevron-compact-right"></i>Update`))
                            $('.wallet_form').attr('action',`/cabinet/my-wallets/update/${response.my_wallet.id}`)
                        }
                    },
                });
            })
        })
    </script>
@endpush
