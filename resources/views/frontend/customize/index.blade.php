@extends('frontend.customize.layouts.app')
@section('banner')
    <style>
        .banners-slider {
            height: 500px;
            overflow: hidden;
            margin-bottom: 30px;
        }

        .banners-slider .banner-item {
            width: 100%;
            height: 500px;
        }

        .banners-slider .banner-item img {
            height: 500px;
            width: 100%;
        }

        .banners-slider .slick-dots {
            position: absolute;
            bottom: 20px;
            display: block;
            width: 100%;
            padding: 0;
            list-style: none;
            text-align: center;
        }

        .banners-slider .slick-dots li {
            position: relative;
            display: inline-block;
            width: 20px;
            height: 20px;
            margin: 0 5px;
            padding: 0;
            cursor: pointer;
        }

        .banners-slider .slick-dots li button {
            font-size: 0;
            line-height: 0;
            display: block;
            width: 20px;
            height: 20px;
            padding: 5px;
            cursor: pointer;
            color: transparent;
            border: 0;
            outline: none;
            background: transparent;
        }

        .banners-slider .slick-dots li button::before {
            font-size: 0.40rem;
            content: "-";
            color: #B9B9B9;
        }

        .banners-slider .slick-dots li button::before {
            position: absolute;
            top: 0;
            left: 0;
            width: 20px;
            height: 5px;
            content: '';
            text-align: center;
            background-color: #999999;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        .banners-slider .slick-dots li.slick-active button::before {
            background-color: #3498db
        }

        .banners-slider .slick-dots.banners-arrow {
            bottom: 0.48rem
        }
    </style>
    <div class="banners-slider">
        <div class="banner-item">
            <a href="">
                <img
                        alt=""
                        src="https://www.qiniu.com/assets/banner/banner-qvm1rmb-index-3c79c38ee87a7b6a0ef8ff28b2d8da9a28e567bdf3cb9bea8ea761d601be7ce6.jpg">
            </a>
        </div>
        <div class="banner-item"><a href=""><img
                        alt=""
                        src="https://www.qiniu.com/assets/banner/banner-qvm1rmb-index-3c79c38ee87a7b6a0ef8ff28b2d8da9a28e567bdf3cb9bea8ea761d601be7ce6.jpg"></a></div>
        <div class="banner-item"><a href=""><img
                        alt=""
                        src="https://www.qiniu.com/assets/banner/banner-qvm1rmb-index-3c79c38ee87a7b6a0ef8ff28b2d8da9a28e567bdf3cb9bea8ea761d601be7ce6.jpg"></a></div>
        <div class="banner-item"><a href=""><img
                        alt=""
                        src="https://www.qiniu.com/assets/banner/banner-qvm1rmb-index-3c79c38ee87a7b6a0ef8ff28b2d8da9a28e567bdf3cb9bea8ea761d601be7ce6.jpg"></a></div>
    </div>

