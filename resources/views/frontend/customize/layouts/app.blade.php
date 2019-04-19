<!DOCTYPE html><!--[if IE 8]>
<html lang="en" class="ie8"><![endif]--><!--[if IE 9]>
<html lang="en" class="ie9"><![endif]--><!--[if !IE]><!-->
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
@include('frontend.customize.layouts.header')
@yield('banner')

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
@yield('content')
@include('frontend.customize.layouts.footer')
@include('frontend.customize.layouts.help')
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
