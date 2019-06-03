@extends('frontend.customize.layouts.app')
@php
    if($category->parent){
         $active = app(\App\Models\Category::class)->find($category->parent);
         $active = field_locale($active->name);
    }else{
         $active =field_locale($category->name);
    }

       // 获取客户列的轮播
    $slides = app(\App\Models\Slide::class)->where('group', \App\Models\Slide::SLIDES_CASE)->get();
@endphp

<style>
    .article-list-wrapper{padding:80px 0;}
    .article-list-wrapper .article-item{display: flex;margin-bottom: 62px;}
    .article-list-wrapper .article-item:last-child{margin-bottom: 0;}
    .article-list-wrapper .article-item .article-item-content{
        margin-left: 66px; border-bottom: 1px solid #e6e6e6;position: relative; flex:1;
    }
    .article-list-wrapper .article-item .article-item-content h2{
        overflow: hidden;
        text-overflow: ellipsis;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
    }
    .article-list-wrapper .article-item .article-item-content .desc{margin:25px 0;font-size: 16px;color: #888;line-height: 38px;
        overflow: hidden; text-overflow: ellipsis; display: -webkit-box;  -webkit-line-clamp: 3;  -webkit-box-orient: vertical;
    }
    .article-list-wrapper .article-item .article-item-content .more{
        text-align: right;position: absolute;right:0;bottom:15px;
    }
    .article-list-wrapper .article-item .article-item-content .more a{
        color:#16508e;font-size:18px;font-weight: 600;
        padding: 0 10px;
    }
    .article-list-wrapper .article-item .article-item-content .more a span{vertical-align: middle;padding-left:5px;}


</style>

@section('swipper')
    @include('frontend.customize.layouts.swipper',$slides)
@endsection

@section('content')
    <div class="container-fixed">
        <div class="container">
            <div class="article-list-wrapper">
                @forelse ($articles as $article)
                    <div class="article-item" style="">
                        <img src="{{storage_image_url($article->thumb)}}" alt="" style="height:260px;width:420px;">
                        <div class="article-item-content">
                            <h2>{{field_locale($article->title)}}</h2>
                            <div class="desc">
                                {{field_locale($article->description)}}
                            </div>
                            <div class="more">
                                <a href="{{$article->getLink()}}"><img src="{{asset('images/baoming.png')}}" alt=""><span> 报名参会</span></a>
                                &nbsp;&nbsp;&nbsp;&nbsp;
                                <a href="{{$article->getLink(request('navigation', 0),  request('articleCategory', 0))}}"><img src="{{asset('images/xiazai.png')}}" alt=""><span> 下载资料</span></a>
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