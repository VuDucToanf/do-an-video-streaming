@extends('web.layouts.default')
@section('content-main')
    <style>
        .swiper {
            width: 100%;
            height: 100%;
        }

        .swiper-slide {
            text-align: center;
            font-size: 18px;
            background: #fff;

            /* Center slide text vertically */
            display: -webkit-box;
            display: -ms-flexbox;
            display: -webkit-flex;
            display: flex;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-align-items: center;
            align-items: center;
        }

        .swiper-slide img {
            display: block;
            object-fit: cover;
        }
    </style>
    <div class="main mr-[20px] flex justify-center flex-nowrap mt-[100px]">
        <div class="w-[12%]"></div>
        <div class="w-[88%] main_content">
            <div class="elem_banner grid grid-cols-12 gap-2 mb-3">
                <div class="col-span-8 banner swiper mySwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="{{ asset('images/banner_film_2.jpg') }}" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('images/poster_bo_gia.jpg') }}" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('images/poster_hai_phuong.jpg') }}" alt="">
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
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
    <script>
        var swiper = new Swiper(".mySwiper", {
            spaceBetween: 30,
            centeredSlides: true,
            autoplay: {
                delay: 4000,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            loop:true,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    </script>
@endsection
