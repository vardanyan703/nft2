@extends('layout.app')

@section('header')
    @include('layout.includes.header')
@endsection

@section('content')
    <div class="inner-header-main">
        <div class="container-fluid">
            <div class="wrapper">
                <h2 class="heading heading-h2">News</h2>
            </div>
        </div>
    </div>
    <div class="cal-to-action-main">
        <div class="container-fluid">
            <div class="wrapper">
                <h2 class="heading heading-h2">Company News</h2>
            </div>
            @foreach($news as $item)
                <div class="row row-custom mb-3">
                <div class="col-md-2">
                    <img src="{{ $item->attachment[0]->url() }}" alt="" style="width: 100%;margin: 10px 0px;border-radius: 20px;">
                </div>
                <div class="col-md-10 col-detail-otr">
                    <div class="col-detail-inr">
                        <p class="desc desc-4 heading-S" style="padding: 10px;">
                        </p>
                        <div>
                            {!! $item->text !!}
                        </div>
                        <p></p>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="col-detail-inr">
                        <p class="desc desc-4 heading-S"
                           style="padding: 10px;background: #0F1112;color: #fff;border-radius: 25px;margin-bottom: 11px;">
                            {{ $item->created_at }} - <span style="font-weight: 900;">{{ $item->name }}</span>
                        </p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection