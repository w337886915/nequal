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
            <div class="container about-title">关于我们</div>
            <div class="container-fixed">
                <div class="container about-item" style="padding-top:0;">
                    <div class="desc">
                        <div class="item-title">数据连接+产品技术+咨询服务 支撑企业数字转型的铁三角</div>
                        <div class="item-content">
                            nEqual 恩亿科 是业界领先的赋能企业“智慧商业”的数据技术提供商。秉承着 “让数据赋能” 的技术和产品核心理念，nEqual 恩亿科 通过营销云的人工智能体系，为企业实现数据智能闭环管理和分析、营销自动化、消费者运营和管理智能化等“智慧商业”模式打造和运营。进而帮助企业提升营销体验、销售体验及服务体验等全面的超级用户体验，进而助力企业构建可持续发展的商业竞争力。nEqual 恩亿科 服务范围包括营销数据智能化管理和应用；CRM、销售、产品等企业级数据整合连接、管理和商业应用；数据智能产品研发+技术支持等定制化数据解决方案、数据咨询管理、数据安全及治理等服务。
                        </div>
                    </div>
                    <img src="{{asset('images/about1.png')}}" alt="nEqual">
                </div>
            </div>
            <div class="container-fixed" style="background-color: #f2f6fa;">
                <div class="container about-item">
                    <img src="{{asset('images/about2.png')}}" alt="nEqual">
                    <div class="desc" style="margin-left: 113px;margin-right: 0;">
                        <div class="item-title">强大技术基因的延续，近 10 年 日均百亿级 数据处理能力</div>
                        <div class="item-content">
                            nEqual 恩亿科 技术研发团队在营销领域耕耘超过10年，其数据产品具备灵活的私有化部署能力、完备的数据安全性标准、清晰的分层服务化设计，并且拥有多年来日均百亿级日志处理能力和十亿级实时投放响应经验和能力。nEqual 恩亿科 数据科学家团队产出的模型效果经第三方验证一直处于行业领先水平，并多次获得技术、产品及营销领域的多个知名奖项。
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fixed">
                <div class="container about-item">
                    <div class="desc">
                        <div class="item-title">为近 60%的世界知名品牌 提供数据服务</div>
                        <div class="item-content">
                            传承多年来行业“数据枢纽”的角色，及为宝洁、宝马、ABI、Intel、广汽菲克、东风日产等企业搭建品牌第一方 DMP 平台的技术优势、跨多领域的数据管理和实战应用经验，nEqual 恩亿科 致力于通过数据技术帮助企业实现超级用户体验的“智慧商业”的创新商业模式及管理手段，提高企业甚至社会的整体效能。
                        </div>
                    </div>
                    <img src="{{asset('images/about3.png')}}" alt="nEqual">
                </div>
            </div>
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
                    <div class="item-title">让企业与消费者成为朋友</div>
                    <div class="item-content">
                        由 Viktor Mayer-Schönberger & Kenneth Cukier 著作的《Big Data》中提到，在数据技术领域中 n=all （n equals all），数据和技术能够为企业以及人类社会带来无限的智能和可能。nEqual 恩亿科 由此而诞生，通过数据和技术为企业智慧商业的无限智能和可能而赋予能量。<br>
                        nEqual 恩亿科 承载着“让数据赋能”的产品理念、及让企业与消费者成为朋友的企业愿景，将帮助更多企业实现以超级用户体验为目标的“智慧商业“模式，全面提高企业甚至社会的整体效能。
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