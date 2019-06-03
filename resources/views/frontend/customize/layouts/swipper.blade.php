<style>
    .height800{
        height: 800px !important;
    }
    .height560{
        height: 560px !important;
    }
    .banner-wrapper{
        position: relative;
    }
    .banner-wrapper .swiper-pagination{
        position: absolute;
        bottom: 90px;
    }
    .banner-wrapper .swiper-pagination .swiper-pagination-bullet{
        width: 70px !important;
        height: 6px !important;
        display: inline-block;
        background: #fff;
        opacity: 0.4;
        border-radius: 3px;
    }
    .banner-wrapper .swiper-pagination .swiper-pagination-bullet-active{
        background: #fff !important;
        opacity: 1;
    }

</style>

@if(!empty($slides))
    <div class="container-fixed">
        <div class="swiper-container banner-wrapper @if($active=='index') height800 @else height560 @endif " id="banner">
            <div class="swiper-wrapper">
                @foreach($slides as $item)
                    <div class="swiper-slide" style="height:@if($active=='index') height800 @else height560 @endif px;width:100%;background-image: url('{{storage_image_url($item->image)}}');background-size: 100% 100%;display: flex;align-items: center;">
                        {!! $item->content !!}
                    </div>
                @endforeach
            </div>
             @if(count($slides)>1)
                <!-- 如果需要分页器 -->
                <div class="swiper-pagination"></div>
            @endif
        </div>
    </div>
@endif

@section('script-swiper')
    <script>
        $(document).ready(function () {
            var mySwiper = new Swiper('#banner', {
                // autoplay: true,
                // delay: 30000,
                direction: 'horizontal', // 垂直切换选项
                // 如果需要分页器
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
            })
        });
    </script>
@endsection