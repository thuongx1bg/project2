<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <link rel="shortcut icon" href="https://file.hstatic.net/200000280689/file/logo_53e5f5c2a41a431aaf9b9ebb310f2abb.png" type="image/png">
        @yield('title')
        <link href="{{ asset('/css/fe/css/bootstrap.min.css') }}" rel="stylesheet" />
        <link href="{{ asset('/css/fe/css/main.css') }}" rel="stylesheet" />
        <link href="{{ asset('/css/fe/css/responsive.css') }}" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">
        @yield('css')
        <!--[if lt IE 9]>
            <script src="js/html5shiv.js"></script>
            <script src="js/respond.min.js"></script>
        <![endif]-->
        </head>
    <!--/head-->

    <body>
        @include('front-end.components.header')
        <!--/header-->
        @yield('front-end.contents')
     

        

      @include('front-end.components.footer')
        <!--/Footer-->

        <script src="{{ asset('/js/fe/js/jquery.js') }}"></script>
        <script src="{{ asset('/js/fe/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('/js/fe/js/jquery.scrollUp.min.js') }}"></script>
        <script src="{{ asset('/js/fe/js/main.js') }}"></script>
        @yield('js')
    </body>
</html>
