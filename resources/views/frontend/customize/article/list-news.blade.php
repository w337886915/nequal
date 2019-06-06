@extends('frontend.customize.layouts.app')

@section('title', '新闻报道')

@php
    if($category->parent){
         $active = app(\App\Models\Category::class)->find($category->parent);
         $active = field_locale($active->name);
    }else{
         $active =field_locale($category->name);
    }
       // 获取客户列的轮播
    $slides = app(\App\Models\Slide::class)->where('group', \App\Models\Slide::SLIDES_NEWS)->get();
@endphp

<!-- banner -->
@section('swipper')
    @include('frontend.customize.layouts.swipper', $slides)
@stop


<style>
    .news-wrapper{padding: 80px 0;}
    .news-item{padding:21px 18px 21px 46px;display: flex;margin-bottom: 80px;background-color: #ffffff; box-shadow: 0px 0px 30px 0px rgba(0, 0, 0, 0.08);border-radius: 12px;}
    .news-item:last-child{margin-bottom:0;}
    .news-item a{color: #16508e !important; font-weight: 600;}
    .news-item img{height:305px;width:455px;}
    .news-item .news-desc{flex:1;margin-right:54px;}
    .news-item .news-desc .title{font-size:28px}
    .news-item .news-desc .info{margin: 34px 0;font-size: 16px;color: #888;line-height: 38px;overflow: hidden; text-overflow: ellipsis; display: -webkit-box;-webkit-line-clamp: 3;-webkit-box-orient: vertical;}
    .news-item .news-desc .more{color: #888;}

</style>

@section('content')
<div class="container-fixed" style='background: #F2F6FA;'>
    <div class="container news-wrapper">
        @forelse ($articles as $article)
            <div class="news-item">
                <div class="news-desc">
                    <p class="title">{{field_locale($article->title)}}</p>
                    <div class="info">{{field_locale($article->description)}}</div>
                    <div class="row more">
                        <div class="col-md-8"><span>{{$article->created_at->toDateString()}}</span> &nbsp;&nbsp;{{-- <span>东方头条</span>--}}</div>
                        <div class="col-md-4 text-right"><a href="{{$article->getLink(request('navigation', 0), request('articleCategory', 0))}}">了解详情 &raquo;</a></div>
                    </div>
                </div>
                <img src="{{storage_image_url($article->thumb)}}" alt="nEqual">
            </div>
        @empty
            <p class="empty">No data found.</p>
        @endforelse
            {{-- 分页 --}}
            <div class="text-right">
                {{ $articles->links('pagination::frontend') }}
            </div>
    </div>
</div>
@endsection