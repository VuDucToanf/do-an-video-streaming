<?php
    $categories = \App\Models\Category::query()->where('status', 1)->where('deleted', 0)->get();
?>
<style>
    .title-cate .swiper-slide {
        width: auto;
    }
    .swiper-container{
        overflow: hidden;
    }
    .swiper-button-prev {
        background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20viewBox%3D'0%200%2027%2044'%3E%3Cpath%20d%3D'M0%2C22L22%2C0l2.1%2C2.1L4.2%2C22l19.9%2C19.9L22%2C44L0%2C22L0%2C22L0%2C22z'%20fill%3D'%234c71ae'%2F%3E%3C%2Fsvg%3E") !important;
        background-repeat: no-repeat;
        width: 20px;
        height: 20px;
        top: 26px;
        right: -35px;
        left: auto;
    }
    .swiper-button-next {
        background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20viewBox%3D'0%200%2027%2044'%3E%3Cpath%20d%3D'M27%2C22L27%2C22L5%2C44l-2.1-2.1L22.8%2C22L2.9%2C2.1L5%2C0L27%2C22L27%2C22z'%20fill%3D'%234c71ae'%2F%3E%3C%2Fsvg%3E") !important;
        background-repeat: no-repeat;
        width: 20px;
        height: 20px;
        top: 26px;
        right: -55px;
    }
    .swiper-button-next:after, .swiper-rtl .swiper-button-prev:after {
        display: none;
    }
    .swiper-button-prev:after, .swiper-rtl .swiper-button-next:after {
        display: none;
    }
    .smart-search{position: absolute; width: 92%; background: white; height: 350px; overflow: scroll; z-index: 2; top: 40px; display: none;}
    .smart-search ul{padding: 0px; margin: 0px; list-style: none;}
    .smart-search ul li{border-bottom: 1px solid #dddddd; display: flex; justify-content: start; margin-top: 2px;}
    .smart-search ul li a{text-decoration: none; color: DarkCyan; font-style: normal; text-transform: lowercase;}
    .smart-search ul li a:hover{color: DarkGreen;}
    .smart-search img{width: 70px; margin-right: 5px;}
</style>
<div class="header p-[3px] pt-3 bg-[#FFFFFF]">
    <div class="flex flex-center flex-nowrap">
        <div class="w-[12%] pl-[20px]">
            <a class="flex flex-nowrap" href="{{ route('home') }}">
                <img class="" src="{{ asset('images/logo2.png') }}" alt="" width="100">
            </a>
        </div>
        <div class="w-[84%] my-auto">
            <div class="flex justify-start">
                <div class="input-group relative flex flex-nowrap items-stretch rounded mb-[3px] w-[30%]">
                    <input type="search"
                           id="key"
                           class="input-control form-control relative flex-auto min-w-0 block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-[#FFFF00] focus:outline-none"
                           placeholder="Nhập tên bộ phim bạn muốn tìm" aria-label="Search" aria-describedby="button-addon2" autocomplete="off">
                    <button
                        class="input-group-text flex items-center px-3 py-1.5 text-base font-normal text-gray-700 text-center whitespace-nowrap rounded"
                        id="btnSearch">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="search" class="w-4"
                             role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                          <path fill="currentColor"
                                d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z"></path>
                        </svg>
                    </button>
                    <div class="smart-search">
                        <ul>
                        </ul>
                    </div>
                </div>
                <div class="box-cate__content w-[65%] my-auto">
                    <div class="title-cate">
                        <div class="relative">
                            <div class="swiper-container swp-left">
                                <div class="swiper-wrapper">
                                    @foreach($categories as $item)
                                        <a
                                            href="<?php echo request()->root() . '/danh-muc/' . $item->slug ?>"
                                            class="swiper-slide bg-white hover:bg-gray-100 text-gray-800 font-semibold border border-gray-400 rounded-full shadow p-[5px] onTab">
                                            {{ $item->title }}
                                        </a>
                                    @endforeach
                                </div>
                            </div>
                            <!-- Add Arrows -->
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-[4%]">
            <div class="user">
                @if(auth()->user())
                    <button class="btn_account">
                        <img src="{{ asset('images/img-user/xie.jpg') }}" alt="" width="100" height="30">
                        <div class="sub_menu" id="submenu_account">
                            <ul>
                                <li class="mt-[3px]">
                                    <p>{{ auth()->user()->fullname }}</p>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }} <i class="fas fa-sign-out-alt"></i>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </button>
                @else
                    <a class="nav-link p-[5px] bg-[#3B82F6] text-[#ebebeb]" style="line-height: 80px;" href="{{ route('login') }}">Login</a>
                @endif
            </div>
        </div>
    </div>
</div>
<script>
    $('#submenu_account').hide();
    $('.page_up2').hide();

    var show_menu = true;
    $(".btn_account").on('click', function () {
        if (show_menu == true) {
            $('#submenu_account').show('slow');
            show_menu = false;
        } else {
            $('#submenu_account').hide('slow');
            show_menu = true;
        }
    });
    new Swiper('.box-cate__content .swiper-container', {
        slidesPerView: "auto",
        paginationClickable: false,
        spaceBetween: 20,
        loop: true,
        navigation: {
            nextEl: '.box-cate__content .swiper-button-next',
            prevEl: '.box-cate__content .swiper-button-prev',
        },
    });
    if($('div.swiper-button-next').hasClass('swiper-button-disabled')){
        $('div.swiper-button-next').attr("style", "display: none");
        $('div.swiper-button-prev').attr("style", "display: none");
    }
    $(document).ready(function(){
        $("#btnSearch").click(function(){
            var key = $("#key").val();
            location.href = "<?php echo request()->root() ?>/video/search/q-"+key;
        });
        $(".input-control").keyup(function(){
            var strKey = $("#key").val();
            if(strKey.trim() == "")
                $(".smart-search").attr("style", "display: none");
            else{
                $(".smart-search").attr("style", "display: block");
                $.get("<?php echo request()->root() ?>/search/q-"+strKey, function(data){
                    $(".smart-search ul").empty();
                    $(".smart-search ul").append(data);
                });
            }
        });
    });
</script>
