@extends('frontend::layouts.app')

@section('title', $title = '关于我们')
@php
    $active = '关于我们';
@endphp

@section('swipper')
    @include('frontend.customize.layouts.swipper', $slides)
@stop

<style>
    .jobs-wrapper{background: #F2F6FA;;}
    .jobs-wrapper .container{padding:80px 0;}
    .jobs-wrapper .job-item{display: flex;align-items: center;padding: 50px 10px;border-bottom: 1px solid #e4e4e4;}
    .jobs-wrapper .job-item .job-info{flex:1;}
    .jobs-wrapper .job-item .job-info .title{line-height: 36px;font-size: 32px;margin-bottom: 40px;}
    .jobs-wrapper .job-item .job-info .where{line-height: 36px;font-size: 18px;color:#888;   margin-bottom: 26px;}
    .jobs-wrapper .job-item .job-info .keywords-wrapper{height:40px;line-height: 40px;}
    .jobs-wrapper .job-item .job-info .keywords {vertical-align: middle;padding: 0 27px; font-size: 16px;display: inline-block;background-color: #fff;border-radius: 25px;margin-left: 30px;}
    .jobs-wrapper .job-item .send-resume-btn{width: 140px;height: 60px;background-color: #16508e;border-radius: 6px;color:#fff;line-height: 60px;text-align: center;font-size: 24px;}
</style>

@section('content')
<div class="container-fixed">
    <div class="container-fixed child-nav">
        <div class="container">
            <ul>
                <li> <a href="{{route('company.index',7)}}"><img src="{{asset('images/gongsijieshao-unsel.png')}}" alt=""> <span>公司介绍</span></a></li>
                <li> <a href="{{route('company.team')}}"><img src="{{asset('images/guanli-unsel.png')}}" alt=""><span>管理团队</span></a></li>
                <li class="child-active">
                    <a href="{{route('company.join')}}"><img src="{{asset('images/jiaru-sel.png')}}" alt=""><span>加入我们</span></a>
                    <span class="triangle_border_up" style="background:#F2F6FA;"></span>
                </li>
                <li><a href="{{route('company.contact')}}"><img src="{{asset('images/lianxi-unsel.png')}}" alt=""><span>联系我们</span></a></li>
            </ul>
        </div>
    </div>

    <div class="container-fixed">
        <div class="container-fixed jobs-wrapper">
            <div class="container">
                @forelse ($jobs as $job)
                    <div class="job-item">
                        <div class="job-info">
                            <div class="title">{{ field_locale($job->name)}}</div>
                            <div class="where">工作地点: {{ field_locale($job->place->name)}}</div>
                            <div class="keywords-wrapper">
                                <span style="font-size:18px;color:#888;">关键词:</span>
                                @php $keywords = explode(',',field_locale($job->keywords)) @endphp
                                @foreach($keywords as $keyword)
                                    <span class="keywords">{{$keyword}}</span>
                                 @endforeach
                            </div>
                        </div>

                        <button type="button" class="layui-btn send-resume-btn" data-id="{{$job->id}}"
                                lay-data="{url: '{{ route('resume.uploader')}}', accept: 'file'}">投递简历</button>
                    </div>
                @empty
                    <div class="empty">No posts found.</div>
                @endforelse

        </div>


    </div>
</div>
</div>
@endsection

@section('style')
    <link href="{{asset('vendor/laracms/plugins/layui/css/layui.css')}}" rel="stylesheet" type="text/css" media="all">
@endsection
@section('script')
    <script src="{{asset('vendor/laracms/plugins/layui/layui.all.js')}}"></script>
    <script>
        $(function () {
            layui.use('upload', function () {
                var upload = layui.upload;
                //执行实例
                var uploadInst = upload.render({
                    elem: ".send-resume-btn"//绑定元素
                    ,method: "POST"
                    ,data: {
                        _token: '{{csrf_token()}}',
                        url: '{{ route('resume.uploader')}}',
                        folder: 'resume',
                        file_type : 'file',
                    }
                    ,before: function(){
                       $.extend(true,this.data,{
                           job_id: this.item.attr('data-id')
                       });
                    }
                    ,done: function(res, index, upload){
                        console.log(res);
                        alert(res.message);
                        return false;
                    }
                    , error: function () {
                        alert('上传失败');
                        return false;
                    }
                });

            });

        })
    </script>
@endsection