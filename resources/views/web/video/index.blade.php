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
                            <like-video :user="{{ auth()->user() }}" :video="{{ $video }}"></like-video>
                            <div class="fb-save" data-uri="http://dev.doanhaui.vn/video/detail/<?php echo $video->brief ?>" data-size="large"></div>
                            <a href="javascript:void(0)">
                                <i class="fas fa-pennant"></i>
                                BÁO LỖI
                            </a>
                        </div>
                    </div>
                    <div class="mt-[20px] grid grid-cols-12 gap-2">
                        <div class="col-span-7">
                            <div class="w-[95%]">
                                <p class="text-xl font-bold">Mô tả</p>
                                {!! $video->description !!}
                            </div>
                        </div>
                        <div class="col-span-5"><div class="fb-comments" data-href="{{ request()->url() }}" data-width="" data-numposts="5"></div></div>
                        </div>
                    </div>
                </div>
                <div class="col-span-12 mt-[20px]">
                    <p class="font-bold text-xl mt-[10px]">Có thể bạn thích xem</p>
                    <div class="content grid grid-cols-5 gap-5 mt-[10px]">
                        @foreach($video_relate as $value)
                            <a href="{{ route('video', $value->brief) }}" class="film-col">
                                <img src="{{ asset('upload/images/video/image_video_' . $value->brief . '.jpg') }}" alt=""  style="width: 400px;">
                                <p class="title-film text-xl">{{ $value->name }}</p>
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
