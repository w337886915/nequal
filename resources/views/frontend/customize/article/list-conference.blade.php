@extends('frontend.customize.layouts.app')
@section('title', $title = '行业会议')
@php
    if($category->parent){
         $active = app(\App\Models\Category::class)->find($category->parent);
         $active = field_locale($active->name);
    }else{
         $active = field_locale($category->name);
    }
       // 获取客户列的轮播
    $slides = app(\App\Models\Slide::class)->where('group', \App\Models\Slide::SLIDES_CONFERENCE)->get();
@endphp

<!-- banner -->
@section('swipper')
    @include('frontend.customize.layouts.swipper')
@stop

<style>
    .article-list-wrapper{padding:80px 0;}
    .article-list-wrapper .article-item{display: flex;margin-bottom: 62px;}
    .article-list-wrapper .article-item:last-child{margin-bottom: 0;}
    .article-list-wrapper .article-item .article-item-content{border-bottom: 1px solid #e6e6e6;position: relative;;}
    .article-list-wrapper .article-item .article-item-content h2{overflow: hidden; text-overflow: ellipsis;  display: -webkit-box;-webkit-line-clamp: 2;-webkit-box-orient: vertical; font-size:1.5rem;}
    .article-list-wrapper .article-item .article-item-content .desc{margin:15px 0;font-size: 1rem;color: #888;line-height: 36px;overflow: hidden; text-overflow: ellipsis; display: -webkit-box;  -webkit-line-clamp: 3;  -webkit-box-orient: vertical;}
    .article-list-wrapper .article-item .article-item-content .more{display: flex;justify-content: space-between;align-items: center;}
    .article-list-wrapper .article-item .article-item-content .more .video a{background-color: #ecf1f6;border-radius: 6px;padding:5px;}
    .article-list-wrapper .article-item .article-item-content .more .video a:hover{text-decoration: none;}
    .article-list-wrapper .article-item .article-item-content .more .video img{width:15px;height:15px;}
    .article-list-wrapper .article-item .article-item-content .more .buttons a{color:#16508e;font-size:1rem;font-weight: 600;padding: 0 3px;}
    .article-list-wrapper .article-item .article-item-content .more .buttons a span{vertical-align: middle;}

    @media screen and (min-width: 576px){
        .article-list-wrapper{padding:80px 0;}
        .article-list-wrapper .article-item{display: flex;margin-bottom: 62px;height: 280px;}
        .article-list-wrapper .article-item:last-child{margin-bottom: 0;}
        .article-list-wrapper .article-item .article-item-content{margin-left: 66px; border-bottom: 1px solid #e6e6e6;position: relative; flex:1;}
        .article-list-wrapper .article-item .article-item-content h2{overflow: hidden; text-overflow: ellipsis;  display: -webkit-box;-webkit-line-clamp: 2;-webkit-box-orient: vertical; font-size:32px;}
        .article-list-wrapper .article-item .article-item-content .desc{margin:15px 0;font-size: 18px;color: #888;line-height: 38px;overflow: hidden; text-overflow: ellipsis; display: -webkit-box;  -webkit-line-clamp: 3;  -webkit-box-orient: vertical;}
        .article-list-wrapper .article-item .article-item-content .more{position:absolute; bottom: 12px;left:0;right:0;}
        .article-list-wrapper .article-item .article-item-content .more .video a{background-color: #ecf1f6;border-radius: 6px;padding:10px;}
        .article-list-wrapper .article-item .article-item-content .more .video a:hover{text-decoration: none;}
        .article-list-wrapper .article-item .article-item-content .more .buttons a{color:#16508e;font-size:1rem;font-weight: 600;padding: 0 10px;}
        .article-list-wrapper .article-item .article-item-content .more .buttons a span{vertical-align: middle;padding-left:5px;}
    }

</style>

@section('swipper')
    @include('frontend.customize.layouts.swipper',$slides)
@endsection

@section('content')
    <div class="container-fixed">
        <div class="container">
            <div class="article-list-wrapper">
                @forelse ($articles as $article)
                    <div class="article-item row">
                        <img src="{{storage_image_url($article->thumb)}}" alt="nEqual" class="col-12 col-sm-4" style="width: 100%;height:100%;">
                        <div class="article-item-content col-12 col-sm-8">
                            <h2 class="mt-1">{{field_locale($article->title)}}</h2>
                            <div class="desc">
                                {{field_locale($article->description)}}
                            </div>
                            @section('script')
                            <script>
                                $( document ).ready(function () {
                                   setTimeout(function () {
                                        $('.video').find('.article-video').each(function (index, element) {
                                            var duration = $(this)[0].duration;
                                            duration = Math.round(duration);
                                            var time = formatDuring(duration * 1000); //豪秒
                                            $(this).prev('a').find('.video-time').html(time);
                                        });
                                   }, 300);

                                    function formatDuring(mss) {
                                        var hours = parseInt((mss % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                                        var minutes = parseInt((mss % (1000 * 60 * 60)) / (1000 * 60));
                                        var seconds = (mss % (1000 * 60)) / 1000;
                                        if(hours< 10){
                                            hours = "0"+ hours;
                                        }
                                        if(minutes< 10){
                                            minutes = "0"+ minutes;
                                        }
                                        if(seconds< 10){
                                            seconds = "0"+ seconds;
                                        }
                                        return hours + ":" + minutes + ":" + seconds;
                                    }

                                });
                             </script>
                            @endsection
                            <div class="more row mb-1">
                                @php
                                    $attribute = is_json($article->attribute)? json_decode($article->attribute) :new \stdClass();
                                    $video_path = isset($attribute->video_path) ? $attribute->video_path : null;
                                @endphp
                                <p class="video col-4 col-md-3">
                                    @if($video_path)
                                    <a href="{{storage_video_url($video_path)}}" target="_blank">
                                        <img src="{{asset('images/video.png')}}" alt="">
                                        <span style="vertical-align: middle;" class="video-time">00:00:00</span>
                                    </a>
                                    <video src="{{storage_video_url($video_path)}}" class="article-video" controls="controls" style="display: none;"></video>
                                    @endif
                                </p>

                                <p class="buttons col-8 col-md-9 text-right">
                                    <a href="{{$article->link['attend']}}" target="_blank"><img src="{{asset('images/baoming.png')}}" alt=""><span> 报名参会</span></a>
                                    <a href="{{$article->link['material']}}" target="_blank"><img src="{{asset('images/xiazai.png')}}" alt=""><span> 下载资料</span></a>
                                </p>
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