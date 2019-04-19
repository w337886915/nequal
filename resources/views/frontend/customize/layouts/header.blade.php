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
</style>
<nav class="navbar navbar-fixed-top nav-transparent ">
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
                <li><a href="./solutions">解决方案</a></li>
                <li><a href="./services">成功案例</a></li>
                <li><a href="./about">关于我们</a></li>
                <li><a href="./about">语言切换</a></li>
                <li><a href="./about">加入我们</a></li>
                <li><a href="./about">联系我们</a></li>
            </ul>
        </div>
    </div>
</nav>
