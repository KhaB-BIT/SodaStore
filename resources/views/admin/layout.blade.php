<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Bootstrap -->
    <link href="{{url('/vendor/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- NProgress -->
    <link href="{{url('/vendor/nprogress/nprogress.css')}}" rel="stylesheet">
    <!-- iCheck -->
   <link href="{{url('/vendor/iCheck/skins/flat/green.css')}}" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="{{url('/css/custom.min.css')}}" rel="stylesheet">

    <link rel="stylesheet" href="{{url('/fonts/iconic/css/material-design-iconic-font.min.css')}}">
    <link rel="stylesheet" href="{{url('/fonts/linearicons-v1.0.0/icon-font.min.css')}}">
    <link rel="stylesheet" href="{{url('/vendor/animate/animate.css')}}">
    <link rel="stylesheet" href="{{url('/vendor/css-hamburgers/hamburgers.min.css')}}">
    <link rel="stylesheet" href="{{url('/vendor/animsition/css/animsition.min.css')}}">
    <link rel="stylesheet" href="{{url('/vendor/select2/select2.min.css')}}">
    <link rel="stylesheet" href="{{url('/vendor/daterangepicker/daterangepicker.css')}}">
    <link rel="stylesheet" href="{{url('/vendor/slick/slick.css')}}">
    <link rel="stylesheet" href="{{url('/vendor/MagnificPopup/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{url('/vendor/MagnificPopup/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{url('/vendor/perfect-scrollbar/perfect-scrollbar.css')}}">
    <link rel="stylesheet" href="{{url('/css/admin2.css')}}" media="all">
    <link rel="stylesheet" href="{{url('/css/admin-custom.css')}}" media="all">


  </head>

  <body class="nav-md">

    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col" style="position: fixed;">
          <div class="left_col scroll-view" >

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            @include('admin.quick-profile')
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            @include('admin.slider')
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            @include('admin.menu-footer')
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        {{-- @include('admin.top-nav') --}}
        <!-- /top navigation -->
        
        {{-- PAGE CONTENT --}}
        @yield('content')
        {{-- PAGE CONTENT --}}
      </div>
    </div>
    
    <div id="loading" style="display: none; z-index: 1000000; font-size: 24px;">
      <div class="loading-image-container">
        PAYMENT IN PROCESS...
      </div>
    </div>

    

    <!-- jQuery -->
    <script src="{{url('/vendors/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap -->
    <script src="{{url('/vendor/bootstrap/dist/js/bootstrap.min.js')}}"></script>

    {{-- <script src="/vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="/vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
    <script src="/vendor/bootstrap/js/popper.js"></script>
    <script src="/vendor/bootstrap/js/bootstrap.min.js"></script> --}}

    <!-- FastClick -->
    <script src="{{url('/vendor/fastclick/lib/fastclick.js')}}"></script>
    <!-- NProgress -->
    {{-- <script src="/vendor/nprogress/nprogress.js"></script> --}}
    <!-- iCheck -->
    <script src="{{url('/vendor/iCheck/icheck.min.js')}}"></script>

    <!-- Custom Theme Scripts -->
    <script src="{{url('/js/custom.min.js')}}"></script>
    <script src="{{url('/js/admin-func.js')}}"></script>
  </body>
</html>