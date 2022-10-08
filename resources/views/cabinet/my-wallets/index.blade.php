@extends('cabinet.layouts.app')
@section('title','NFT Grower - Settings')
@section('cabinet-content')
    <div class="content">
        <div class="container-fluid">
            <div class="cardfon">
                <div class="row row-deck row-cards">
                    <div class="w-full" style="max-width: 1036px;">
                        <div class="card card-grey card-tokens">
                            <h4 class="title title-small text-uppercase title-line mb-3">Wallets details</h4>

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
                                    <div class="col-md-12 mt-1" translate="no">
                                        <label class="form-label" translate="yes">Select a payment system</label>
                                        <div class="choices" data-type="select-one" tabindex="0" role="listbox"
                                             aria-haspopup="true" aria-expanded="false">

                                            <select
                                                    class="form-select form-control form-select-main table-white form-select-main__big mb-2" name="payment_system"
                                                    id="selects">
                                                <option value="">Payment system</option>
                                                @foreach($cryptos as  $key => $crypto)
                                                    <option value="{{ $key }}"> > {{ $crypto }} ( {{ isset($user_current_wallets[$key])  ? $user_current_wallets[$key] : 'no specified' }} ) </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="bbbb">
                                        <div class="col-md-12 mt-3"  translate="no">
                                            <label class="form-label" translate="yes">Enter your wallet or card
                                                number</label>
                                            <input class="form-control form-input-main table-white form-input-main__big mb-lg-4 mb-3" autocomplete="off" name="wallet_number"
                                                   type="text" value="{{ old('wallet_number') }}">
                                        </div>
                                        <div class="col-md-12 mt-3" translate="no">
                                            <label class="form-label" translate="yes">Tag/Memo</label>
                                            <input class="form-control form-input-main table-white form-input-main__big mb-lg-4 mb-3" autocomplete="off"
                                                   name="tag" value="{{ old('tag') }}" min="0" max="100" type="text"
                                                   placeholder="optional">
                                        </div>
                                        <div class="col-md-12 mt-3" translate="no">
                                            <label class="form-label" translate="yes">PIN code</label>
                                            <input class="form-control form-input-main table-white form-input-main__big mb-lg-4 mb-3" autocomplete="off" name="pincode"
                                                   minlength="4" maxlength="4"
                                                   oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                                                   pattern="[0-9]{4}" title="PIN must contain 4 digits" type="password"
                                            >
                                        </div>
                                        <div class="my-sm-4 my-3 py-sm-1">
                                            <label class="d-flex align-center">
                                                <div class="switch-container">
                                                    <input checked id="switch-flat" name="wallet_allow_edit" class="switch-input switch-flat d-none" type="checkbox">
                                                    <label for="switch-flat">
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <span class="form-check-label">Disable editing of <b>installed</b> wallets. <font
                                                            style="color:#FF1515">Irreversible action.</font></span>
                                            </label>
                                        </div>

                                        <div class="form-footer mt-3">
                                            <button type="submit"  id="form" class="w-full btn btn-yellow btn-big text-uppercase btn-main btn-primary">
                                                Save
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
                            $('button[type="submit"]').html(`Save`)
                            $('.wallet_form').attr('action',`{{ route('cabinet.my-wallets.store') }}`)
                        }else{
                            $('button[type="submit"]').html((`Update`))
                            $('.wallet_form').attr('action',`/cabinet/my-wallets/update/${response.my_wallet.id}`)
                        }
                    },
                });
            })
        })
    </script>
@endpush
