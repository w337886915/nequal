@extends('frontend::layouts.app')
@php
    $title = field_locale($article->title);
$active = '';
@endphp
{{--
@section( 'title', $title )--}}
{{--
@section('description', empty($article->description) ? $article->description : config('system.common.basic.description','') )
@section('keywords', empty($article->keywords) ? $article->keywords : config('system.common.basic.keywords','') )
--}}

{{--@section('breadcrumb')
    <a><cite>{{$title}}</cite></a>
@endsection--}}


@section('content')
    <div>
        详情页面
    </div>

@endsection

@section('scripts')
<script>
    $(".form-reply-delete").click(function(){

    var tUrl = $(this).attr('data-url');

    layer.confirm('确认删除吗？', {
    btn: ['确认', '取消']
    }, function(index){
    $("#delete-reply-form").attr("action",tUrl).submit();
        console.log(tUrl);
        layer.close(index);
    return false;
    }, function(index){
        layer.close(index);
    return true;
    });

    return false;
    });
</script>
@endsection