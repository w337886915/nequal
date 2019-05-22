@extends('frontend.customize.layouts.app')

@section('style')
    <style>
        .page-content-wrapper:nth-child(2n){
            background: #eee;
        }
        .page-title h2{
            font-weight: 600;
        }
        .page-title p{
            font-size: 18px;
            text-align: center;
        }
        .item-wrapper{
            display: flex;
            flex-wrap: wrap;
        }
        .case-item{
            margin-bottom: 50px;
            text-align: center;
        }
        .case-name{
            margin-top: 5px;
            font-size: 18px;
            text-align: center;
        }
    </style>
@endsection
@section('content')
    @include('frontend.customize.layouts.navbar', ['active' => '成功案例', 'fixdBackgroud' => true])
    <div class="slogan" style="height: 300px;background: #303848;text-align: center;color: #fff;padding: 100px 0;">
        <p style="font-size: 30px;font-weight: 700;">我们将助您取得成功。</p>
        <p style="font-size: 18px;">回答有关“我该怎么做”的问题，并以新的洞察应对当今转型为体验业务的过程中关键的挑战</p>
    </div>

    <div class="page-content-wrapper">
        <div class="container" style="width: 1500px;">
            <div class="page-title">
                <h2>成功案例</h2>
                <p>{{$category->description}}</p>
                @if($first_child_id && $childHasArtricle)
                    <p class="case-name"><a href="{{route('cases.category', ['category'=> $category->id,'child'=>$first_child_id ])}}">了解更多 ›</a></p>
                @else
                    <p class="case-name"><a href="{{route('cases.list', ['category'=> $category->id])}}">了解更多 ›</a></p>
                @endif()
            </div>
            <div class="col-md-12 item-wrapper">
                @foreach($cases as $index =>$article)
                    @if($index<6)
                        <div class="col-md-4 case-item">
                            <img src="{{storage_image_url($article->thumb)}}" alt="" style="width: 380px; height: 199px;">
                            <p class="case-name"><a href="{{route('cases.info', ['article'=>$article->id])}}">{{$article->title}}</a></p>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
    <div class="page-content-wrapper">
        <div class="container">
            <div class="page-title">
                <h2>服务品牌</h2>
                <p>{{$brands->description}}</p>
            </div>
            <div class="col-md-12 icem-wrapper">
                @foreach($brands->articles as $index =>$article)
                    <div class="col-md-2 case-item">
                        <img src="{{(storage_image_url($article->thumb))}}" alt="" style="width: 100px; height: 50px;">
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
