<!DOCTYPE html><!--[if IE 8]>
<html lang="en" class="ie8"><![endif]--><!--[if IE 9]>
<html lang="en" class="ie9"><![endif]--><!--[if !IE]><!-->
<html lang="en"><!--<![endif]-->
<head>
  <title>nEqual-@yield('title')</title>
  <meta charset="utf-8">
  <meta content="IE=edge" http-equiv="X-UA-Compatible">
  <meta content="width=device-width,initial-scale=1" name="viewport">
  <meta content="@yield('description',config('system.common.basic.description',''))" dynamic-meta name="description">
  <meta content="@yield('keywords', config('system.common.basic.keywords',''))" dynamic-meta name="keywords">
  <meta content="320" name="MobileOptimized">
  <meta content="#000000" name="theme-color">
  <meta content="yes" name="apple-mobile-web-app-capable">
  <meta content="black" name="apple-mobile-web-app-status-bar-style">
  <meta content="HYPERS" name="apple-mobile-web-app-title">
  <link href="images/icons/logo/hypers_crop_256.png" rel="apple-touch-icon">
  <link href="/images/favicon.png" rel="icon" type="image/png">
  @yield('style')
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
@yield('content')
@include('frontend.customize.layouts.footer')
@include('frontend.customize.layouts.help')
<script src="//cdn.jsdelivr.net/npm/jquery@3.4.0/dist/jquery.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js" type="text/javascript"></script>
@yield('script-navbar')
@yield('script-banner')
@yield('script-content')
<script>
  $(function(){
    $(function () {
      $('[data-toggle="popover"]').popover()
    })
  })
</script>
</body>
</head>
</html>
