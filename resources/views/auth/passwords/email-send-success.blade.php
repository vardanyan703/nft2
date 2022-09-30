@extends('layout.app')

@section('content')
    <main class="yellow-bg">
        <div class="wrapper wrapper-p">
            <form class="forms-section bg-white" method="post" action="{{ route('password.email') }}">
                @csrf
                <input type="hidden" name="email" value="{{ $email }}">
                <div class="effects">
                    <div class="effect effect-1">
                        <img src="images/heand-1__small.png" alt="">
                    </div>
                    <div class="effect effect-2">
                        <img src="images/heand-2__small.png" alt="">
                    </div>
                </div>
                <div class="success-icon">
                    <svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M32.0002 5.33337C17.2963 5.33337 5.3335 17.2961 5.3335 32C5.3335 46.7039 17.2963 58.6667 32.0002 58.6667C46.7041 58.6667 58.6668 46.7039 58.6668 32C58.6668 17.2961 46.7041 5.33337 32.0002 5.33337ZM32.0002 9.33337C44.5423 9.33337 54.6668 19.4579 54.6668 32C54.6668 44.5422 44.5423 54.6667 32.0002 54.6667C19.458 54.6667 9.3335 44.5422 9.3335 32C9.3335 19.4579 19.458 9.33337 32.0002 9.33337ZM41.9611 23.9818C41.4417 23.9969 40.9486 24.2136 40.5861 24.586L28.6668 36.5052L23.4142 31.2526C23.2299 31.0607 23.0092 30.9075 22.7649 30.8019C22.5207 30.6963 22.2578 30.6406 21.9917 30.6379C21.7257 30.6351 21.4617 30.6856 21.2154 30.7861C20.969 30.8867 20.7452 31.0354 20.5571 31.2236C20.3689 31.4118 20.2202 31.6356 20.1196 31.8819C20.019 32.1283 19.9686 32.3922 19.9713 32.6583C19.974 32.9244 20.0298 33.1872 20.1354 33.4315C20.2409 33.6757 20.3942 33.8965 20.5861 34.0808L27.2528 40.7474C27.6279 41.1224 28.1365 41.333 28.6668 41.333C29.1972 41.333 29.7058 41.1224 30.0809 40.7474L43.4142 27.4141C43.7028 27.1331 43.8997 26.7715 43.9794 26.3767C44.059 25.9819 44.0176 25.5723 43.8606 25.2014C43.7036 24.8305 43.4382 24.5156 43.0993 24.298C42.7604 24.0804 42.3637 23.9702 41.9611 23.9818Z" fill="#0EB159"></path>
                    </svg>
                </div>
                <h1 class="title sub-title title-line">We sent your verification mail to {{ $email_mask }}</h1>
                <p class="desc">Check your email and follow the link in the official email to change your password</p>
                <div class="title title-small-1 mt-9 pb-0 mb-0">Didn't receive an email? <button type="button" style="cursor: auto" class="seconds title-small__link ">60 s.</button> <button type="submit" class="title-small__link send_button d-none">Resend email</button></div>
            </form>
        </div>
    </main>
@endsection

@push('scripts')
    <script src="{{ asset('js/jquery.postpone.min.js') }}"></script>
    <script>
        $(function (){
            let seconds = 60;
            $.every(1000, 'Avaq').progress(function () {
                seconds--;
                if(seconds < 0 ) return;

                if(seconds > 0){
                    $('.seconds').html(seconds+ ' s.');
                }else{
                    $('.send_button').removeClass('d-none');
                    $('.seconds').addClass('d-none');
                }
            });
        })
    </script>
@endpush
