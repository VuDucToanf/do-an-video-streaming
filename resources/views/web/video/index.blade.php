@extends('web.layouts.video')
@section('content-main')
    <div class="main mr-[20px] flex justify-center flex-nowrap mt-[100px]">
        <div class="w-[12%]"></div>
        <div class="w-[88%]">
            <div class="menu grid gap-2">
                <div class="col-span-9">
                    <video class="w-full" id="player" playsinline controls>
                        <source src="{{ asset('upload/video/film/film_video_' . $video->brief . '.mp4') }}" type="video/mp4" size="1080"/>
                    </video>
                    <div class="film_description grid grid-cols-12 gap-2">
                        <div class="col-span-6 title">
                            <p class="title_film uppercase my-[10px] font-bold">Đúng cũng thành sai - Mỹ Tâm</p>
                            <p class="release_time text-[#666666] border-solid border-b-[2px] w-[200px]">12 thg 3, 2021</p>
                        </div>
                        <div class="col-span-5 film_action flex items-center justify-around">
                            <a href="#">
                                <i class="fas fa-thumbs-up"></i>
                                85 THÍCH
                            </a>
                            <a href="#">
                                <i class="fas fa-thumbs-down"></i>
                                2 KHÔNG THÍCH
                            </a>
                            <a href="#">
                                <i class="fas fa-video-plus"></i>
                                LƯU
                            </a>
                            <a href="#">
                                <i class="fas fa-pennant"></i>
                                BÁO LỖI
                            </a>
                        </div>
                    </div>
                </div>
                <div class="my-[20px]">
                    <p class="text-3xl font-bold border-b-4 border-[#0099FF]">Bình luận</p>
                    <div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
