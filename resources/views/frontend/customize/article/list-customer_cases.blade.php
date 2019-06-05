@extends('frontend.customize.layouts.app')
@php
    if($category->parent){
         $active = app(\App\Models\Category::class)->find($category->parent);
         $active = field_locale($active->name);
    }else{
         $active =field_locale($category->name);
    }

     // 获取客户列的轮播
     $slides = app(\App\Models\Slide::class)->where('group', \App\Models\Slide::SLIDES_CASE)->where('status', '1')->ordered()->get();
@endphp

@section('title',  $active)

<style>
    .article-list-wrapper{padding:80px 0;}
    .article-list-wrapper .article-item{display: flex;margin-bottom: 62px;}
    .article-list-wrapper .article-item:last-child{margin-bottom: 0;}
    .article-list-wrapper .article-item .article-item-content{margin-left: 66px; border-bottom: 1px solid #e6e6e6;position: relative; flex:1;}
    .article-list-wrapper .article-item .article-item-content h2{
        overflow: hidden;
        text-overflow: ellipsis;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
    }
    .article-list-wrapper .article-item .article-item-content .desc{
        line-height: 38px;
        margin:25px 0;font-size: 16px;color: #888;
        overflow: hidden;
        text-overflow: ellipsis;
        display: -webkit-box;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
    }
    .article-list-wrapper .article-item .article-item-content .more{
        text-align: right;position: absolute;right:0;bottom:15px;
    }
    .article-list-wrapper .article-item .article-item-content .more a{
        color:#16508e;font-size:18px;font-weight: 600;
    }


</style>

@section('swipper')
    @include('frontend.customize.layouts.swipper',$slides)
@endsection

@section('content')
    <div class="container-fixed">
        <div class="container-fixed child-nav">
            <div class="container">
                <ul>
                    <li class="child-active">
                        <a href="{{route('article.index',['navigation' => 2, 'articleCategory'=>3])}}"><img src="{{asset('images/anli-sel.png')}}" alt=""> <span>客户案例</span></a>
                        <span class="triangle_border_up"></span>
                    </li>
                    <li>
                        <a href="{{route('article.index',['navigation' => 2, 'articleCategory'=>4])}}"><img src="{{asset('images/beishu-unsel.png')}}" alt=""><span>客户背书</span></a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="container">
            <div class="article-list-wrapper">
                @forelse ($articles as $article)
                    <div class="article-item" style="">
                        <img src="{{storage_image_url($article->thumb)}}" alt="" style="height:260px;width:420px;">
                        <div class="article-item-content">
                            <h2>{{field_locale($article->title)}}</h2>
                            <div class="desc" style="">
                                {{field_locale($article->description)}}
                            </div>
                            <div class="more" style="">
                                <a href="{{$article->getLink(request('navigation',0),request('articleCategory',0))}}">了解详情 >> </a>
                            </div>
                        </div>
                    </div>
                @empty
                    <p class="empty">No data found.</p>
                @endforelse
                {{-- 分页 --}}
                <div style="text-align: right;">
                    {{ $articles->links('pagination::frontend') }}
                </div>
            </div>
        </div>

    </div>

@endsection