@extends('layout.app')

@section('content')
    <main class="yellow-bg">
        <div class="wrapper wrapper-p">
            <form class="forms-section bg-white" method="post" action="{{ route('password.email') }}">
                @csrf
                <div class="effects">
                    <div class="effect effect-1">
                        <img src="/images/heand-1__small.png" alt="">
                    </div>
                    <div class="effect effect-2">
                        <img src="/images/heand-2__small.png" alt="">
                    </div>
                </div>
                <h1 class="title title-line">Forgot password?</h1>
                <p class="desc">Be careful when filling out the form fields.</p>
                <div class="mt-5 mb-5">
                    <div class="form-item">
                        <label for="email" class="form-label">Your account email</label>
                        <div class="form-input @error('email') error @enderror">
                            <input type="email" name="email" value="{{ old('email') }}" id="email"
                                   placeholder="">
                            @error('email')
                                <div class="form-input__error">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form-item">
                    <button class="btn btn-primary">Reset password</button>
                </div>
            </form>

        </div>
    </main>
@endsection
