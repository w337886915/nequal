<div class="fly-footer">
    <div class="container list">
        <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-3 footer-item">
                <h6>关于nEqual</h6>
                <ul>
                    <li><a href="{{route('company.index',7)}}">公司介绍</a></li>
                    <li><a href="{{route('company.team')}}">管理团队</a></li>
                    <li><a href="{{route('article.index', ['navigation'=>5, 'articleCategory'=>5])}}">新闻报道</a></li>
                    <li><a href="{{route('article.index', ['navigation'=>6, 'articleCategory'=>6])}}">行业会议</a></li>
                    <li><a href="{{route('company.join')}}">加入我们</a></li>
                    <li><a href="{{route('company.contact')}}">联系我们</a></li>
                </ul>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-3 footer-item">
                <h6>解决方案</h6>
                <ul>
                    <li><a href="{{route('article.index', ['navigation'=>1, 'articleCategory'=>7])}}">营销云</a></li>
                    <li><a href="{{route('article.index', ['navigation'=>1, 'articleCategory'=>8])}}">品牌数据中台</a></li>
                    <li><a href="{{route('article.index', ['navigation'=>1, 'articleCategory'=>9])}}">智能广告系统</a></li>
                    <li><a href="{{route('article.index', ['navigation'=>1, 'articleCategory'=>10])}}">客户体验管理</a></li>
                </ul>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-3 footer-item">
                <h6>成功案例</h6>
                <ul>
                    <li><a href="{{route('article.index', ['navigation'=>2, 'articleCategory'=>3])}}">客户案例</a></li>
                    <li><a href="{{route('article.index', ['navigation'=>2, 'articleCategory'=>4])}}">客户背书</a></li>
                </ul>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-3 footer-item">
                <div class="contact-icons">
                    <img src="{{asset('images/wx.png')}}" alt="nEqual" id="weixin" width="29" height="22">
                    <a href=""><img src="{{asset('images/weibo.png')}}" alt="nEqual" width="27" height="22"></a>
                    <img src="{{asset('images/youxiang.png')}}" alt="nEqual" id="Email" width="22" height="18">
                </div>

                <div class="icon-content">
                    {{--<img src="{{asset('images/qrcode.png')}}" alt="" style="height:150px;">--}}
                </div>
              {{--  <div class="icon-content">
                    邮箱：marketing@nequal.com
                </div>--}}
            </div>
        </div>
    </div>
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-xs-4 col-sm-4 col-md-3"><a href="/"><img src="{{asset('images/logo_footer.png')}}" alt="nEqual"></a></div>
                <div class="col-xs-4 col-sm-4 col-md-6 text-center">
                    <span>Copyright {{config("system.common.basic.create_year")}} - {{date('Y')}} {{ config("system.common.basic.copyright") }} All Rights Reserved</span>
                    {{--   <a href="{{ config("system.common.basic.icp_link") }}" target="_blank">{{ config("system.common.basic.icp") }}</a>--}}
                </div>
                <div class="col-xs-4 col-sm-4 col-md-3 dropdown text-right pr-3">
                        <a class="dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="{{asset('images/yuyan_f.png')}}" alt="nEqual">
                            <span style="vertical-align: middle;">{{trans('page.'.app()->getLocale())}}</span>
                        </a>
                        <div class="dropdown-menu text-center" aria-labelledby="dropdownMenuButton" style="line-height: 25px;">
                            <a class="dropdown-item" href="/lang/en">{{trans('page.en')}}</a>
                            <a class="dropdown-item" href="/lang/cn">{{trans('page.cn')}}</a>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
