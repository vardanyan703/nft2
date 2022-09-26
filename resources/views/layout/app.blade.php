<!doctype html>
<html lang="auto">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>NFT Grower - NFT Collection | P2E Metaverse | Investment Pool </title>
    {!! Meta::tag('robots') !!}
    {!! Meta::tag('type') !!}
    {!! Meta::tag('site_name', 'Nftgrower') !!}
    {!! Meta::tag('url', Request::url()); !!}
    {!! Meta::tag('description') !!}
    {!! Meta::tag('image',asset('assets/cabinet/style/default/img/monky.png')) !!}
    <meta itemprop="image" content="{{ asset('assets/cabinet/style/default/img/monky.png') }}">
    <title>NFT Grower - NFT Collection | P2E Metaverse | Investment Pool </title>

    <link rel="stylesheet" href="{{ asset('css/main.min.css') }}">

    <!-- Yandex.Metrika counter -->
    <script type="text/javascript" >
        // (function(m,e,t,r,i,k,a){m[i]=m[i]function(){(m[i].a=m[i].a[]).push(arguments)};
        //     m[i].l=1*new Date();
        //     for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
        //     k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
        // (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");
        //
        // ym(90360544, "init", {
        //     clickmap:true,
        //     trackLinks:true,
        //     accurateTrackBounce:true,
        //     webvisor:true
        // });
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/90360544" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->
</head>
<body @if(Route::currentRouteName('home') == 'home') class="home" @endif >

@include('layout.includes.header')
@yield('content')
@include('layout.includes.footer')

<script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
<script src="{{ asset('js/plugins.min.js') }}"></script>
<script src="{{ asset('js/main.min.js') }}"></script>

<script type="text/javascript">
    function googleTranslateElementInit2() {
        new google.translate.TranslateElement({pageLanguage: 'en', autoDisplay: true}, 'google_translate_element2');
    }
</script>

<script type="text/javascript" src="{{ asset('assets/theme/style/flags/f.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/theme/style/flags/google_translater.js') }}"></script>

@stack('scripts')
</body>
</html>

