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
    .jobs-wrapper .job-item{display: flex;align-items: center;padding: 30px 15px;border-bottom: 1px solid #e4e4e4;}
    .jobs-wrapper .job-item .job-info{flex:1;}
    .jobs-wrapper .job-item .job-info .title{line-height: 36px;font-size: 1.3rem;margin-bottom: 10px;}
    .jobs-wrapper .job-item .job-info .where{line-height: 36px;font-size: 1rem;color:#888;margin-bottom: 10px;}
    .jobs-wrapper .job-item .job-info .keywords-wrapper{display: flex;flex-wrap: wrap;justify-items: center;}
    .jobs-wrapper .job-item .job-info .keywords-wrapper span{font-size: 1rem;color: #888;line-height: 30px;text-align: center;}
    .jobs-wrapper .job-item .job-info .keywords {font-size: 0.9rem !important;color: #4b4a4b !important; background-color: #fff;border-radius: 25px;margin-left: 15px;}
    .jobs-wrapper .job-item .job-info .keywords:first-child {margin-left: 0;}
    .jobs-wrapper .job-item .send-resume-btn{width: 140px;height: 40px;background-color: #16508e;border-radius: 6px;color:#fff;line-height: 40px;text-align: center;font-size: 1.125rem;}

    @media screen and (min-width: 768px) {
        .jobs-wrapper{background: #F2F6FA;;}
        .jobs-wrapper .container{padding:80px 0;}
        .jobs-wrapper .job-item{display: flex;align-items: center;padding: 50px 10px;border-bottom: 1px solid #e4e4e4;}
        .jobs-wrapper .job-item .job-info{flex:1;}
        .jobs-wrapper .job-item .job-info .title{line-height: 36px;font-size: 32px;margin-bottom: 40px;}
        .jobs-wrapper .job-item .job-info .where{line-height: 36px;font-size: 18px;color:#888;   margin-bottom: 26px;}
        .jobs-wrapper .job-item .job-info .keywords-wrapper{height:40px;line-height: 40px;}
        .jobs-wrapper .job-item .job-info .keywords-wrapper span{font-size: 18px;color: #888;line-height:40px;text-align: center;}
        .jobs-wrapper .job-item .job-info .keywords {font-size: 17px !important;color: #4b4a4b !important; background-color: #fff;border-radius: 25px;margin-left: 30px;}
        .jobs-wrapper .job-item .send-resume-btn{width: 140px;height: 60px;background-color: #16508e;border-radius: 6px;color:#fff;line-height: 60px;text-align: center;font-size: 24px;}
    }



</style>

@section('content')
<div class="container-fixed">
    <div class="container-fixed child-nav">
        <div class="container text-center">
            <ul class="row">
                <li class="col-6 col-sm-3">
                    <a href="{{route('company.index', 7)}}"><img src="{{asset('images/gongsijieshao-unsel.png')}}" alt=""> <span>公司介绍</span></a>
                </li>
                <li class="col-6 col-sm-3"><a href="{{route('company.team')}}"><img src="{{asset('images/guanli-unsel.png')}}" alt=""><span>管理团队</span></a></li>
                <li class="col-6 col-sm-3 child-active">
                    <a href="{{route('company.join')}}"><img src="{{asset('images/jiaru-sel.png')}}" alt=""><span>加入我们</span></a>
                    <span class="triangle_border_up"></span>
                </li>
                <li class="col-6 col-sm-3">
                    <a href="{{route('company.contact')}}"><img src="{{asset('images/lianxi-unsel.png')}}" alt=""><span>联系我们</span></a>
                </li>
            </ul>
        </div>
    </div>
    <div class="container-fixed">
        <div class="container-fixed jobs-wrapper">
            <div class="container">
                @forelse ($jobs as $job)
                    <div class="row job-item">
                        <div class="job-info col-12 col-sm-10">
                            <div class="row">
                                <div class="title col-12 col-sm-12">{{ field_locale($job->name)}}</div>
                                <div class="where col-12 col-sm-12">工作地点: {{ field_locale($job->place->name)}}</div>
                                <div class="keywords-wrapper col-12 col-sm-12 mb-3">
                                    <span class="mb-2">关键词:</span>
                                    @php $keywords = explode(',',field_locale($job->keywords)) @endphp
                                    @foreach($keywords as $keyword)
                                        <span class="keywords mb-2 pr-3 pl-3">{{$keyword}}</span>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <button type="button" class="layui-btn send-resume-btn offset-1 col-10 col-sm-2" data-id="{{$job->id}}"
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