<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
      <!-- Favicon -->
<!-- Favicon -->
      <link rel="shortcut icon" href="{{asset('images/favicon.ico')}}" />
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
      <!-- Typography CSS -->
      <link rel="stylesheet" href="{{asset('css/typography.css')}}">
      <!-- Style CSS -->
      <link rel="stylesheet" href="{{asset('css/style.css')}}">
      <!-- Responsive CSS -->
      <link rel="stylesheet" href="{{asset('css/responsive.css')}}">


      <link rel="stylesheet" href="{{asset('./js/chartist/chartist.min.css')}}">

</head>
<body>
<div id="loading">
         <div id="loading-center">
         </div>
      </div>
      <!-- loader END -->
      <!-- Wrapper Start -->
      <div class="wrapper">
        @include('includes.header')
        <main class="py-4">
            @yield('content')
        </main>
      </div>
        
      @include('includes.elements')
      @include('includes.Footer')
        <script src="{{asset('js/jquery.min.js')}}"></script>
      
      <script src="{{asset('js/popper.min.js')}}"></script>
      <script src="{{asset('js/bootstrap.min.js')}}"></script>
      <!-- Appear JavaScript -->
      <script src="{{asset('js/jquery.appear.js')}}"></script>
      <!-- Countdown JavaScript -->
      <script src="{{asset('js/countdown.min.js')}}"></script>
      <!-- Counterup JavaScript -->
      <script src="{{asset('js/waypoints.min.js')}}"></script>
      <script src="{{asset('js/jquery.counterup.min.js')}}"></script>
      <!-- Wow JavaScript -->
      <script src="{{asset('js/wow.min.js')}}"></script>
      <!-- Apexcharts JavaScript -->
      <script src="{{asset('js/apexcharts.js')}}"></script>
      <!-- Slick JavaScript -->
      <script src="{{asset('js/slick.min.js')}}"></script>
      <!-- Select2 JavaScript -->
      <script src="{{asset('js/select2.min.js')}}"></script>
      <!-- Magnific Popup JavaScript -->
      <script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
      <!-- Smooth Scrollbar JavaScript -->
      <script src="{{asset('js/smooth-scrollbar.js')}}"></script>
      <!-- lottie JavaScript -->
      <script src="{{asset('js/lottie.js')}}"></script>
      <!-- am core JavaScript -->
      <script src="{{asset('js/core.js')}}"></script>
      <!-- am charts JavaScript -->
      <script src="{{asset('js/charts.js')}}"></script>
      <!-- am animated JavaScript -->
      <script src="{{asset('js/animated.js')}}"></script>
      <!-- am kelly JavaScript -->
      <script src="{{asset('js/kelly.js')}}"></script>
      <!-- Morris JavaScript -->
      <script src="{{asset('js/morris.js')}}"></script>
      <!-- am maps JavaScript -->
      <script src="{{asset('js/maps.js')}}"></script>
      <!-- am worldLow JavaScript -->
      <script src="{{asset('js/worldLow.js')}}"></script>
      <!-- ChartList Js -->
      <script src="{{asset('js/chartist/chartist.min.js')}}"></script>
      <!-- Chart Custom JavaScript -->
      <script async src="{{asset('js/chart-custom.js')}}"></script>
      <!-- Custom JavaScript -->
      <script src="{{asset('js/custom.js')}}"></script>
</body>
</html>
