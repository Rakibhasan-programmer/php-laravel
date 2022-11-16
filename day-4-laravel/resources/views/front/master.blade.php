<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <link rel="stylesheet" href="{{asset('/')}}assets/css/bootstrap.css">
</head>
<body>

{{--    just getting the data--}}
    @include('front.includes.navbar')


{{--    pushing the data--}}
    @yield('body')




<script src="{{asset('/')}}assets/js/bootstrap.bundle.js"></script>

</body>
</html>

