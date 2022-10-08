@extends('cabinet.layouts.app')
@section('title','NFT Grower - Support')
@section('cabinet-content')
    <div class="content">
        <div class="container-fluid">
            <div class="cardfon">
                <div class="row row-deck row-cards">
                    <div class="col-md-12">
                        <div class="card card-grey card-tokens mb-2">
                            <h4 class="title title-small text-uppercase title-line mb-md-2">Ticket creation</h4>

                            @if (session('status'))
                                <div class="alert alert-success" role="alert" style="background: #bbe082">
                                    {{ session('status') }}
                                </div>
                            @endif
                            <form class="form-support" class="mb-0" action="{{ route('cabinet.support.store') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12 mt-lg-4 mt-3 mb-3 pb-lg-1">
                                        <label class="form-label">Enter a subject:</label>
                                        <input type="text"
                                               class="form-control form-input-main table-white form-input-main__big"
                                               name="subject" minlength="1"
                                               maxlength="50" value="{{ old('subject') }}" placeholder="Subject">
                                        @if ($errors->has('subject'))
                                            <span class="text-danger">{{ $errors->first('subject') }}</span>
                                        @endif
                                    </div>
                                    <div class="col-md-12 mb-lg-4 mb-3">
                                        <label class="form-label">From email</label>
                                        <input type="text"
                                               class="form-control form-input-main table-white form-input-main__big"
                                               name="email" minlength="1"
                                               maxlength="50" value="{{ old('email') }}" placeholder="From email">
                                        @if ($errors->has('email'))
                                            <span class="text-danger">{{ $errors->first('email') }}</span>
                                        @endif
                                    </div>
                                    <div class="col-md-12 mb-lg-4 mb-3">
                                        <label class="form-label">Enter a message:</label>
                                        <textarea class="form-control form-textarea-main__big" name="message"
                                                  minlength="1"
                                                  maxlength="500"
                                                  placeholder="Message for support">{{ old('message') }}</textarea>
                                        @if ($errors->has('message'))
                                            <span class="text-danger">{{ $errors->first('message') }}</span>
                                        @endif
                                    </div>
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-lg-6 d-lg-none">
                                                <button type="button"
                                                        class="w-full btn btn-border-grey btn-big text-uppercase btn-main reset-search btn-primary mb-2"
                                                        onclick="reset_form();">
                                                    Reset form
                                                </button>
                                            </div>
                                            <div class="col-lg-6">
                                                <button type="submit" id="form"
                                                        class="w-full btn btn-yellow btn-big text-uppercase btn-main btn-primary">
                                                    Create ticket
                                                </button>
                                            </div>
                                            <div class="col-lg-6 d-lg-block d-none">
                                                <button type="button"
                                                        class="w-full btn btn-border-grey btn-big text-uppercase btn-main btn-primary reset-search"
                                                        onclick="reset_form();">
                                                    Reset form
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </form>


                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="card card-grey card-tokens">
                            <h4 class="title title-small text-uppercase title-line mb-4">Ticket List</h4>

                            <div class="table-responsive">
                                <table class="table table-new table-new-bold">
                                    <thead>
                                    <tr class="table-white">
                                        <th>Subject</th>
                                        <th>Message</th>
                                        <th>Registration date</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($contacts as $contact)
                                        <tr>
                                            <td>{{ $contact->subject }}</td>
                                            <td>{{ $contact->message }}</td>
                                            <td><i class="bi bi-clock"></i> {{ $contact->created_at }}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                <br>
                                {!! $contacts->withQueryString()->links() !!}
                            </div>
                        </div>
                    </div>
                    <script type="text/javascript">

                      function show_ticket_form() {
                        $("#ticket_button_open").hide();
                        $("#ticket_button_show").fadeIn(500);
                      }

                      function reset_form() {
                        $('.form-support')[0].reset();
                      }

                      function hide_ticket_form() {
                        $("#ticket_button_show").hide();
                        $("input[name='ticket_title']").val('');
                        $("textarea[name='ticket_message']").val('');
                        $("#ticket_button_open").fadeIn(500);
                      }
                    </script>
                </div>
            </div>
        </div>
    </div>
@endsection


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
