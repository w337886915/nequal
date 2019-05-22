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
<div class="container-fixed">
    <div class="container">
        <nav class="navbar navbar-expand-lg ">
            <a class="navbar-brand" href="#"><img src="http://image.whgjh.top/0%E9%A6%96%E9%A1%B5_02.gif"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            @php
            $navigation = \App\Models\Navigation::where(['category'=>'desktop'])->get()->toArray();
            $navigations = frontend_navigation('desktop');
            @endphp
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    @foreach($navigations as $navigation)
                        <li class="nav-item active">
                            <a class="nav-link" target="{{$navigation->target}}" href="{{$navigation->link}}">{{$navigation->title[app()->getLocale()]}}</a>
                    </li>
                        @endforeach
                </ul>
                <div class="dropdown">
                    <a class="dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{app()->getLocale()}}
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="/lang/en">en</a>
                        <a class="dropdown-item" href="/lang/cn">cn</a>
                    </div>
                </div>
                <div>

                </div>
            </div>
        </nav>
    </div>
</div>