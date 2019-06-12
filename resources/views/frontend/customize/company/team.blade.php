@extends('frontend::layouts.app')

@section('title', $title = '关于我们')
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
                    <li class="col-6 col-sm-3"> <a href="{{route('company.index', 7)}}"><img src="{{asset('images/gongsijieshao-unsel.png')}}" alt=""> <span>公司介绍</span></a></li>
                    <li class="col-6 col-sm-3 child-active">
                        <a href="{{route('company.team')}}"><img src="{{asset('images/guanli-sel.png')}}" alt=""><span>管理团队</span></a>
                        <span class="triangle_border_up"></span>
                    </li>
                    <li class="col-6 col-sm-3"><a href="{{route('company.join')}}"><img src="{{asset('images/jiaru-unsel.png')}}" alt=""><span>加入我们</span></a></li>
                    <li class="col-6 col-sm-3"><a href="{{route('company.contact')}}"><img src="{{asset('images/lianxi-unsel.png')}}" alt=""><span>联系我们</span></a></li>
                </ul>
            </div>
        </div>

        <div class="container-fixed">
            <style>

                .team-wrapper{background: #F2F6FA;}
                .team-wrapper .container{padding:80px 0;}
                .team-wrapper .team-item img{height:322px;width:252px;border:1px solid #eee;}
                .team-wrapper .team-item .desc{padding: 10px;font-size: 16px;color: #888;line-height: 34px;}

                @media screen and (min-width: 576px) {
                    .team-wrapper .container{padding:80px 0;}
                    .team-wrapper .team-item{display: flex;margin-bottom: 88px;}
                    .team-wrapper .team-item img{height:322px;width:252px;border:1px solid #eee;}
                    .team-wrapper .team-item .desc{flex:1;margin-left: 51px;font-size: 16px;color: #888;line-height: 34px;}
                }
            </style>

            <div class="container-fixed team-wrapper">
                <div class="container">
                    @forelse ($teams as $team)
                        <div class="team-item row">
                            <img class="col-12 col-sm-3" src="{{storage_image_url($team->image)}}" alt="nEqual">
                            <div class="desc col-12 col-sm-9 pl-4 pr-4">
                                <div>{{field_locale($team->name)}}</div>
                                <div>{!! field_locale($team->description) !!} </div>
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