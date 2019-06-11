@extends('frontend::layouts.app')

@section('title', $title = '关于我们')
@section('description', config("system.common.basic.description"))
@section('keywords', config("system.common.basic.keywords"))

@php
    $active = '关于我们';
@endphp

@section('swipper')
    @include('frontend.customize.layouts.swipper', $slides)
@stop

@section('content')
    <div class="container-fixed">
       <div class="container-fixed child-nav">
            <div class="container text-center">
                <ul class="row">
                    <li class="col-6 col-sm-3">
                        <a href="{{route('company.index', 7)}}"><img src="{{asset('images/gongsijieshao-unsel.png')}}" alt=""> <span>公司介绍</span></a>
                    </li>
                    <li class="col-6 col-sm-3"><a href="{{route('company.team')}}"><img src="{{asset('images/guanli-unsel.png')}}" alt=""><span>管理团队</span></a></li>
                    <li class="col-6 col-sm-3"><a href="{{route('company.join')}}"><img src="{{asset('images/jiaru-unsel.png')}}" alt=""><span>加入我们</span></a></li>
                    <li class="col-6 col-sm-3 child-active">
                        <a href="{{route('company.contact')}}"><img src="{{asset('images/lianxi-sel.png')}}" alt=""><span>联系我们</span></a>
                        <span class="triangle_border_up"></span>
                    </li>
                </ul>
            </div>
        </div>
        <style>
            .contact-wrapper{margin-top: 80px;background: #f2f6fa;background: url("{{asset('images/ditu_bg.png')}}") no-repeat;background-size: 100% 100%;}
            .contact-wrapper .container{padding:10% 0;}
            .contact-wrapper .contact{margin-bottom: 78px;line-height: 36px;}
            .contact-wrapper .contact:last-child{margin-bottom:0;}
            .contact-wrapper .contact h5{font-size: 18px; color:#000;font-family: PingFangSC-Medium;font-weight:600;}
            .contact-wrapper .contact p{color:#888;font-size: 18px;font-family: AdobeHeitiStd-Regular;margin: 0}
        </style>
        <div class="container-fixed contact-wrapper">
            <div class="container pl-2 pr-2">
            @forelse ($contacts as $item)
                <div class="contact">
                    <h5>{{field_locale($item->name)}}</h5>
                    <p>
                        {{field_locale($item->address)}} ({{$item->zip_code}})
                    </p>
                    <p class="row">
                        <span class="col-12 col-sm-5 col-lg-3 p-0">电话: {{$item->tel}}</span>  <span class="col-12 col-sm-5 col-lg-3 p-0">E-mail: {{$item->email}}</span>
                    </p>
                </div>
            @empty
                <p>No posts found.</p>
            @endforelse
            </div>
        </div>

        <style>
            .contact-form-wrapper .guidance{font-size: 1.5rem;margin:40px 0 50px 0;}
            .contact-form-wrapper .form-header{display:flex;justify-content: center;}
            .contact-form-wrapper .form-header p{width:18.75rem;height:60px;line-height:60px;font-size: 1.5rem;color: #003c7e;font-family: PingFang-SC-Bold;background:url('{{asset('images/contact_header_bg.png')}}') no-repeat;background-size: 100% 100%;}

            .contact-form-wrapper .triangle-wrapper{display: flex;align-items: center;position: relative;justify-content: center}
            .contact-form-wrapper .triangle-wrapper .triangle_border_down{ display: block;width: 32px;height: 32px;transform: rotate(45deg);background: #f2f6fa;position: absolute;top: -120px;}

            #consultForm .form-control{height: 55px;background-color: #f8f8f8;border: solid 1px rgba(34, 34, 34, 0.1);outline: none;}
            #consultForm .form-group>div{position: relative;}
            #consultForm .form-group input:focus{outline: red !important;}
            #consultForm .form-group>div::after {display: block; position: absolute;top: 20px;right:5px;content:"*";font-size: 17px ;color: #ea644a;}

        </style>
        {{-- 联系我们表单 --}}
        <div class="container-fixed contact-form-wrapper" style="background: #fff;padding:100px 0;">
            <div class="triangle-wrapper">
                <span class="triangle_border_down"></span>
            </div>
            <div class="container">
                <div class="form-header text-center">
                   <p>联系我们</p>
                </div>
                <div class="guidance text-center">请留下您的正确信息,以便我们更好的了解您的需求和帮助您</div>
                <form id="consultForm" method="post" action="{{route('consult')}}" class="contact-form" style="margin: auto;">
                    {{csrf_field()}}
                    <div class="form-group row">
                        <div class="col-sm-12 col-md-6 required">
                            <input type="text" class="form-control" required name="name" autocomplete="off" placeholder="姓名">
                        </div>
                        <div class="col-sm-12 col-md-6 required">
                            <input type="text" class="form-control" required  name="phone" autocomplete="off" placeholder="电话">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12 col-md-6 required">
                            <input type="email" class="form-control" required name="email" autocomplete="off" placeholder="邮箱">
                        </div>
                        <div class="col-sm-12 col-md-6 required">
                            <input type="text" class="form-control" required name="company" autocomplete="off" placeholder="公司">
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-12 col-md-12 required">
                            <input type="text" class="form-control" required name="position"autocomplete="off" placeholder="职位">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-12 col-sm-12">
                            <textarea name="demand" id="" rows="30" class="form-control required" required autocomplete="off" style="height:250px;border: solid 1px rgba(34, 34, 34, 0.1);background-color: #f8f8f8;"
                            placeholder="请输入您的需求"></textarea>
                        </div>
                    </div>

                    <div class="form-group text-center" style="margin-top: 60px;">
                           {{-- <button type="submit" id="contact-form-submit" class="btn btn-primary" style="background: #16508e;width:140px;height:60px;font-size: 24px;border-radius: 6px;">提 交</button>--}}
                            <button type="submit" id="contact-form-submit" class="btn btn-primary" style="background: #16508e; width:8.75rem;height:3.75rem;font-size: 1.5rem;border-radius: 6px;">提 交</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        $(document).ready(function () {
            $('#consultForm').bind("submit", function(){
                var name = $('input[name=name]').val();
                var phone = $('input[name=phone]').val();
                var email = $('input[name=email]').val();
                var company = $('input[name=company]').val();
                var position = $('input[name=position]').val();
                var demand = $('textarea[name=demand]').val();
                if(name == ""){ return false; }
                if(phone == ""){ return false; }
                if(email == ""){ return false; }
                if(company == ""){ return false; }
                if(position == ""){ return false; }
                if(demand == ""){ return false; }

                var options = {
                    url: "{{route('consult')}}",
                    type: 'post',
                    dataType: 'json',
                    data: $("#consultForm").serialize(),
                    success: function (result) {
                        if(result.status){
                            $('input[name=name]').val('');
                            $('input[name=phone]').val('');
                            $('input[name=email]').val('');
                            $('input[name=company]').val('');
                            $('input[name=position]').val('');
                            $('textarea[name=demand]').val('');
                            return alert('提交成功');
                        }else {
                            return alert(result.message);
                        }
                    },
                    error:function (err) {
                        alert('提交失败:' + err.responseJSON.message);
                        return false;
                    }
                };
                $.ajax(options);
                return false;
            });

            $('#search').click(function(){
                $('#contact-form-submit').submit();
            });
        })
    </script>
@endsection