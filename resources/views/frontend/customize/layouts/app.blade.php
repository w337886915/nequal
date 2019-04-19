<!DOCTYPE html><!--[if IE 8]>
<html lang="en" class="ie8"> <![endif]--><!--[if IE 9]>
<html lang="en" class="ie9"> <![endif]--><!--[if !IE]><!-->
<html lang="en"><!--<![endif]-->
<head>
  <title>nEqual</title>
  <meta charset="utf-8">
  <meta content="IE=edge" http-equiv="X-UA-Compatible">
  <meta content="width=device-width,initial-scale=1" name="viewport">
  <meta content="" dynamic-meta name="description">
  <meta content="" dynamic-meta name="keywords">
  <meta content="320" name="MobileOptimized">
  <meta content="#000000" name="theme-color">
  <meta content="yes" name="apple-mobile-web-app-capable">
  <meta content="black" name="apple-mobile-web-app-status-bar-style">
  <meta content="HYPERS" name="apple-mobile-web-app-title">
  <link href="images/icons/logo/hypers_crop_256.png" rel="apple-touch-icon">
  <link href="/images/favicon.png" rel="icon" type="image/png">
  <style>
    .navbar-toggler-icon {
      color: #fff !important;
    }

    .navbar-toggler {
      height: 50px;
      display: inline-block;
      float: right;
    }

    .navbar-toggler span {
      font-size: 30px;
      line-height: 50px;
      margin-right: 10px;
      color: #FFFFFF;
    }

    .nav-transparent {
      min-height: 68px;
      background-color: transparent !important;
      margin-bottom: 0;
      border: none;
      transition: opacity .6s ease, background .6s ease, box-shadow .6s ease;
    }

    .nav-transparent.nav-bg {
      background-color: #303848 !important;
    }

    .nav-transparent:hover {
      background-color: #303848 !important;
    }

    .nav-transparent .navbar-brand {
      padding: 10px 15px !important;
    }

    .navbar-nav > li {
      position: relative;
      padding: 0.08rem 0 0.09rem;
    }

    .navbar-nav > li > a {
      display: block;
      color: #FFF;
      position: relative;
      padding-top: 15px;
      padding-bottom: 15px;
    }

    .navbar-nav > li > a:hover {
      color: #00A0DE;
      background-color: unset !important;
    }

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
  <style>
    footer {
      padding: 70px 0;
      background-color: #303848;
      color: #FFF;
      vertical-align: baseline;
      transition: left .4s ease-in;
      font-weight: 300;
    }

    footer dl {
      margin-top: 0;
      margin-bottom: 20px;
    }

    footer dl a {
      color: #adaeb3;
      text-decoration: none;
    }

    footer dl dt {
      margin-top: 0;
      margin-bottom: 20px;
    }

    footer dl dd {
      line-height: 28px;
    }

    footer .logo {
      display: inline-block;
      margin-left: -10px;
      padding: 15px 0 20px;
    }

    footer .logo img {
      width: 125px;
    }

    footer .qrcode {
      margin: 0 auto 5px;
      width: 112px;
      height: 112px;
      padding: 6px;
      background: #FFF;
    }

    footer .qrcode img {
      max-width: 100%;
    }

    footer .sns {
      position: relative;
      padding: 50px 0 5px;
    }
  </style>
  <style>
    .helps {
      z-index: 1000;
      min-width: 42px;
      min-height: 128px;
      overflow: hidden;
      position: fixed;
      top: 50%;
      right: 8px;
      background-color: #FFFFFF;
      border: 1px solid #D1D5DB;
    }

    .help-item {
      display: flex;
      flex-direction: row;
      align-items: center;
      justify-content: center;
      padding: 10px;
      box-sizing: border-box;
    }

    .help-item:nth-child(n+2) {
      border-top: 1px solid #D1D5DB;
    }

    .help-item img {
      width: 40px;
      height: 40px;
    }

    .help-item p {
      line-height: 16px;
      padding: 5px 12px;
      min-width: 80px;
    }
  </style>
  <style>
    .page-content-wrapper {
      padding: 40px 0 50px 0;
    }

    .page-title {
      margin-bottom: 50px;
    }

    .page-title h2 {
      color: #333333;
      font-size: 30px;
      margin-top: 20px;
      margin-bottom: 20px;
      text-align: center;
      font-weight: 300;
    }
  </style>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="//cdn.bootcss.com/slick-carousel/1.8.1/slick.min.css" rel="stylesheet" type="text/css"/>
</head>
<body class="zh-cn">
<nav class="navbar navbar-fixed-top nav-transparent">
  <div class="container">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">
        <img alt="nEqual" src="static/picture/hyperslogo_h_2.svg" width="100">
      </a>
      <a class="navbar-toggler visible-xs" data-target="#collapsibleNavbar" data-toggle="collapse" type="button">
        <span aria-hidden="true" class="glyphicon glyphicon-menu-hamburger"></span>
      </a>
    </div>
    <a class="navbar-toggler visible-sm" data-target="#collapsibleNavbar" data-toggle="collapse" type="button">
      <span aria-hidden="true" class="glyphicon glyphicon-menu-hamburger"></span>
    </a>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="nav navbar-nav navbar-right hidden-sm navbar-top-menu">
        <li><a href="./">首页</a></li>
        <li><a href="./solutions.html">解决方案</a></li>
        <li><a href="./services">成功案例</a></li>
        <li><a href="./about">关于我们</a></li>
        <li><a href="./about">语言切换</a></li>
        <li><a href="./about">加入我们</a></li>
        <li><a href="./about">联系我们</a></li>
      </ul>
    </div>
  </div>
