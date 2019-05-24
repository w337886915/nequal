@php
    $solution_mod = new \App\Models\Solution;
    $list = $solution_mod->get();
    //dd($list);
@endphp
@extends('frontend.customize.layouts.app')
@section('style')
    <style>
        .swiper-banner {
            margin-bottom: 116px;
        }

        .swiper-banner .swiper-slide p {
            display: table;
            height: 100%;
        }

        .swiper-banner .swiper-slide p span {
            width: 385px;
            height: 75px;
            font-family: HelveticaNeue-Bold;
            font-size: 100px;
            font-weight: normal;
            font-stretch: normal;
            line-height: 71px;
            letter-spacing: 0px;
            color: #ffffff;
            display: table-cell;
            vertical-align: middle;
            padding-left: 16vw;
        }

        .swiper-list .swiper-slide .container .product-overview .overview-content .overview-img {

        }

        .swiper-list .swiper-slide .container .product-overview .overview-content .overview-left ul li {
            list-style-type: circle;
        }

        .swiper-list .swiper-slide .product-advantage {
            background-color: #f2f6fa;
            padding-top: 63px;
        }
    </style>
@endsection
@section('swipper')
    @php
        $slides_mod = new \App\Models\Slide;
        $slides = $slides_mod->where('group',3)->where('status','1')->get();
    @endphp
    <div class="swiper-container">
        <div class="swiper-wrapper swiper-banner">
            @foreach($slides as $item)
                {{--  <a target="{{$item->target}}" href="{{$item->link}}">--}}
                <div class="swiper-slide"
                     style='height:500px;width:100%;background-image: url("{{storage_image_url($item->image)}}");background-size: 100% 100%;'>
                    {!! $item->content !!}
                </div>
                {{--   </a>--}}
            @endforeach
        </div>
    @if(count($slides)>1)
        <!-- 如果需要分页器 -->
            <div class="swiper-pagination"></div>
            <!-- 如果需要导航按钮 -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        @endif
    </div>
@endsection
@section('content')
    <div class="swiper-container">
        <div class="swiper-wrapper swiper-list">
            @foreach($list as $v)
                <div class="swiper-slide">
                    <div class="container">
                        <div class="product-overview">
                            <div class="row">
                                <div class="col-md-6">
                                    <h3>Brand Data Hub</h3>
                                    <p>为近70% 国内、国际知名品牌企业数字化转型提供数据智能应用和管理服务</p>
                                </div>
                                <div class="col-md-6" style="text-align: right">
                                    <button class="btn btn-primary">申请试用</button>
                                </div>
                            </div>
                            <div class="row" style="margin-top: 108px">
                                <div class="col-md-12">
                                    <h1>产品概述</h1>
                                </div>
                            </div>
                            <div class="row overview-content">
                                <div class="col-md-8 overview-left">
                                    {!! $v->introduction[app()->getLocale()] !!}
                                </div>
                                <div class="col-md-4 overview-img">
                                    <img src="{{storage_image_url($v->thumb)}}">
                                </div>
                            </div>

                        </div>

                    </div>

                    <div class="container-fixed product-advantage">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <h1>产品优势</h1>
                                </div>
                            </div>
                            <div class="row overview-content">
                                <div class="col-md-12 overview-left">
                                    {!! $v->introduction[app()->getLocale()] !!}
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            @endforeach

        </div>
    @if(count($slides)>1)
        <!-- 如果需要分页器 -->
            <div class="swiper-pagination"></div>
            <!-- 如果需要导航按钮 -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        @endif
    </div>
@endsection
@section('script')

@endsection
@section('script-swiper')
    <script>
        $(document).ready(function () {
            var mySwiper = new Swiper('.swiper-banner', {
                autoplay: true,
                direction: 'horizontal', // 垂直切换选项
                // 如果需要分页器
                pagination: {
                    el: '.swiper-pagination',
                },

                // 如果需要前进后退按钮
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },

            })
        });
    </script>
@endsection
