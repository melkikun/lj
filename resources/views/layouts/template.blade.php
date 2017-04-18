<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Title -->
        <title> LJ | @yield('title')</title>

        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
        <meta charset="UTF-8">
        <meta name="description" content="Responsive Admin Dashboard Template" />
        <meta name="keywords" content="admin,dashboard" />
        <meta name="author" content="Steelcoders" />
        <!-- Styles -->
        {{-- <link type="text/css" rel="stylesheet" href="{{ asset('/') }}assets/bower_components/bootstrap/dist/css/bootstrap.min.css"/> --}}
        <link type="text/css" rel="stylesheet" href="{{ asset('/') }}assets/plugins/materialize/css/materialize.min.css"/>
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">    
        <!-- Theme Styles -->
        <link href="{{ asset('/') }}assets/css/alpha.min.css" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('/') }}assets/css/custom.css" rel="stylesheet" type="text/css"/>
        @yield('css')
    </head>
    <body>
        <div class="mn-content fixed-sidebar">
            @include('layouts.header')
            @include('layouts.sidebar')
            @yield('content')
            @include('layouts.footer')
        </div>
        <div class="left-sidebar-hover"></div>

        <!-- Javascripts -->
        <script src="{{ asset('/') }}assets/plugins/jquery/jquery-2.2.0.min.js"></script>
        {{-- <script src="{{ asset('/') }}assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script> --}}
        <script src="{{ asset('/') }}assets/plugins/materialize/js/materialize.min.js"></script>
        <script src="{{ asset('/') }}assets/plugins/material-preloader/js/materialPreloader.min.js"></script>
        <script src="{{ asset('/') }}assets/js/alpha.min.js"></script>
        <script src="{{ asset('/') }}assets/js/pages/dashboard.js"></script>
        @yield('js')
    </body>
</html>