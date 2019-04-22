@extends('frontend.customize.layouts.app')
@section('style')
    <link rel="stylesheet" href="{{asset('vendor/nequal/css/frontend.css')}}" />
    <style>
        body{
            background: none;
        }
        .page-content-wrapper .hypers-solutions-detail-img{
            width: 95%;
            height: 250px;
        }
        .page-content-wrapper .hypers-solutions-detail-title{
            margin-top: 30px;
            margin-bottom: 15px;
            overflow: hidden;
            white-space: nowrap;
            text-overflow:ellipsis;
        }
        .row-flex-wrap{
            display: flex;
            flex-wrap: wrap;
        }
        .each-wrap-div{
            margin-bottom: 40px;
        }
        .each-wrap-div>a:hover{
            text-decoration: none;
        }
        .each-wrap-div>a img:hover, h3:hover, p:hover{
            transform: scale(1.03);
        }

    </style>
@endsection
@section('content')
    <div class="page-content-wrapper" style="padding: 38px 0 50px 0;">
        <div style="background: #303848; padding: 60px 0;">
            <div class="container hypers-solutions-top" style="margin-top: 0;height: 60px;" >
                <div class="hypers-solution-introduce-title hidden-xs"><span class="hypers-caption-en-us">RETAIL</span></div>
                <div class="hypers-fixed-title">
                    <ul class="hypers-fixed-title-ul">
                        <li class="hypers-fixed-title-li active" data-type="retail"><a href="../solutions_retail">
                                <div class="hypers-fixed-title-name">新零售</div>
                                <div class="hypers-bottom-bar retail"></div>
                            </a></li>
                        <li class="hypers-fixed-title-li" data-type="finance"><a href="../solutions_finance">
                                <div class="hypers-fixed-title-name">金融</div>
                                <div class="hypers-bottom-bar finance"></div>
                            </a></li>
                        <li class="hypers-fixed-title-li" data-type="auto"><a href="../solutions_auto">
                                <div class="hypers-fixed-title-name">汽车</div>
                                <div class="hypers-bottom-bar auto"></div>
                            </a></li>
                        <li class="hypers-fixed-title-li" data-type="media"><a href="../solutions_media">
                                <div class="hypers-fixed-title-name">媒体</div>
                                <div class="hypers-bottom-bar media"></div>
                            </a></li>
                        <li class="hypers-fixed-title-li" data-type="game">
                            <a href="../solutions_game">
                                <div class="hypers-fixed-title-name">游戏</div>
                                <div class="hypers-bottom-bar game"></div>
                            </a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="container">
                <div class="row-split hidden-xs"></div>
                <div class="row"><h2 class="hypers-solution-title-leve2 col-sm-12">无论是线上还是线下，消费者购买的更是一种体验。</h2></div>
                <div class="row-split"></div>
                <div class="row row-flex-wrap">
                    <div class="col-md-6 each-wrap-div">
                        <a href="">
                            <img class="hypers-solutions-detail-img" src="https://www.nequal.com/images/nEqual/customer_case/case_2.png" alt="">
                            <h3 class="hypers-solutions-detail-title">零售商圈大数据</h3>
                            <p class="hypers-solutions-detail-text">
                                基于运营商的移动位置数据、iBeacon、传感器信息等技术，对入店客流、门店客流及周边商圈客流及其属性，进行实时监控分析与洞察。
                                通过充分利用这些海量数据，零售商能够在商场商铺选址、调整商铺运营策略、改善消费者入店体验等诸多方面实现创造性的变革。
                            </p>
                        </a>
                    </div>
                    <div class="col-md-6 each-wrap-div">
                        <a href="">
                            <img class="hypers-solutions-detail-img" src="https://www.nequal.com/images/nEqual/customer_case/case_2.png" alt="">
                            <h3 class="hypers-solutions-detail-title">零售商圈大数据</h3>
                            <p class="hypers-solutions-detail-text">
                                基于运营商的移动位置数据、iBeacon、传感器信息等技术，对入店客流、门店客流及周边商圈客流及其属性，进行实时监控分析与洞察。
                                通过充分利用这些海量数据，零售商能够在商场商铺选址、调整商铺运营策略、改善消费者入店体验等诸多方面实现创造性的变革。
                            </p>
                        </a>
                    </div>
                    <div class="col-md-6 each-wrap-div">
                        <a href="">
                            <img class="hypers-solutions-detail-img" src="https://www.nequal.com/images/nEqual/customer_case/case_2.png" alt="">
                            <h3 class="hypers-solutions-detail-title">零售商圈大数据</h3>
                            <p class="hypers-solutions-detail-text">
                                基于运营商的移动位置数据、iBeacon、传感器信息等技术，对入店客流、门店客流及周边商圈客流及其属性，进行实时监控分析与洞察。
                                通过充分利用这些海量数据，零售商能够在商场商铺选址、调整商铺运营策略、改善消费者入店体验等诸多方面实现创造性的变革。
                            </p>
                        </a>
                    </div>
                    <div class="col-md-6 each-wrap-div">
                        <a href="">
                            <img class="hypers-solutions-detail-img" src="https://www.nequal.com/images/nEqual/customer_case/case_2.png" alt="">
                            <h3 class="hypers-solutions-detail-title">零售商圈大数据</h3>
                            <p class="hypers-solutions-detail-text">
                                基于运营商的移动位置数据、iBeacon、传感器信息等技术，对入店客流、门店客流及周边商圈客流及其属性，进行实时监控分析与洞察。
                                通过充分利用这些海量数据，零售商能够在商场商铺选址、调整商铺运营策略、改善消费者入店体验等诸多方面实现创造性的变革。
                            </p>
                        </a>
                    </div>
                    <div class="col-md-6 each-wrap-div">
                        <a href="">
                            <img class="hypers-solutions-detail-img" src="https://www.nequal.com/images/nEqual/customer_case/case_2.png" alt="">
                            <h3 class="hypers-solutions-detail-title">零售商圈大数据</h3>
                            <p class="hypers-solutions-detail-text">
                                基于运营商的移动位置数据、iBeacon、传感器信息等技术，对入店客流、门店客流及周边商圈客流及其属性，进行实时监控分析与洞察。
                                通过充分利用这些海量数据，零售商能够在商场商铺选址、调整商铺运营策略、改善消费者入店体验等诸多方面实现创造性的变革。
                            </p>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        $(function () {
            $('.navbar').addClass('nav-bg')
        })
    </script>
 @endsection