<!DOCTYPE html>
<html class="wide wow-animation" lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css"
        href="//fonts.googleapis.com/css?family=Roboto+Condensed:300,400,700%7CLato%7CKalam:300,400,700">
    <link rel="canonical" href="{{ request()->url() }}" />
    <meta name="description" content="{{ $description ?? sc_store('description') }}">
    <meta name="keywords" content="{{ $keyword ?? sc_store('keyword') }}">
    <title>{{ $title ?? sc_store('title') }}</title>
    <link rel="icon" href="{{ sc_file(sc_store('icon', null, 'images/icon.png')) }}" type="image/png"
        sizes="16x16">
    <meta property="og:image" content="{{ !empty($og_image) ? sc_file($og_image) :  'https://dhg.kennatech.vn/data/banner/Banner Mới/tivi sale 640x450.jpg' }}" />
    <meta property="og:url" content="{{ \Request::fullUrl() }}" />
    <meta property="og:type" content="Website" />
    <meta property="og:title" content="{{ $title ?? sc_store('title') }}" />
    <meta property="og:description" content="{{ $description ?? sc_store('description') }}" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>


    <!-- Bootstrap CSS -->

    <link ecom-append-v="true" rel="stylesheet"
        href="{{ sc_file($sc_templateFile . '/assets/cdn/css/a_defaulta890.css?v=21_8_14') }}" />
    <link ecom-append-v="true" rel="stylesheet"
        href="{{ sc_file($sc_templateFile . '/assets/cdn/lib/bootstrap4/css/bootstrapa890.css?v=21_8_14') }}" />
    <link ecom-append-v="true" rel="stylesheet"
        href="{{ sc_file($sc_templateFile . '/assets/cdn/css/a_fonta890.css?v=21_8_14') }}" />
    <link ecom-append-v="true" rel="stylesheet"
        href="{{ sc_file($sc_templateFile . '/assets/cdn/css/ad_taba890.css?v=21_8_14') }}" />
    <link ecom-append-v="true" rel="stylesheet"
        href="{{ sc_file($sc_templateFile . '/assets/cdn/css/ad_mobilea890.css?v=21_8_14') }}" />
    <link ecom-append-v="true" rel="stylesheet"
        href="{{ sc_file($sc_templateFile . '/assets/cdn/css/i_nava890.css?v=21_8_14') }}" />
    <link ecom-append-v="true" rel="stylesheet"
        href="{{ sc_file($sc_templateFile . '/assets/cdn/css/i_owla890.css?v=21_8_14') }}" />
    <link ecom-append-v="true" rel="stylesheet"
        href="{{ sc_file($sc_templateFile . '/assets/cdn/css/g_fcpa890.css?v=21_8_14') }}" />
    <link ecom-append-v="true" rel="stylesheet"
        href="{{ sc_file($sc_templateFile . '/assets/cdn/css/m_bannera890.css?v=21_8_14') }}" />
    <link ecom-append-v="true" rel="stylesheet"
        href="{{ sc_file($sc_templateFile . '/assets/cdn/css/m_product_fcpa890.css?v=21_8_14') }}" />
    <link ecom-append-v="true" rel="stylesheet"
        href="{{ sc_file($sc_templateFile . '/assets/cdn/css/m_news_fcpa890.css?v=21_8_14') }}" />
    <link ecom-append-v="true" rel="stylesheet"
        href="{{ sc_file($sc_templateFile . '/assets/cdn/css/1_fixa890.css?v=21_8_14') }}" />
    <link ecom-append-v="true" rel="stylesheet"
        href="{{ sc_file($sc_templateFile . '/assets/cdn/css/m_reporta890.css?v=21_8_14') }}" />

    <link ecom-append-v="true" rel="stylesheet" href="{{ sc_file($sc_templateFile.'/assets/cdn/lib/font-awesome/css/font-awesome.css')}}"/>

    <script ecom-append-v="true" src="{{ sc_file($sc_templateFile . '/assets/cdn/lib/jquery/jquery-3.3.1.min.js') }}">
    </script>

    <link ecom-append-v="true" rel="stylesheet"
        href="{{ sc_file($sc_templateFile . '/assets/cdn/css/p_homea890.css?v=21_8_14') }}" />

    <link ecom-append-v="true" rel="stylesheet"
        href="{{ sc_file($sc_templateFile . '/assets/cdn/lib/bootstrap-star-rating/css/star-ratinga890.css?v=21_8_14') }}" />

    <link ecom-append-v="true" rel="stylesheet"
        href="{{ sc_file($sc_templateFile . '/assets/cdn/css/p_producta890.css?v=21_8_14') }}" />
    <link ecom-append-v="true" rel="stylesheet"
        href="{{ sc_file($sc_templateFile . '/assets/cdn/css/p_newsa890.css?v=21_8_14') }}" />
    <link ecom-append-v="true" rel="stylesheet"
        href="{{ sc_file($sc_templateFile . '/assets/cdn/css/m_feedbacka890.css?v=21_8_14') }}" />

    <script ecom-append-v="true" src="{{ sc_file($sc_templateFile . '/assets/cdn/lib/angular/angular.min.js') }}"></script>


    <!-- css default for item s-cart -->
    @include($sc_templatePath . '.common.css')
    <!--//end css defaut -->
    <!--Module header -->
    @includeIf($sc_templatePath . '.common.render_block', ['positionBlock' => 'header'])
    <!--//Module header -->

    {{-- <link rel="stylesheet" href="{{ sc_file($sc_templateFile.'/css/bootstrap.css')}}"> --}}
    <style>
        {!! sc_store_css() !!}
    </style>
    <style>
        .ie-panel {
            display: none;
            background: #212121;
            padding: 10px 0;
            box-shadow: 3px 3px 5px 0 rgba(0, 0, 0, .3);
            clear: both;
            text-align: center;
            position: relative;
            z-index: 1;
        }

        html.ie-10 .ie-panel,
        html.lt-ie-10 .ie-panel {
            display: block;
        }
    </style>
    @stack('styles')
