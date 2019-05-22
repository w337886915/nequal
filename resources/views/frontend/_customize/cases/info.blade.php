@extends('frontend.customize.layouts.app')
@section('style')
    <style>
        .page-next-pre  p a{
            color: #999;
        }
        .page-next-pre  p a:hover{
            color: #337ab7;
        }
    </style>
@endsection
@section('content')
    @include('frontend.customize.layouts.navbar', ['active' => '成功案例', 'fixdBackgroud' => true])
    <div class="container" style="padding: 50px 10px;">
            <div style="display: flex;justify-content: space-between">
                <div>
                    <h2>{{$article->title}}</h2>
                    <p style="font-size: 16px; text-indent: 2rem;padding: 10px 20px 10px 0;">{{$article->description}}</p>
                </div>
                <img src="{{storage_image_url($article->thumb)}}" alt="" style="width: 370px;height:210px;">
            </div>

            <div class="article-content" style="padding: 50px 0;font-size: 16px;">
               {!!$article->content !!}
            </div>
            <div class="page-next-pre" style="border-top: 1px solid #eee; margin-top: 20px;padding: 10px 0; color: #777">
                <p><a href="{{$pre->count()>0 ?  route('cases.info', ['article' => $pre[0]->id]) : ''}}">上一篇:   {{$pre->count()>0 ?  $pre[0]->title : '无'}}</a></p>
                <p><a href="{{$next->count()>0 ? route('cases.info', ['article'=> $next[0]->id]) : ''}}">上一篇: {{$next->count()>0 ? $next[0]->title : '无'}}</a></p>
            </div>
        </div>
@endsection