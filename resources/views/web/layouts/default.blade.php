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
        .title-cate .swiper-slide {
            width: auto;
        }
        .swiper-container{
            overflow: hidden;
        }
        .swiper-button-prev {
            background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20viewBox%3D'0%200%2027%2044'%3E%3Cpath%20d%3D'M0%2C22L22%2C0l2.1%2C2.1L4.2%2C22l19.9%2C19.9L22%2C44L0%2C22L0%2C22L0%2C22z'%20fill%3D'%234c71ae'%2F%3E%3C%2Fsvg%3E") !important;
            background-repeat: no-repeat;
            width: 20px;
            height: 20px;
            top: 26px;
            right: -35px;
            left: auto;
        }
        .swiper-button-next {
            background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20viewBox%3D'0%200%2027%2044'%3E%3Cpath%20d%3D'M27%2C22L27%2C22L5%2C44l-2.1-2.1L22.8%2C22L2.9%2C2.1L5%2C0L27%2C22L27%2C22z'%20fill%3D'%234c71ae'%2F%3E%3C%2Fsvg%3E") !important;
            background-repeat: no-repeat;
            width: 20px;
            height: 20px;
            top: 26px;
            right: -55px;
        }
        .swiper-button-next:after, .swiper-rtl .swiper-button-prev:after {
            display: none;
        }
        .swiper-button-prev:after, .swiper-rtl .swiper-button-next:after {
            display: none;
        }
    </style>
</head>
<body>
<div class="header p-[3px] pt-3">
    <div class="flex flex-center flex-nowrap">
        <div class="w-[12%] pl-[20px]">
            <a class="flex flex-nowrap" href="{{ route('home') }}">
                <img class="" src="{{ asset('images/logo2.png') }}" alt="" width="100">
            </a>
        </div>
        <div class="w-[84%] my-auto">
            <div class="flex justify-start">
                <div class="input-group relative flex flex-nowrap items-stretch rounded mb-[3px] w-[30%]">
                    <input type="search"
                           class="form-control relative flex-auto min-w-0 block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-[#FFFF00] focus:outline-none"
                           placeholder="Search" aria-label="Search" aria-describedby="button-addon2">
                    <span
                        class="input-group-text flex items-center px-3 py-1.5 text-base font-normal text-gray-700 text-center whitespace-nowrap rounded"
                        id="basic-addon2">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="search" class="w-4"
                             role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                          <path fill="currentColor"
                                d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z"></path>
                        </svg>
                      </span>
                </div>
                <div class="box-cate__content w-[65%] my-auto">
                    <div class="title-cate">
                        <div class="relative">
                            <div class="swiper-container swp-left">
                                <div class="swiper-wrapper">
                                    <button
                                        class="swiper-slide bg-white hover:bg-gray-100 text-gray-800 font-semibold border border-gray-400 rounded-full shadow p-[5px]">
                                        Phim bộ
                                    </button>
                                    <button
                                        class="swiper-slide bg-white hover:bg-gray-100 text-gray-800 font-semibold border border-gray-400 rounded-full shadow p-[5px]">
                                        Phim lẻ
                                    </button>
                                    <button
                                        class="swiper-slide bg-white hover:bg-gray-100 text-gray-800 font-semibold border border-gray-400 rounded-full shadow p-[5px]">
                                        Phim Việt Nam
                                    </button>
                                    <button
                                        class="swiper-slide bg-white hover:bg-gray-100 text-gray-800 font-semibold border border-gray-400 rounded-full shadow p-[5px]">
                                        Phim chiếu rạp
                                    </button>
                                    <button
                                        class="swiper-slide bg-white hover:bg-gray-100 text-gray-800 font-semibold border border-gray-400 rounded-full shadow p-[5px]">
                                        Xếp hạng tuần
                                    </button>
                                    <button
                                        class="swiper-slide bg-white hover:bg-gray-100 text-gray-800 font-semibold border border-gray-400 rounded-full shadow p-[5px]">
                                        Phim kinh dị
                                    </button>
                                    <button
                                        class="swiper-slide bg-white hover:bg-gray-100 text-gray-800 font-semibold border border-gray-400 rounded-full shadow p-[5px]">
                                        Phim hoạt hình
                                    </button>
                                    <button
                                        class="swiper-slide bg-white hover:bg-gray-100 text-gray-800 font-semibold border border-gray-400 rounded-full shadow p-[5px]">
                                        Phim cổ trang
                                    </button>
                                    <button
                                        class="swiper-slide bg-white hover:bg-gray-100 text-gray-800 font-semibold border border-gray-400 rounded-full shadow p-[5px]">
                                        Phim thiếu nhi
                                    </button>
                                    <button
                                        class="swiper-slide bg-white hover:bg-gray-100 text-gray-800 font-semibold border border-gray-400 rounded-full shadow p-[5px]">
                                        Phim hài
                                    </button>
                                    <button
                                        class="swiper-slide bg-white hover:bg-gray-100 text-gray-800 font-semibold border border-gray-400 rounded-full shadow p-[5px]">
                                        Phim xuyên không
                                    </button>
                                    <button
                                        class="swiper-slide bg-white hover:bg-gray-100 text-gray-800 font-semibold border border-gray-400 rounded-full shadow p-[5px]">
                                        Phim tình cảm
                                    </button>
                                </div>
                            </div>
                            <!-- Add Arrows -->
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-[4%]">
            <div class="user">
                <button class="btn_account">
                    <img src="{{ asset('images/img-user/xie.jpg') }}" alt="" width="100" height="30">
                    <div class="sub_menu" id="submenu_account">
                        <ul>
                            <li>
                                <a href="#">Profile
                                    <i class="fas fa-user"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">Reset password
                                    <i class="fas fa-key"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">Setting
                                    <i class="fas fa-cog"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">Logout
                                    <i class="fas fa-sign-out-alt"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </button>
            </div>
        </div>
    </div>
