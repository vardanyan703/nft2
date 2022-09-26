@extends('layout.app')

@section('header')
    @include('layout.includes.header')
@endsection

@section('content')
    <div class="inner-header-main">
        <div class="container-fluid">
            <div class="wrapper">
                <h2 class="heading heading-h2">FAQ</h2>
            </div>
        </div>
    </div>
    <div class="faq-main">
        <div class="container-fluid">
            <div class="wrapper">
                <div class="tab-otr">
                    <h2 class="heading heading-h2">Frequently Asked Questions</h2>
                </div>
            </div>
            <div class="row-custom-main">
                <div class="tab-content active">
                    <div class="row row-custom-inr">
                        <div class="col-lg-6 col-otr">
                            <div class="col-inr">
                                <div class="accordion" id="accordionExample1">
                                    @foreach($faq->list as $key => $list)
                                        @if((int)$list['left'])
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingOne">
                                                    <button class="accordion-button heading-MB collapsed" type="button"
                                                            data-bs-toggle="collapse" data-bs-target="#collapseOne{{$key}}"
                                                            aria-expanded="false" aria-controls="collapseOne">
                                                        {{ $list['question'] }}
                                                    </button>
                                                </h2>
                                                <div id="collapseOne{{ $key }}" class="accordion-collapse collapse"
                                                     aria-labelledby="headingOne" data-bs-parent="#accordionExample1" style="">
                                                    <div class="accordion-body heading-S">
                                                        {!!  $list['answer']  !!}
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-otr">
                            <div class="col-inr">
                                <div class="accordion" id="accordionExample2">
                                    @foreach($faq->list as $key => $list)
                                        @if((int)$list['right'])
                                            <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingSeven">
                                            <button class="accordion-button collapsed heading-MB" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseSeven{{$key}}"
                                                    aria-expanded="true" aria-controls="collapseSeven">
                                                {{ $list['question'] }}
                                            </button>
                                        </h2>
                                        <div id="collapseSeven{{$key}}" class="accordion-collapse collapse"
                                             aria-labelledby="headingSeven" data-bs-parent="#accordionExample2">
                                            <div class="accordion-body heading-S">
                                                {!! $list['answer'] !!}
                                            </div>
                                        </div>
                                    </div>
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection