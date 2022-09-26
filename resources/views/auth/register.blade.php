@extends('layout.app')

@section('content')

    <main class="yellow-bg">
        <div class="wrapper wrapper-p">
            <form class="forms-section bg-white" action="{{ route('register') }}" method="post">
                @csrf
                <div class="effects">
                    <div class="effect effect-1">
                        <img src="images/heand-1__small.png" alt="">
                    </div>
                    <div class="effect effect-2">
                        <img src="images/heand-2__small.png" alt="">
                    </div>
                </div>
                <h1 class="title title-line">Sign Up</h1>
                <p class="desc">Be careful when filling out the form fields.</p>
                <div class="mt-xl-8 mt-md-5 mt-4 mb-xl-15 mb-md-10 mb-4">
                    <div class="form-item">
                        <label for="username" class="form-label">Username</label>
                        <div class="form-input @if($errors->has('name')) error @endif">
                            <input type="text" name="name" id="username" value="{{ old('name') }}"
                                   placeholder="Andrew Marynovych">
                            @error('name')
                                    <div class="form-input__error">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-item">
                        <label for="email" class="form-label">Email</label>
                        <div class="form-input @if($errors->has('email')) error @endif">
                            <input type="text" name="email" id="email" value="{{ old('email') }}"
                                   placeholder="xolxllz@gmail.com">
                            @error('email')
                                <div class="form-input__error">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="title title-small pb-0 mb-0">Enter only a complex password (you can generate it using this
                    <a
                        href="https://generatepasswords.org/" target="_blank">link</a>)
                </div>
                <div class="mt-md-7 mt-5 mb-xl-11 mb-md-9 mb-7">
                    <div class="form-item">
                        <label for="password" class="form-label">Password</label>
                        <div class="form-input @if($errors->has('password')) error @endif">
                            <input type="password" name="password" id="password" placeholder="password">
                            @error('password')
                                <div class="form-input__error">{{ $message }}</div>
                            @enderror
                            <div class="password-seen active">
                                <svg class="password-1" width="26" height="26" viewBox="0 0 26 26" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <g opacity="0.4">
                                        <path
                                            d="M23.0048 2.15903C22.7938 2.16518 22.5935 2.2532 22.4462 2.40447L2.40458 22.4461C2.3266 22.521 2.26435 22.6107 2.22146 22.7099C2.17857 22.8091 2.15592 22.9159 2.15482 23.024C2.15372 23.1321 2.1742 23.2393 2.21506 23.3394C2.25592 23.4395 2.31634 23.5304 2.39278 23.6069C2.46921 23.6833 2.56014 23.7437 2.66022 23.7846C2.7603 23.8254 2.86752 23.8459 2.97562 23.8448C3.08371 23.8437 3.1905 23.8211 3.28973 23.7782C3.38896 23.7353 3.47864 23.673 3.5535 23.5951L9.16272 17.9859C10.1208 19.0227 11.4834 19.6786 12.9999 19.6786C15.887 19.6786 18.2378 17.3276 18.2378 14.446C18.2378 12.9294 17.582 11.5628 16.545 10.6035L18.9868 8.1618C21.6148 9.70054 23.6538 12.1856 24.4024 15.0956C24.4945 15.4639 24.8245 15.7081 25.1874 15.7081C25.2524 15.7081 25.3223 15.7023 25.3873 15.6806C25.8261 15.5723 26.0861 15.129 25.9724 14.6957C25.1383 11.4442 22.9997 8.70602 20.1918 6.9568L23.5952 3.5534C23.7124 3.43924 23.7924 3.29235 23.8248 3.13196C23.8571 2.97157 23.8403 2.80515 23.7765 2.65447C23.7127 2.5038 23.6049 2.37589 23.4672 2.28749C23.3296 2.19909 23.1684 2.15432 23.0048 2.15903ZM12.9946 4.87477C6.94417 4.87477 1.48988 9.00273 0.0273801 14.6957C-0.0863699 15.129 0.173672 15.5723 0.612423 15.6806C1.04576 15.7943 1.48903 15.5343 1.59737 15.0956C2.85945 10.1935 7.76208 6.49977 12.9946 6.49977C13.9208 6.49977 14.8359 6.61305 15.7188 6.83513L17.0518 5.50319C15.7572 5.09152 14.3921 4.87477 12.9946 4.87477ZM12.9999 9.2081C10.1128 9.2081 7.76729 11.5589 7.76729 14.446C7.76729 14.5543 7.77245 14.6677 7.77787 14.7761L13.3352 9.21868C13.2215 9.21326 13.1136 9.2081 12.9999 9.2081Z"
                                            fill="#231F20"/>
                                    </g>
                                </svg>
                                <svg class="password-2" width="26" height="26" viewBox="0 0 26 26" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M12.9926 4.875C6.86116 4.875 1.45867 9.12487 0.0254191 14.6938C-0.0281725 14.9025 0.00335831 15.124 0.113075 15.3095C0.222792 15.495 0.401707 15.6294 0.610461 15.6829C0.819215 15.7365 1.04071 15.705 1.22622 15.5953C1.41172 15.4856 1.54605 15.3067 1.59964 15.0979C2.83464 10.2993 7.61908 6.5 12.9926 6.5C18.3662 6.5 23.1658 10.3006 24.4004 15.0979C24.454 15.3067 24.5883 15.4856 24.7738 15.5953C24.9593 15.705 25.1808 15.7365 25.3896 15.6829C25.5983 15.6294 25.7773 15.495 25.887 15.3095C25.9967 15.124 26.0282 14.9025 25.9746 14.6938C24.541 9.12354 19.1241 4.875 12.9926 4.875ZM13.0011 9.20833C10.1194 9.20833 7.76638 11.5613 7.76638 14.443C7.76638 17.3247 10.1194 19.6788 13.0011 19.6788C15.8828 19.6788 18.2368 17.3247 18.2368 14.443C18.2368 11.5613 15.8828 9.20833 13.0011 9.20833Z"
                                        fill="#2C2E3C"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="form-item">
                        <label for="retype-password" class="form-label">Retype password</label>
                        <div class="form-input">
                            <input type="password" name="password_confirmation" id="retype-password"
                                   placeholder="password">
                            <div class="password-seen">
                                <svg class="password-1" width="26" height="26" viewBox="0 0 26 26" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <g opacity="0.4">
                                        <path
                                            d="M23.0048 2.15903C22.7938 2.16518 22.5935 2.2532 22.4462 2.40447L2.40458 22.4461C2.3266 22.521 2.26435 22.6107 2.22146 22.7099C2.17857 22.8091 2.15592 22.9159 2.15482 23.024C2.15372 23.1321 2.1742 23.2393 2.21506 23.3394C2.25592 23.4395 2.31634 23.5304 2.39278 23.6069C2.46921 23.6833 2.56014 23.7437 2.66022 23.7846C2.7603 23.8254 2.86752 23.8459 2.97562 23.8448C3.08371 23.8437 3.1905 23.8211 3.28973 23.7782C3.38896 23.7353 3.47864 23.673 3.5535 23.5951L9.16272 17.9859C10.1208 19.0227 11.4834 19.6786 12.9999 19.6786C15.887 19.6786 18.2378 17.3276 18.2378 14.446C18.2378 12.9294 17.582 11.5628 16.545 10.6035L18.9868 8.1618C21.6148 9.70054 23.6538 12.1856 24.4024 15.0956C24.4945 15.4639 24.8245 15.7081 25.1874 15.7081C25.2524 15.7081 25.3223 15.7023 25.3873 15.6806C25.8261 15.5723 26.0861 15.129 25.9724 14.6957C25.1383 11.4442 22.9997 8.70602 20.1918 6.9568L23.5952 3.5534C23.7124 3.43924 23.7924 3.29235 23.8248 3.13196C23.8571 2.97157 23.8403 2.80515 23.7765 2.65447C23.7127 2.5038 23.6049 2.37589 23.4672 2.28749C23.3296 2.19909 23.1684 2.15432 23.0048 2.15903ZM12.9946 4.87477C6.94417 4.87477 1.48988 9.00273 0.0273801 14.6957C-0.0863699 15.129 0.173672 15.5723 0.612423 15.6806C1.04576 15.7943 1.48903 15.5343 1.59737 15.0956C2.85945 10.1935 7.76208 6.49977 12.9946 6.49977C13.9208 6.49977 14.8359 6.61305 15.7188 6.83513L17.0518 5.50319C15.7572 5.09152 14.3921 4.87477 12.9946 4.87477ZM12.9999 9.2081C10.1128 9.2081 7.76729 11.5589 7.76729 14.446C7.76729 14.5543 7.77245 14.6677 7.77787 14.7761L13.3352 9.21868C13.2215 9.21326 13.1136 9.2081 12.9999 9.2081Z"
                                            fill="#231F20"/>
                                    </g>
                                </svg>
                                <svg class="password-2" width="26" height="26" viewBox="0 0 26 26" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M12.9926 4.875C6.86116 4.875 1.45867 9.12487 0.0254191 14.6938C-0.0281725 14.9025 0.00335831 15.124 0.113075 15.3095C0.222792 15.495 0.401707 15.6294 0.610461 15.6829C0.819215 15.7365 1.04071 15.705 1.22622 15.5953C1.41172 15.4856 1.54605 15.3067 1.59964 15.0979C2.83464 10.2993 7.61908 6.5 12.9926 6.5C18.3662 6.5 23.1658 10.3006 24.4004 15.0979C24.454 15.3067 24.5883 15.4856 24.7738 15.5953C24.9593 15.705 25.1808 15.7365 25.3896 15.6829C25.5983 15.6294 25.7773 15.495 25.887 15.3095C25.9967 15.124 26.0282 14.9025 25.9746 14.6938C24.541 9.12354 19.1241 4.875 12.9926 4.875ZM13.0011 9.20833C10.1194 9.20833 7.76638 11.5613 7.76638 14.443C7.76638 17.3247 10.1194 19.6788 13.0011 19.6788C15.8828 19.6788 18.2368 17.3247 18.2368 14.443C18.2368 11.5613 15.8828 9.20833 13.0011 9.20833Z"
                                        fill="#2C2E3C"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="title title-small pb-0 mb-0">PIN-code is needed to save your payment details</div>
                <div class="mt-md-7 mt-5 mb-xl-13 mb-md-9 mb-4">
                    <div class="form-item">
                        <label for="pin" class="form-label">PIN code <span>(4 digits)</span></label>
                        <div class="form-input">
                            <input type="text"
                                   id="pin"
                                   name="reg_pincode" minlength="4" maxlength="4"
                                   oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                                   pattern="[0-9]{4}" >
                        </div>
                    </div>
                    <div class="form-item">
                        <label for="verification" class="form-label">Captcha verification</label>
                        <div class="form-input @if($errors->has('captcha')) error @endif">
                            <div class="form-input__inner">
                                <div class="form-input__code">
                                    <img src="{{ captcha_src() }}" id="captcha" alt="">
                                    <svg id="reload" style="cursor: pointer" width="26" height="26" viewBox="0 0 26 26" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M14.0622 1.07274C13.7807 1.08112 13.5136 1.19875 13.3174 1.4007L11.247 3.47109C11.1136 3.57243 11.0055 3.70332 10.9312 3.85347C10.857 4.00363 10.8185 4.16896 10.8189 4.33648C10.8193 4.50401 10.8586 4.66915 10.9336 4.81894C11.0086 4.96873 11.1173 5.09909 11.2512 5.19977L13.3174 7.26593C13.4172 7.36991 13.5368 7.45291 13.6691 7.5101C13.8014 7.56728 13.9438 7.59749 14.0879 7.59896C14.232 7.60043 14.375 7.57312 14.5084 7.51864C14.6419 7.46416 14.7631 7.3836 14.865 7.28168C14.967 7.17977 15.0475 7.05853 15.102 6.92509C15.1565 6.79165 15.1838 6.64868 15.1823 6.50455C15.1808 6.36042 15.1506 6.21803 15.0934 6.08573C15.0363 5.95342 14.9533 5.83386 14.8493 5.73403L14.7382 5.62295C18.0947 6.40578 20.5833 9.39828 20.5833 13C20.5833 15.393 19.4703 17.4995 17.7375 18.8938C17.5136 19.0739 17.3704 19.3356 17.3394 19.6213C17.3241 19.7628 17.3368 19.9059 17.3768 20.0424C17.4168 20.179 17.4832 20.3064 17.5724 20.4172C17.6616 20.5281 17.7718 20.6203 17.8966 20.6886C18.0214 20.7569 18.1585 20.7999 18.3 20.8153C18.5857 20.8462 18.872 20.7624 19.0959 20.5823C21.3107 18.8002 22.75 16.0681 22.75 13C22.75 8.11019 19.1191 4.05601 14.4166 3.3653L14.8493 2.9326C15.0058 2.78043 15.1128 2.58452 15.156 2.37054C15.1993 2.15656 15.177 1.9345 15.0919 1.73344C15.0068 1.53239 14.863 1.36174 14.6792 1.24384C14.4955 1.12594 14.2804 1.0663 14.0622 1.07274ZM7.5717 5.16909C7.32751 5.17435 7.09227 5.26196 6.90413 5.41771C4.68928 7.1998 3.25 9.9319 3.25 13C3.25 17.8898 6.88095 21.944 11.5834 22.6347L11.1507 23.0674C11.0467 23.1672 10.9637 23.2868 10.9066 23.4191C10.8494 23.5514 10.8192 23.6938 10.8177 23.8379C10.8162 23.982 10.8435 24.125 10.898 24.2584C10.9525 24.3919 11.033 24.5131 11.135 24.615C11.2369 24.7169 11.3581 24.7975 11.4916 24.852C11.625 24.9065 11.768 24.9338 11.9121 24.9323C12.0562 24.9308 12.1986 24.9006 12.3309 24.8434C12.4632 24.7862 12.5828 24.7032 12.6826 24.5993L14.753 22.5289C14.8864 22.4275 14.9945 22.2966 15.0688 22.1465C15.143 21.9963 15.1815 21.831 15.1811 21.6635C15.1807 21.496 15.1414 21.3308 15.0664 21.181C14.9914 21.0312 14.8827 20.9009 14.7488 20.8002L12.6826 18.734C12.5815 18.6301 12.4606 18.5476 12.3271 18.4912C12.1935 18.4349 12.05 18.4059 11.905 18.4061C11.6896 18.4063 11.4792 18.4708 11.3006 18.5913C11.122 18.7117 10.9833 18.8827 10.9024 19.0823C10.8214 19.2819 10.8018 19.5012 10.846 19.712C10.8903 19.9228 10.9963 20.1157 11.1507 20.2659L11.2618 20.377C7.90532 19.5942 5.41667 16.6017 5.41667 13C5.41667 10.607 6.52972 8.50042 8.26253 7.10618C8.44195 6.96608 8.57268 6.77301 8.63616 6.5544C8.69964 6.33579 8.69265 6.10274 8.61618 5.88833C8.53971 5.67391 8.39765 5.48903 8.21016 5.35992C8.02267 5.23082 7.79928 5.16405 7.5717 5.16909Z"
                                            fill="black"/>
                                    </svg>
                                </div>
                                <div class="w-full">
                                    <input type="text" name="verification" id="verification" value="">
                                    @error('captcha')
                                        <div class="form-input__error">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="form-item">
                    <button class="btn btn-primary">Complete registration</button>
                </div>
                <div class="title title-small-1 mt-11 pb-0 mb-0">Already have a NFT Grower Account? <a href="{{ route('login') }}"
                                                                                                       class="title-small__link">Login</a>
                </div>
            </form>

        </div>
    </main>
@endsection

@push('scripts')
    <script type="text/javascript">
        $('#reload').click(function () {
            $.ajax({
                type: 'GET',
                url: 'reload-captcha',
                success: function (data) {
                    $("#captcha").prop('src', data.captcha);
                }
            });
        });
    </script>
@endpush
