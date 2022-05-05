@extends('web.layouts.video')
@section('content-main')
<div class="container grid grid-cols-12 mt-[100px] mx-auto px-4 bg-[yellow]">
    <div class="col-span-12 film-col h-auto mx-auto">
        <img src="{{ asset('upload/images/video/image_video_' . $video->brief . '.jpg') }}" alt=""  style="width: 800px; position: relative;">
        <div class="film-text">
            <span class="text-3xl text-[white]">{!! $video->name !!}</span>
            <ul class="list-button flex justify-start">
                <li class="mr-1">
                    <button class="bg-[#5BC0DE] text-[white] p-2 font-bold rounded">
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
{{--        <p class="title-film text-xl">{{ $video->name }}</p>--}}
    </div>
</div>
@endsection
