<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="{{ asset('/') }}assets/images/favicon.ico" />
    <title>@yield('title')</title>

    <!-- Global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="{{asset('/')}}assets/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
    <link href="{{asset('/')}}assets/css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="{{asset('/')}}assets/css/core.css" rel="stylesheet" type="text/css">
    <link href="{{asset('/')}}assets/css/components.css" rel="stylesheet" type="text/css">
    <link href="{{asset('/')}}assets/css/colors.css" rel="stylesheet" type="text/css">
    <!-- /global stylesheets -->

    <!-- /custom css -->
    @yield('css')
</head>

<body>

    <!-- Main navbar -->
    @include('layout.header')
    <!-- /main navbar -->


    <!-- Page container -->
    <div class="page-container">

        <!-- Page content -->
        <div class="page-content">

            <!-- Main sidebar -->
            @include('layout.sidebar')
            <!-- /main sidebar -->


            <!-- Main content -->
            <div class="content-wrapper">

                <!-- Content area -->
                <div class="content">

                   @yield('content')

               </div>
               <!-- /content area -->

           </div>
           <!-- /main content -->

       </div>
       <!-- /page content -->

   </div>
   <!-- /page container -->

   <!-- javascript plugin -->
   <!-- Core JS files -->
   <script type="text/javascript" src="{{asset('/')}}assets/js/plugins/loaders/pace.min.js"></script>
   <script type="text/javascript" src="{{asset('/')}}assets/js/core/libraries/jquery.min.js"></script>
   <script type="text/javascript" src="{{asset('/')}}assets/js/core/libraries/bootstrap.min.js"></script>
   <script type="text/javascript" src="{{asset('/')}}assets/js/plugins/loaders/blockui.min.js"></script>
   <!-- /core JS files -->

   <!-- Theme JS files -->
   @yield('js')
   <script type="text/javascript" src="{{asset('/')}}assets/js/core/app.js"></script>
   <!-- /theme JS files -->
   <!-- /coding js-->
   @yield('javascript')
</body>
</html>
