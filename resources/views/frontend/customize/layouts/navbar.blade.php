<style>
    body{
        padding-top: 68px;
    }
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
        line-height: 68px;
        margin-right: 10px;
        color: #FFFFFF;
    }

    .nav-transparent {
        min-height: 68px;
        background-color: transparent;
        margin-bottom: 0;
        border: none;
        transition: opacity .6s ease, background .6s ease, box-shadow .6s ease;
    }

    .navbar.fixd-background {
        background-color: #303848;
    }

    .nav-transparent.nav-bg {
        background-color: #303848 !important;
    }

    .nav-transparent:hover {
        background-color: #303848 !important;
    }

    .nav-transparent .navbar-brand {
        padding: 10px 15px !important;
        height: 68px;
    }

    .navbar-nav > li {
        position: relative;
        height: 68px;
    }

    .navbar-nav > li > a {
        display: block;
        color: #FFF;
        position: relative;
        padding-top: 15px;
        padding-bottom: 15px;
        line-height: 38px;
    }


    .navbar-nav > li > a:hover, .navbar-nav > li > a:focus, .navbar-nav > li > a.active {
        color: #00A0DE;
        background-color: unset !important;
    }
</style>

@php
    $navigations = frontend_navigation('desktop');
    //$currentBrothersAndChildNavigation = frontend_current_brother_and_child_navigation('desktop');

    $currentChildNavigations = frontend_current_child_navigation('desktop');

@endphp
<nav class="{{ isset($fixdBackgroud) && $fixdBackgroud ? 'fixd-background' : '' }} navbar navbar-fixed-top nav-transparent">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="./">
                <img alt="nEqual" src="https://www.nequal.com/images/nEqual/nEqua_logo.svg" height="50">
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
                <li><a href="/" class="{{ $active == 'index' ? 'active' : '' }}">{{trans('page.home')}}</a></li>
                @foreach($navigations as $navigation)
                    <li>
                        <a target="{{ $navigation->target }}"  href="{{$navigation->link}}" class="{{ $active == $navigation->title ? 'active' : '' }}">{{ $navigation->title }}</a>
                        @if($navigation->child)
                            <dl class="layui-nav-child">
                                @foreach($navigation->child as $nav)
                                    <dd><a target="{{ $navigation->target }}" href="{{$nav->link}}">{{ $nav->title }}</a></dd>
                                @endforeach
                            </dl>
                        @endif
                    </li>
                @endforeach
              {{--  <li><a href="{{request()->getRequestUri()}}">语言切换</a></li>--}}
                <li id="lang"><a href="javascript:;">语言切换</a></li>

               {{-- <li><a href="./" class="{{ $active == 'index' ? 'active' : '' }}">首页</a></li>
                <li><a href="./solutions" class="{{ $active == 'solutions' ? 'active' : '' }}">解决方案</a></li>
                <li><a href="./services" class="{{ $active == 'services' ? 'active' : '' }}">成功案例</a></li>
                <li><a href="./about" class="{{ $active == 'about' ? 'active' : '' }}">关于我们</a></li>
                <li><a href="./lang" class="{{ $active == 'lang' ? 'active' : '' }}">语言切换</a></li>
                <li><a href="./about" class="{{ $active == 'about' ? 'active' : '' }}">加入我们</a></li>
                <li><a href="./contact" class="{{ $active == 'contact' ? 'active' : '' }}">联系我们</a></li>--}}
            </ul>
        </div>
    </div>
</nav>
@section('script-navbar')
    <script>
        $(function () {
            window.addEventListener('scroll', function () {
                let scrollTop = document.documentElement.scrollTop
                if (scrollTop > 10) {
                    $('.navbar').addClass('nav-bg')
                } else {
                    $('.navbar').removeClass('nav-bg')
                }
            });

            $('#lang').click(function () {
                console.log('click');
                var lang = `{{app()->getLocale()}}`;
                $.ajax({
                    type: 'get',
                    url: '/lang',
                    data: {
                        lang: lang
                    },
                    success: function (res) {
                        if(res.status){
                            window.location.reload();
                        }
                    }
                });
            })




        });
    </script>
@endsection
