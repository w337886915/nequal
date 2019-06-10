@extends('frontend.customize.layouts.app')
@php
    $active = '成功案例';

      // 获取子类
      //$childs = app(\App\Models\Category::class)->where('parent', $category->parent)->get();
      //dd($childs);
    // 获取客户列的轮播
       $slides = app(\App\Models\Slide::class)->where('group', \App\Models\Slide::SLIDES_CASE)->get();
@endphp
@section('title',  $active)

<style>
    .endorsement-wrapper{padding:100px 0;}
    .endorsement {position: relative;margin: 90px 30px;padding: 45px;border-radius: 20px;box-shadow: 0 4px 30px 0 rgba(0, 0, 0, 0.06); }
    .endorsement img{position: absolute;height:160px;width:160px;border-radius: 50%;border: 1px solid #DEE3E6;top: -80px;background-color: #DEE3E6;}
    .endorsement>.name{text-align: right;font-weight: 600;color:#4b4a4b;}
    .endorsement .content{color:#A1A1A1;}
    .endorsement .content p{margin:38px 0; color:#888;line-height: 38px;font-size: 18px;}
    .endorsement .content .info{height:380px;overflow: hidden; text-overflow: ellipsis;display: -webkit-box; -webkit-line-clamp: 10; -webkit-box-orient: vertical;}
    .endorsement .content .case{margin-bottom: 0;;}
    .endorsement .content .case a{color: #16508e;font-weight: 600;}

</style>

@section('swipper')
    @include('frontend.customize.layouts.swipper',$slides)
@endsection

@section('content')
    <div class="container-fixed">
        <div class="container-fixed child-nav">
            <div class="container">
                <ul>
                    <li>
                        <a href="{{route('article.index',['navigation' => 2, 'articleCategory'=>3])}}"><img src="{{asset('images/anli-unsel.png')}}" alt=""><span>客户案例</span></a>
                    </li>
                    <li  class="child-active">
                        <a href="{{route('article.index',['navigation' => 2, 'articleCategory'=>4])}}"><img src="{{asset('images/beishu-sel.png')}}" alt=""><span>客户背书</span></a>
                        <span class="triangle_border_up"></span>
                    </li>
                </ul>
            </div>
        </div>

        <div class="container-fixed container endorsement-wrapper">
            <div class="row">
                @forelse ($articles as $article)
                <div class="col-md-6">
                    <div class="endorsement">
                        <img src="{{storage_image_url($article->thumb)}}" alt="">
                        <div class="name">{{field_locale($article->title)}}</div>
                        <div class="content">
                            <p class="info">{{field_locale($article->description)}}</p>
                            <p class="name">{{field_locale($article->subtitle)}}</p>
                            <p class="case"><a href="{{$article->link['case']}}">查看案例 >></a></p>
                        </div>
                    </div>
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

    </div>

@endsection