@extends('web.layouts.video')
@section('content-main')
    <div class="main mr-[20px] flex justify-center flex-nowrap mt-[100px]">
        <div class="w-[88%]">
            <div class="menu grid gap-2">
                <div class="col-span-9">
                    <video class="w-full" id="player" playsinline controls>
                        <source src="{{ asset('upload/video/film/film_video_' . $video->brief . '.mp4') }}" type="video/mp4" size="1080"/>
                        <source src="{{ asset('upload/video/film/film_video_' . $video->brief . '.mp4') }}" type="video/mp4" size="720"/>
                    </video>
                    <div class="film_description grid grid-cols-12 gap-2">
                        <div class="col-span-6 title">
                            <p class="title_film uppercase my-[10px] text-2xl">
                                <span>{{ $video->name }} - </span>
                                <span>&copy; {{ $video->copyright }}</span>
                            </p>
                            <p class="release_time text-[#666666] border-solid border-b-[2px] w-[200px]">
                                {{ $video->view }} lượt xem &bull;
                                <?php
                                    $date = date_create($video->published_time);
                                    echo date_format($date, "d-m-Y");
                                ?>
                            </p>
                        </div>
                        <div class="col-span-5 film_action flex items-center justify-around">
                            <example-component></example-component>
                            <like-video :user="{{ auth()->user() }}" :video="{{ $video }}"></like-video>
                            <div class="fb-save" data-uri="http://dev.doanhaui.vn/video/detail/<?php echo $video->brief ?>" data-size="large"></div>
                            <a href="javascript:void(0)">
                                <i class="fas fa-pennant"></i>
                                BÁO LỖI
                            </a>
                        </div>
                    </div>
                    <div class="mt-[20px] grid grid-cols-12 gap-2">
                        <div class="col-span-8">
                            <div class="w-[70%]">
                                <p class="text-xl font-bold">Mô tả</p>
                                {!! $video->description !!}
                            </div>
                            <div class="w-[100%] mt-[20px]">
                                <div class="mt-[20px] content_comments">
                                    <div class="fb-comments" data-href="{{ request()->url() }}" data-width="" data-numposts="5"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-1"></div>
                        <div class="col-span-3">
                            <p class="text-xl font-bold">Có thể bạn thích</p>
                            <div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-12 gap-2 my-[20px]">
                <div class="col-span-8">

                </div>
                <div class="col-span-4">

                </div>
            </div>
        </div>
    </div>
@endsection
