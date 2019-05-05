<style>
    body{
        padding-top: 0;
    }

    .banners-slider {
        height: 500px;
        overflow: hidden;
        margin-bottom: 30px;
    }

    .banners-slider .banner-item {
        width: 100%;
        height: 500px;
    }

    .banners-slider .banner-item img {
        height: 500px;
        width: 100%;
    }

    .banners-slider .slick-dots {
        position: absolute;
        bottom: 20px;
        display: block;
        width: 100%;
        padding: 0;
        list-style: none;
        text-align: center;
    }

    .banners-slider .slick-dots li {
        position: relative;
        display: inline-block;
        width: 60px;
        height: 40px;
        margin: 0 5px;
        padding: 0;
        cursor: pointer;
    }

    .banners-slider .slick-dots li button {
        font-size: 0;
        width: 60px;
        height: 6px;
        background: rgba(255, 255, 255, 1);
        opacity: 0.4;
        border-radius: 2px;
        border: transparent;
    }

    .banners-slider .slick-dots li.slick-active button {
        background: rgba(255, 255, 255, 1);
        opacity: unset;
    }
</style>
<div class="banners-slider">
    <div class="banner-item">
        <a href="#">
            <img
              alt=""
              src="https://iocaffcdn.phphub.org/uploads/images/201704/21/1/dDANSZZbWZ.jpg">
        </a>
    </div>
    @if(!empty($slides_list))
    @foreach($slides_list as $l)
    <div class="banner-item">
        <a href="{{$l['link']}}">
            <img
                    alt=""
                    src="{{storage_image_url($l['image'])}}">
        </a>
    </div>
    @endforeach
    @endif
</div>
@section('script-banner')
    <script>
        $(function(){
            $('.banners-slider').slick({
                dots: true,
                accessibility: false,
                autoplay: true,
                arrows: false
            });
        })
    </script>
@endsection
