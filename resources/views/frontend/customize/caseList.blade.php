@extends('frontend.customize.layouts.app')
@section('style')
    <link rel="stylesheet" href="{{asset('vendor/nequal/css/frontend.css')}}" />
    <style>
        body{
            background: none;
        }
        .case-lists{
            display: flex;flex-wrap: wrap;margin: 50px 0;
        }
        .case-lists>div{
            padding: 20px;
        }
        .case-item img{
            width: 100%;
            height: 220px;
        }
        .case-item p{
            font-size: 18px;
            margin-top: 5px;
        }
        .case-name{
            border: 1px solid #eee;
            padding: 2px 10px;
        }

    </style>
@endsection
@section('content')
    <div style="padding-top: 68px;">
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
        <div class="container" style="width: 1500px;">
            <div class="col-md-12 case-lists">
                <div  class="col-md-4 case-item">
                    <a href="">
                        <img src="https://www.nequal.com/images/nEqual/customer_case/case_2.png" alt="">
                        <div class="case-name">
                            <h4>是否合理时间分厘卡圣诞节发</h4>
                            <p>fdsfdfd</p>
                        </div>
                    </a>
                </div>
                <div  class="col-md-4 case-item">
                    <a href="">
                        <img src="https://www.nequal.com/images/nEqual/customer_case/case_2.png" alt="">
                        <div class="case-name">
                            <h4>是否合理时间分厘卡圣诞节发</h4>
                            <p>fdsfdfd</p>
                        </div>
                    </a>
                </div>
                <div  class="col-md-4 case-item">
                    <a href="">
                        <img src="https://www.nequal.com/images/nEqual/customer_case/case_2.png" alt="">
                        <div class="case-name">
                            <h4>是否合理时间分厘卡圣诞节发</h4>
                            <p>fdsfdfd</p>
                        </div>
                    </a>
                </div>
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