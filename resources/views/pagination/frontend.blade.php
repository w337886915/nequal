<style>
    .laypage-main, .laypage-main * {
        display: inline-block;
        *display: inline;
        *zoom: 1;
        vertical-align: top
    }

    .laypage-main {
        margin: 20px 0;
        border-right: none;
        border-bottom: none;
        font-size: 0
    }

    .laypage-main * {
        padding: 0 20px;
        line-height: 36px;
        font-size: 16px;
        font-family: MicrosoftYaHei;
    }

    .laypage-main .laypage-curr {
        background-color: #d8e3ef;
        color: #000;
        border-radius: 4px;
    }

    .laypage-main input{
        background: none;
        outline: none;
        border: 1px solid #ccc;
        width: 46px;
        line-height: 30px;
        padding: 0;
        height: 30px;
        margin-top: 3px;
    }
    .laypage-main input::-webkit-outer-spin-button,input::-webkit-inner-spin-button {
        -webkit-appearance: none;
    }
    .laypage-main input[type="number"]{
        -moz-appearance: textfield;
    }
    .laypage-main button{
        height: 30px;
        width: 32px;
        padding: 0;
        line-height: 30px;
        border: none;
        border-radius: 4px;
        margin-top: 3px;
    }
    .laypage-main .total-page, .go{
        color: #888;
    }


</style>

@if ($paginator->hasPages())
    <ul class="laypage-main">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <span class="laypage-prev">首页</span>
            <span class="laypage-prev">&laquo;</span>
        @else
            <a class="laypage-prev" href="{{$paginator->url(1)}}" rel="prev">首页</a>
            <a class="laypage-prev" href="{{ $paginator->previousPageUrl() }}" rel="prev">&laquo;</a>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <span class="laypage-curr">{{ $element }}</span>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <span class="laypage-curr">{{ $page }}</span>
                    @else
                        <a href="{{ $url }}">{{ $page }}</a>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <a class="laypage-next" href="{{ $paginator->nextPageUrl() }}" rel="next">&raquo;</a>
        @else
            <a class="laypage-next">&raquo;</a>
        @endif

        <span class="total-page">共{{$paginator->total()}}条 共{{$paginator->lastPage()}}页</span>
        <span class="go">到 <input type="number" name="pageNum" value=""> 页 <button class="gotoPage">GO</button></span>

    </ul>
@endif

@section('script')
<script>
    $(function(){
        var maxPage =  {{$paginator->lastPage()}};
        // 分页直接跳转
        $('.gotoPage').click(function () {
            var page = $('input[name=pageNum]').val();
            if(page > maxPage) page =maxPage ;
            if(page < 1) page = 1;
            var url = window.location.href.split("page=");
            window.location.href = url[0] + "?page=" + page;
        });
    })
</script>
@endsection
