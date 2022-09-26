@extends('cabinet.layouts.app')

@section('cabinet-content')
    <div class="content">
        <div class="container-fluid">
            <div class="cardfon">
                <div class="row row-deck row-cards">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Project news</h4>
                            </div>
                            <div class="row">
                                @foreach($news as $item)
                                    <div class="col-md-12">
                                    <div class="card" style="background: #fff;">
                                        <div class="card-body">
                                            <h3 class="card-title">{{ $item->name }}</h3>
                                            <div>
                                                {!! $item->text !!}
                                            </div>
                                            <br>
                                            <i class="bi bi-calendar2-check"></i> {{ $item->created_at }}
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection