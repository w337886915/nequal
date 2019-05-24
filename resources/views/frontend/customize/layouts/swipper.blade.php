@if($slides)
    <div>
        <div class="swiper-container" style="height:560px;width: 100%;">
            <div class="swiper-wrapper">
                @foreach($slides as $item)
                    {{--  <a target="{{$item->target}}" href="{{$item->link}}">--}}
                    <div class="swiper-slide" style='height:100%;width:100%;background-image: url("{{storage_image_url($item->image)}}");background-size: cover;'>
                        {!! $item->content !!}
                    </div>
                    {{--   </a>--}}
                @endforeach
            </div>
            <!-- 如果需要分页器 -->
            <div class="swiper-pagination"></div>
           {{-- <!-- 如果需要导航按钮 -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>--}}
        </div>
    </div>
@endif

@section('script-swiper')
    <script>
        $(document).ready(function () {
            var mySwiper = new Swiper('.swiper-container', {
                autoplay: true,
                direction: 'horizontal', // 垂直切换选项
                loop: true, // 循环模式选项
                speed: 500,
                clickable :true,

                // 如果需要分页器
                pagination: {
                    el: '.swiper-pagination',
                },

                // 如果需要前进后退按钮
                // navigation: {
                //     nextEl: '.swiper-button-next',
                //     prevEl: '.swiper-button-prev',
                // },


            });
        });
    </script>
@endsection