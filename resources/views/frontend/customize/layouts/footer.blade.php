<div class="fly-footer">
    <div class="container list">
        <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-3 footer-item">
                <h6>关于nEqual</h6>
                <ul>
                    <li><a href="">公司介绍</a></li>
                    <li><a href="">管理团队</a></li>
                    <li><a href="">新闻报道</a></li>
                    <li><a href="">行业会议</a></li>
                    <li><a href="">加入我们</a></li>
                    <li><a href="">联系我们</a></li>
                </ul>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-3 footer-item">
                <h6>解决方案</h6>
                <ul>
                    <li><a href="">Brand Data Hub</a></li>
                    <li><a href="">Serving</a></li>
                    <li><a href="">Customer Experience Management</a></li>
                    <li><a href="">Brand Trading Desk</a></li>
                    <li><a href="">Data Govement</a></li>
                </ul>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-3 footer-item">
                <h6>成功案例</h6>
                <ul>
                    <li><a href="">客户案例</a></li>
                    <li><a href="">客户背书</a></li>
                </ul>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-3 footer-item">
                <div class="contact-icons">
                    <img src="{{asset('images/wx.png')}}" alt="nEqual" id="weixin">
                    <a href=""><img src="{{asset('images/weibo.png')}}" alt="nEqual"></a>
                    <img src="{{asset('images/youxiang.png')}}" alt="nEqual" id="Email">
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
                <div class="col-xs-4 col-sm-4 col-md-6" style="text-align: center;">
                    <span>Copyright {{config("system.common.basic.create_year")}} - {{date('Y')}} {{ config("system.common.basic.copyright") }} All Rights Reserved</span>
                    {{--   <a href="{{ config("system.common.basic.icp_link") }}" target="_blank">{{ config("system.common.basic.icp") }}</a>--}}
                </div>
                <div class="col-xs-4 col-sm-4 col-md-3 dropdown" style="text-align: right;padding-right:40px;">
                        <a class="dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="{{asset('images/yuyan_f.png')}}" alt="nEqual">
                            <span style="vertical-align: middle;">{{trans('page.'.app()->getLocale())}}</span>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="text-align: center;line-height: 25px;">
                            <a class="dropdown-item" href="/lang/en">{{trans('page.en')}}</a>
                            <a class="dropdown-item" href="/lang/cn">{{trans('page.cn')}}</a>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
