<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Video Streaming HAUI</title>
    <!-- fontawesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
          integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p"
          crossorigin="anonymous"/>
    <!-- tailwind -->
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <!-- add icon link -->
    <link rel="icon" href="{{ asset('images/logo2.png') }}" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style-layout.css') }}">
    <!-- plyr -->
    <link rel="stylesheet" href="https://cdn.plyr.io/3.6.7/plyr.css" />
    <script src="https://cdn.plyr.io/3.6.9/demo.js" crossorigin="anonymous"></script>
    <!-- font family -->
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap"
        rel="stylesheet">
    <!-- swiper -->
    <link
        rel="stylesheet"
        href="https://unpkg.com/swiper@8/swiper-bundle.min.css"
    />
    <!-- tailwind cdn -->
    <script src="https://unpkg.com/tailwindcss-jit-cdn"></script>
    <!-- jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- swiper -->
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
</head>
<body>
<!-- header -->
@extends('web.layouts.header')
<!-- end header -->

<!-- content body -->
<div id="app" style="min-height: 90vh;">
    @yield('content-main')
</div>
<!-- end content body -->

<!-- footer -->
@extends('web.layouts.footer')
<!-- end footer -->
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v13.0&appId=580947303320217&autoLogAppEvents=1" nonce="uEnqHYhM"></script>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v13.0&appId=580947303320217&autoLogAppEvents=1" nonce="ssBoy8IH"></script>
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
