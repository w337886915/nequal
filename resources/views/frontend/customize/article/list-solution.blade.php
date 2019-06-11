@php
    $active = '解决方案';
    //获得同级分类
    if($category->parent > 0){
        $articleCategory = new \App\Models\Category;
        $sibling_category = $articleCategory->where('parent',$category->parent)->get()->toArray();
        //dd($sibling_category);
    }

@endphp
@section('title', $active)

@extends('frontend.customize.layouts.app')
@section('style')
    <style>
        .container-fluid {
            padding: 0;
            margin: 0;
        }

        .swiper-banner {
            padding-top: 80px;
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

        .nav {
            text-align: center;
            background-color: #144d8a;
            color: #FFFFFF;
            height: 80px;

        }

        .nav .row {
            height: 100%;

        }
        .nav .row .col {
            height: 100%;
            padding: 0;

        }
        .nav a{
            color: #FFFFFF;
        }
        .nav .row .col .table {
            display: table;
            height: 100%;
            margin-bottom: 0px;

        }

        .nav .row .col .table .table-cell {
            display: table-cell;
            vertical-align: middle;

        }

        .nav .row .col .table .table-cell p:first-child {
            font-size: 18px;
            font-weight: bold;
        }

        .nav .row .col .table .table-cell p:nth-child(2) {
            font-size: 14px;
        }

        .nav .active {
            background-color: #FFFFFF;
            color: #16508e !important;
            border-bottom: 2px solid #e6e6e6;
            position: relative;
            overflow-y: hidden;
        }

        .nav .active:after {
            content: "";
            display: block;
            height: 15px;
            border-left: 1px solid #e6e6e6;
            border-top: 1px solid #e6e6e6;
            transform: rotate(45deg);
            width: 15px;
            background: #fff;
            position: absolute;
            bottom: -8px;
            left: 48%;
            z-index: 5;
        }

        .solution-block {
            padding-top: 110px;
        }

        .solution-block .title {
            padding-bottom: 60px;
        }

        .solution-block h2 {
            padding-bottom: 23px;
        }

        .solution-block h6 {
            font-size: 18px;
            color: #16508e;
        }

        .solution-block .btn-shiyong {
            background-color: #16508e;
            color: #ffffff;
        }

        .product-overview {
            padding-left: 2rem;

        }

        .product-overview li {
            list-style-image: url("{{asset('images/circle.png')}}");
            margin-bottom: 20px;
        }

        .product-advantage {
            padding: 50px 0;
            background-color: #f2f6fa;
        }

        .product-advantage .content {
            overflow: hidden;
        }

        .product-advantage .content ul {
            padding-left: 20px;
        }

        .product-advantage .content ul li {
            list-style-type: decimal;
            width: 50%;
            float: left;
            margin-bottom: 20px;
            padding-right: 20px;
        }

        .product-advantage .content ul li ul li {
            list-style-type: disc;
            width: 90%;
            margin-bottom: 5px;
        }

        .customers h2 {
            padding-top: 60px;
            padding-bottom: 60px;
        }

        .customers h2 small {
            color: #16508e;
        }
        .out-container{
            position: relative;
            margin-bottom: 180px;
        }
        .customers-swiper{
            overflow: hidden;
            position: static;
        }
        .customers-swiper .swiper-wrapper .swiper-slide img{
            width: 100%;
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
    <div class="swiper-container container-fluid">
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
    <div class="container-fluid nav">
        <div class="container ">
            <div class="row ">
                @foreach($sibling_category  as $v)
                <div class="col col-lg-3 ">
                    <a class=""  href="{{route('article.index',[$navigation, $v['id']], false)}}">
                    <div class="table @if($v['id'] == $category->id) active @endif">
                        <div class="table-cell">
                            <p>{{$v['name']['cn']}}</p>
                            <p>{{$v['name']['en']}}</p>
                        </div>
                    </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    @if($articles->count() > 0)
        @foreach($articles as $article)
            <div class="container-fluid solution-block">
                <div class="container">
                    <div class="row">
                        <div class="col col-lg-10 title">
                            <h2>{{field_locale($article->title)}}</h2>
                            <h6>{{field_locale($article->subtitle)}}</h6>
                        </div>
                        <div class="col col-lg-2">
                            <a href=""> <button class="btn btn-shiyong">申请试用</button></a>
                        </div>
                    </div>
                    <h2>产品概述</h2>
                    <div class="row">
                        <div class="col col-lg-6">
                            <ul class="product-overview">
                               {!! field_locale($article->description) !!}
                            </ul>
                        </div>
                        <div class="col col-lg-6 text-center right-img">
                            <img src="{{storage_image_url($article->thumb)}}">
                        </div>
                    </div>
                </div>
                <div class="container-fluid product-advantage">
                    <div class="container">
                        <h2>产品优势</h2>
                        <div class="content">
                            {!! field_locale($article->content) !!}
                        </div>
                    </div>
                </div>
            </div>
    @endforeach
    @endif


   {{-- <div class="container-fluid solution-block">
        <div class="container">
            <div class="row">
                <div class="col col-lg-10 title">
                    <h2>Brand Data Hub</h2>
                    <h6>为近70%国内、国际知名品牌企业数字化转型提供数据智能应用和曾理服务</h6>
                </div>
                <div class="col col-lg-2">
                    <button class="btn btn-shiyong">申请试用</button>
                </div>
            </div>
            <h2>产品概述</h2>
            <div class="row">
                <div class="col col-lg-6">
                    <ul class="product-overview">
                        <li>近70%知名企业数字化转型使用的数智能平台</li>
                        <li>始终保持国内领先和创新的数据收集、跨设备及渠道闭环打通和应用、安全管理的数据枢纽平台。一站式智能连接 nequal旗下多个数据闭环应用产品,实现据无闭环应用和效果提升</li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                    </ul>
                </div>
                <div class="col col-lg-6 right-img">
                    <img src="{{asset('images/productimg.png')}}">
                </div>
            </div>
        </div>
        <div class="container-fluid product-advantage">
            <div class="container">
                <h2>产品优势</h2>
                <div class="content">
                    <ul>
                        <li>
                            <p>企业碎片化数据的连接枢纽</p>
                            <ul>
                                <li>多维度、全方位线上、线下数据采集能力;</li>
                                <li>领跑行业的跨设备打通消费者唯一标识能力,支持数据消费者全路径数据闭环打通管理;</li>
                                <li>经验丰富的异常数据清洗和去噪能力</li>
                            </ul>
                        </li>
                        <li>
                            <p>企业碎片化数据的连接枢纽</p>
                            <ul>
                                <li>多维度、全方位线上、线下数据采集能力;</li>
                                <li>领跑行业的跨设备打通消费者唯一标识能力,支持数据消费者全路径数据闭环打通管理;</li>
                                <li>经验丰富的异常数据清洗和去噪能力</li>
                            </ul>
                        </li>
                        <li>
                            <p>企业碎片化数据的连接枢纽</p>
                            <ul>
                                <li>多维度、全方位线上、线下数据采集能力;</li>
                                <li>领跑行业的跨设备打通消费者唯一标识能力,支持数据消费者全路径数据闭环打通管理;</li>
                                <li>经验丰富的异常数据清洗和去噪能力</li>
                            </ul>
                        </li>
                        <li>
                            <p>企业碎片化数据的连接枢纽</p>
                            <ul>
                                <li>多维度、全方位线上、线下数据采集能力;</li>
                                <li>领跑行业的跨设备打通消费者唯一标识能力,支持数据消费者全路径数据闭环打通管理;</li>
                                <li>经验丰富的异常数据清洗和去噪能力</li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>--}}

    <div class="container customers">
        <h2>服务客户
            <p>
                <small>Served customers</small>
            </p>
        </h2>
        <div class="out-container">
        <div class="swiper-container customers-swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><img src="{{asset('images/intel.png')}}"/></div>
                <div class="swiper-slide"><img src="{{asset('images/intel.png')}}"/></div>
                <div class="swiper-slide"><img src="{{asset('images/bmw.png')}}"/></div>
                <div class="swiper-slide"><img src="{{asset('images/bmw.png')}}"/></div>
                <div class="swiper-slide"><img src="{{asset('images/pg.png')}}"/></div>
                <div class="swiper-slide"><img src="{{asset('images/pg.png')}}"/></div>
                <div class="swiper-slide"><img src="{{asset('images/bmw.png')}}"/></div>
                <div class="swiper-slide"><img src="{{asset('images/intel.png')}}"/></div>
                <div class="swiper-slide"><img src="{{asset('images/pg.png')}}"/></div>
            </div>
            <div class="swiper-button-prev prev-extend"></div>
            <div class="swiper-button-next next-extend"></div>
        </div>
        </div>
    </div>

@endsection
@section('script')
    <script>
        $(document).ready(function(){
            var swiper1 = new Swiper('.customers-swiper', {
                autoplay: true,
                slidesPerView: 3,
                spaceBetween: 30,
                slidesPerGroup: 3,
                loop: true,
                loopFillGroupWithBlank: true,
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
            });
            var mySwiper = new Swiper('.swiper-banner', {
                autoplay: true,
                direction: 'horizontal', // 垂直切换选项
                // 如果需要分页器
                pagination: {
                    el: '.swiper-pagination1',
                },

                // 如果需要前进后退按钮


            })

        })

    </script>
@endsection
@section('script-swiper')
@endsection


