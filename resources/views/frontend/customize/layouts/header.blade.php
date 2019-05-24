<style>
.header-wrapper {
    height: 80px;
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    z-index: 1000;
    background: #fff;
    border-bottom: 1px solid rgba(0,0,0, 0.1);
}

.header-wrapper .container {
    height: 80px;
}

.header-wrapper .logo {
    width: 128px;
    height: 37px;
}

.header-wrapper .contact-us {
 /*   width: 110px;*/
    height: 44px;
    background-color: #16508e;
    border-radius: 22px;
    line-height: 44px;
    text-align: center;
    padding: 0 20px;
}

.header-wrapper .contact-us a {
    color: #fff;
}

.header-wrapper .navbar-nav li {
    margin: 0 15px;
    font-size: 16px;
    font-weight: normal;
    font-stretch: normal;
    letter-spacing: 0px;
    color: #4b4a4b;
}

.header-wrapper .navbar-nav li>a {
    padding: 0 !important;
    line-height: 75px;
    font-size: 16px;
}

</style>
<div class="container-fixed header-wrapper">
<div class="container">
<nav class="navbar navbar-expand-lg" style="height:80px;">
<a class="navbar-brand" href="/"><img class="logo" src="{{asset('images/logo_header.png')}}" alt="nEqual"></a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>
            @php
                $navigation = \App\Models\Navigation::where(['category'=>'desktop'])->get()->toArray();
                $navigations = frontend_navigation('desktop');
            @endphp
            <div class="collapse navbar-collapse" id="navbarSupportedContent" style="margin-left: 200px;">
                <ul class="navbar-nav mr-auto">
                    @foreach($navigations as $navigation)
                        <li class="nav-item">
                            <a class="nav-link {{ $active == field_locale($navigation->title) ? 'active' : '' }}" target="{{$navigation->target}}" href="{{$navigation->link}}">{{field_locale($navigation->title)}}</a>
                        </li>
                    @endforeach
                </ul>
                <div class="dropdown" style="line-height: 80px;margin:0 30px;">
                    <a class="dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="{{asset('images/yuyan_h.png')}}" alt="nEqual" style="height:16px; width:16px;">
                        <span style="vertical-align: middle;">{{trans('page.'.app()->getLocale())}}</span>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="text-align: center;line-height: 30px;">
                        <a class="dropdown-item" href="/lang/en">{{trans('page.en')}}</a>
                        <a class="dropdown-item" href="/lang/cn">{{trans('page.cn')}}</a>
                    </div>
                </div>
                <div class="contact-us">
                    <a target="" href="">{{trans('page.contact_us')}}</a>
                </div>
            </div>
        </nav>
    </div>
</div>