@extends('frontend::layouts.app')

@section('title', $title = '关于我们')
@section('description', config("system.common.basic.description"))
@section('keywords', config("system.common.basic.keywords"))

@php
    $active = '关于我们';
@endphp

@section('swipper')
    @include('frontend.customize.layouts.swipper', $slides)
@stop

<style>
.about-wrapper{background: #fff;padding: 30px 0;font-family: PingFangSC-Regular;}
.about-wrapper .about-title{font-size: 1.5rem;margin-bottom: 30px;margin-top: 32px;}
.about-wrapper .about-title:last-child{margin-bottom: 0;}
.about-wrapper .about-container:nth-child(2n+1){background:#f2f6fa;}
.about-wrapper .about-item{padding:30px 0;}
.about-wrapper .about-item .item-title,.yuanjing-wrapper .item-title{margin-bottom: 6px;color: #16508e;font-size: 20px;}
.about-wrapper .about-item .item-content,.yuanjing-wrapper .item-content{line-height: 32px;color: #888;font-size:16px;}
.about-wrapper .about-item img{width:100%;height: 200px;}
.about-wrapper .yuanjing{height:220px;background-image: url("{{asset('images/yuanjing_bg.png')}}"); color:#fff;text-align: center;display: flex;align-items: center;}
.about-wrapper .yuanjing .title{font-size: 1.5rem;}
.about-wrapper .yuanjing .slogan{font-size: 1.1rem;line-height: 36px;}

.about-wrapper .honor-wrapper .honor-item{padding: 20px;position: relative;}


/*****/
@media screen and (min-width: 576px){
    .about-wrapper{background: #fff;padding: 80px 0;font-family: PingFangSC-Regular;}
    .about-wrapper .about-title{font-size: 32px;margin-top: 116px;margin-bottom: 65px;}
    .about-wrapper .about-title:last-child{margin-bottom: 0;}
    .about-wrapper .about-container:nth-child(2n+1){background:#f2f6fa;}
    .about-wrapper .about-item{display: flex;align-items:center;padding:70px 0;}
    .about-wrapper .about-item .desc-left{flex:1;padding-right: 80px;}
    .about-wrapper .about-item .desc-right{flex:1;margin-left: 80px;}
    .about-wrapper .about-item .item-title,.yuanjing-wrapper .item-title{margin-bottom: 6px;color: #16508e;font-size: 20px;}
    .about-wrapper .about-item .item-content,.yuanjing-wrapper .item-content{line-height: 32px;color: #888;font-size:16px;}
    .about-wrapper .about-item img{ width:464px;height: 260px;}
    .about-wrapper .yuanjing{height:340px;background-image: url("{{asset('images/yuanjing_bg.png')}}"); color:#fff;text-align: center;display: flex;align-items: center;}
    .about-wrapper .yuanjing .title{font-size:2.375rem;}
    .about-wrapper .yuanjing .slogan{font-size: 1.625rem;line-height: 56px;}
    .about-wrapper .honor-wrapper .honor-item{padding: 20px;position: relative;}

}

/*****/


.about-wrapper .honor-wrapper .mask {
    position: absolute;
    z-index: 1;
    top: 20px;
    left: 20px;
    bottom: 20px;
    right: 20px;
    background-color: rgba(22, 80, 142, 0.8);
    color: #fff;
    opacity: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 20px;
    text-align: center;
}
.about-wrapper .honor-wrapper .honor-item:hover .mask{
    opacity:1;
}

</style>
@section('content')
    <div class="container-fixed">
        <div class="container-fixed child-nav">
            <div class="container text-center">
                <ul class="row">
                    <li class="col-6 col-sm-3  child-active">
                        <a href="{{route('company.index', 7)}}"><img src="{{asset('images/gongsijieshao-sel.png')}}" alt=""> <span>公司介绍</span></a>
                        <span class="triangle_border_up"></span>
                    </li>
                    <li class="col-6 col-sm-3"><a href="{{route('company.team')}}"><img src="{{asset('images/guanli-unsel.png')}}" alt=""><span>管理团队</span></a></li>
                    <li class="col-6 col-sm-3">
                        <a href="{{route('company.join')}}"><img src="{{asset('images/jiaru-unsel.png')}}" alt=""><span>加入我们</span></a>
                    </li>
                    <li class="col-6 col-sm-3">
                        <a href="{{route('company.contact')}}"><img src="{{asset('images/lianxi-unsel.png')}}" alt=""><span>联系我们</span></a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="container-fixed about-wrapper">
            @if($abouts->count())
            <div class="container about-title" style="margin-top:32px;margin-bottom: 0;">关于我们</div>
            @foreach ($abouts as $about)
                <div class="container-fixed about-container">
                    <div class="container about-item">
                        <div class="row pr-3 pl-3">
                            @if($about->position == 'left')
                                <img class="col-12 col-sm-4" src="{{storage_image_url($about->thumb)}}" alt="nEqual">
                            @endif
                            <div class="col-12 col-sm-8 @if($about->position=='right') desc-left @else  desc-right @endif">
                                <div class="item-title">{{field_locale($about->sub_title)}}</div>
                                <div class="item-content">{{field_locale($about->content)}}</div>
                            </div>
                            @if($about->position == 'right')
                                <img class="col-12 col-sm-4" src="{{storage_image_url($about->thumb)}}" alt="nEqual">
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
          @endif


            <div class="container-fixed yuanjing">
                <div class="container">
                    <p class="title">VISION/集团愿景</p>
                    <p>
                        <span style="display: inline-block;height:3px;width:90px;background: #fff;opacity:0.3;border-radius: 2px;"> </span>
                        <span style="display: inline-block;height: 4px;width: 4px; background: #fff;border-radius: 50%;"> </span>
                        <span style="display: inline-block;height:3px;width:90px;background: #fff;opacity:0.3;border-radius: 2px;"> </span>
                    </p>
                    <p class="slogan">成为全球企业级人工智能的领跑者 <br> 创造人机同行的美好世界</p>
                </div>
            </div>
            <div class="container about-title">公司愿景</div>
            <div class="container-fixed">
                <div class="container yuanjing-wrapper">
                    <div class="item-title">{{ $vision}}</div>
                    <div class="item-content">
                       {{$visionDesc}}
                    </div>
                </div>
            </div>

            @if($honors->count())
                <div class="container-fixed">
                    <div class="container about-title">公司荣誉</div>
                    <div class="container honor-wrapper">
                        <div class="row">
                            @foreach($honors as $item)
                                <div class="col-12 col-sm-6 col-md-3 honor-item">
                                    <img src="{{storage_image_url($item->image)}}" alt="" style="height:370px;width: 100%;border:1px solid #eee;">
                                    <p class="mask"><span>{{field_locale($item->name)}}</span></p>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>

@endsection

@section('scripts')
@endsection