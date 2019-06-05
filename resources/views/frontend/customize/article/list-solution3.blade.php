@php
    $solution_mod = new \App\Models\Solution;
    $list = $solution_mod->get();
    $brand_mod = New \App\Models\Brand;
    foreach ($list as $k=>&$v){
        $v['brands'] = $brand_mod->whereIn('id',$v['brand_ids'])->get();
    }
    //dd($list);
    $active = 'solution';

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


        .swiper-list .swiper-slide .container .product-overview .overview-content .overview-left ul li {
            list-style-type: circle;
            list-style-image: url("{{asset('images/circle.png')}}");
            padding-top: 16px;
            padding-bottom: 16px;
        }

        .swiper-list .swiper-slide .container .product-overview .overview-content .overview-left ul li:first-child {
            padding-top: 50px;
            padding-bottom: 16px;
        }

        .swiper-list .swiper-slide .product-advantage {
            background-color: #f2f6fa;
            padding-top: 63px;
        }

        .swiper-list .swiper-slide .product-advantage .overview-content {
            padding-top: 50px;
        }

        .swiper-list .swiper-slide .product-advantage .overview-content .overview-left {

        }

        .swiper-list .swiper-slide .product-advantage .overview-content .overview-left ol {
            list-style: decimal;
            width: 100%;
        }

        .swiper-list .swiper-slide .product-advantage .overview-content .overview-left ol li {
            list-style: decimal;
            width: 50%;
            float: left;
            padding-bottom: 58px;
        }

        .swiper-list .swiper-slide .product-advantage .overview-content .overview-left ol li ul {
            width: 100%;
            padding-left: 1rem;
        }

        .swiper-list .swiper-slide .product-advantage .overview-content .overview-left ol li ul li {
            list-style-type: disc;
            float: none;
            width: 90%;
            padding-bottom: 0px;
            line-height: 24px;

        }

        .swiper-list .swiper-slide .service-customer .container {
            padding-top: 60px;
        }

        .swiper-list .swiper-slide .service-customer .overview-content {

            margin: 0;
            padding-top: 50px;
            position: relative;
        }

        .swiper-service-customer {
            height: 260px;
            margin: 0;
            padding: 0;
            overflow: hidden;
            position: static;

        }


        .swiper-button-next1 {
            width: 46px;
            height: 94px;
            background-color: red;
            border-radius: 23px;
            border: solid 2px #dde4ee;
        }

        .next-extend {
            background-image: url({{asset('images/right.png')}});
            right: -32px;
        }

        .prev-extend {
            background-image: url({{asset('images/right.png')}});
            -moz-transform: rotate(180deg);
            -webkit-transform: rotate(180deg);
            transform: rotate(180deg);
            left: -32px;

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
    <div class="swiper-container" id="swiper-content">
        <div class="swiper-wrapper swiper-list">
            @php
                $anchor_nav = "<div class='anchor_nav'>";
            @endphp
            @foreach($list as $v)
                @php
                    $anchor_nav .= "<a href='#" . $v->anchor . "'>".$v->anchor."</a>";
                @endphp
                <div class="swiper-slide" name="{{$v->anchor}}">
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
                                    {!! $v->advantage[app()->getLocale()] !!}
                                </div>

                            </div>
                        </div>

                    </div>
                    <div class="container-fixed service-customer">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <h1>服务客户</h1>
                                </div>
                            </div>
                            <div class="row overview-content">
                                <div class="col-md-12 swiper-service-customer">
                                    <div class="swiper-wrapper">
                                        @foreach($v->brands as $b)
                                            <div class="swiper-slide">
                                                <img width="100%" src="{{storage_image_url($b->image)}}"/>
                                            </div>
                                        @endforeach
                                    </div>
                                    <div class="swiper-button-prev prev-extend"></div>
                                    <div class="swiper-button-next next-extend"></div>
                                </div>


                            </div>
                        </div>

                    </div>
                </div>
            @endforeach
            @php
                $anchor_nav .= "</div>";
            @endphp
            {!! $anchor_nav !!}
        </div>
    </div>
@endsection
@section('script')
    <script>
        $(document).ready(function () {
            var mySwiper1 = new Swiper('.swiper-service-customer', {
                autoplay: true,
                slidesPerView: 3,
                spaceBetween: 30,
                slidesPerGroup: 3,
                navigation: {
                    nextEl: '.swiper-button-next',

                    prevEl: '.swiper-button-prev',
                },
            });

        })

    </script>
@endsection
@section('script-swiper')
    <script>
        $(document).ready(function () {
            var mySwiper = new Swiper('.swiper-banner', {
                autoplay: true,
                direction: 'horizontal', // 垂直切换选项
                // 如果需要分页器
                pagination: {
                    el: '.swiper-pagination1',
                },

                // 如果需要前进后退按钮


            })
        });
    </script>
@endsection
