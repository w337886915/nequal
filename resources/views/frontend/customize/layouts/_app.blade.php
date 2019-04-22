<!DOCTYPE html><!--[if IE 8]>
    <html lang="en" class="ie8"> <![endif]--><!--[if IE 9]>
    <html lang="en" class="ie9"> <![endif]--><!--[if !IE]><!-->
    <html lang="en"><!--<![endif]-->
    <head><title></title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width,initial-scale=1" name="viewport">
        <meta dynamic-meta name="description" content="HYPERS宏路数据成立于2008年，是行业领先的智能数字产品运营商，解决品牌的增长难题，为消费者传递有价值的数字体验。">
        <meta dynamic-meta name="keywords" content="hypers, 宏路，宏路数据，上海宏路数据，hypers宏路数据">
        <meta name="MobileOptimized" content="320">
        <meta name="theme-color" content="#000000">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <meta name="apple-mobile-web-app-title" content="HYPERS">
        <link rel="apple-touch-icon" href="{{asset('vendor/nequal/images/icons/logo/hypers_crop_256.png')}}">
        <link rel="icon" type="image/png" href="/images/favicon.png">
        <link href="{{asset('vendor/nequal/css/frontend.css')}}" rel="stylesheet">
    </head>
<body class="zh-cn">
<div class="starry-warpper @yield('star_class')">
    <div class="stars"></div>
    <div class="stars2"></div>
    <div class="stars3"></div>
</div>
<div class="container-fluid @yield('fluid_class')">
    <header>
        <div class="navbar-header">
            <button class="navbar-toggle x collapsed" type="button" id="navbarToggle"><span
                        class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            <a class="navbar-brand hidden-sm" href=".."><img src="{{asset('vendor/nequal/picture/hyperslogo_h.svg')}}" width="100"></a>
        </div>
        @include('frontend.customize.layouts.header')
    </header>
    @yield('page_title')
</div>
@yield('content')
<footer>
    <div class="bar">
        <div class="container"><img class="title" src="{{asset('vendor/nequal/picture/h_footer_tagline_ol.svg')}}"> <img class="logo"
                                                                                                     src="{{asset('vendor/nequal/picture/hypers_logo_white.svg')}}"
                                                                                                     width="100"></div>
    </div>
    <div class="sitemap">
        <div class="container">
            <div class="row">
                <div class="col-md-2 hypers-logo-wrap"><a href="/"><img src="{{asset('vendor/nequal/picture/hyperslogo_h.svg')}}"
                                                                        class="logo" width="100"></a></div>
                <div class="col-md-8">
                    <ul>
                        <li><a href="../products">产品</a></li>
                        <li><a href="../products">企业增长云 HYPERS GROWTH CLOUD</a></li>
                        <li><a href="../products_analyticscloud">分析云 Hyper Analytics Cloud</a></li>
                        <li><a href="../products_audiencecloud">受众云 Hyper Audience Cloud</a></li>
                        <li><a href="../products_experiencecloud">体验云 Hyper Experience Cloud</a></li>
                        <li><a href="../products_insightcloud">洞察云 Hyper Insight Cloud</a></li>
                    </ul>
                    <ul>
                        <li><a href="../services">服务</a></li>
                        <li><a href="../services#consult">咨询</a></li>
                        <li><a href="../services#digital">数字</a></li>
                        <li><a href="../services#technology">技术</a></li>
                        <li><a href="../services#operating">运营</a></li>
                    </ul>
                    <ul>
                        <li><a href="../solutions_retail">解决方案</a></li>
                        <li><a href="../solutions_retail">新零售</a></li>
                        <li><a href="../solutions_finance">金融</a></li>
                        <li><a href="../solutions_auto">汽车</a></li>
                        <li><a href="../solutions_media">媒体</a></li>
                        <li><a href="../solutions_game">游戏</a></li>
                    </ul>
                    <ul>
                        <li><a href="../about">关于我们</a></li>
                    </ul>
                </div>
                <div class="col-md-2">
                    <div class="sns-info"><a id="btn_wechat" class="hidden-xs"><img src="{{asset('vendor/nequal/picture/wechat.svg')}}"></a>
                        <a class="hidden-xs" href="https://www.instagram.com/hypers.china/" target="_blank"><img
                                    src="{{asset('vendor/nequal/picture/instagram.svg')}}"></a> <img class="center-block visible-xs"
                                                                                 src="{{asset('vendor/nequal/picture/wechat_qr_code.svg')}}">
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
<script>!function (e, a, n, t, c, o, i, h) {
        e[n] = e[n] || [], e[n].push(o), e[o] = e[o] || function () {
            return (e[o].q = e[o].q || []).push(arguments)
        }, (i = a.createElement(t)).src = "//t.hypers.com.cn/hwt.js?v=1.6", i.async = 1, (h = a.getElementsByTagName(t)[0]).parentNode.insertBefore(i, h)
    }(window, document, "HyperAnalyticsObject", "script", 0, "_ha"), _ha("create", "621", {auto_track: !0}), _ha("send", "pageview");
    var ha_custom_events = {
        game: function () {
            _ha("send", "action", "homepage_game")
        }, retail: function () {
            _ha("send", "action", "homepage_retail")
        }, finance: function () {
            _ha("send", "action", "homepage_finance")
        }, auto: function () {
            _ha("send", "action", "homepage_auto")
        }, media: function () {
            _ha("send", "action", "homepage_media")
        }
    }</script>
