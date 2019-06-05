@extends('frontend::layouts.app')
@php
   $navigation = request('navigation', 0);
   if($navigation){
        $nav = \App\Models\Navigation::where([
            ['category', '=', 'desktop'],
            ['is_show', '=', '1'],
            ['type', '=', 'article']
        ])->find($navigation);;
        $active = $nav ? field_locale($nav->title) : '';
   }else {
         $active = '';
   }
@endphp

@section( 'title', $title = field_locale($article->title))
@section('description', empty($article->description) ? $article->description : config('system.common.basic.description','') )
@section('keywords', empty($article->keywords) ? $article->keywords : config('system.common.basic.keywords','') )

<style>
    .article-show-banner{
        height: 240px;
        background: #e9e9e9;
        margin-top: 80px;
        background-image: url("{{asset('images/article-show-bg.png')}}");
        background-size:cover;
    }
    .article-show-banner .container{
        height: 240px;
        display:flex;
        justify-content: space-between;
        align-items: center;
        color: #fff;
    }
    .article-show-banner .article-name{
        width: 800px;
        font-size: 32px;
    }
    .article-show-banner .container img{max-height: 120px;max-width: 180px;}

    .article-content-wrapper{
        padding: 60px  0  100px 0;
    }
    .article-content-wrapper .annex{
        margin-top: 40px;
    }
    .article-content-wrapper .annex ul{margin-top:20px;}
    .article-content-wrapper .annex ul li{
        line-height: 36px;
        font-size:18px;
    }


</style>
<!-- banner -->
@section('swipper')
   <div class="container-fixed article-show-banner">
       <div class="container">
           <div class="article-name">{{field_locale($article->title)}}</div>
           <img src="{{storage_image_url($article->thumb)}}" alt="nEqual">
       </div>
   </div>
@endsection
@section('content')
    <div class="container article-content-wrapper">
        <div>
            {!! field_locale($article->content) !!}
        </div>

        @if($article->annex->count())
            @php
            $annex = $article->annex->toArray();
            @endphp
        <div class="annex">
            <h6>附件下载</h6>
            <ul style="margin-top: 20px;">
                @foreach($annex as $item)
                <li><a href="{{storage_url($item['path'])}}">{{$item['name']}}</a></li>
                @endforeach
            </ul>
        </div>
        @endif
    </div>
@endsection

@section('script')
<script>
</script>
@endsection