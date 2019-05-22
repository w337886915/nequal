@extends('frontend.customize.layouts.app')
@section('swipper')
    @php

    @endphp
    <div class="container-fixed">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><img style="background-color: red" height="715px" width="1920px" src="http://image.whgjh.top/banner1.gif" alt=""></div>
                <div class="swiper-slide" style="background: #044563;">Slide 2</div>
                <div class="swiper-slide" style="background: brown;">Slide 3</div>
            </div>
            <!-- 如果需要分页器 -->
            <div class="swiper-pagination"></div>
        </div>

    </div>
@endsection
@section('script')

@endsection
