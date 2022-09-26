@extends('layout.app')

@section('header')
    @include('layout.includes.header')
@endsection

@section('content')
    <div class="inner-header-main">
        <div class="container-fluid">
            <div class="wrapper">
                <h2 class="heading heading-h2">Video Review</h2>
            </div>
        </div>
    </div>
    <div class="cal-to-action-main">
        <div class="container-fluid">
            <div class="wrapper">
                <h2 class="heading heading-h2">Video Review</h2>
            </div>
            <div class="row">
                @foreach($video_reviews as $video_review)
                <div class="col-md-4">
                    <div class="row row-custom mb-3">
                        <div class="col-md-12">
                            <div class="mt-3">
                                <iframe width="100%" height="350" src="{{ $video_review->link }}" title=""
                                        frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen=""></iframe>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="col-detail-inr">
                                <p class="desc desc-4 heading-S text-center"
                                   style="padding: 10px;background: #0F1112;color: #fff;border-radius: 25px;margin-bottom: 11px;">
                                    <span style="font-weight: 900;">{{ $video_review->title }}</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection