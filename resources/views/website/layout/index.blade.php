<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>{{env('APP_NAME')}} | Home</title>

    @include('website.layout.css')
</head>

<body class="index-page sidebar-collapse">
<!-- Navbar -->
@include('website.layout.nav')
<!-- End Navbar -->
<div class="page-header section-light-blue">
{{--<div class="page-header section-dark" style="background-image: url('{{url(assets('website'))}}/img/antoine-barres.jpg')">--}}
    @include('website.home.header')
</div>
<div class="main">

@yield('content')


@include('website.layout.footer')
<!--   Core JS Files   -->

@include('website.layout.js')
</body>

</html>