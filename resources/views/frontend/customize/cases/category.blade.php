@extends('frontend.customize.layouts.app')
@section('style')
{{--    <link rel="stylesheet" href="{{asset('vendor/nequal/css/frontend.css')}}" />--}}
    <style>
        .row-flex-wrap{
            display: flex;
            flex-wrap: wrap;
            min-height: 500px;
        }
        .each-wrap-div{
            margin-bottom: 40px;
        }
        .each-wrap-div>a{
            color: #333;
        }
        .each-wrap-div>a:hover{
            text-decoration: none;
        }
        .each-wrap-div>a img:hover, h3:hover, p:hover{
            transform: scale(1.03);
            color: #333;
        }
        .sub-nav-name{
            font-size: 48px;
            color: #fff;
        }
        .sub-nav-item{
            flex:1;
            text-align: right
        }
        .sub-nav-item .nav-item{
            position: relative;
            padding: 10px 0;
            font-size: 20px;
            margin-left: 10px;
            line-height: 60px;
        }
        .sub-nav-item  a>span{
            text-decoration: none;
            color: #fff;
        }
        .sub-nav-item  a>span:hover {
            text-decoration: none;
            color: #fff;
            cursor: pointer;
        }
        .sub-nav-item .active::after {
            position: absolute;
            content: '';
            left: 0;
            bottom: 0;
            width: 100%;
            height: 2px;
            background: linear-gradient(to right, #e2c34c 0%, #d75333 100%);
        }

    </style>
@endsection
@section('content')
    @include('frontend.customize.layouts.navbar', ['active' => '成功案例', 'fixdBackgroud' => true])
    <div>
        @if(!empty($childs))
        <div style="background: #303848; padding: 60px 0;">
            <div class="container" style="margin-top: 0;height: 60px; display: flex;" >
                <div class="sub-nav-name">{{$child->en_name}}</div>
                <div class="sub-nav-item">
                    @foreach($childs as $item)
                        <a href="{{route('cases.category', ['category'=> $category->id,'child'=>$item->id ])}}">
                        <span class="nav-item {{ $child->id == $item->id ? 'active': '' }}">{{$item->name}}</span>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
        @endif

        <div class="container-fluid" style="margin-top: 50px;">
            <div class="container">
                <div class="row-split hidden-xs"></div>
                <div class="row-split"></div>
                <div class="row row-flex-wrap">
                    @forelse($articles as $article)
                    <div class="col-md-6 each-wrap-div">
                        <a href="{{route('cases.info', ['article' => $article->id])}}">
                            <img class="hypers-solutions-detail-img" src="{{storage_image_url($article->thumb)}}" alt="" style="width: 80%;height:200px;">
                            <h3 class="hypers-solutions-detail-title">{{$article->title}}</h3>
                            <p class="hypers-solutions-detail-text">
                               {{$article->description}}
                            </p>
                        </a>
                    </div>
                        @empty
                        <div class="container" style="height: 500px;text-align: center;font-size: 16px;color: #888;">暂时没有数据~</div>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
@endsection