</div>
<div class="main mr-[20px] flex justify-center flex-nowrap">
    <aside class="sidebar w-[12%]" aria-label="Sidebar">
        <div class="overflow-y-auto py-4 px-3 rounded dark:bg-gray-800">
            <ul class="space-y-2">
                <li>
                    <a href="#"
                       class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                        <i class="fas fa-home flex-shrink-0 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"></i>
                        <span class="ml-3 whitespace-nowrap">Trang chủ</span>
                    </a>
                </li>
                <li>
                    <a href="#"
                       class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                        <i class="fas fa-bookmark flex-shrink-0 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"></i>
                        <span class="flex-1 ml-3 whitespace-nowrap">Kênh đăng ký</span>
                        {{--                        <span class="inline-flex justify-center items-center px-2 ml-3 text-sm font-medium text-gray-800 bg-gray-200 rounded-full dark:bg-gray-700 dark:text-gray-300">Pro</span>--}}
                    </a>
                </li>
                <li>
                    <a href="#"
                       class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                        <i class="fas fa-books flex-shrink-0 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"></i>
                        <span class="flex-1 ml-3 whitespace-nowrap">Bộ sưu tập</span>
                        {{--                        <span class="inline-flex justify-center items-center p-3 ml-3 w-3 h-3 text-sm font-medium text-blue-600 bg-blue-200 rounded-full dark:bg-blue-900 dark:text-blue-200">3</span>--}}
                    </a>
                </li>
                <li>
                    <a href="#"
                       class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                        <i class="fas fa-head-vr flex-shrink-0 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"></i>
                        <span class="flex-1 ml-3 whitespace-nowrap">Đã xem</span>
                    </a>
                </li>
                <li>
                    <a href="#"
                       class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                        <i class="fas fa-thumbs-up flex-shrink-0 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"></i>
                        <span class="flex-1 ml-3 whitespace-nowrap">Video đã thích</span>
                    </a>
                </li>
                <li>
                    <a href="#"
                       class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                        <i class="fad fa-circle flex-shrink-0 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"></i>
                        <span class="flex-1 ml-3 whitespace-nowrap">Sự kiện trực tiếp</span>
                    </a>
                </li>
                <li>
                    <a href="#"
                       class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                        <i class="fas fa-question-circle flex-shrink-0 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"></i>
                        <span class="flex-1 ml-3 whitespace-nowrap">Trợ giúp</span>
                    </a>
                </li>
                <li>
                    <a href="#"
                       class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                        <i class="fas fa-comment-alt-exclamation flex-shrink-0 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"></i>
                        <span class="flex-1 ml-3 whitespace-nowrap">Gửi phản hồi</span>
                    </a>
                </li>
            </ul>
        </div>
    </aside>
    <div class="w-[88%]">
        <div class="elem_banner grid grid-cols-12 gap-2 mb-3">
            <div class="col-span-8 banner">
                <img src="{{ asset('images/banner_film_2.jpg') }}" alt="">
            </div>
            <div class="col-span-4 ranking border-solid border-[1px] h-[600px]">
                <div class="title_ranking text-center text-3xl text-[white] m-auto d-grid-center">
                    <span>
                        Bảng xếp hạng
                    </span>
                </div>
                <div class="content_ranking mt-3 px-2 overflow-x-hidden h-[515px]">
                    <div class="grid grid-cols-12 mb-5">
                        <img class="col-span-2 m-auto" src="{{ asset('images/ranking/1.png') }}" alt="">
                        <img class="col-span-3 m-auto" src="{{ asset('images/img-film/1.jpg') }}" alt="" width="100">
                        <span class="col-span-7 m-auto">Day Dứt Nỗi Đau - Mr. Siro ft Sirocon</span>
                    </div>
                    <div class="grid grid-cols-12 mb-5">
                        <img class="col-span-2 m-auto" src="{{ asset('images/ranking/2.png') }}" alt="">
                        <img class="col-span-3 m-auto" src="{{ asset('images/img-film/1.jpg') }}" alt="" width="100">
                        <span class="col-span-7 m-auto">Day Dứt Nỗi Đau - Mr. Siro ft Sirocon</span>
                    </div>
                    <div class="grid grid-cols-12 mb-5">
                        <img class="col-span-2 m-auto" src="{{ asset('images/ranking/3.png') }}" alt="">
                        <img class="col-span-3 m-auto" src="{{ asset('images/img-film/1.jpg') }}" alt="" width="100">
                        <span class="col-span-7 m-auto">Day Dứt Nỗi Đau - Mr. Siro ft Sirocon</span>
                    </div>
                    <div class="grid grid-cols-12 mb-5">
                        <img class="col-span-2 m-auto" src="{{ asset('images/ranking/4.png') }}" alt="">
                        <img class="col-span-3 m-auto" src="{{ asset('images/img-film/1.jpg') }}" alt="" width="100">
                        <span class="col-span-7 m-auto">Day Dứt Nỗi Đau - Mr. Siro ft Sirocon</span>
                    </div>
                    <div class="grid grid-cols-12 mb-5">
                        <img class="col-span-2 m-auto" src="{{ asset('images/ranking/5.png') }}" alt="">
                        <img class="col-span-3 m-auto" src="{{ asset('images/img-film/1.jpg') }}" alt="" width="100">
                        <span class="col-span-7 m-auto">Day Dứt Nỗi Đau - Mr. Siro ft Sirocon</span>
                    </div>
                    <div class="grid grid-cols-12 mb-5">
                        <img class="col-span-2 m-auto" src="{{ asset('images/ranking/6.png') }}" alt="">
                        <img class="col-span-3 m-auto" src="{{ asset('images/img-film/1.jpg') }}" alt="" width="100">
                        <span class="col-span-7 m-auto">Day Dứt Nỗi Đau - Mr. Siro ft Sirocon</span>
                    </div>
                    <div class="grid grid-cols-12 mb-5">
                        <img class="col-span-2 m-auto" src="{{ asset('images/ranking/7.png') }}" alt="">
                        <img class="col-span-3 m-auto" src="{{ asset('images/img-film/1.jpg') }}" alt="" width="100">
                        <span class="col-span-7 m-auto">Day Dứt Nỗi Đau - Mr. Siro ft Sirocon</span>
                    </div>
                    <div class="grid grid-cols-12 mb-5">
                        <img class="col-span-2 m-auto" src="{{ asset('images/ranking/8.png') }}" alt="">
                        <img class="col-span-3 m-auto" src="{{ asset('images/img-film/1.jpg') }}" alt="" width="100">
                        <span class="col-span-7 m-auto">Day Dứt Nỗi Đau - Mr. Siro ft Sirocon</span>
                    </div>
                    <div class="grid grid-cols-12 mb-5">
                        <img class="col-span-2 m-auto" src="{{ asset('images/ranking/9.png') }}" alt="">
                        <img class="col-span-3 m-auto" src="{{ asset('images/img-film/1.jpg') }}" alt="" width="100">
                        <span class="col-span-7 m-auto">Day Dứt Nỗi Đau - Mr. Siro ft Sirocon</span>
                    </div>
                    <div class="grid grid-cols-12 mb-5">
                        <img class="col-span-2 m-auto" src="{{ asset('images/ranking/10.png') }}" alt="">
                        <img class="col-span-3 m-auto" src="{{ asset('images/img-film/1.jpg') }}" alt="" width="100">
                        <span class="col-span-7 m-auto">Day Dứt Nỗi Đau - Mr. Siro ft Sirocon</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="list_film">
            <div class="ele_list mt-5">
                <div class="flex justify-between mb-3">
                    <p class="text-3xl font-bold border-b-4 border-[#0099FF]">Phim bộ</p>
                    <a href="#">Xem tất cả</a>
                </div>
                <div class="grid grid-cols-5 gap-5">
                    <div class="film-col">
                        <img src="{{ asset('images/img-film/1.jpg') }}" alt="">
                        <p class="title-film text-xl">Day Dứt Nỗi Đau - Mr. Siro ft Sirocon</p>
                    </div>
                    <div>
                        <img src="{{ asset('images/img-film/1.jpg') }}" class="film-thumb" alt="">
                        <p class="title-film text-xl">Day Dứt Nỗi Đau - Mr. Siro ft Sirocon</p>
                    </div>
                    <div>
                        <img src="{{ asset('images/img-film/1.jpg') }}" class="film-thumb" alt="">
                        <p class="title-film text-xl">Day Dứt Nỗi Đau - Mr. Siro ft Sirocon</p>
                    </div>
                    <div>
                        <img src="{{ asset('images/img-film/1.jpg') }}" class="film-thumb" alt="">
                        <p class="title-film text-xl">Day Dứt Nỗi Đau - Mr. Siro ft Sirocon</p>
                    </div>
                    <div>
                        <img src="{{ asset('images/img-film/1.jpg') }}" class="film-thumb" alt="">
                        <p class="title-film text-xl">Day Dứt Nỗi Đau - Mr. Siro ft Sirocon</p>
                    </div>
                </div>
            </div>
            <div class="ele_list mt-5">
                <div class="flex justify-between mb-3">
                    <p class="text-3xl font-bold border-b-4 border-[#0099FF]">Phim chiếu rạp</p>
                    <a href="#">Xem tất cả</a>
                </div>
                <div class="grid grid-cols-5 gap-5">
                    <div class="film-col">
                        <img src="{{ asset('images/img-film/1.jpg') }}" alt="">
                        <p class="title-film text-xl">Day Dứt Nỗi Đau - Mr. Siro ft Sirocon</p>
                    </div>
                    <div>
                        <img src="{{ asset('images/img-film/1.jpg') }}" class="film-thumb" alt="">
                        <p class="title-film text-xl">Day Dứt Nỗi Đau - Mr. Siro ft Sirocon</p>
                    </div>
                    <div>
                        <img src="{{ asset('images/img-film/1.jpg') }}" class="film-thumb" alt="">
                        <p class="title-film text-xl">Day Dứt Nỗi Đau - Mr. Siro ft Sirocon</p>
                    </div>
                    <div>
                        <img src="{{ asset('images/img-film/1.jpg') }}" class="film-thumb" alt="">
                        <p class="title-film text-xl">Day Dứt Nỗi Đau - Mr. Siro ft Sirocon</p>
                    </div>
                    <div>
                        <img src="{{ asset('images/img-film/1.jpg') }}" class="film-thumb" alt="">
                        <p class="title-film text-xl">Day Dứt Nỗi Đau - Mr. Siro ft Sirocon</p>
                    </div>
                </div>
            </div>
            <div class="ele_list mt-5">
                <div class="flex justify-between mb-3">
                    <p class="text-3xl font-bold border-b-4 border-[#0099FF]">Phim Việt Nam</p>
                    <a href="#">Xem tất cả</a>
                </div>
                <div class="grid grid-cols-5 gap-5">
                    <div class="film-col">
                        <img src="{{ asset('images/img-film/1.jpg') }}" alt="">
                        <p class="title-film text-xl">Day Dứt Nỗi Đau - Mr. Siro ft Sirocon</p>
                    </div>
                    <div>
                        <img src="{{ asset('images/img-film/1.jpg') }}" class="film-thumb" alt="">
                        <p class="title-film text-xl">Day Dứt Nỗi Đau - Mr. Siro ft Sirocon</p>
                    </div>
                    <div>
                        <img src="{{ asset('images/img-film/1.jpg') }}" class="film-thumb" alt="">
                        <p class="title-film text-xl">Day Dứt Nỗi Đau - Mr. Siro ft Sirocon</p>
                    </div>
                    <div>
                        <img src="{{ asset('images/img-film/1.jpg') }}" class="film-thumb" alt="">
                        <p class="title-film text-xl">Day Dứt Nỗi Đau - Mr. Siro ft Sirocon</p>
                    </div>
                    <div>
                        <img src="{{ asset('images/img-film/1.jpg') }}" class="film-thumb" alt="">
                        <p class="title-film text-xl">Day Dứt Nỗi Đau - Mr. Siro ft Sirocon</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
<script>
    $('#submenu_account').hide();
    $('.page_up2').hide();

    var show_menu = true;
    $(".btn_account").on('click', function () {
        if (show_menu == true) {
            $('#submenu_account').show('slow');
            show_menu = false;
        } else {
            $('#submenu_account').hide('slow');
            show_menu = true;
        }
    });
    new Swiper('.box-cate__content .swiper-container', {
        slidesPerView: "auto",
        paginationClickable: false,
        spaceBetween: 30,
        loop: false,
        navigation: {
            nextEl: '.box-cate__content .swiper-button-next',
            prevEl: '.box-cate__content .swiper-button-prev',
        },
    });
    if($('div.swiper-button-next').hasClass('swiper-button-disabled')){
        $('div.swiper-button-next').attr("style", "display: none");
        $('div.swiper-button-prev').attr("style", "display: none");
    }
</script>
</html>
