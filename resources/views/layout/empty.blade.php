<html lang="en" style="height: 100%;">
<head>
    <meta http-equiv="Cache-Control" content="no-cache">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{--    <meta property="og:image" content="{{ asset('assets/cabinet/style/default/img/monky.png') }}" />--}}
    <link rel="shortcut icon" href="{{ asset('favicon.png?v=2') }}" type="image/x-icon">
    {!! Meta::tag('robots') !!}
    {!! Meta::tag('type') !!}
    {!! Meta::tag('site_name', 'Nftgrower') !!}
    {!! Meta::tag('url', Request::url()); !!}
    {!! Meta::tag('description') !!}
    {!! Meta::tag('image',asset('assets/cabinet/style/default/img/monky.png')) !!}
    <meta itemprop="image" content="{{ asset('assets/cabinet/style/default/img/monky.png') }}">
    <title>NFT Grower - Web 3.0 | NFT Metaverse</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
          integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <!--<link type="text/css" rel="stylesheet" charset="UTF-8" href="./translate.googleapis.com/translate_static/css/translateelement.css">-->
    <!--    <script type="text/javascript" charset="UTF-8" src="./translate.googleapis.com/translate_static/js/element/main_ru.js"></script>-->
    <!--    <script type="text/javascript" charset="UTF-8" src="./translate.googleapis.com/element/te_20210503_00/e/js/element/element_main.js"></script>-->
    <style type="text/css">@font-face {
            font-family: 'rbicon';
            src: url(chrome-extension://dipiagiiohfljcicegpgffpbnjmgjcnf/fonts/rbicon.woff2) format("woff2");
            font-weight: normal;
            font-style: normal;
        }
    </style>
</head>
<body style="margin: 0">

@yield('content')

@stack('scripts')
</body>
</html>
