@extends('web.layouts.default')
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
                <div class="link font-bold text-xl">Tìm kiếm theo tên đạo diễn: {{ $author->name }}</div>
                <div class="filter whitespace-nowrap">
                </div>
            </div>
            <div class="content grid grid-cols-5 gap-5 mt-[10px]">
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
<style>
    ul.pagination {
        margin: 0px !important;
        width: 10%;
        display: flex;
        padding-left: 0;
        border-radius: 4px;
    }
    ul.pagination > li > span {
        padding: 3px 10px;
    }
    ul.pagination > li > a {
        padding: 3px 10px;
    }
    ul.pagination > li{
        border: 1px solid black;
        margin-right: 10px;
    }
    ul.pagination > li.active {
        background-color: #01a7b3;
        border: 1px solid #01a7b3;
        color: white;
    }
</style>
