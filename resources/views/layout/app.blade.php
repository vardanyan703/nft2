<html lang="en" style="height: 100%;">
<head>
    <meta http-equiv="Cache-Control" content="no-cache">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
{{--    <meta property="og:image" content="{{ asset('assets/cabinet/style/default/img/monky.png') }}" />--}}

    {!! Meta::tag('robots') !!}
    {!! Meta::tag('type') !!}
    {!! Meta::tag('site_name', 'Nftgrower') !!}
    {!! Meta::tag('url', Request::url()); !!}
    {!! Meta::tag('description') !!}
    {!! Meta::tag('image',asset('assets/cabinet/style/default/img/monky.png')) !!}
    <meta itemprop="image" content="{{ asset('assets/cabinet/style/default/img/monky.png') }}">
    <title>NFT Grower - NFT Collection | P2E Metaverse | Investment Pool </title>
    @include('layout.includes.styles')
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
    <!-- Yandex.Metrika counter -->
    <script type="text/javascript" >
        (function(m,e,t,r,i,k,a){m[i]=m[i]function(){(m[i].a=m[i].a[]).push(arguments)};
            m[i].l=1*new Date();
            for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
            k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
        (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

        ym(90360544, "init", {
            clickmap:true,
            trackLinks:true,
            accurateTrackBounce:true,
            webvisor:true
        });
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/90360544" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->
    <style>
        .btn-primary-1:hover{
            background-color: #808080;
            border: 1px solid #808080;
        }
        .hero2-main .container-fluid .navbar-main-2 .wrapper .navigation-otr .navigation-inr .navigation-li .nav-a:hover{
            color: #808080;
        }
        .hero2-main .container-fluid .navbar-main-2 .wrapper .action-nav .burger-icon-otr .burger-icon{
            color: black;
        }
        .overlay-content .modal-content-inr .logo-main .close-icon-otr .close-icon{
            color: black;
        }
    </style>
</head>
<body style="position: relative; min-height: 100%; top: 0px;">

@include('layout.includes.main')
@include('layout.includes.footer')
@include('layout.includes.scripts')


@stack('scripts')
</body>
</html>
