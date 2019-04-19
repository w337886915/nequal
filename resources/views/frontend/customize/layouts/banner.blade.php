<style>
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
        width: 20px;
        height: 20px;
        margin: 0 5px;
        padding: 0;
        cursor: pointer;
    }

    .banners-slider .slick-dots li button {
        font-size: 0;
        line-height: 0;
        display: block;
        width: 20px;
        height: 20px;
        padding: 5px;
        cursor: pointer;
        color: transparent;
        border: 0;
        outline: none;
        background: transparent;
    }

    .banners-slider .slick-dots li button::before {
        font-size: 0.40rem;
        content: "-";
        color: #B9B9B9;
    }

    .banners-slider .slick-dots li button::before {
        position: absolute;
        top: 0;
        left: 0;
        width: 20px;
        height: 5px;
        content: '';
        text-align: center;
        background-color: #999999;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
    }

    .banners-slider .slick-dots li.slick-active button::before {
        background-color: #3498db
    }

    .banners-slider .slick-dots.banners-arrow {
        bottom: 0.48rem
    }
</style>
<div class="banners-slider">
    <div class="banner-item">
        <a href="">
            <img
                    alt=""
                    src="https://www.qiniu.com/assets/banner/banner-qvm1rmb-index-3c79c38ee87a7b6a0ef8ff28b2d8da9a28e567bdf3cb9bea8ea761d601be7ce6.jpg">
        </a>
    </div>
    <div class="banner-item"><a href=""><img
                    alt=""
                    src="https://www.qiniu.com/assets/banner/banner-qvm1rmb-index-3c79c38ee87a7b6a0ef8ff28b2d8da9a28e567bdf3cb9bea8ea761d601be7ce6.jpg"></a></div>
    <div class="banner-item"><a href=""><img
                    alt=""
                    src="https://www.qiniu.com/assets/banner/banner-qvm1rmb-index-3c79c38ee87a7b6a0ef8ff28b2d8da9a28e567bdf3cb9bea8ea761d601be7ce6.jpg"></a></div>
    <div class="banner-item"><a href=""><img
                    alt=""
                    src="https://www.qiniu.com/assets/banner/banner-qvm1rmb-index-3c79c38ee87a7b6a0ef8ff28b2d8da9a28e567bdf3cb9bea8ea761d601be7ce6.jpg"></a></div>
</div>
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
