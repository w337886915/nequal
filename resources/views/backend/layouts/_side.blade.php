@php
    $activeNavId = app('active')->getController()::$activeNavId;
@endphp

<aside class="main-sidebar">
    <section class="sidebar">
        <ul class="sidebar-menu" data-widget="tree">
            <li class="@if($activeNavId == 'dashboard') active @endif">
                <a href="{{route('administrator.dashboard')}}">
                    <i class="icon icon-dashboard"></i>
                    <span>仪表盘</span>
                    <span class="pull-right-container"></span>
                </a>
            </li>

            @foreach(config('administrator.menu') as $key1 => $menu)
                @if(call_user_func($menu['permission']))
                <li class="treeview @if($activeNavId == $menu['id']) active @endif">
                    <a href="@if(!empty($menu['link'])) {{$menu['link']}} @elseif(!empty($menu['route'])) {{route($menu['route'], $menu['params'])}}@if(!empty($menu['query']))?{{implode('&',$menu['query'])}}@endif @else javascript:; @endif">
                        <i class="icon {{ empty($menu['icon']) ? 'icon-circle-blank' : $menu['icon'] }}"></i>
                        <span>{{ $menu['text'] }}</span>
                        <span class="pull-right-container">
                            <i class="icon icon-angle-left"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        @foreach($menu['children'] as $key2 => $item)
                            @if(call_user_func($item['permission']))
                                <li id="nav_{{$key1}}_{{$key2}}" class="@if($activeNavId == $item['id']) active @endif">
                                    <a href="@if(!empty($item['link'])){{$item['link']}}@elseif(!empty($item['route'])){{route($item['route'], $item['params'])}}@if(!empty($item['query']))?{{implode('&',$item['query'])}}@endif @else javascript:;@endif">
                                        <i class="icon {{ empty($item['icon']) ? 'icon-circle-blank' : $item['icon'] }}"></i> {{ $item['text'] }}
                                    </a>
                                </li>
                            @endif
                        @endforeach
                    </ul>
                </li>
                @endif
            @endforeach
        </ul>
    </section>
</aside>
