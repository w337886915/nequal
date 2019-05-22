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
@section('script-swiper')
    <script>
        window.onload = function(){
            // var mySwiper = new Swiper ('.swiper-container')
            var mySwiper = new Swiper('.swiper-container',{
                autoplay : 5000,//可选选项，自动滑动
                loop : true,//可选选项，开启循环
            })
        }
    </script>
@endsection