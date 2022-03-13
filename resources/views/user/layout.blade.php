<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ mix('css/app.css')}}" media="all">
    <title>@yield('title')</title>
</head>
<body class="animsition">
    @include('navigation')
    @include('cart')
    @yield('content')
    @include('footer')
    <script src="/js/app.js"></script>
</body>
</html>