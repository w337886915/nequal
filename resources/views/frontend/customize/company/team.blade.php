@extends('frontend::layouts.app')

@section('title', $title = '关于我们')
@php
    $active = '关于我们';
@endphp

@section('swipper')
    @include('frontend.customize.layouts.swipper', $slides)
@stop

<style>
    .third-nav li{display:inline-block;height: 80px;line-height: 80px;margin:0 31px;}
    .third-nav li a{display:block;line-height: 75px; font-size: 16px;}
    .third-nav li a:hover{text-decoration: none;}

</style>
@section('content')
    <div class="container-fixed">
        <div class="container-fixed child-nav">
            <div class="container">
                <ul>
                    <li> <a href="{{route('company.index', 7)}}"><img src="{{asset('images/gongsijieshao-unsel.png')}}" alt=""> <span>公司介绍</span></a></li>
                    <li class="child-active">
                        <a href="{{route('company.team')}}"><img src="{{asset('images/guanli-sel.png')}}" alt=""><span>管理团队</span></a>
                        <span class="triangle_border_up" style="background:#F2F6FA;"></span>
                    </li>
                    <li><a href="{{route('company.join')}}"><img src="{{asset('images/jiaru-unsel.png')}}" alt=""><span>加入我们</span></a></li>
                    <li><a href="{{route('company.contact')}}"><img src="{{asset('images/lianxi-unsel.png')}}" alt=""><span>联系我们</span></a></li>
                </ul>
            </div>
        </div>

        <div class="container-fixed">
           {{-- <ul class="container-fixed third-nav" style="text-align: center;">
                @foreach(collect(config('teams')) as $item)
                <li><a href="{{route('company.team')}}?id={{$item['id']}}" class="@if($item['id'] == $team_group_id) active @endif">{{field_locale($item['name'])}}</a></li>
                @endforeach
            </ul>--}}
            <style>
                .team-wrapper{background: #F2F6FA;}
                .team-wrapper .container{padding:80px 0;}
                .team-wrapper .team-item{display: flex;margin-bottom: 88px;}
                .team-wrapper .team-item img{height:322px;width:252px;border:1px solid #eee;}
                .team-wrapper .team-item .desc{flex:1;margin-left: 51px;font-size: 16px;color: #888;line-height: 34px;}
            </style>
            <div class="container-fixed team-wrapper">
                <div class="container">
                    @forelse ($teams as $team)
                        <div class="team-item">
                            <img src="{{storage_image_url($team->image)}}" alt="nEqual">
                            <div class="desc">
                                <div>{{field_locale($team->name)}}</div>
                                <div> {!! field_locale($team->description) !!} </div>
                            </div>
                        </div>
                    @empty
                        <div class="empty">No data found.</div>
                    @endforelse

                    {{-- 分页 --}}
                    <div class="text-right">
                        {{ $teams->links('pagination::frontend') }}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('scripts')
@endsection