</head>

<body>

    <div class="p-progress">
        <div class="progress-over">
        </div>
        <div class="progress" style="height:3px">
            <div class="progress-bar progress-filter" style="width:0%;height:10px"></div>
        </div>
    </div>

    {{-- Block header --}}
    @section('block_header')
        @include($sc_templatePath . '.block_header')
    @show
    {{-- // Block header --}}


    {{-- Block main --}}
    @section('block_main')
        @section('block_main_content')
            @include($sc_templatePath . '.block_main_content_center')
        @show
    @show

    {{-- Block footer --}}
    @section('block_footer')
        @include($sc_templatePath . '.block_footer')
    @show
    {{-- //Block footer --}}



    <div id="sc-loading">
        <div class="sc-overlay"><i class="fa fa-spinner fa-pulse fa-5x fa-fw "></i></div>
    </div>


    <!-- js default for item s-cart -->
    @include($sc_templatePath . '.common.js')
    <!--//end js defaut -->
    @stack('scripts')

    <script ecom-append-v="true" src="{{ sc_file($sc_templateFile . '/assets/cdn/lib/bootstrap4/js/bootstrap.js') }}">
    </script>
    <script ecom-append-v="true"
        src="{{ sc_file($sc_templateFile . '/assets/cdn/lib/multi-dropdown-menu/js/bootstrap-4-navbar.js') }}"></script>

    <script src="{{ sc_file($sc_templateFile . '/assets/cdn/lib/owlcarousel/dist/owl.carousel.min.js') }}"></script>


    {{-- <script ecom-append-v="true" src="{{ sc_file($sc_templateFile.'/assets/cdn/js/defaulta890.js?v=21_8_14')}}"></script> --}}
    <script ecom-append-v="true" src="{{ sc_file($sc_templateFile . '/assets/cdn/js/owlcustoma890.js?v=21_8_14') }}">
    </script>
    {{-- <script ecom-append-v="true" src="{{ sc_file($sc_templateFile.'/assets/cdn/js/functiona890.js?v=21_8_14')}}"></script> --}}
    <script ecom-append-v="true"
        src="{{ sc_file($sc_templateFile . '/assets/cdn/lib-modules/gallery/bannera890.js?v=21_8_14') }}"></script>
    <script ecom-append-v="true" src="{{ sc_file($sc_templateFile . '/assets/cdn/js/windowResizea890.js?v=21_8_14') }}">
    </script>
    {{-- <script ecom-append-v="true" src="{{ sc_file($sc_templateFile.'/assets/cdn/js/reporta890.js?v=21_8_14')}}"></script> --}}
    {{-- <script ecom-append-v="true" src="{{ sc_file($sc_templateFile.'/assets/cdn/js/getScripta890.js?v=21_8_14')}}"></script> --}}


    {{-- <script ecom-append-v="true"  src="{{ sc_file($sc_templateFile.'/assets/cdn/lib-modules/catalog/product-countDowna890.js?v=21_8_14')}}"></script> --}}
    {{-- <script ecom-append-v="true" src="{{ sc_file($sc_templateFile.'/assets/cdn/lib-modules/catalog/product-homea890.js?v=21_8_14')}}"></script> --}}
</body>
</html>
