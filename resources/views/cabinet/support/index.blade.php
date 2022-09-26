@extends('cabinet.layouts.app')
@section('title','NFT Grower - Support')
@section('cabinet-content')
    <div class="content">
        <div class="container-fluid">
            <div class="cardfon">
                <div class="row row-deck row-cards">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Ticket creation</h4>
                            </div>
                            <div class="table-responsive">
                                <div id="ticket_button_open" align="center" style="display: none;">
                                    <div class="form-footer">
                                        <button type="button" name="submit" class="btn btn-primary"
                                                onclick="show_ticket_form();"><i
                                                    class="bi bi-chevron-compact-right"></i> Open form
                                        </button>
                                    </div>
                                </div>
                                @if (session('status'))
                                    <div class="alert alert-success" role="alert" style="background: #bbe082">
                                        {{ session('status') }}
                                    </div>
                                @endif
                                <div id="ticket_button_show" align="center" style="">
                                    <div class="card-body">
                                        <form action="{{ route('cabinet.support.store') }}" method="POST">
                                            @csrf
                                            <label class="form-label">Enter a subject:</label>
                                            <input type="text" class="form-control" name="subject" minlength="1"
                                                   maxlength="50" value="{{ old('subject') }}" placeholder="Subject">
                                            @if ($errors->has('subject'))
                                                <span class="text-danger">{{ $errors->first('subject') }}</span>
                                            @endif

                                            <label class="form-label">From email</label>
                                            <input type="text" class="form-control" name="email" minlength="1"
                                                   maxlength="50" value="{{ old('email') }}" placeholder="From email">
                                            @if ($errors->has('email'))
                                                <span class="text-danger">{{ $errors->first('email') }}</span>
                                            @endif

                                            <label class="form-label">Enter a message:</label>
                                            <textarea class="form-control" name="message" minlength="1"
                                                      maxlength="500" placeholder="Message for support">{{ old('message') }}</textarea>
                                            @if ($errors->has('message'))
                                                <span class="text-danger">{{ $errors->first('message') }}</span>
                                            @endif
                                            <div class="form-footer">
                                                <button type="submit"  id="form" class="btn btn-primary"><i
                                                            class="bi bi-chevron-compact-right"></i> Create ticket
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                    <hr>
                                    <button type="button" class="btn btn-primary" onclick="hide_ticket_form();"><i
                                                class="bi bi-chevron-compact-right"></i> Close form
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Ticket List</h4>
                            </div>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
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
                                <hr>
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
