@extends('layout.app')

@section('header')
    @include('layout.includes.header')
@endsection

@section('content')
    <div class="inner-header-main">
        <div class="container-fluid">
            <div class="wrapper">
                <h2 class="heading heading-h2">Sign Up</h2>
            </div>
        </div>
    </div>
    <div class="contact-main">
        <div class="container-fluid">
            <div class="row row-contact">
                <div class="col-lg-3"></div>
                <div class="col-lg-6 col-form-otr" style="background: #fff;border-radius: 15px;">
                    <div class="col-form-inr">
                        <h3 class="heading heading-h3">Sign Up</h3>
                        <p class="desc heading-M">Be careful when filling out the form fields.</p>
                        <form action="{{ route('register') }}" method="post" class="form-main">
                            @csrf
                            <input type="hidden" name="do" value="toaccount">
                            <input type="hidden" name="antipovtor" value="1658405063">
                            <div class="input-main mb-3">
                                <div class="input-otr">
                                    <input name="name" type="text" maxlength="50"
                                           placeholder="Username" value="{{ old('name') }}" class="input heading-SB">
                                    @error('name')
                                    <span class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="input-main mb-3">
                                <div class="input-otr">
                                    <input name="email" type="email" maxlength="100"
                                           placeholder="E-mail" value="{{ old('email') }}" class="input heading-SB">
                                    @error('email')
                                    <span class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            {{ debug($errors) }}
                            <div class="input-main mb-3">
                                <div class="input-otr">
                                    <label style="font-weight: 700;">Enter only a complex password (you can generate it
                                        using this <a href="https://generatepasswords.org/" target="_blank"
                                                      style="display: contents;">link</a>)</label>
                                    <input autocomplete="off" name="password" type="password" maxlength="50"
                                           placeholder="Password" class="input heading-SB">
                                    @error('password')
                                    <span class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="input-main mb-3">
                                <div class="input-otr">
                                    <input autocomplete="off" name="password_confirmation" type="password" maxlength="50"
                                           placeholder="Retype Password" class="input heading-SB">
                                </div>
                            </div>
                            <div class="input-main mb-3">
                                <div class="input-otr">
                                    <label style="font-weight: 700;">PIN-code is needed to save your payment
                                        details</label>
                                    <input autocomplete="off" name="reg_pincode" type="text" minlength="4" maxlength="4"
                                           oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                                           pattern="[0-9]{4}" placeholder="PIN code (4 digits)" class="input heading-SB"
                                    >
                                    @error('reg_pincode')
                                    <span class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="input-main mb-3">
                                <div class="input-otr">
                                    <input autocomplete="off" name="captcha" type="text" maxlength="4"
                                           placeholder="****"
                                           style="background: url({{ captcha_src() }}) no-repeat;background-position: 10px;"
                                           class="input heading-SB form_pole4 mb-2" id="captcha">
                                    @error('captcha')
                                        <span class="invalid-feedback d-block" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <span id="reload" style="cursor: pointer">
                                        Change captcha
                                        <img src="/assets/img/refresh.gif" alt="" width="20">
                                    </span>
                                </div>
                            </div>
                            <div class="action-otr mb-3">
                                <input class="button heading-SB" type="submit" name="submit" id="form"
                                       value="Complete registration">
                            </div>
                        </form>
                        <p class="desc heading-M">Upline: - {{ session()->get('referred_by')->name ?? '' }}</p>
                    </div>
                </div>
                <div class="col-lg-3"></div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script type="text/javascript">
        $('#reload').click(function () {
            $.ajax({
                type: 'GET',
                url: 'reload-captcha',
                success: function (data) {
                    $("#captcha").css('background-image', 'url(' + data.captcha + ')');
                }
            });
        });
    </script>
@endpush
