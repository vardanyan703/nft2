<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Cache-Control" content="no-cache">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="{{ asset('favicon.png?v=2') }}" type="image/x-icon">
    <title>@yield('title')</title>
    <link href="{{ asset('assets/cabinet/style/default/css/tabler.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/cabinet/style/default/css/tabler-vendors.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/cabinet/style/default/css/demo.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/cabinet/style/default/css/bootstrap-icons.css') }}" rel="stylesheet">
    <script src="{{ asset('assets/cabinet/style/default/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/cabinet/style/default/js/jquery-ui.min.js') }}"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <script src="{{ asset('assets/cabinet/style/default/libs/apexcharts/dist/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets/cabinet/style/default/js/tabler.min.js') }}"></script>
    <script src="{{ asset('assets/cabinet/style/default/js/jquery.inputmask.min.js') }}"></script>

{{--    <link type="text/css" rel="stylesheet" charset="UTF-8"--}}
{{--          href="{{ asset('assets/translate.googleapis.com/translate_static/css/translateelement.css') }}">--}}
{{--    <script type="text/javascript" charset="UTF-8"--}}
{{--            src="{{ asset('assets/translate.googleapis.com/translate_static/js/element/main_ru.js') }}"></script>--}}
{{--    <script type="text/javascript" charset="UTF-8"--}}
{{--            src="{{ asset('assets/translate.googleapis.com/element/te_20210503_00/e/js/element/element_main.js') }}"></script>--}}
    <style type="text/css">@font-face {
            font-family: 'rbicon';
            src: url(chrome-extension://dipiagiiohfljcicegpgffpbnjmgjcnf/fonts/rbicon.woff2) format("woff2");
            font-weight: normal;
            font-style: normal;
        }
    </style>

    <style>
        .navbar-dark .navbar-nav .active>.nav-link{
            color: #ffdc3f
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('css/admin.css')}}">
    <link rel="stylesheet" href="{{asset('css/modal.css?v=2')}}">
    @stack('style')
</head>
