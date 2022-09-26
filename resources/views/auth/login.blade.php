@extends('layout.app')

@section('header')
    @include('layout.includes.header')
@endsection

@section('content')
    <div class="inner-header-main">
        <div class="container-fluid">
            <div class="wrapper">
                <h2 class="heading heading-h2">Log in to account</h2>
            </div>
        </div>
    </div>
    <div class="contact-main">
        <div class="container-fluid">
            <div class="row row-contact">
                <div class="col-lg-3"></div>
                <div class="col-lg-6 col-form-otr" style="background: #fff;border-radius: 15px;">
                    <div class="col-form-inr">
                        <h3 class="heading heading-h3">Login</h3>
                        <p class="desc heading-M">Be careful when filling out the form fields.</p>
                        <form action="{{ route('login') }}" method="post" class="form-main">
                            @csrf
                            <input type="hidden" name="do" value="checkaccount">
                            <input type="hidden" name="antipovtor" value="1658413461">
                            <div class="input-main mb-3">
                                <div class="input-otr">
                                    <input autocomplete="on" name="name" type="text" maxlength="50"
                                           placeholder="Username"
                                           class="input heading-SB" required="">
                                    @error('name')
                                    <span class="invalid-feedback d-block" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="input-main mb-3">
                                <div class="input-otr">
                                    <input autocomplete="off" name="password" type="password" maxlength="50"
                                           placeholder="Password" class="input heading-SB" required="">
                                    @error('password')
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
                                           class="input heading-SB form_pole4" id="captcha" required="">

                                    <span id="reload" style="cursor: pointer">
                                        Change captcha
                                        <img src="/assets/img/refresh.gif" alt="" width="20">
                                    </span>

                                    @error('captcha')
                                    <span class="invalid-feedback d-block" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="action-otr mb-3">
                                <input class="button heading-SB" type="submit" name="submit" id="form"
                                       value="Log in to account">
                            </div>
                        </form>
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

{{--@section('content')--}}
{{--<div class="container">--}}
{{--<div class="row justify-content-center">--}}
{{--<div class="col-md-8">--}}
{{--<div class="card">--}}
{{--<div class="card-header">{{ __('Login') }}</div>--}}

{{--<div class="card-body">--}}
{{--<form method="POST" action="{{ route('login') }}">--}}
{{--@csrf--}}

{{--<div class="row mb-3">--}}
{{--<label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>--}}

{{--<div class="col-md-6">--}}
{{--<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>--}}

{{--@error('email')--}}
{{--<span class="invalid-feedback" role="alert">--}}
{{--<strong>{{ $message }}</strong>--}}
{{--</span>--}}
{{--@enderror--}}
{{--</div>--}}
{{--</div>--}}

{{--<div class="row mb-3">--}}
{{--<label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>--}}

{{--<div class="col-md-6">--}}
{{--<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">--}}

{{--@error('password')--}}
{{--<span class="invalid-feedback" role="alert">--}}
{{--<strong>{{ $message }}</strong>--}}
{{--</span>--}}
{{--@enderror--}}
{{--</div>--}}
{{--</div>--}}

{{--<div class="row mb-3">--}}
{{--<div class="col-md-6 offset-md-4">--}}
{{--<div class="form-check">--}}
{{--<input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>--}}

{{--<label class="form-check-label" for="remember">--}}
{{--{{ __('Remember Me') }}--}}
{{--</label>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}

{{--<div class="row mb-0">--}}
{{--<div class="col-md-8 offset-md-4">--}}
{{--<button type="submit" class="btn btn-primary">--}}
{{--{{ __('Login') }}--}}
{{--</button>--}}

{{--@if (Route::has('password.request'))--}}
{{--<a class="btn btn-link" href="{{ route('password.request') }}">--}}
{{--{{ __('Forgot Your Password?') }}--}}
{{--</a>--}}
{{--@endif--}}
{{--</div>--}}
{{--</div>--}}
{{--</form>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--@endsection--}}
