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
.about-wrapper{background: #fff;padding: 80px 0;font-family: PingFangSC-Regular;}
.about-wrapper .about-title{font-size: 32px;margin-top: 116px;margin-bottom: 65px;}
.about-wrapper .about-title:last-child{margin-bottom: 0;}
.about-wrapper .about-container:nth-child(2n+1){background:#f2f6fa;}
.about-wrapper .about-item{display: flex;align-items:center;padding:70px 0;}
.about-wrapper .about-item .desc{flex:1;margin-right: 113px;}
.about-wrapper .about-item .item-title,.yuanjing-wrapper .item-title{margin-bottom: 6px;color: #16508e;font-size: 20px;}
.about-wrapper .about-item .item-content,.yuanjing-wrapper .item-content{line-height: 32px;color: #888;font-size:16px;}
.about-wrapper .about-item img{width:464px;height: 260px;}
.about-wrapper .yuanjing{height:340px;background-image: url("{{asset('images/yuanjing_bg.png')}}"); color:#fff;text-align: center;display: flex;align-items: center;}
.about-wrapper .honor-wrapper .honor-item{padding: 20px;position: relative;}

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
            <div class="container">
                <ul>
                    <li class="child-active">
                        <a href="{{route('company.index', 7)}}"><img src="{{asset('images/gongsijieshao-sel.png')}}" alt=""> <span>公司介绍</span></a>
                        <span class="triangle_border_up"></span>
                    </li>
                    <li><a href="{{route('company.team')}}"><img src="{{asset('images/guanli-unsel.png')}}" alt=""><span>管理团队</span></a></li>
                    <li><a href="{{route('company.join')}}"><img src="{{asset('images/jiaru-unsel.png')}}" alt=""><span>加入我们</span></a></li>
                    <li><a href="{{route('company.contact')}}"><img src="{{asset('images/lianxi-unsel.png')}}" alt=""><span>联系我们</span></a></li>
                </ul>
            </div>
        </div>

        <div class="container-fixed about-wrapper">
            @if($abouts->count())
            <div class="container about-title" style="margin-top:32px;margin-bottom: 0;">关于我们</div>
            @foreach ($abouts as $about)
                <div class="container-fixed about-container">
                    <div class="container about-item">
                        @if($about->position == 'left')
                        <img src="{{storage_image_url($about->thumb)}}" alt="nEqual">
                        @endif
                        <div class="desc" @if($about->position=='right') style="margin-right: 113px;margin-left: 0;" @else  style="margin-left: 113px;margin-right: 0;"  @endif>
                            <div class="item-title">{{field_locale($about->sub_title)}}</div>
                            <div class="item-content">{{field_locale($about->content)}}</div>
                        </div>
                        @if($about->position == 'right')
                            <img src="{{storage_image_url($about->thumb)}}" alt="nEqual">
                        @endif
                    </div>
                </div>
            @endforeach
          @endif


            <div class="container-fixed yuanjing">
                <div class="container" style="display:inline-block;">
                    <p style="font-size: 38px;">VISION/集团愿景</p>
                    <p>
                        <span style="display: inline-block;height:4px;width:90px;background: #fff;opacity:0.3;border-radius: 3px;"> </span>
                        <span style="display: inline-block;height: 4px;width: 5px; background: #fff;border-radius: 50%;"> </span>
                        <span style="display: inline-block;height:4px;width:90px;background: #fff;opacity:0.3;border-radius: 3px;"> </span>
                    </p>
                    <p style="font-size: 28px;line-height: 56px;">成为全球企业级人工智能的领跑者 <br> 创造人机同行的美好世界</p>
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
                                <div class="col-md-3 honor-item">
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