<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ url('css/app.css')}}" media="all">
    <link rel="shortcut icon" type="image/png" href="/images/logo.png"/>
    <title>@yield('title')</title>
</head>
<body class="animsition">
    @include('user.navigation')
    @include('user.cart')
    @yield('content')
    @include('user.footer')
    <script src="{{url('/js/app.js')}}"></script>
</body>
</html>