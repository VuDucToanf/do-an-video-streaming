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
                <div class="link text-xl">Video đã thích</div>
            </div>
            <div class="content mt-[20px] grid grid-cols-5 gap-5">
                @if(isset($data) && !empty($data))
                    @foreach($data as $value)
                        <a href="{{ route('video', $value->brief) }}" class="film-col">
                            <img src="{{ asset('upload/images/video/image_video_' . $value->brief . '.jpg') }}" alt=""  style="width: 400px;">
                            <p class="title-film text-xl">{{ $value->name }}</p>
                        </a>
                    @endforeach
                @else
                    <p class="col-span-5 flex justify-around">Bạn chưa nhấn thích video nào</p>
                @endif
            </div>
            <div>
                <div class="text-right">
                    {!! $data->render() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
