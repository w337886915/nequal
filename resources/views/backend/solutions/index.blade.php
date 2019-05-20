@extends('backend::layouts.app')

@section('title', $title = '解决方案列表')

@section('breadcrumb')
    <li><a href="javascript:;">内容管理</a></li>
    <li><a href="javascript:;">解决方案</a></li>
    <li>{{$title}}</li>
@endsection

@section('content')
    <h2 class="header-dividing">{{$title}} <small></small></h2>
    <div class="row">
        <div class="col-md-12">
            <div class="table-tools" style="margin-bottom: 15px;">
                <div class="tools-group">
                    <a href="{{ route('solutions.create') }}"  class="btn btn-primary"><i class="icon icon-plus-sign"></i> 添加</a>
                    <button type="submit" class="btn btn-info" form="form-solutions-list"><i class="icon icon-sort-by-order-alt"></i> 排序</button>
                </div>
            </div>

            @if($solutions->count())

                <form name="form-solutions-list" id="form-solutions-list" class="" method="POST" action="{{route('solutions.order')}}">
                    <input type="hidden" name="_method" value="PUT">
                    {{ csrf_field() }}
                    <table class="table table-bordered">
                        <colgroup>
                            <col width="30">
                            <col width="80">
                            <col>
                            <col width="150">
                            <col width="100">
                            <col width="100">
                            <col width="220">
                        </colgroup>
                        <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th class="text-center">排序</th>
                            <th class="text-center">标题</th>
                            <th class="text-center">添加时间</th>
                            <th class="text-center">状态</th>
                            <th class="text-center">操作</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($solutions as $index => $solution)
                            <tr>
                                <td class="text-center">{{ $solution->id }}</td>
                                <td class="text-center">
                                    <input type="hidden" name="id[]" value="{{$solution->id}}">
                                    <input type="tel" name="order[]" class="form-control text-center" value="{{ $solution->order  }}">
                                </td>
                                <td>{{ fieldCN($solution->name)  }}</td>
                                <td class="text-center">{{ $solution->created_at}}</td>
                                <td class="text-center">@switch($solution->status)
                                        @case(0)<span class="label label-badge">隐藏</span>@break
                                        @case(1)<span class="label label-badge label-success">正常</span>@break
                                    @endswitch</td>
                                <td class="text-center">
                                    <a href="{{ route('solutions.edit', $solution->id) }}" class="btn btn-xs btn-primary">编辑</a>
                                    <a href="javascript:;" data-url="{{ route('solutions.destroy', $solution->id) }}" class="btn btn-xs btn-danger form-delete">删除</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </form>

                <div id="paginate-render">
                    {{$solutions->links('pagination::backend')}}
                </div>
            @else
                <div class="alert alert-info alert-block">暂无数据</div>
            @endif
        </div>
    </div>
@endsection

@section('scripts')

@endsection