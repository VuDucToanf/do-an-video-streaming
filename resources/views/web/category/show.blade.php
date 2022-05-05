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
                <div class="link font-bold text-3xl">{{ $category->title }}</div>
                <div class="filter whitespace-nowrap">
                    <select name="filter-1" id=""
                            class="form-select form-select-lg mb-3
                              appearance-none
                              px-4
                              py-2
                              text-sm
                              font-normal
                              text-gray-700
                              bg-white bg-clip-padding bg-no-repeat
                              border border-solid border-gray-300
                              rounded
                              transition
                              ease-in-out
                              m-0
                              focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                            onchange="location.href = '<?php echo $category->slug ?>?order='+this.value;"
                    >
                        <option value="">Sắp xếp</option>
                        <option value="view_desc" @if(isset($order) && $order == 'view_desc') selected @endif>Sắp xếp theo lượt xem giảm dần</option>
                        <option value="view_asc" @if(isset($order) && $order == 'view_asc') selected @endif>Sắp xếp theo lượt xem tăng dần</option>
                        <option value="published_time" @if(isset($order) && $order == 'published_time') selected @endif>Sắp xếp theo ngày ra mắt</option>
                        <option value="updated_time" @if(isset($order) && $order == 'updated_time') selected @endif>Sắp xếp theo ngày cập nhật</option>
                    </select>
                </div>
            </div>
            <div class="content grid grid-cols-5 gap-5">
                @foreach($data as $value)
                    <a href="{{ route('video', $value->brief) }}" class="film-col">
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
