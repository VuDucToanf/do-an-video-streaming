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
                        @foreach($video_ranking as $key => $value)
                            <?php $i = $key + 1; ?>
                            <a href="{{ route('video', $value->brief) }}" class="grid grid-cols-12 mb-5">
                                <img class="col-span-2 m-auto" src="{{ asset('images/ranking/' . $i . '.png') }}" alt="">
                                <img class="col-span-3 m-auto" src="{{ asset('upload/images/video/image_video_' . $value->brief . '.jpg') }}" alt="">
                                <span class="col-span-7 m-auto">{{ $value->name }}</span>
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="list_film">
                @foreach($categories as $item)
                    <div class="ele_list mt-5">
                        <div class="flex justify-between mb-3">
                            <p class="text-3xl font-bold border-b-4 border-[#0099FF]">{{ $item->title }}</p>
                            <a href="{{ route('category', $item->slug) }}">Xem tất cả</a>
                        </div>
                        <div class="grid grid-cols-5 gap-5">
                            <?php
                                $videos_in_category = \Illuminate\Support\Facades\DB::table('video')
                                                        ->join('relations_video_category', 'video.id', '=', 'relations_video_category.video_id')
                                                        ->where('relations_video_category.category_id', '=', $item->id)
                                                        ->where('video.status', 1)
                                                        ->where('video.deleted', 0)
                                                        ->limit(5)
                                                        ->offset(0)
                                                        ->get();
                                foreach($videos_in_category as $value){
                            ?>
                                <a href="{{ route('video', $value->brief) }}" class="film-col">
                                    <img src="{{ asset('upload/images/video/image_video_' . $value->brief . '.jpg') }}" alt="" style="width: 400px;">
                                    <p class="title-film text-xl">{{ $value->name }}</p>
                                    <i class="icon-play"></i>
                                </a>
                            <?php } ?>
                        </div>
                    </div>
                @endforeach
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