<script type="text/javascript">!function (e, p) {
        if (!p.__SV) {
            var o, l, t = window;
            try {
                var n, i, a, r = t.location, c = r.hash;
                n = function (e, t) {
                    return (i = e.match(RegExp(t + "=([^&]*)"))) ? i[1] : null
                }, c && n(c, "state") && ("mpeditor" === (a = JSON.parse(decodeURIComponent(n(c, "state")))).action && (t.sessionStorage.setItem("_mpcehash", c), history.replaceState(a.desiredHash || "", e.title, r.pathname + r.search)))
            } catch (e) {
            }
            (window.mixpanel = p)._i = [], p.init = function (e, t, n) {
                function i(e, t) {
                    var n = t.split(".");
                    2 == n.length && (e = e[n[0]], t = n[1]), e[t] = function () {
                        e.push([t].concat(Array.prototype.slice.call(arguments, 0)))
                    }
                }

                var a = p;
                for (void 0 !== n ? a = p[n] = [] : n = "mixpanel", a.people = a.people || [], a.toString = function (e) {
                    var t = "mixpanel";
                    return "mixpanel" !== n && (t += "." + n), e || (t += " (stub)"), t
                }, a.people.toString = function () {
                    return a.toString(1) + ".people (stub)"
                }, o = "disable time_event track track_pageview track_links track_forms register register_once alias unregister identify name_tag set_config reset people.set people.set_once people.unset people.increment people.append people.union people.track_charge people.clear_charges people.delete_user".split(" "), l = 0; l < o.length; l++) i(a, o[l]);
                p._i.push([e, t, n])
            }, p.__SV = 1.2, (t = e.createElement("script")).type = "text/javascript", t.async = !0, t.src = "undefined" != typeof MIXPANEL_CUSTOM_LIB_URL ? MIXPANEL_CUSTOM_LIB_URL : "file:" === e.location.protocol && "//cdn.mxpnl.com/libs/mixpanel-2-latest.min.js".match(/^\/\//) ? "https://cdn.mxpnl.com/libs/mixpanel-2-latest.min.js" : "//cdn.mxpnl.com/libs/mixpanel-2-latest.min.js", (n = e.getElementsByTagName("script")[0]).parentNode.insertBefore(t, n)
        }
    }(document, window.mixpanel || []), mixpanel.init("7fcc5d2858b0ac89a478a6ba9ddaf8fd")</script>
<script type="text/javascript">var _vds = _vds || [];
    (window._vds = _vds).push(["setAccountId", "83f754525a344e8ea522561df93805c0"]), function () {
        var t = document.createElement("script");
        t.type = "text/javascript", t.async = !0, t.src = ("https:" == document.location.protocol ? "https://" : "http://") + "assets.growingio.com/vds.js";
        var e = document.getElementsByTagName("script")[0];
        e.parentNode.insertBefore(t, e)
    }()</script>
<script type="text/javascript">window._pt_lt = (new Date).getTime(), window._pt_sp_2 = [], _pt_sp_2.push("setAccount,49f26f61");
    var _protocol = "https:" == document.location.protocol ? " https://" : " http://";
    !function () {
        var t = document.createElement("script");
        t.type = "text/javascript", t.async = !0, t.src = _protocol + "js.ptengine.cn/49f26f61.js";
        var e = document.getElementsByTagName("script")[0];
        e.parentNode.insertBefore(t, e)
    }()</script>
<script type="text/javascript" src="{{asset('vendor/nequal/js/vendor.js')}}"></script>
@yield('script')

</body>
</html>
