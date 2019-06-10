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

            <div style="display: flex;justify-content: center;margin-top:80px;">
                <p class="text-center" style="background: #16508e;color: #fff;font-size: 20px; width:140px;height:60px;line-height: 60px;border-radius: 6px;">联系我们</p>
            </div>
        </div>
    </div>

@endsection

@section('scripts')
@endsection