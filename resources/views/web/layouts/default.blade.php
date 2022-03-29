<!DOCTYPE html>
<html>
<head>
    @section('meta')
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @show
    <title>Web.Clip.vn</title>
    @section('style')
    <!-- fontawesome -->
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
              integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p"
              crossorigin="anonymous"/>
        <!-- tailwind -->
        <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
        <!-- add icon link -->
        <link rel="icon" href="{{ asset('images/logo2.png') }}" type="image/x-icon">
        <!-- font family -->
        <link
            href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap"
            rel="stylesheet">
        <!-- swiper -->
        <link
            rel="stylesheet"
            href="https://unpkg.com/swiper@8/swiper-bundle.min.css"
        />
    @show
    @section('script')
    <!-- tailwind cdn -->
        <script src="https://unpkg.com/tailwindcss-jit-cdn"></script>
        <!-- jquery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <!-- swiper -->
        <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    @show
    <style>
        body::-webkit-scrollbar {
            width: 15px;
            height: 10px;
        }

        body::-webkit-scrollbar-track {
            border-radius: 100vh;
            background: #f7f4ed;
        }

        body::-webkit-scrollbar-thumb {
            background: #cccccc;
            border-radius: 100vh;
            border: 3px solid #f6f7ed;
        }

        body::-webkit-scrollbar-thumb:hover {
            background: #c0a0b9;
        }

        .user {
            height: 50px;
        }

        .btn_account {
            color: #F36A5A;
            font-size: 14px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-top: 4px;
            padding: 5px;
            border: unset;
            position: relative;
            cursor: pointer;
        }

        .btn_account:focus {
            outline: unset;
        }

        .btn_account img {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            margin-right: 5px;
        }

        .btn_account i {
            font-size: 20px;
            margin-left: 5px;
        }

        .btn_account .sub_menu {
            position: absolute;
            top: 55px;
            background-color: white;
            width: 200px;
            right: 0;
            z-index: 1;
            border: 1px solid #cccccc;
            padding: 0 15px;
        }

        .btn_account .sub_menu ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
            text-align: left;
        }

        .btn_account .sub_menu ul li a {
            display: block;
            padding: 15px 0;
            text-decoration: none;
            color: #000000;
            font-size: 14px;
            border-bottom: 1px solid #ccc;
        }

        .btn_account .sub_menu ul li:last-child a {
            border-bottom: 0;
        }

        .btn_account .sub_menu ul li a i {
            font-size: 14px;
            color: #272e36d9;
            float: right;
        }

        .banner img {
            width: 100%;
            height: 600px;
        }

        .title_ranking {
            background-image: linear-gradient(to top, #ba1236, #e03);
            border-radius: 5px 5px 0 0;
            height: 70px;
        }

        .title_ranking span {
            font-size: 27px;
            line-height: 60px;
            font-weight: 900;
            color: white;
        }

        .content_ranking::-webkit-scrollbar {
            width: 10px;
            height: 10px;
        }

        .content_ranking::-webkit-scrollbar-track {
            border-radius: 100vh;
            background: #f7f4ed;
        }

        .content_ranking::-webkit-scrollbar-thumb {
            background: #cccccc;
            border-radius: 100vh;
            border: 3px solid #f6f7ed;
        }

        .content_ranking::-webkit-scrollbar-thumb:hover {
            background: #c0a0b9;
        }

        ul.pagination {
            margin: 20px 20px;
        }

        ul.pagination > li {
            margin: 0px 3px;
        }

        ul.pagination > li.active > a {
            background: #0b93d5;
            color: white;
            border: 1px solid #0b93d5;
            font-weight: bold;
        }

        ul.pagination > li > a {
            padding: 5px 10px;
            border: 1px solid black;
        }

        .swiper-container{
            position: relative;
            margin: 0;
            padding: 0;
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
            <div class="flex justify-between">
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
                <div class="swiper-container  w-[70%]">
                    <div class="swiper mySwiper">
                        <div class="swiper-wrapper flex justify-around">
                            <div class="swiper-slide">Slide 1</div>
                            <div class="swiper-slide">Slide 2</div>
                            <div class="swiper-slide">Slide 3</div>
                            <div class="swiper-slide">Slide 4</div>
                            <div class="swiper-slide">Slide 5</div>
                            <div class="swiper-slide">Slide 6</div>
                            <div class="swiper-slide">Slide 7</div>
                            <div class="swiper-slide">Slide 8</div>
                            <div class="swiper-slide">Slide 9</div>
                        </div>
                        <div class="swiper-pagination"></div>
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
                    <p class="text-3xl font-bold border-b-4 border-[#F5E0C3]">Phim bộ</p>
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
                    <p class="text-3xl font-bold border-b-4 border-[#F5E0C3]">Phim chiếu rạp</p>
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
                    <p class="text-3xl font-bold border-b-4 border-[#F5E0C3]">Phim Việt Nam</p>
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
    var swiper = new Swiper(
        ".swiper-container",
        {
            //centeredSlides: "true",
            slidesPerView: "auto",
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev'
            },
            pagination: {
                el: '.swiper-pagination',
                type: 'fraction',
            }
        }
    );
</script>
</html>
