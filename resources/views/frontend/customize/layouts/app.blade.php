<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.2/css/swiper.min.css">
    <style>
        .container-fixed .container nav #navbarSupportedContent .navbar-nav{
            line-height: 88px;
            height: 88px;
            text-align: center;
        }
        .container-fixed .container nav #navbarSupportedContent .navbar-nav li {
            width: 100px;
        }
        .container-fixed .container nav #navbarSupportedContent .navbar-nav li a{
            color: black;
        }
        .container-fixed .container nav #navbarSupportedContent .navbar-nav li a button{
            border-radius:20px;
        }
    </style>
    <style>
        .swap {
            position: relative;
            margin: auto 0;
            min-height: 500px;
        }
        .swap .case{position: absolute;top:10px;left:200px;text-align: center;position: absolute;top: -46px;left: 250px;text-align: center;z-index: 2;}
        .swap .case .item1{width: 460px;height: 270px;background-color: red;float: left; margin-right:20px;background-image: url("http://image.whgjh.top/block_03.gif")}
        .swap .case .item2{width: 460px;height: 270px;background-color: yellow;float: left; margin-right:20px;background-image: url("http://image.whgjh.top/block_05.gif")}
        .swap .case .item3{width: 460px;height: 270px;background-color: blue;float: left; background-image: url("http://image.whgjh.top/block_07.gif")}
    </style>
    <style>
        .footer{height: 500px;background-color: black}
    </style>
</head>
<body>
<!-- header -->
@include('frontend.customize.layouts.header')
<!-- banner -->
@include('frontend.customize.layouts.swipper')
<!--content-->
<div class="container-fixed swap">
    @yield('content')
</div>
<!--footer-->
@include('frontend.customize.layouts.footer');

</body>
<script src="https://cdn.bootcss.com/jquery/3.2.1/jquery.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.bootcss.com/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.bootcss.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.2/js/swiper.min.js"></script>
@yield('script')
@yield('script-swiper')

</html>
