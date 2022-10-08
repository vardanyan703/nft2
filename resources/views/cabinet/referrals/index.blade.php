@extends('cabinet.layouts.app')
@section('title','NFT Grower - Referrals')
@section('cabinet-content')
    <div class="content">
        <div class="container-fluid">
            <div class="cardfon">
                <div class="row row-deck row-cards">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-xl-4 mb-0 mb-md-3">
                                <div class="card card-sm card-main mt-xxl-4 mt-2 mb-0">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div>
                                            <h4 class="card-main__title">Affiliate program</h4>
                                            <div class="card-main__price" translate="no">
                                                {{ implode('%-',$affiliate_percents).'%' }}
                                            </div>
                                        </div>
                                        <span class="bg-border-yellow avatar" translate="no">
                                                <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M15.9997 2C15.765 1.99996 15.5377 2.08247 15.3577 2.23307C15.3577 2.23307 12.8727 4.31036 10.3903 7.36068C7.90793 10.411 5.33301 14.4531 5.33301 18.6667C5.33301 24.5458 10.1205 29.3333 15.9997 29.3333C21.8788 29.3333 26.6663 24.5458 26.6663 18.6667C26.6663 14.162 23.7336 9.8521 21.096 6.74479C20.9636 6.58852 20.7863 6.47669 20.5882 6.42443C20.3902 6.37217 20.1808 6.382 19.9885 6.45259C19.7962 6.52318 19.6302 6.65112 19.513 6.81912C19.3957 6.98712 19.3329 7.18707 19.333 7.39193V10.3333C19.333 10.8977 18.8973 11.3333 18.333 11.3333C17.7687 11.3333 17.333 10.8977 17.333 10.3333V3.29036C17.333 3.14881 17.3029 3.00887 17.2448 2.87981C17.1866 2.75074 17.1018 2.63549 16.9958 2.54167C16.7788 2.34949 16.6442 2.23568 16.6442 2.23568C16.4639 2.08356 16.2356 2.00008 15.9997 2ZM15.333 4.96484V10.3333C15.333 11.9783 16.688 13.3333 18.333 13.3333C19.978 13.3333 21.333 11.9783 21.333 10.3333V10.3203C23.1585 12.9101 24.6663 15.9258 24.6663 18.6667C24.6663 23.4649 20.7979 27.3333 15.9997 27.3333C11.2015 27.3333 7.33301 23.4649 7.33301 18.6667C7.33301 15.3036 9.59142 11.5125 11.9424 8.6237C13.2462 7.02154 14.4309 5.82178 15.333 4.96484ZM19.6468 15.3242C19.3871 15.3318 19.1405 15.4401 18.9593 15.6263L12.2926 22.293C12.1967 22.3851 12.1201 22.4955 12.0673 22.6176C12.0145 22.7397 11.9866 22.8712 11.9852 23.0042C11.9839 23.1373 12.0091 23.2692 12.0594 23.3924C12.1097 23.5156 12.184 23.6275 12.2781 23.7216C12.3722 23.8156 12.4841 23.89 12.6073 23.9403C12.7305 23.9906 12.8624 24.0158 12.9955 24.0144C13.1285 24.0131 13.2599 23.9852 13.3821 23.9324C13.5042 23.8796 13.6146 23.803 13.7067 23.707L20.3734 17.0404C20.5176 16.8999 20.6161 16.7191 20.656 16.5217C20.6958 16.3243 20.6751 16.1194 20.5966 15.934C20.5181 15.7486 20.3854 15.5911 20.2159 15.4823C20.0465 15.3735 19.8481 15.3184 19.6468 15.3242ZM13.333 15.3333C12.9794 15.3333 12.6402 15.4738 12.3902 15.7239C12.1402 15.9739 11.9997 16.313 11.9997 16.6667C11.9997 17.0203 12.1402 17.3594 12.3902 17.6095C12.6402 17.8595 12.9794 18 13.333 18C13.6866 18 14.0258 17.8595 14.2758 17.6095C14.5259 17.3594 14.6663 17.0203 14.6663 16.6667C14.6663 16.313 14.5259 15.9739 14.2758 15.7239C14.0258 15.4738 13.6866 15.3333 13.333 15.3333ZM19.333 21.3333C18.9794 21.3333 18.6402 21.4738 18.3902 21.7239C18.1402 21.9739 17.9997 22.313 17.9997 22.6667C17.9997 23.0203 18.1402 23.3594 18.3902 23.6095C18.6402 23.8595 18.9794 24 19.333 24C19.6866 24 20.0258 23.8595 20.2758 23.6095C20.5259 23.3594 20.6663 23.0203 20.6663 22.6667C20.6663 22.313 20.5259 21.9739 20.2758 21.7239C20.0258 21.4738 19.6866 21.3333 19.333 21.3333Z"
                                                        fill="#14151B"/>
                                                </svg>
                                            </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 mb-0 mb-md-3">
                                <div class="card card-sm card-main mt-xxl-4 mt-2 mb-0">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div>
                                            <h4 class="card-main__title">Total referrals</h4>
                                            <div class="card-main__price" translate="no">
                                                {{ $user->referrals_count }}
                                            </div>
                                        </div>
                                        <span class="bg-border-yellow avatar" translate="no">
                                               <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                   <path
                                                       d="M16.0003 4C14.7503 4 13.6862 4.50476 13.0029 5.27344C12.3197 6.04212 12.0003 7.02778 12.0003 8C12.0003 8.97222 12.3197 9.95788 13.0029 10.7266C13.6862 11.4952 14.7503 12 16.0003 12C17.2503 12 18.3144 11.4952 18.9977 10.7266C19.681 9.95788 20.0003 8.97222 20.0003 8C20.0003 7.02778 19.681 6.04212 18.9977 5.27344C18.3144 4.50476 17.2503 4 16.0003 4ZM7.33366 5.33333C6.30588 5.33333 5.40842 5.75476 4.83626 6.39844C4.2641 7.04212 4.00033 7.86111 4.00033 8.66667C4.00033 9.47222 4.2641 10.2912 4.83626 10.9349C5.40842 11.5786 6.30588 12 7.33366 12C8.36144 12 9.25889 11.5786 9.83105 10.9349C10.4032 10.2912 10.667 9.47222 10.667 8.66667C10.667 7.86111 10.4032 7.04212 9.83105 6.39844C9.25889 5.75476 8.36144 5.33333 7.33366 5.33333ZM24.667 5.33333C23.6392 5.33333 22.7418 5.75476 22.1696 6.39844C21.5974 7.04212 21.3337 7.86111 21.3337 8.66667C21.3337 9.47222 21.5974 10.2912 22.1696 10.9349C22.7418 11.5786 23.6392 12 24.667 12C25.6948 12 26.5922 11.5786 27.1644 10.9349C27.7365 10.2912 28.0003 9.47222 28.0003 8.66667C28.0003 7.86111 27.7365 7.04212 27.1644 6.39844C26.5922 5.75476 25.6948 5.33333 24.667 5.33333ZM16.0003 6C16.7503 6 17.1862 6.24524 17.5029 6.60156C17.8197 6.95788 18.0003 7.47222 18.0003 8C18.0003 8.52778 17.8197 9.04212 17.5029 9.39844C17.1862 9.75476 16.7503 10 16.0003 10C15.2503 10 14.8144 9.75476 14.4977 9.39844C14.181 9.04212 14.0003 8.52778 14.0003 8C14.0003 7.47222 14.181 6.95788 14.4977 6.60156C14.8144 6.24524 15.2503 6 16.0003 6ZM7.33366 7.33333C7.86144 7.33333 8.13065 7.49524 8.33626 7.72656C8.54188 7.95788 8.66699 8.30556 8.66699 8.66667C8.66699 9.02778 8.54188 9.37545 8.33626 9.60677C8.13065 9.83809 7.86144 10 7.33366 10C6.80588 10 6.53667 9.83809 6.33105 9.60677C6.12544 9.37545 6.00033 9.02778 6.00033 8.66667C6.00033 8.30556 6.12544 7.95788 6.33105 7.72656C6.53667 7.49524 6.80588 7.33333 7.33366 7.33333ZM24.667 7.33333C25.1948 7.33333 25.464 7.49524 25.6696 7.72656C25.8752 7.95788 26.0003 8.30556 26.0003 8.66667C26.0003 9.02778 25.8752 9.37545 25.6696 9.60677C25.464 9.83809 25.1948 10 24.667 10C24.1392 10 23.87 9.83809 23.6644 9.60677C23.4588 9.37545 23.3337 9.02778 23.3337 8.66667C23.3337 8.30556 23.4588 7.95788 23.6644 7.72656C23.87 7.49524 24.1392 7.33333 24.667 7.33333ZM5.00033 13.3333C3.71366 13.3333 2.66699 14.38 2.66699 15.6667V20C2.66699 22.94 5.06033 25.3333 8.00033 25.3333C8.47366 25.3333 8.93402 25.2736 9.37402 25.1536C9.09402 24.5536 8.8871 23.9129 8.77376 23.2396C8.5271 23.2996 8.26699 23.3333 8.00033 23.3333C6.16033 23.3333 4.66699 21.84 4.66699 20V15.6667C4.66699 15.48 4.81366 15.3333 5.00033 15.3333H8.68652C8.75319 14.5733 9.04684 13.8867 9.50684 13.3333H5.00033ZM12.3337 13.3333C11.057 13.3333 10.0003 14.39 10.0003 15.6667V22C10.0003 25.3018 12.6985 28 16.0003 28C19.3021 28 22.0003 25.3018 22.0003 22V15.6667C22.0003 14.39 20.9436 13.3333 19.667 13.3333H12.3337ZM22.4938 13.3333C22.9538 13.8867 23.2475 14.5733 23.3141 15.3333H27.0003C27.187 15.3333 27.3337 15.48 27.3337 15.6667V20C27.3337 21.84 25.8403 23.3333 24.0003 23.3333C23.7337 23.3333 23.4736 23.2996 23.2269 23.2396C23.1136 23.9129 22.9066 24.5536 22.6266 25.1536C23.0666 25.2736 23.527 25.3333 24.0003 25.3333C26.9403 25.3333 29.3337 22.94 29.3337 20V15.6667C29.3337 14.38 28.287 13.3333 27.0003 13.3333H22.4938ZM12.3337 15.3333H19.667C19.8637 15.3333 20.0003 15.47 20.0003 15.6667V22C20.0003 24.2209 18.2212 26 16.0003 26C13.7795 26 12.0003 24.2209 12.0003 22V15.6667C12.0003 15.47 12.137 15.3333 12.3337 15.3333Z"
                                                       fill="#14151B"/>
                                                </svg>
                                            </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 mb-0 mb-md-3">
                                <div class="card card-sm card-main mt-xxl-4 mt-2 mb-0">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div>
                                            <h4 class="card-main__title">Total profit</h4>
                                            <div class="card-main__price" translate="no">
                                                {{ number_format($user_referrals_deposit_cash_back_sum, 2, '.', ',') }}
                                                USD
                                            </div>
                                        </div>
                                        <span class="bg-border-yellow avatar" translate="no">
                                              <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                                   xmlns="http://www.w3.org/2000/svg">
                                                  <path
                                                      d="M5.66634 4C4.3897 4 3.33301 5.0567 3.33301 6.33333V17.6667C3.33301 18.9433 4.3897 20 5.66634 20H26.333C27.6096 20 28.6663 18.9433 28.6663 17.6667V6.33333C28.6663 5.0567 27.6096 4 26.333 4H5.66634ZM7.33301 6H24.6663C24.6663 7.10667 25.5597 8 26.6663 8V16C25.5597 16 24.6663 16.8933 24.6663 18H7.33301C7.33301 16.8933 6.43967 16 5.33301 16V8C6.43967 8 7.33301 7.10667 7.33301 6ZM15.9997 7.33333C14.6941 7.33333 13.5965 7.98941 12.9411 8.89063C12.2856 9.79185 11.9997 10.9015 11.9997 12C11.9997 13.0985 12.2856 14.2082 12.9411 15.1094C13.5965 16.0106 14.6941 16.6667 15.9997 16.6667C17.3052 16.6667 18.4028 16.0106 19.0583 15.1094C19.7137 14.2082 19.9997 13.0985 19.9997 12C19.9997 10.9015 19.7137 9.79185 19.0583 8.89063C18.4028 7.9894 17.3052 7.33333 15.9997 7.33333ZM15.9997 9.33333C16.6941 9.33333 17.0965 9.59393 17.4411 10.0677C17.7856 10.5415 17.9997 11.2652 17.9997 12C17.9997 12.7348 17.7856 13.4585 17.4411 13.9323C17.0965 14.4061 16.6941 14.6667 15.9997 14.6667C15.3052 14.6667 14.9028 14.4061 14.5583 13.9323C14.2137 13.4585 13.9997 12.7348 13.9997 12C13.9997 11.2652 14.2137 10.5415 14.5583 10.0677C14.9028 9.59393 15.3052 9.33333 15.9997 9.33333ZM7.99967 10.6667C7.64605 10.6667 7.30691 10.8071 7.05687 11.0572C6.80682 11.3072 6.66634 11.6464 6.66634 12C6.66634 12.3536 6.80682 12.6928 7.05687 12.9428C7.30691 13.1929 7.64605 13.3333 7.99967 13.3333C8.3533 13.3333 8.69243 13.1929 8.94248 12.9428C9.19253 12.6928 9.33301 12.3536 9.33301 12C9.33301 11.6464 9.19253 11.3072 8.94248 11.0572C8.69243 10.8071 8.3533 10.6667 7.99967 10.6667ZM23.9997 10.6667C23.6461 10.6667 23.3069 10.8071 23.0569 11.0572C22.8068 11.3072 22.6663 11.6464 22.6663 12C22.6663 12.3536 22.8068 12.6928 23.0569 12.9428C23.3069 13.1929 23.6461 13.3333 23.9997 13.3333C24.3533 13.3333 24.6924 13.1929 24.9425 12.9428C25.1925 12.6928 25.333 12.3536 25.333 12C25.333 11.6464 25.1925 11.3072 24.9425 11.0572C24.6924 10.8071 24.3533 10.6667 23.9997 10.6667ZM5.36296 21.332C5.51029 22.4354 6.42196 23.292 7.57129 23.332C14.8213 23.5827 20.188 25.9982 23.0713 27.2956C23.5846 27.5269 24.0263 27.7244 24.3916 27.8737C24.5936 27.9564 24.8053 27.9974 25.0166 27.9974C25.3393 27.9974 25.6586 27.9021 25.9346 27.7174C26.3926 27.4101 26.6663 26.8958 26.6663 26.3424V21.3333H24.6663V24C23.9095 24 23.26 24.4222 22.9202 25.0404C19.7538 23.6424 14.5394 21.5717 7.6403 21.3333C7.63897 21.3333 7.63836 21.332 7.6377 21.332H5.36296Z"
                                                      fill="#14151B"/>
                                              </svg>
                                            </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="card card-grey card-tokens">
                            <div class="row">
                                <div class="col-md-12">
                                    <h4 class="title title-small text-uppercase title-line mb-xl-4 mb-3">Referral
                                        link</h4>
                                    <form>
                                        <div class="input-group">
                                            <input type="text"
                                                   class="form-control form-input-main table-white form-input-main__big"
                                                   style="background: #fff;"
                                                   value="{{ route('referral',['username' => auth()->user()->name]) }}"
                                                   id="copyreflink">
                                            <button class="btn btn-main-dark btn-copy rounded-0 copy_referal" type="button" data-clipboard-text='{{ route('referral',['username' => auth()->user()->name]) }}'>
                                                Copy
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <form action="{{ route('cabinet.referrals.index') }}" method="GET" class="form-support">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-xxl-8">
                                    <div class="card card-grey card-tokens">
                                        <form class="form-support">
                                            <div class="row">
                                                <div class="col-lg-6 mb-lg-0 mb-3">
                                                    <label class="form-label">Search by your referrals</label>
                                                    <div class="choices" data-type="select-one" tabindex="0"
                                                         role="listbox" aria-haspopup="true" aria-expanded="false">

                                                        <select
                                                            class="form-select form-control form-select-main table-white form-select-main__big"
                                                            name="referal_search"
                                                            id="selects"
                                                        >
                                                            <option value="">Select a search method</option>
                                                            <option
                                                                @if(request()->get('referal_search') === 'name') selected
                                                                @endif value="name">By name
                                                            </option>
                                                            <option
                                                                @if(request()->get('referal_search') === 'email') selected
                                                                @endif value="email">By Email
                                                            </option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <label class="form-label">Enter value</label>
                                                    <input
                                                        class="form-control form-input-main table-white form-input-main__big"
                                                        autocomplete="off" type="text"
                                                        name="referal_search_val"
                                                        value="{{ request()->get('referal_search_val') }}"
                                                        placeholder=""
                                                        @if(request()->get('referal_search_val') == '') disabled=""
                                                        @endif
                                                        required="">
                                                </div>
                                            </div>
                                            <div class="form-footer">
                                                <div class="col-md-12">
                                                    <div class="row">
                                                        <div class="col-lg-6 d-lg-none mb-3">
                                                            <button type="button"
                                                                    class="w-full btn btn-border-grey btn-big  text-uppercase btn-main btn-primary reset-search">
                                                                Reset search parameters
                                                            </button>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <button type="submit" id="form"
                                                                    class="w-full btn btn-yellow btn-big text-uppercase btn-main btn-primary">
                                                                Search
                                                            </button>
                                                        </div>
                                                        <div class="col-lg-6 d-lg-block d-none">
                                                            <button type="button"
                                                                    class="w-full btn btn-border-grey btn-big text-uppercase btn-main btn-primary reset-search">
                                                                Reset search parameters
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-xxl-4">
                                    <div class="card card-grey card-tokens">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <label class="form-label">Sorting records</label>
                                                <div class="choices" data-type="select-one" tabindex="0"
                                                     role="listbox" aria-haspopup="true" aria-expanded="false">
                                                    <select
                                                        class="form-select form-control form-select-main table-white form-select-main__big"
                                                        name="referal_sort"
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
                    </form>
                    <div class="col-md-12">
                        <div class="card card-grey card-tokens">
                            <h4 class="title title-small text-uppercase title-line mb-4">Your referrals</h4>
                            @if(!$referrals->isEmpty())
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Registered At</th>
                                            <th class="text-center">Total referrals</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($referrals as $referral)
                                            <tr>
                                                <td>{{ $referral->name }}</td>
                                                <td><i class="bi bi-clock"></i> {{ $referral->created_at }}</td>
                                                <td class="text-center">{{ $referral->referrals_count }}</td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                    <hr>
                                    <br>
                                    {!! $referrals->withQueryString()->links() !!}
                                </div>
                            @else
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="main-empty ">
                                            <h4 class="main-empty__title">
                                                YOU DON'T HAVE ANY REFERRALS
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                            @endif

                        </div>
                    </div>
                </div>

                @push('scripts')
                    <script type="text/javascript">
                        document.addEventListener("DOMContentLoaded", function (event) {
                            $("select[name='referal_search']").on('change', function () {
                                var cur_value = this.value;
                                console.log(cur_value);
                                if (cur_value == 'login' || cur_value == 'name' || cur_value == 'email') {
                                    $("input[name='referal_search_val']").attr('placeholder', 'Example: demo');
                                    $("input[name='referal_search_val']").attr('disabled', false);
                                } else {
                                    $("input[name='referal_search_val']").attr('placeholder', '');
                                    $("input[name='referal_search_val']").attr('disabled', true);
                                }
                            });
                        });

                        $('.reset-search').on('click', function (e) {
                            e.preventDefault()
                            let url = new URL(window.location.href);
                            let params = new URLSearchParams(url.search);

                            params.delete('referal_search_val');
                            params.delete('referal_search');
                            window.location.href = window.location.origin + window.location.pathname + '?' + params.toString()
                        });

                        $("input[name='refback_percent_form']").inputmask({
                            regex: "[0-9]{1,3}[.][0-9]{1,4}",
                            showMaskOnHover: false,
                            showMaskOnFocus: false,
                            placeholder: ""
                        });
                    </script>

                @endpush

            </div>
        </div>
    </div>

@endsection

@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.10/clipboard.min.js"></script>
    <script>
        function reset_form() {
            $('.form-support')[0].reset();
        }

        var clipboard = new ClipboardJS('.copy_referal');

        clipboard.on('success', function(e) {
            var copyText = document.getElementById('copyreflink');
            copyText.select();
            copyText.setSelectionRange(0, 99999)
        });

    </script>
@endpush
