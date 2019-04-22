@extends('frontend.customize.layouts.app')
@section('style')
    <style>
        a{
            text-decoration: none !important;
        }

        .top-title{
            position: relative;
            margin:0 auto;
            z-index: 100;
        }
        .top-title img{
            height: 500px;
            width: 100%;
        }
        .top-title .container{
            position: absolute;
            left: 0;
            right: 0;
            bottom: 100px;
            margin: auto;
            padding: 0;
        }
        .top-title .container>div{
            color: #fff;display: inline-block
        }

        .detail-wrapper{
            position: relative;
            margin-top: -100px;
            background: #eee;
        }
        .detail-wrapper .container{
            background: #fff;
            border: 1px solid #eee;
            font-size: 16px;
            text-align: left !important;
            line-height: 26px;
            position: relative;
            z-index: 110;
        }

        .page-next-pre  p a{
            color: #999;
        }
        .page-next-pre  p a:hover{
            color: #337ab7;
        }

    </style>
@endsection
@section('banner')
    <div class="top-title">
        <img alt="" src="https://www.qiniu.com/assets/banner/banner-qvm1rmb-index-3c79c38ee87a7b6a0ef8ff28b2d8da9a28e567bdf3cb9bea8ea761d601be7ce6.jpg">
        <div class ="container">
            <div>
                <h2>我们将助您取得成功</h2>
                <p>回答有关“我该怎么做”的问题，并以新的洞察应对当今转型为体验业务的过程中关键的挑战。</p>
            </div>
            <div style="float: right">
                <img src="https://fm.ipinyou.com/new3w/upload/img/admin/21243009757497393.jpg" alt="" style="width: 370px;height:210px;">
            </div>
        </div>
    </div>
@endsection
@section('content')
    <div class="detail-wrapper">
        <div class="container" style="text-align: center;padding: 50px 10px;">
            <div>
                <h3>的回款时间</h3>
                <p>并以新的洞察应对当今转型为体验业务的过程中关键的挑战并以新的洞察应对当今转型为体验业务的过程中关键的挑战并以新的洞察应对当今转型为体验业务的过程中关键的挑战并以新的洞察应对当今转型为体验业务的过程中关键的挑战并以新的洞察应对当今转型为体验业务的过程中关键的挑战并以新的洞察应对当今转型为体验业务的过程中关键的挑战并以新的洞察应对当今转型为体验业务的过程中
                    关键的挑战并以新的洞察应对当今转型为体验业务的过程中关键的挑战并以新的洞察应对当今转型为体验业务的过程中关键的挑战</p>
                <p>
                    并以新的洞察应对当今转型为体验业务的过程中关键的挑战并以新的洞察应对当今转型为体验业务的过程中关键的挑战并以新的洞察应对当今转型为体验业务的过程中关键的挑战并以新的洞察应对当今转型为体验业务的过程中关键的挑战并以新的洞察应对当今转型为体验业务的过程中关键的挑战并以新的洞察应对当今转型为体验业务的过程中关键的挑战并以新的洞察应对当今转型为体验业务的过程中
                    关键的挑战并以新的洞察应对当今转型为体验业务的过程中关键的挑战并以新的洞察应对当今转型为体验业务的过程中关键的挑战
                </p>
            </div>
            <div class="page-next-pre" style="border-top: 1px solid #eee; margin-top: 20px;padding: 10px 0; color: #777">
                <p><a href="">上一篇: 上看见好看</a></p>
                <p><a href="">上一篇: 上看见好看</a></p>
            </div>
        </div>
    </div>
@endsection