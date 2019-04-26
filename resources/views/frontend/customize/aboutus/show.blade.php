@extends('frontend.customize.layouts.app')
@section('style')
    <link rel="stylesheet" href="{{asset('vendor/nequal/css/frontend.css')}}"/>
    <style>
        .page-content-wrapper{
            margin-top: 0;
            overflow: hidden;
        }
        .page-content-wrapper .left{
            float: left;
            width: 20%;

        }
        .page-content-wrapper .left ul{
           list-style: none;
        }
        .page-content-wrapper .left ul li{
           height: 4rem;
           line-height: 4rem;
            font-weight: bold;
            text-align: center;
        }
        .page-content-wrapper .left ul li.active{
            background-color: #cccccc;
        }
        .page-content-wrapper .container{
            float: left;
            width: 80%;
        }

        .page-content-wrapper .container .page-content {
            min-height: 500px;
        }
        .page-content-wrapper .container .page-content img{
            max-width: 100%;
            height: auto;
        }

    </style>

@endsection
@section('content')
    @include('frontend.customize.layouts.navbar', ['active' => '关于我们', 'fixdBackgroud' => true])
    <div class="page-content-wrapper products">
        <div class="left">
            <ul>
                @foreach($category_list['articles'] as $l)
                    <li class="@if($l['title'] == $acticle['title'] )active @endif"><a href="{{route('aboutus.show',['acticle'=>$l['id']])}}">{{$l['title']}}</a></li>
                @endforeach
            </ul>


        </div>
        <div class="container">
            <div class="page-content">
                {!! html_entity_decode($acticle['content']) !!}
            </div>
        </div>

    </div>

@endsection



