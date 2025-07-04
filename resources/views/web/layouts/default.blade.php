<!DOCTYPE html>
<html>
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
    <style>
        body{
            overflow-x: hidden;
            background-color: #F8F8F8;
        }
    </style>
</head>
<body>
<!-- header -->
@extends('web.layouts.header')
<!-- end header -->

<!-- sidebar -->
@extends('web.layouts.sidebar')
<!-- end sidebar -->

<!-- content body -->
@yield('content-main')
<!-- end content body -->

<!-- footer -->
@extends('web.layouts.footer')
<!-- end footer -->
</body>
</html>
