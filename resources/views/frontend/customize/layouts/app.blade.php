<!doctype html>
<html lang="{{app()->getLocale()}}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <title>{{ config('system.common.basic.name', config('app.name', 'nEqual')) }} - @yield('title', config('system.common.basic.name', 'nEqual')) </title>
    <!-- 让IE8/9支持媒体查询，从而兼容栅格 -->
    <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.2/css/swiper.min.css">
    <link rel="stylesheet" href="{{asset('css/common.css')}}">
    @yield('style')
</head>
<body>
<!-- header -->
@include('frontend.customize.layouts.header')

<!-- banner -->
@section('swipper')
    @php
        $slides = get_block("2018_03_04_224524_index_slide_block")->data;
    @endphp
    @include('frontend.customize.layouts.swipper')
@show
<!--content-->
<div class="container-fixed">
    @yield('content')
</div>
<!--footer-->
@include('frontend.customize.layouts.footer')

</body>
<script src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdn.bootcss.com/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.bootcss.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<!--[if lt IE 9]>
<script src="https://cdn.staticfile.org/html5shiv/r29/html5.min.js"></script>
<script src="https://cdn.staticfile.org/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.2/js/swiper.min.js"></script>
@yield('script')
@yield('script-swiper')
<script>
    $(document).ready(function () {
        var active = "{{ $active }}";
        if( active== 'index'){
            window.addEventListener('scroll', function () {
                let scrollTop = document.documentElement.scrollTop || document.body.scrollTop;
                if (scrollTop > 10) {
                    $('.header-wrapper').addClass('nav-bg');
                    $('.logo').attr("src","{{asset('images/logo_header.png')}}");
                    $('.lang-img').attr("src","{{asset('images/yuyan_h.png')}}");
                } else {
                    $('.header-wrapper').removeClass('nav-bg');
                    $('.logo').attr("src","{{asset('images/logo_footer.png')}}");
                    $('.lang-img').attr("src","{{asset('images/yuyan_f.png')}}");
                }
            });
        }else{
            $('.header-wrapper').addClass('nav-bg');
            $('.logo').attr("src","{{asset('images/logo_header.png')}}");
            $('.lang-img').attr("src","{{asset('images/yuyan_h.png')}}");
           // $('.banner-wrapper').css('padding-top', '80px')
        }


        $('#weixin').click(function(){
            $('.icon-content').html('<img src="{{asset('images/qrcode.png')}}" alt="nEqual" style="height:150px;">');
        });
        $('#Email').click(function(){
            $('.icon-content').html('邮箱：marketing@nequal.com');
        })

    });

</script>

</html>
