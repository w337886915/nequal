@extends('frontend.customize.layouts.app')
@section('style')
    <link rel="stylesheet" href="{{asset('vendor/nequal/css/frontend.css')}}" />
@endsection
@section('content')
    <div class="page-content-wrapper products">
        <div class="hypers-solutions-top-line media"></div>
        <div class="container-fluid">
            <div class="container">
                <div class="row-split-150"></div>
                <div class="page-title"><p><span>{{$get_level_one['en_name']}}</span></p>
                    <p>{{$get_level_one['name']}}</p></div>
                <div class="row-split-70"></div>
                <div class="row">
                    @foreach ($get_level_two as $v)
                    <div class="col-md-3 col-sm-6">
                        <div class="product-group-wrap">

                            <div class="product-group-title"><a href="../products_analyticscloud" target="_blank"><p>{{$v['en_name']}}</p>
                                    <p>{{$v['name']}}</p></a></div>
                            <ul class="product-group-items">
                                @foreach($v['articles'] as $v1)
                                <li><a href="../products_analyticscloud#list"><img
                                                src="{{asset('vendor/nequal/picture/hyper-web-analytics.svg')}}" class="product-logo-img"
                                                title="Hyper Web Analytics" alt="Hyper Web Analytics">
                                        <p>{{$v1['subtitle']}}</p>
                                        <p>{{$v1['title']}}</p></a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="row" style="text-align:center"><a class="primary-button" href="/demo-request" target="_blank">立即申请试用</a>
                </div>
                <div class="hypers-products-split-line row-split-100"></div>
                <div class="page-sub-title"><p>USE CASES</p>
                    <p>我 们 将 助 您 实 现 增 长</p></div>
                <div class="row">
                    <div class="col-md-10 col-md-offset-1 products-cases">
                        <div class="col-md-4 col-sm-4"><img src="{{asset('vendor/nequal/picture/cases-1.svg')}}">
                            <p>掌控并激活数据</p></div>
                        <div class="col-md-4 col-sm-4"><img src="{{asset('vendor/nequal/picture/cases-2.svg')}}">
                            <p>全方位了解客户</p></div>
                        <div class="col-md-4 col-sm-4"><img src="{{asset('vendor/nequal/picture/cases-3.svg')}}">
                            <p>提升运营效率</p></div>
                        <div class="col-md-4 col-sm-4"><img src="{{asset('vendor/nequal/picture/cases-4.svg')}}">
                            <p>精准获客</p></div>
                        <div class="col-md-4 col-sm-4"><img src="{{asset('vendor/nequal/picture/cases-5.svg')}}">
                            <p>准确归因</p></div>
                        <div class="col-md-4 col-sm-4"><img src="{{asset('vendor/nequal/picture/cases-6.svg')}}">
                            <p>实时获取决策指导</p></div>
                        <div class="col-md-4 col-sm-4"><img src="{{asset('vendor/nequal/picture/cases-7.svg')}}">
                            <p>全生命周期洞察</p></div>
                        <div class="col-md-4 col-sm-4"><img src="{{asset('vendor/nequal/picture/cases-8.svg')}}">
                            <p>跨渠道传递个性化体验</p></div>
                        <div class="col-md-4 col-sm-4"><img src="{{asset('vendor/nequal/picture/cases-9.svg')}}">
                            <p>提升ARPU</p></div>
                        <div class="col-sm-12 details"><p>底层数据天然打通，支持 SaaS 与企业本地化部署，提高业务灵活性</p></div>
                    </div>
                </div>
                <div class="hypers-products-split-line row-split-100"></div>
                <div class="page-sub-title"><p>CLIENTS</p>
                    <p>全 球 顶 尖 客 户 的 一 致 选 择</p></div>
                <div class="row">
                    <div class="about-wrapper">
                        <div class="col-md-12 items-wrapper col-6">
                            <ul>
                                <li class=""><a><img src="{{asset('vendor/nequal/picture/benz.svg')}}" title="奔驰" alt="奔驰"></a></li>
                                <li class=""><a><img src="{{asset('vendor/nequal/picture/about_c_11.svg')}}" title="中信证券" alt="中信证券"></a></li>
                                <li class=""><a><img src="{{asset('vendor/nequal/picture/uniqlo.svg')}}" title="UNIQLO" alt="UNIQLO"></a></li>
                                <li class=""><a><img src="{{asset('vendor/nequal/picture/about_c_25.svg')}}" title="新浪网" alt="新浪网"></a></li>
                                <li class=""><a><img src="{{asset('vendor/nequal/picture/about_c_3.svg')}}" title="阳狮" alt="阳狮"></a></li>
                                <li class=""><a><img src="{{asset('vendor/nequal/picture/about_c_1.svg')}}" title="尼尔森" alt="尼尔森"></a></li>
                                <li class=""><a><img src="{{asset('vendor/nequal/picture/about_c_15.svg')}}" title="上海通用汽车" alt="上海通用汽车"></a>
                                </li>
                                <li class=""><a><img src="{{asset('vendor/nequal/picture/yh.svg')}}" title="银河证件" alt="银河证件"></a></li>
                                <li class=""><a><img src="{{asset('vendor/nequal/picture/yum-china.svg')}}" title="YUM CHINA"
                                                     alt="YUM CHINA"></a></li>
                                <li class=""><a><img src="{{asset('vendor/nequal/picture/about_c_26.svg')}}" title="凤凰网" alt="凤凰网"></a></li>
                                <li class=""><a><img src="{{asset('vendor/nequal/picture/dentsuaegisnetwork.svg')}}"
                                                     title="Dentsu Aegis Network" alt="Dentsu Aegis Network"></a></li>
                                <li class=""><a><img src="{{asset('vendor/nequal/picture/about_c_2.svg')}}" title="艾瑞咨询" alt="艾瑞咨询"></a></li>
                                <li class=""><a><img src="{{asset('vendor/nequal/picture/about_c_17.svg')}}" title="上汽集团" alt="上汽集团"></a></li>
                                <li class=""><a><img src="{{asset('vendor/nequal/picture/about_c_10.svg')}}" title="中国平安" alt="中国平安"></a></li>
                                <li class=""><a><img src="{{asset('vendor/nequal/picture/mzc.svg')}}" title="美赞臣" alt="美赞臣"></a></li>
                                <li class=""><a><img src="{{asset('vendor/nequal/picture/about_c_28.svg')}}" title="爱奇艺" alt="爱奇艺"></a></li>
                                <li class=""><a><img src="{{asset('vendor/nequal/picture/mindshare.svg')}}" title="MINDSHARE"
                                                     alt="MINDSHARE"></a></li>
                                <li class=""><a><img src="{{asset('vendor/nequal/picture/ipsos.svg')}}" title="IPSOS" alt="IPSOS"></a></li>
                                <li class=""><a><img src="{{asset('vendor/nequal/picture/about_c_18.svg')}}" title="雷克萨斯" alt="雷克萨斯"></a></li>
                                <li class=""><a><img src="{{asset('vendor/nequal/picture/about_c_8.svg')}}" title="浦发银行" alt="浦发银行"></a></li>
                                <li class=""><a><img src="{{asset('vendor/nequal/picture/about_c_40.svg')}}" title="奕欧来" alt="奕欧来"></a></li>
                                <li class=""><a><img src="{{asset('vendor/nequal/picture/about_c_29.svg')}}" title="TVB" alt="TVB"></a></li>
                                <li class=""><a><img src="{{asset('vendor/nequal/picture/yr.svg')}}" title="云锐集团" alt="云锐集团"></a></li>
                                <li class=""><a><img src="{{asset('vendor/nequal/picture/arvato.svg')}}" title="Arvato" alt="Arvato"></a></li>
                                <li class=""><a><img src="{{asset('vendor/nequal/picture/sqdt.svg')}}" title="上汽大通" alt="上汽大通"></a></li>
                                <li class=""><a><img src="{{asset('vendor/nequal/picture/about_c_5.svg')}}" title="VISA" alt="VISA"></a></li>
                                <li class=""><a><img src="{{asset('vendor/nequal/picture/about_c_42.svg')}}" title="倩碧" alt="倩碧"></a></li>
                                <li class=""><a><img src="{{asset('vendor/nequal/picture/about_c_27.svg')}}" title="久游" alt="久游"></a></li>
                                <li class=""><a><img src="{{asset('vendor/nequal/picture/prwh.svg')}}" title="派瑞威行" alt="派瑞威行"></a></li>
                                <li class=""><a><img src="{{asset('vendor/nequal/picture/maxbit.svg')}}" title="秒硕" alt="秒硕"></a></li>
                            </ul>
                            <div class="clients-more">......</div>
                        </div>
                    </div>
                </div>
                <div class="split-line"></div>
                <div class="row"><p class="hypers-contact-us"><a class="primary-button" href="/demo-request"
                                                                 target="_blank">立即申请试用</a><br> <a
                                href="tel://400-806-3766">400-806-3766</a><br> <a href="mailto:contact@hypers.com">contact@hypers.com</a>
                    </p></div>
                <div class="row-split-100"></div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        $(function(){
            $('.navbar').addClass('nav-bg')
        })

    </script>
@endsection


