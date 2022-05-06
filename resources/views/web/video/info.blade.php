@extends('web.layouts.video')
@section('content-main')
<div class="container grid grid-cols-12 mt-[100px] mx-auto px-4 bg-[#f8f8f8]">
    <div class="col-span-7 film-col h-auto mx-auto flex justify-start">
        <img src="{{ asset('upload/images/video/image_video_' . $video->brief . '.jpg') }}" alt=""  style="width: 800px; position: relative;">
        <div class="film-text">
            <span class="text-3xl text-[white]">{!! $video->name !!}</span>
            <ul class="list-button flex justify-start">
                <li class="mr-1">
                    <button class="bg-[#5BC0DE] text-[white] p-2 font-bold rounded" onclick="window.location.href='{{ route('video', $brief) }}'">
                        <i class="fal fa-file-video font-bold"></i>
                        Trailer
                    </button>
                </li>
                <li>
                    <button class="bg-[#D9534F] text-[white] p-2 font-bold rounded" onclick="window.location.href='{{ route('video', $brief) }}'">
                        <i class="fas fa-play-circle font-bold"></i>
                        Xem phim
                    </button>
                </li>
            </ul>
        </div>
    </div>
    <div class="col-span-5">
        <div class="text-xl w-[100%] h-[40px] font-bold">Nội dung phim</div>
        <p>{!! $video->description !!}</p>
    </div>
    <div class="col-span-2 flex justify-around pl-[40px] mt-[20px]">
        <like-video :user="{{ auth()->user() }}" :video="{{ $video }}"></like-video>
        <div class="fb-save" data-uri="http://dev.doanhaui.vn/video/detail/<?php echo $video->brief ?>" data-size="large"></div>
    </div>
    <div class="col-span-10"></div>
    <div class="col-span-4 pl-[40px] mt-[20px]">
        <p><span class="font-bold">Số lượt xem:</span> {!! $video->view !!}</p>
        <p>
            <span class="font-bold">Thể loại:</span>
            @foreach($categories as $value)
                <a href="{{ route('category', $value->slug) }}" class="text-[black] hover:text-[orange]">{{ $value->title }}</a>,&nbsp;
            @endforeach
        </p>
        <p><span class="font-bold">Bản quyền:</span> {!! $video->copyright !!}</p>
    </div>
    <div class="col-span-4 mt-[20px]">
        <p><span class="font-bold">Ngày phát hành:</span> {!! $video->published_time !!}</p>
        <p>
            <span class="font-bold">Đạo diễn:</span>
            @foreach($authors as $value)
                <a href="{{ route('author', $value->slug) }}" class="text-[black] hover:text-[orange]">{{ $value->name }}</a>,&nbsp;
            @endforeach
        </p>
        <p>
            <span class="font-bold">Diễn viên:</span>
            @foreach($actors as $value)
                <a href="{{ route('actor', $value->slug) }}" class="text-[black] hover:text-[orange]">{{ $value->name }}</a>,&nbsp;
            @endforeach
        </p>
    </div>
    <div class="col-span-4 mt-[20px]">
        @if($video->parent_id != 0)
            <p class="font-bold">Danh sách tập</p>
            <?php
                $ep_list = \App\Models\Video::query()
                    ->select(['brief', 'seri_order'])
                    ->where('parent_id', $video->parent_id)
                    ->get();
            ?>
            <div class="flex flex-wrap justify-start">
                @foreach($ep_list as $value)
                    <button class="bg-[#5BC0DE] text-[white] px-[4px] rounded ml-[5px]" onclick="window.location.href='{{ route('video.info', $value->brief) }}'">Tập {{ $value->seri_order }}</button>
                @endforeach
            </div>
        @endif
    </div>
    <div class="col-span-6 pl-[40px] mt-[20px]">
        <div class="fb-comments" data-href="http://dev.doanhaui.vn/video/detail/<?php echo $video->brief ?>" data-width="" data-numposts="5"></div>
    </div>
    <div class="col-span-12 pl-[40px]">
        <p class="font-bold text-xl mt-[10px]">Có thể bạn thích xem</p>
        <div class="content grid grid-cols-5 gap-5 mt-[10px]">
            @foreach($video_relate as $value)
                <a href="{{ route('video.info', $value->brief) }}" class="film-col">
                    <img src="{{ asset('upload/images/video/image_video_' . $value->brief . '.jpg') }}" alt=""  style="width: 400px;">
                    <p class="title-film text-xl">{{ $value->name }}</p>
                </a>
            @endforeach
        </div>
    </div>
</div>
@endsection
