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
    <link rel="shortcut icon" href="{{ asset('favicon.png?v=2') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('css/main.min.css?v=1') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer">
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
<script src="{{ asset('js/main.min.js?v=1') }}"></script>

<div id="google_translate_element2">
    <div class="skiptranslate goog-te-gadget" dir="ltr">
<span style="white-space:nowrap">
    <a class="goog-logo-link" href="./translate.google.com/" target="_blank">
<img src="" width="37px" height="14px" style="padding-right: 3px" alt="Google Переводчик">
</a>
</span>
    </div>
    <div class="skiptranslate goog-te-gadget" dir="ltr" style="">
        <div id=":0.targetLanguage"><select class="goog-te-combo" aria-label="Язык виджета Google Переводчика">
                <option value="">Выбрать язык</option>
                <option value="ru">русский</option>
                <option value="az">азербайджанский</option>
                <option value="ay">аймара</option>
                <option value="sq">албанский</option>
                <option value="am">амхарский</option>
                <option value="ar">арабский</option>
                <option value="hy">армянский</option>
                <option value="as">ассамский</option>
                <option value="af">африкаанс</option>
                <option value="bm">бамбара</option>
                <option value="eu">баскский</option>
                <option value="be">белорусский</option>
                <option value="bn">бенгальский</option>
                <option value="my">бирманский</option>
                <option value="bg">болгарский</option>
                <option value="bs">боснийский</option>
                <option value="bho">бходжпури</option>
                <option value="cy">валлийский</option>
                <option value="hu">венгерский</option>
                <option value="vi">вьетнамский</option>
                <option value="haw">гавайский</option>
                <option value="gl">галисийский</option>
                <option value="el">греческий</option>
                <option value="ka">грузинский</option>
                <option value="gn">гуарани</option>
                <option value="gu">гуджарати</option>
                <option value="da">датский</option>
                <option value="doi">догри</option>
                <option value="zu">зулу</option>
                <option value="iw">иврит</option>
                <option value="ig">игбо</option>
                <option value="yi">идиш</option>
                <option value="ilo">илоканский</option>
                <option value="id">индонезийский</option>
                <option value="ga">ирландский</option>
                <option value="is">исландский</option>
                <option value="es">испанский</option>
                <option value="it">итальянский</option>
                <option value="yo">йоруба</option>
                <option value="kk">казахский</option>
                <option value="kn">каннада</option>
                <option value="ca">каталанский</option>
                <option value="qu">кечуа</option>
                <option value="ky">киргизский</option>
                <option value="zh-TW">китайский (традиционный)</option>
                <option value="zh-CN">китайский (упрощенный)</option>
                <option value="gom">конкани</option>
                <option value="ko">корейский</option>
                <option value="co">корсиканский</option>
                <option value="xh">коса</option>
                <option value="ht">креольский (гаити)</option>
                <option value="kri">крио</option>
                <option value="ku">курдский (курманджи)</option>
                <option value="ckb">курдский (сорани)</option>
                <option value="km">кхмерский</option>
                <option value="lo">лаосский</option>
                <option value="la">латинский</option>
                <option value="lv">латышский</option>
                <option value="ln">лингала</option>
                <option value="lt">литовский</option>
                <option value="lg">луганда</option>
                <option value="lb">люксембургский</option>
                <option value="mai">майтхили</option>
                <option value="mk">македонский</option>
                <option value="mg">малагасийский</option>
                <option value="ms">малайский</option>
                <option value="ml">малаялам</option>
                <option value="dv">мальдивский</option>
                <option value="mt">мальтийский</option>
                <option value="mi">маори</option>
                <option value="mr">маратхи</option>
                <option value="mni-Mtei">мейтейлон (манипури)</option>
                <option value="lus">мизо</option>
                <option value="mn">монгольский</option>
                <option value="de">немецкий</option>
                <option value="ne">непальский</option>
                <option value="nl">нидерландский</option>
                <option value="no">норвежский</option>
                <option value="or">ория</option>
                <option value="om">оромо</option>
                <option value="pa">панджаби</option>
                <option value="fa">персидский</option>
                <option value="pl">польский</option>
                <option value="pt">португальский</option>
                <option value="ps">пушту</option>
                <option value="rw">руанда</option>
                <option value="ro">румынский</option>
                <option value="sm">самоанский</option>
                <option value="sa">санскрит</option>
                <option value="ceb">себуанский</option>
                <option value="nso">сепеди</option>
                <option value="sr">сербский</option>
                <option value="st">сесото</option>
                <option value="si">сингальский</option>
                <option value="sd">синдхи</option>
                <option value="sk">словацкий</option>
                <option value="sl">словенский</option>
                <option value="so">сомалийский</option>
                <option value="sw">суахили</option>
                <option value="su">сунданский</option>
                <option value="tg">таджикский</option>
                <option value="th">тайский</option>
                <option value="ta">тамильский</option>
                <option value="tt">татарский</option>
                <option value="te">телугу</option>
                <option value="ti">тигринья</option>
                <option value="ts">тсонга</option>
                <option value="tr">турецкий</option>
                <option value="tk">туркменский</option>
                <option value="uz">узбекский</option>
                <option value="ug">уйгурский</option>
                <option value="uk">украинский</option>
                <option value="ur">урду</option>
                <option value="tl">филиппинский</option>
                <option value="fi">финский</option>
                <option value="fr">французский</option>
                <option value="fy">фризский</option>
                <option value="ha">хауса</option>
                <option value="hi">хинди</option>
                <option value="hmn">хмонг</option>
                <option value="hr">хорватский</option>
                <option value="ak">чви</option>
                <option value="ny">чева</option>
                <option value="cs">чешский</option>
                <option value="sv">шведский</option>
                <option value="sn">шона</option>
                <option value="gd">шотландский (гэльский)</option>
                <option value="ee">эве</option>
                <option value="eo">эсперанто</option>
                <option value="et">эстонский</option>
                <option value="jw">яванский</option>
                <option value="ja">японский</option>
            </select></div>
        Технологии <span style="white-space:nowrap"><a class="goog-logo-link" href="./translate.google.com.html"
                                                       target="_blank"><img
                    src="www.gstatic.com/images/branding/googlelogo/1x/googlelogo_color_42x16dp.png" width="37px"
                    height="14px" style="padding-right: 3px" alt="Google Переводчик">Переводчик</a></span></div>
</div>
<style type="text/css">
    #goog-gt-tt {
        display: none !important;
    }

    .goog-te-banner-frame {
        display: none !important;
    }

    .goog-te-menu-value:hover {
        text-decoration: none !important;
    }

    body {
        top: 0 !important;
    }

    #google_translate_element2 {
        display: none !important;
    }
</style>
<script type="text/javascript">
    function googleTranslateElementInit2() {
        new google.translate.TranslateElement({pageLanguage: 'en', autoDisplay: false}, 'google_translate_element2');
    }
</script>

<script type="text/javascript" src="{{ asset('assets/theme/style/flags/f.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/theme/style/flags/google_translater.js') }}"></script>


<script>
    function readCookie(name) {
        var c = document.cookie.split('; '),
            cookies = {}, i, C;

        for (i = c.length - 1; i >= 0; i--) {
            C = c[i].split('=');
            cookies[C[0]] = C[1];
        }

        return cookies[name];
    }
</script>
@stack('scripts')
</body>
</html>

