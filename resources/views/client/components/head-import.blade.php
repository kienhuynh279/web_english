<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

<link rel="icon" href={{ asset('dist/img/favicon.png') }} type="image/png" />

<!-- Bootstrap CSS -->
<link rel="stylesheet" href={{ asset('dist/css/bootstrap.css') }} />
<link rel="stylesheet" href={{ asset('dist/css/flaticon.css') }} />
<link rel="stylesheet" href={{ asset('dist/css/themify-icons.css') }} />
<link rel="stylesheet" href={{ asset('dist/vendors/owl-carousel/owl.carousel.min.css') }} />
<link rel="stylesheet" href={{ asset('dist/vendors/nice-select/css/nice-select.css') }} />
{{-- fa --}}
<link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
<!-- main css -->
<link rel="stylesheet" href={{ asset('dist/css/style.css') }} />

<link rel="stylesheet" href="{{asset("dist/css/responsive.css")}}">

<style>
    @media all and (max-width: 320px) {
    body {
       background: #e7e7e7;
    }
 }
</style>

<style>
    * {
        margin: 0;
        padding: 0;
    }

    .clearfix:before,
    .clearfix:after {
        content: '';
        display: table;
        clear: both;
    }

    .menu-hover {
        position: relative;
        right: -25%;
        margin: 0 auto;
        list-style: none;
        background-color: #c47e2e;
    }

    .menu-hover>li {
        float: left;
    }

    .menu-hover>li a {
        font-size: 14px;
        display: block;
        padding: 10px 15px;
        text-decoration: none;
        color: #fff;
    }

    .menu-hover>li:last-child a {
        border-right: 0;
    }

    .menu-hover li {
        position: relative;
    }

    .menu-hover li .menu-sub {
        list-style: none;
        position: absolute;
        top: 100%;
        left: 0;
        width: 200px;
        box-shadow: 0px 1px 8px -4px #333;
        background-color: #c47e2e;
        display: none;
    }

    .menu-hover li .menu-sub ul {
        top: 0;
        left: 100%;
    }

    .menu-hover li:hover>ul {
        display: block;
    }

    .menu-hover li:hover>a {
        background: #b36c22;
    }
</style>