@endsection
@section('content')
    <div class="page-content-wrapper products">
        <div class="container">
            <div class="page-title">
                <h2>nEqual 解决方案</h2>
            </div>
            <div class="row">
                <div class="col-sm-6 product-item">
                    <div class="media">
                        <div class="media-left">
                            <img alt=""
                                 class="media-object"
                                 src="https://www.qiniu.com/assets/icon-massstorage@2x-e76217a8daa1c84427de719c29b0d50aa693c380e32b085e73421715be9ab4e7.png">
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">
                                Intelligent Advertising System
                            </h4>
                            <h4 class="media-heading">
                                智能广告系统
                            </h4>
                            <p class="product-intro">
                                智能广告系统智能广告系统智能广告系统智能广告系统智能广告系统智能广告系统智能广告系统智能广告系统智能广告系统
                            </p>
                            <p class="product-item-attr">
                                <a href="">
                                    <img
                                            alt=""
                                            src="https://www.qiniu.com/assets/icon-storage-highlight@2x-5a13511e8a135b25aeaa1df7a44cec15d7291e5e9e2c5d0feae5361bc19687aa.png">
                                    <span>Serving</span>
                                </a>
                                <a href="">
                                    <img
                                            alt=""
                                            src="https://www.qiniu.com/assets/icon-storage-highlight@2x-5a13511e8a135b25aeaa1df7a44cec15d7291e5e9e2c5d0feae5361bc19687aa.png">
                                    <span>DCP</span>
                                </a>
                                <a href="">
                                    <img
                                            alt=""
                                            src="https://www.qiniu.com/assets/icon-storage-highlight@2x-5a13511e8a135b25aeaa1df7a44cec15d7291e5e9e2c5d0feae5361bc19687aa.png">
                                    <span>BTD </span>
                                </a>
                            </p>
                            <div class="product-group-actions">
                                <button class="btn btn-default" type="button">申请咨询/试用</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 product-item">
                    <div class="media">
                        <div class="media-left">
                            <img alt=""
                                 class="media-object"
                                 src="https://www.qiniu.com/assets/icon-massstorage@2x-e76217a8daa1c84427de719c29b0d50aa693c380e32b085e73421715be9ab4e7.png">
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">
                                Brand Data Hub
                            </h4>
                            <h4 class="media-heading">
                                品牌数据中台
                            </h4>
                            <p class="product-intro">
                                品牌数据中台品牌数据中台品牌数据中台品牌数据中台品牌数据中台品牌数据中台品牌数据中台品牌数据中台品牌数据中台
                            </p>
                            <p class="product-item-attr">
                                <a href="">
                                    <img
                                            alt=""
                                            src="https://www.qiniu.com/assets/icon-storage-highlight@2x-5a13511e8a135b25aeaa1df7a44cec15d7291e5e9e2c5d0feae5361bc19687aa.png">
                                    <span>BDH</span>
                                </a>
                            </p>
                            <div class="product-group-actions">
                                <button class="btn btn-default" type="button">申请咨询/试用</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 product-item">
                    <div class="media">
                        <div class="media-left">
                            <img alt=""
                                 class="media-object"
                                 src="https://www.qiniu.com/assets/icon-massstorage@2x-e76217a8daa1c84427de719c29b0d50aa693c380e32b085e73421715be9ab4e7.png">
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">
                                Customer Experience Management
                            </h4>
                            <h4 class="media-heading">
                                客户体验管理
                            </h4>
                            <p class="product-intro">
                                客户体验管理客户体验管理客户体验管理客户体验管理客户体验管理客户体验管理客户体验管理客户体验管理客户体验管理客户体验管理
                            </p>
                            <p class="product-item-attr">
                                <a href="">
                                    <img
                                            alt=""
                                            src="https://www.qiniu.com/assets/icon-storage-highlight@2x-5a13511e8a135b25aeaa1df7a44cec15d7291e5e9e2c5d0feae5361bc19687aa.png">
                                    <span>推策</span>
                                </a>
                                <a href="">
                                    <img
                                            alt=""
                                            src="https://www.qiniu.com/assets/icon-storage-highlight@2x-5a13511e8a135b25aeaa1df7a44cec15d7291e5e9e2c5d0feae5361bc19687aa.png">
                                    <span>及策</span>
                                </a>
                                <a href="">
                                    <img
                                            alt=""
                                            src="https://www.qiniu.com/assets/icon-storage-highlight@2x-5a13511e8a135b25aeaa1df7a44cec15d7291e5e9e2c5d0feae5361bc19687aa.png">
                                    <span>CEM</span>
                                </a>
                            </p>
                            <div class="product-group-actions">
                                <button class="btn btn-default" type="button">申请咨询/试用</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 product-item">
                    <div class="media">
                        <div class="media-left">
                            <img alt=""
                                 class="media-object"
                                 src="https://www.qiniu.com/assets/icon-massstorage@2x-e76217a8daa1c84427de719c29b0d50aa693c380e32b085e73421715be9ab4e7.png">
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">
                                Data Govermance
                            </h4>
                            <h4 class="media-heading">
                                数据治理平台
                            </h4>
                            <p class="product-intro">
                                数据治理平台数据治理平台数据治理平台数据治理平台数据治理平台数据治理平台数据治理平台数据治理平台
                            </p>
                            <p class="product-item-attr">
                                <a href="">
                                    <img
                                            alt=""
                                            src="https://www.qiniu.com/assets/icon-storage-highlight@2x-5a13511e8a135b25aeaa1df7a44cec15d7291e5e9e2c5d0feae5361bc19687aa.png">
                                    <span>DG</span>
                                </a>
                            </p>
                            <div class="product-group-actions">
                                <button class="btn btn-default" type="button">申请咨询/试用</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 product-item">
                    <div class="media">
                        <div class="media-left">
                            <img alt=""
                                 class="media-object"
                                 src="https://www.qiniu.com/assets/icon-massstorage@2x-e76217a8daa1c84427de719c29b0d50aa693c380e32b085e73421715be9ab4e7.png">
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">
                                Invalid Traffic
                            </h4>
                            <h4 class="media-heading">
                                异常流量
                            </h4>
                            <p class="product-intro">
                                异常流量异常流量异常流量异常流量异常流量异常流量异常流量异常流量
                            </p>
                            <p class="product-item-attr">
                                <a href="">
                                    <img
                                            alt=""
                                            src="https://www.qiniu.com/assets/icon-storage-highlight@2x-5a13511e8a135b25aeaa1df7a44cec15d7291e5e9e2c5d0feae5361bc19687aa.png">
                                    <span>IVT</span>
                                </a>
                            </p>
                            <div class="product-group-actions">
                                <button class="btn btn-default" type="button">申请咨询/试用</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        .cases-item{
            display: block;
            margin: 3px;
            border: 1px solid #eeeeee;
            height: 100px;
            max-height: 100px;
            line-height: 100px;
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
        }
        .cases-item img{
            max-width: 180px;
            max-height: 90px;
        }
    </style>
    <div class="page-content-wrapper products">
        <div class="container">
            <div class="page-title">
                <h2>我们的客户</h2>
            </div>
            <div class="row">
                <div class="col-sm-6 col-xs-12 col-md-3">
                    <div class="cases-item">
                        <img alt="" src="https://www.qiniu.com/assets/clientcase/client-qingtingfm@2x-54166d4beb70035bc9e72aef0e21ed80e52f876e11ef2635053b988ebef5777e.jpg">
                    </div>
                </div>
                <div class="col-sm-6 col-xs-12 col-md-3">
                    <div class="cases-item">
                        <img alt="" src="https://www.qiniu.com/assets/clientcase/client-zhihu@2x-f1054be029dffee9bec021f709c3d05d026a09825ac1e66f104cfeb47ae14b82.jpg">
                    </div>
                </div>
                <div class="col-sm-6 col-xs-12 col-md-3">
                    <div class="cases-item">
                        <img alt="" src="https://www.qiniu.com/assets/clientcase/client-qingtingfm@2x-54166d4beb70035bc9e72aef0e21ed80e52f876e11ef2635053b988ebef5777e.jpg">
                    </div>
                </div>
                <div class="col-sm-6 col-xs-12 col-md-3">
                    <div class="cases-item">
                        <img alt="" src="https://www.qiniu.com/assets/clientcase/client-zhihu@2x-f1054be029dffee9bec021f709c3d05d026a09825ac1e66f104cfeb47ae14b82.jpg">
                    </div>
                </div>
                <div class="col-sm-6 col-xs-12 col-md-3">
                    <div class="cases-item">
                        <img alt="" src="https://www.qiniu.com/assets/clientcase/client-qingtingfm@2x-54166d4beb70035bc9e72aef0e21ed80e52f876e11ef2635053b988ebef5777e.jpg">
                    </div>
                </div>
                <div class="col-sm-6 col-xs-12 col-md-3">
                    <div class="cases-item">
                        <img alt="" src="https://www.qiniu.com/assets/clientcase/client-zhihu@2x-f1054be029dffee9bec021f709c3d05d026a09825ac1e66f104cfeb47ae14b82.jpg">
                    </div>
                </div>
                <div class="col-sm-6 col-xs-12 col-md-3">
                    <div class="cases-item">
                        <img alt="" src="https://www.qiniu.com/assets/clientcase/client-qingtingfm@2x-54166d4beb70035bc9e72aef0e21ed80e52f876e11ef2635053b988ebef5777e.jpg">
                    </div>
                </div>
                <div class="col-sm-6 col-xs-12 col-md-3">
                    <div class="cases-item">
                        <img alt="" src="https://www.qiniu.com/assets/clientcase/client-zhihu@2x-f1054be029dffee9bec021f709c3d05d026a09825ac1e66f104cfeb47ae14b82.jpg">
                    </div>
                </div>
                <div class="col-sm-6 col-xs-12 col-md-3">
                    <div class="cases-item">
                        <img alt="" src="https://www.qiniu.com/assets/clientcase/client-zhihu@2x-f1054be029dffee9bec021f709c3d05d026a09825ac1e66f104cfeb47ae14b82.jpg">
                    </div>
                </div>
                <div class="col-sm-6 col-xs-12 col-md-3">
                    <div class="cases-item">
                        <img alt="" src="https://www.qiniu.com/assets/clientcase/client-qingtingfm@2x-54166d4beb70035bc9e72aef0e21ed80e52f876e11ef2635053b988ebef5777e.jpg">
                    </div>
                </div>
                <div class="col-sm-6 col-xs-12 col-md-3">
                    <div class="cases-item">
                        <img alt="" src="https://www.qiniu.com/assets/clientcase/client-zhihu@2x-f1054be029dffee9bec021f709c3d05d026a09825ac1e66f104cfeb47ae14b82.jpg">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
