@extends('frontend.customize.layouts.app')
@section('star_class') solutions @endsection
@section('style')
    <style>
        .top-title{
            position: relative;
        }
        .top-title img{
            height: 500px;
            width: 100%;
        }
        .top-title .title{
            position: absolute;
            bottom: 100px;
            right: 0;
            left:0;
            color: #fff;
            font-size: 30px;
            z-index: 1000;
            text-align: center;
        }
        .top-title .title p{
            font-size: 18px;
        }
        .container{
            width:1500px;
        }

        .page-content-wrapper:nth-child(2n){
            background: #eee;
        }
        .page-title h2{
            font-weight: 600;
        }
        .page-title p{
            font-size: 18px;
            text-align: center;
        }
        .item-wrapper{
            display: flex;
            flex-wrap: wrap;
        }
        .case-item{
            margin-bottom: 20px;
            text-align: center;
        }
        .case-item img{
            width: 380px;
            height: 199px;
        }

        .case-name{
            margin-top: 5px;
            font-size: 18px;
            text-align: center;
        }
        .logo-wrapper>div{
            text-align: center;
        }

        .logo-wrapper img{
            max-width: 80px;
            max-height: 26px;
            margin-bottom: 25px;
        }

    </style>
@endsection
@section('banner')
    <div class="top-title">
        <img alt="" src="https://www.qiniu.com/assets/banner/banner-qvm1rmb-index-3c79c38ee87a7b6a0ef8ff28b2d8da9a28e567bdf3cb9bea8ea761d601be7ce6.jpg">
        <div class="title">
            <h2>我们将助您取得成功</h2>
            <p>回答有关“我该怎么做”的问题，并以新的洞察应对当今转型为体验业务的过程中关键的挑战。</p>
        </div>
    </div>
@endsection
@section('content')
<div class="page-content-wrapper">
    <div class="container" style="width: 1500px;">
        <div class="page-title">
            <h2>客户案例</h2>
            <p>比以往更好地了解和服务于客户。将您的数据及其提供的洞察力转化为有吸引力的体验。</p>
            <p><a href="{{route('cases.list')}}">了解更多 ›</a></p>
        </div>
        <div class="col-md-12 item-wrapper">
            <div class="col-md-4 case-item">
                <img src="https://www.adobe.com/content/dam/acom/en/experience-cloud/use-cases/images/54658.en.use-case.feature.customer-intelligence.380x199.png" alt="">
                <p class="case-name"><a href="{{route('cases.info', ['id' => 1])}}">及其提供的洞察力转  ›</a></p>
            </div>
            <div class="col-md-4 case-item">
                <img src="https://www.adobe.com/content/dam/acom/en/experience-cloud/use-cases/images/54658.en.use-case.feature.customer-intelligence.380x199.png" alt="">
                <p class="case-name"><a href="">及其提供的洞察力转  ›</a></p>
            </div>
            <div class="col-md-4 case-item">
                <img src="https://www.adobe.com/content/dam/acom/en/experience-cloud/use-cases/images/54658.en.use-case.feature.customer-intelligence.380x199.png" alt="">
                <p class="case-name"><a href="">及其提供的洞察力转  ›</a></p>
            </div>
            <div class="col-md-4 case-item">
                <img src="https://www.adobe.com/content/dam/acom/en/experience-cloud/use-cases/images/54658.en.use-case.feature.customer-intelligence.380x199.png" alt="">
                <p class="case-name"><a href="">及其提供的洞察力转  ›</a></p>
            </div>
        </div>
    </div>
</div>
<div class="page-content-wrapper">
    <div class="container" style="width: 1500px;">
        <div class="page-title">
            <h2>客户支持</h2>
            <p>比以往更好地了解和服务于客户。将您的数据及其提供的洞察力转化为有吸引力的体验。</p>
            <p><a href="">了解详情 ›</a></p>
        </div>
        <div class="col-md-12 item-wrapper">
            <div class="col-md-4 case-item">
                <img src="https://www.adobe.com/content/dam/acom/en/experience-cloud/use-cases/images/54658.en.use-case.feature.customer-intelligence.380x199.png" alt="">
                <p class="case-name"><a href="">及其提供的洞察力转  ›</a></p>
            </div>
            <div class="col-md-4 case-item">
                <img src="https://www.adobe.com/content/dam/acom/en/experience-cloud/use-cases/images/54658.en.use-case.feature.customer-intelligence.380x199.png" alt="">
                <p class="case-name"><a href="">及其提供的洞察力转  ›</a></p>
            </div>
            <div class="col-md-4 case-item">
                <img src="https://www.adobe.com/content/dam/acom/en/experience-cloud/use-cases/images/54658.en.use-case.feature.customer-intelligence.380x199.png" alt="">
                <p class="case-name"><a href="">及其提供的洞察力转  ›</a></p>
            </div>
            <div class="col-md-4 case-item">
                <img src="https://www.adobe.com/content/dam/acom/en/experience-cloud/use-cases/images/54658.en.use-case.feature.customer-intelligence.380x199.png" alt="">
                <p class="case-name"><a href="">及其提供的洞察力转  ›</a></p>
            </div>
        </div>
    </div>
</div>
<div class="page-content-wrapper">
    <div class="container" style="width: 1500px;">
        <div class="page-title">
            <h2>服务品牌</h2>
            <p>比以往更好地了解和服务于客户。将您的数据及其提供的洞察力转化为有吸引力的体验。</p>
        </div>
        <div class="col-md-offset-2 col-md-8 item-wrapper">
            <div class="col-md-2 logo-wrapper">
                <img src="https://www.hypers.com/images/product_clients/arvato.svg" alt="">
            </div>
            <div class="col-md-2 logo-wrapper">
                <img src="https://www.hypers.com/images/product_clients/arvato.svg" alt="">
            </div>
            <div class="col-md-2 logo-wrapper">
                <img src="https://www.hypers.com/images/product_clients/arvato.svg" alt="">
            </div>
            <div class="col-md-2 logo-wrapper">
                <img src="https://www.hypers.com/images/product_clients/arvato.svg" alt="">
            </div>
            <div class="col-md-2 logo-wrapper">
                <img src="https://www.hypers.com/images/product_clients/arvato.svg" alt="">
            </div>
            <div class="col-md-2 logo-wrapper">
                <img src="https://www.hypers.com/images/product_clients/arvato.svg" alt="">
            </div>
            <div class="col-md-2 logo-wrapper" >
                <img src="https://www.hypers.com/images/product_clients/arvato.svg" alt="">
            </div>
        </div>
    </div>
</div>
@endsection
