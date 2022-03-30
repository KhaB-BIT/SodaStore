<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gentelella Alela</title>

    <!-- Bootstrap -->
    <link href="/vendor/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- NProgress -->
    <link href="/vendor/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
   <link href="/vendor/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="/css/custom.min.css" rel="stylesheet">

    <link rel="stylesheet" href="/fonts/iconic/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="/fonts/linearicons-v1.0.0/icon-font.min.css">
    <link rel="stylesheet" href="/vendor/animate/animate.css">
    <link rel="stylesheet" href="/vendor/css-hamburgers/hamburgers.min.css">
    <link rel="stylesheet" href="/vendor/animsition/css/animsition.min.css">
    <link rel="stylesheet" href="/vendor/select2/select2.min.css">
    <link rel="stylesheet" href="/vendor/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" href="/vendor/slick/slick.css">
    <link rel="stylesheet" href="/vendor/MagnificPopup/magnific-popup.css">
    <link rel="stylesheet" href="/vendor/MagnificPopup/magnific-popup.css">
    <link rel="stylesheet" href="/vendor/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="/css/admin2.css" media="all">

  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Gentelella Alela!</span></a>
            </div>

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

    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="/vendor/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- FastClick -->
    <script src="/vendor/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    {{-- <script src="/vendor/nprogress/nprogress.js"></script> --}}
    <!-- iCheck -->
    <script src="/vendor/iCheck/icheck.min.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="/js/custom.min.js"></script>
    <script src="/js/admin-func.js"></script>
  </body>
</html>