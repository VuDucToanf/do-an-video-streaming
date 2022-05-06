@extends('web.layouts.video')
@extends('web.layouts.sidebar')
@section('content-main')
    <style>
        .main {
            min-height: 100vh;
        }
    </style>
    <div class="main mr-[20px] flex justify-center flex-nowrap mt-[100px]">
        <div class="w-[12%]"></div>
        <div class="w-[88%]">
            <div class="menu flex justify-between">
                <div class="link text-xl">Những phim được đề xuất bởi biên tập viên</div>
            </div>
            <div class="content mt-[20px] grid grid-cols-5 gap-5">
                @foreach($data as $value)
                    <a href="{{ route('video.info', $value->brief) }}" class="film-col">
                        <img src="{{ asset('upload/images/video/image_video_' . $value->brief . '.jpg') }}" alt=""  style="width: 400px;">
                        <p class="title-film text-xl">{{ $value->name }}</p>
                    </a>
                @endforeach
            </div>
            <div>
                <div class="text-right">
                    {!! $data->render() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
