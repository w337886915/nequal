<style>
.header-wrapper {
    height: 80px;
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    z-index: 1000;
    border-bottom: 1px solid rgba(0,0,0, 0.1);
}
.header-wrapper .navbar{
    height: 80px;
    position: relative;
}
.header-wrapper .navbar .navbar-collapse{
    position: absolute;
    right:0;
    top:0;
}

.header-wrapper .logo {
    width: 128px;
    height: 37px;
}

.header-wrapper .contact-us {
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
    padding: 0 10px;
    font-size: 16px;
    letter-spacing: 0;
    color: #4b4a4b;
}

.header-wrapper .navbar-nav .nav-link {
    padding: 0 !important;
    line-height: 75px;
    font-size: 16px;
    color: #fff;
}

.header-wrapper .navbar .navbar-collapse .dropdown{
    margin:0 30px;
}
.header-wrapper .navbar .navbar-collapse .dropdown .lang-img{
    height:16px;
    width:16px;
}
.header-wrapper .navbar .navbar-collapse .dropdown .lang-now{
     vertical-align: middle;
}
.header-wrapper .navbar .navbar-collapse .dropdown .dropdown-menu{
    text-align: center;
    line-height: 30px;
}

.header-wrapper .dropdown-menu{
    min-width: 5rem;
}
.header-wrapper .lang-now{
    color: #fff;
}

.nav-bg{
    background: #fff;
}
.nav-bg .navbar-nav .nav-link{
  color: #4b4a4b;
}
.nav-bg .dropdown .lang-now{
    color: #4b4a4b ;
}

</style>
@php
    $navigations = frontend_navigation('desktop');
@endphp
<div class="container-fixed header-wrapper">
    <div class="container">
        <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand" href="/"><img class="logo" src="@if($active=='index'){{asset('images/logo_footer.png')}}@else {{asset('images/logo_header.png')}}@endif"  alt="nEqual"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    @foreach($navigations as $navigation)
                        <li class="nav-item">
                            <a class="nav-link {{ $active == field_locale($navigation->title) ? 'active' : '' }}"
                               target="{{$navigation->target}}" href="{{$navigation->link}}">{{field_locale($navigation->title)}}</a>
                        </li>
                    @endforeach
                </ul>
                <div class="dropdown">
                    <a class="dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        @if($active == 'index')
                            <img class="lang-img" src="{{asset('images/yuyan_f.png')}}" alt="nEqual">
                            <span class="lang-now">{{trans('page.'.app()->getLocale())}}</span>
                        @else
                            <img class="lang-img" src="{{asset('images/yuyan_h.png')}}" alt="nEqual">
                            <span class="lang-now">{{trans('page.'.app()->getLocale())}}</span>
                        @endif
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
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
@section('script')

@endsection