@extends('frontend::layouts.app')
@section('title', '首页')

<style>
    #index-swiper{ height:300px; }
    #index-swiper .swiper-slide{background-color: #ffffff;box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.15);border-radius: 6px;height:260px; padding:10px 25px;}
    #index-swiper .swiper-slide .title{font-size: 20px;line-height: 38px;color: #151515;}
    #index-swiper .swiper-slide .desc{ font-size: 16px; line-height: 24px; color: #888;width: 180px;}
    .index-swiper-button-prev,.index-swiper-button-next{
        border: 1px solid #dde4ee; line-height:94px;width: 46px; text-align: center;border-radius: 25px;display: flex;align-items: center;justify-content: center;
    }
    .index-swiper-button-prev{position: absolute;z-index: 1;left: -70px;top: 100px; height: 94px;}
    .index-swiper-button-next{position: absolute; z-index: 1;right: -70px;top: 100px;height: 94px;}


</style>

@section('content')
    <div class="container-fixed" style="margin-top: -30px;">
        <div class="container" style="position: relative; display: flex;">
            <div class="index-swiper-button-prev"><img src="{{asset('images/arrow-left.png')}}" alt="nEqual"> </div>
            <div class="swiper-container" id="index-swiper" style="flex: 1;">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <p class="title">Brand Data Hub</p>
                        <p class="desc">近70% 知名企业数字化转型使用的数据智能平台</p>
                    </div>
                    <div class="swiper-slide">
                        <p class="title">Serving</p>
                        <p class="desc">近70% 知名企业数字化转型使用的数据智能平台</p>
                    </div>
                    <div class="swiper-slide">
                        <p class="title">Customer Experience Management</p>
                        <p class="desc">近70% 知名企业数字化转型使用的数据智能平台</p>
                    </div>
                </div>
            </div>
            <div class="index-swiper-button-next"><img src="{{asset('images/arrow-right.png')}}" alt="nEqual"></div>
        </div>
    </div>


        {{-- 服务品牌图片列表 --}}
        <div class="container-fixed" style="margin: 170px 0;">
            <div class="container">
                <h4 style="font-size:32px;text-align: center;margin: 50px 0;">我们的客户</h4>
                <div class="row">
                    @forelse ($brands as $brand)
                        <div class="col-xs-6 col-sm-6 col-md-2" style="height:120px;display: flex; align-items: center; justify-content:center;">
                            <img src="{{storage_image_url($brand->image)}}" alt="{{$brand->name}}" style="max-height:100%;max-width: 100%;">
                        </div>
                    @empty
                        <div></div>
                    @endforelse
                </div>
            </div>
        </div>

@endsection

@section('script')
    <script>
        $(document).ready(function () {
         new Swiper('#index-swiper', {
             // autoplay: true,
             loop: true,
             slidesPerView: 3,
             spaceBetween: 20,
             navigation: {
                 nextEl: '.index-swiper-button-next',
                 prevEl: '.index-swiper-button-prev',
             },
            })
        });
    </script>
@endsection
