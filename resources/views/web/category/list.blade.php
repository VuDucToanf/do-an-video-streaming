@extends('web.layouts.default')
@section('content-main')
    <div class="main mr-[20px] flex justify-center flex-nowrap mt-[100px]">
        <div class="w-[12%]"></div>
        <div class="w-[88%]">
            <div class="menu flex justify-between">
                <div class="link font-bold text-3xl">Phim bộ</div>
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
                              focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none">
                        <option value="">Phim lẻ</option>
                        <option value="">Phim bộ</option>
                        <option value="">Phim Việt Nam</option>
                        <option value="">Phim Chiếu rạp</option>
                        <option value="">Xếp hạng tuần</option>
                        <option value="">Phim kinh dị</option>
                        <option value="">Phim hoạt hình</option>
                        <option value="">Phim cổ trang</option>
                    </select>
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
                              focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none">
                        <option value="">Sắp xếp theo lượt xem</option>
                        <option value="">Sắp xếp theo ngày ra mắt</option>
                        <option value="">Sắp xếp theo ngày cập nhật</option>
                    </select>
                </div>
            </div>
            <div class="content grid grid-cols-5 gap-5">
                <div class="film-col">
                    <img src="{{ asset('images/img-film/1.jpg') }}" alt="">
                    <p class="title-film text-xl">Day Dứt Nỗi Đau - Mr. Siro ft Sirocon</p>
                </div>
                <div class="film-col">
                    <img src="{{ asset('images/img-film/1.jpg') }}" alt="">
                    <p class="title-film text-xl">Day Dứt Nỗi Đau - Mr. Siro ft Sirocon</p>
                </div>
                <div class="film-col">
                    <img src="{{ asset('images/img-film/1.jpg') }}" alt="">
                    <p class="title-film text-xl">Day Dứt Nỗi Đau - Mr. Siro ft Sirocon</p>
                </div>
                <div class="film-col">
                    <img src="{{ asset('images/img-film/1.jpg') }}" alt="">
                    <p class="title-film text-xl">Day Dứt Nỗi Đau - Mr. Siro ft Sirocon</p>
                </div>
                <div class="film-col">
                    <img src="{{ asset('images/img-film/1.jpg') }}" alt="">
                    <p class="title-film text-xl">Day Dứt Nỗi Đau - Mr. Siro ft Sirocon</p>
                </div>
                <div class="film-col">
                    <img src="{{ asset('images/img-film/1.jpg') }}" alt="">
                    <p class="title-film text-xl">Day Dứt Nỗi Đau - Mr. Siro ft Sirocon</p>
                </div>
                <div class="film-col">
                    <img src="{{ asset('images/img-film/1.jpg') }}" alt="">
                    <p class="title-film text-xl">Day Dứt Nỗi Đau - Mr. Siro ft Sirocon</p>
                </div>
                <div class="film-col">
                    <img src="{{ asset('images/img-film/1.jpg') }}" alt="">
                    <p class="title-film text-xl">Day Dứt Nỗi Đau - Mr. Siro ft Sirocon</p>
                </div>
                <div class="film-col">
                    <img src="{{ asset('images/img-film/1.jpg') }}" alt="">
                    <p class="title-film text-xl">Day Dứt Nỗi Đau - Mr. Siro ft Sirocon</p>
                </div>
                <div class="film-col">
                    <img src="{{ asset('images/img-film/1.jpg') }}" alt="">
                    <p class="title-film text-xl">Day Dứt Nỗi Đau - Mr. Siro ft Sirocon</p>
                </div>
                <div class="film-col">
                    <img src="{{ asset('images/img-film/1.jpg') }}" alt="">
                    <p class="title-film text-xl">Day Dứt Nỗi Đau - Mr. Siro ft Sirocon</p>
                </div>
                <div class="film-col">
                    <img src="{{ asset('images/img-film/1.jpg') }}" alt="">
                    <p class="title-film text-xl">Day Dứt Nỗi Đau - Mr. Siro ft Sirocon</p>
                </div>
                <div class="film-col">
                    <img src="{{ asset('images/img-film/1.jpg') }}" alt="">
                    <p class="title-film text-xl">Day Dứt Nỗi Đau - Mr. Siro ft Sirocon</p>
                </div>
                <div class="film-col">
                    <img src="{{ asset('images/img-film/1.jpg') }}" alt="">
                    <p class="title-film text-xl">Day Dứt Nỗi Đau - Mr. Siro ft Sirocon</p>
                </div>
                <div class="film-col">
                    <img src="{{ asset('images/img-film/1.jpg') }}" alt="">
                    <p class="title-film text-xl">Day Dứt Nỗi Đau - Mr. Siro ft Sirocon</p>
                </div>
            </div>
        </div>
    </div>
@endsection
