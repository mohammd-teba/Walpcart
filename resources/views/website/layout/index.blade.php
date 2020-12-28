<!DOCTYPE html>
<html lang="en">
<head>

    <title>{{env('APP_NAME')}}</title>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    @include('website.layout.css')
</head>
<body>
@include('website.layout.nav')

@include('website.home.header')
@yield('content')

@include('website.layout.footer')

@include('website.layout.js')

</body>
</html>