</nav>
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
<style>
  .product-item {
    margin-bottom: 25px;
  }

  .product-item .media {

  }

  .product-item .media-left {
    padding-right: 30px
  }

  .product-item .media-left, .product-item .media-body, .product-item .media-right {
    display: table-cell;
    vertical-align: top;
  }

  .product-item .media-left .media-object {
    max-width: 140px
  }

  .product-item .media-heading {
    margin-top: 15px;
    margin-bottom: 20px;
  }

  .product-item .media-body p {
    font-size: 14px;
    line-height: 28px;
  }

  .product-item .media-body .product-intro {
    min-height: 85px;
    display: block;
  }

  .product-item .product-item-attr a {
    color: #28aedf !important;
    margin-right: 15px;
  }

  .product-item .product-item-attr a:hover {
    text-decoration: none !important;
  }

  .product-item .product-item-attr img {
    width: 22px;
    height: 22px;
  }

  .product-group-actions {
    display: flex;
    flex-direction: column;
    align-items: center;
    padding: 10px 0;
  }

  .product-group-actions a {
    margin: 10px 0;
  }

  .product-group-actions .btn-default {
    border-color: #28aedf;
    color: #28aedf;
  }

  @media (max-width: 991px) {
    .product-item .media-left {
      display: block;
      text-align: center;
      padding: 0.10rem;
    }

    .product-item .media-left .media-object {
      margin: auto;
    }

    .product-item .media-body {
      display: block;
      width: auto;
    }

    .product-item .media-body .media-heading {
      text-align: center;
    }
  }
</style>
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
<footer>
  <div class="sitemap">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <div class="row">
            <div class="col-sm-4 col-xs-4">
              <dl>
                <dt>关于我们</dt>
                <dd><a href="#">公司介绍</a></dd>
                <dd><a href="#">管理团队</a></dd>
                <dd><a href="#">新闻报道</a></dd>
                <dd><a href="#">精硕学院</a></dd>
                <dd><a href="#">加入我们</a></dd>
                <dd><a href="#">联系我们</a></dd>
              </dl>
            </div>
            <div class="col-sm-4 col-xs-4">
              <dl>
                <dt>解决方案</dt>
                <dd><a href="#">nEqual DMP</a></dd>
                <dd><a href="#">nEqual SERVING</a></dd>
                <dd><a href="#">nEqual 及策</a></dd>
                <dd><a href="#">nEqual 推策</a></dd>
              </dl>
            </div>
            <div class="col-sm-4 col-xs-4">
              <dl>
                <dt>成功案例</dt>
                <dd><a href="#">服务客户</a></dd>
                <dd><a href="#">客户案例</a></dd>
              </dl>
            </div>
          </div>
        </div>
        <div class="col-sm-2 text-center">
          <a class="logo" href="/">
            <img alt="nEqual"
                 src="/assets/logo-zh-dbef5f389fb045c60f710d4d4e6225e9015c1684b1a1f7b81e000b952581dcd4.png">
          </a>
          <div class="qrcode">
            <img src="#" style="width: 100px;height: 100px;background-color: #FFFFFF;"></div>
          <div>关注nEqual公众号</div>
          <div class="sns">
            <a class="weibo" href="#" target="_blank"></a>
            <a class="email" href="#" target="_blank"></a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="copyright">
    <div class="container">
      <div class="row">
        <div class="col-md-10"> Copyright ©2010-2018 HYPERS &nbsp;&nbsp;<br class="visible-xs"> 沪 ICP 备 12011101
          号 - 5 &nbsp;<br class="visible-xs"> 公安机关备案号 31010902002414 　<br class="visible-xs"> <a
            href="/privacy" target="_blank">HYPERS 隐私条款</a></div>
      </div>
    </div>
  </div>
</footer>
<div class="helps">
  <div class="help-item">
    <img alt="" src="static/picture/hyper-data-lab_1.svg">
    <p>关注微信</p>
  </div>
  <div class="help-item">
    <img alt="" src="static/picture/hyper-data-lab_1.svg">
    <p>联系我们</p>
  </div>
  <div class="help-item">
    <img alt="" src="static/picture/hyper-data-lab_1.svg">
    <p>合作咨询</p>
  </div>
</div>
<script src="//cdn.jsdelivr.net/npm/jquery@3.4.0/dist/jquery.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js" type="text/javascript"></script>
<script>
  $(function () {
    $('.banners-slider').slick({
      dots: true,
      accessibility: false,
      autoplay: true,
      arrows: false
    });
    window.addEventListener('scroll', function () {
      let scrollTop = document.documentElement.scrollTop
      if (scrollTop > 10) {
        $('.navbar').addClass('nav-bg')
      } else {
        $('.navbar').removeClass('nav-bg')
      }
    });
  });
</script>
</body>
</head>
</html>