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
            <div class="container">
                <ul>
                    <li>
                        <a href="{{route('company.index', 7)}}"><img src="{{asset('images/gongsijieshao-unsel.png')}}" alt=""> <span>公司介绍</span></a>
                    </li>
                    <li><a href="{{route('company.team')}}"><img src="{{asset('images/guanli-unsel.png')}}" alt=""><span>管理团队</span></a></li>
                    <li><a href="{{route('company.join')}}"><img src="{{asset('images/jiaru-unsel.png')}}" alt=""><span>加入我们</span></a></li>
                    <li class="child-active">
                        <a href="{{route('company.contact')}}"><img src="{{asset('images/lianxi-sel.png')}}" alt=""><span>联系我们</span></a>
                        <span class="triangle_border_up"></span>
                    </li>
                </ul>
            </div>
        </div>
        <style>
            .contact-wrapper{padding: 80px 0;}
            .contact-wrapper .contact:nth-child(2n+1){background: #f2f6fa;}
            .contact-wrapper .contact .container{padding: 50px 15px;line-height: 36px;}
            .contact-wrapper .contact .container h5{font-size: 18px;}
            .contact-wrapper .contact .container p{color:#888;}
        </style>
        <div class="container-fixed contact-wrapper">
            @forelse ($contacts as $item)
                <div class="container-fixed contact">
                    <div class="container" >
                        <h5>{{field_locale($item->name)}}</h5>
                        <p>{{field_locale($item->address)}}</p>
                        <p><span>电话: {{$item->tel}}</span> <span style="padding-left: 100px;">E-mail: {{$item->email}}</span></p>
                    </div>
                </div>
            @empty
                <p>No posts found.</p>
            @endforelse

        </div>

        <style>
           .contact-form-wrapper  .contact-form input:before{font-size: 17px; color: #ea644a;content:'*' !important;  }
           .contact-form-wrapper  .contact-form .mandatory{ font-size: 17px; color: #ea644a;  }
           .contact-form-wrapper .contact-form .form-group .form-control:focus{
               outline: none !important;
           }
           .contact-form-wrapper .contact-form .form-control{width:100%;height: 55px;background-color: #f8f8f8;border: solid 1px rgba(34, 34, 34, 0.1);outline: none;}

        </style>

        {{-- 联系我们表单 --}}
        <div class="container-fixed contact-form-wrapper" style="background: #fff;padding:100px 0;">
            <div class="container">
                <div class="form-header text-center" style="display:flex;justify-content: center; ">
                   <p style="width:300px;height:60px;line-height:60px;font-size: 24px;color: #003c7e;font-family: PingFang-SC-Bold;background:url('{{asset('images/contact_header_bg.png')}}') no-repeat;">联系我们</p>
                </div>
                <div style="font-size: 24px;margin:40px 0 50px 0;" class="text-center">请留下您的正确信息,以便我们更好的了解您的需求和帮助您</div>

                <form id="consultForm" method="post" action="{{route('consult')}}" class="contact-form" style="margin: auto;">
                    {{csrf_field()}}
                    <div class="form-group row">
                        <div class="col-sm-12 col-md-6">
                            <input type="text" class="form-control required" required name="name" autocomplete="off" placeholder="姓名" style="outline: none;">
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <input type="text" class="form-control required" required  name="phone" autocomplete="off" placeholder="电话">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12 col-md-6">
                            <input type="email" class="form-control required" required name="email" autocomplete="off" placeholder="邮箱">
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <input type="text" class="form-control required" required name="company" autocomplete="off" placeholder="公司">
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-12 col-md-12">
                            <input type="text" class="form-control required" required name="position"autocomplete="off" placeholder="职位">
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-12 col-sm-12">
                            <textarea name="demand" id="" rows="30" class="form-control required" required autocomplete="off" style="height:250px;border: solid 1px rgba(34, 34, 34, 0.1);background-color: #f8f8f8;" required
                            placeholder="请输入您的需求"></textarea>
                        </div>
            </div>

                    <div class="form-group text-center" style="margin-top: 92px;">
                            <button type="button" id="contact-form-submit" class="btn btn-primary" style="background: #16508e;width:140px;height:60px;font-size: 24px;border-radius: 6px;">提 交</button>
                    </div>

                </form>
            </div>
        </div>
    </div>

@endsection

@section('script')
    <script>
        $(document).ready(function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $('#contact-form-submit').click(function () {
                var name = $('input[name=name]').val();
                var phone = $('input[name=phone]').val();
                var email = $('input[name=email]').val();
                var company = $('input[name=company]').val();
                var position = $('input[name=position]').val();
                var demand = $('textarea[name=demand]').val();
                $.ajax({
                    type: "POST",//方法类型
                    url: "{{route('consult')}}",
                    data: {
                        name: name,
                        phone: phone,
                        email: email,
                        company: company,
                        position: position,
                        demand: demand
                    },
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
                    error: function () {
                        alert("异常！");
                    }
                });
            });
        })
    </script>
@endsection