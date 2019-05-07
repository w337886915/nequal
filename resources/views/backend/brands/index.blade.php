@extends('backend::layouts.app')

@section('title', $title = '服务品牌列表')

@section('breadcrumb')
    <li><a href="javascript:;">内容管理</a></li>
    <li><a href="javascript:;">服务品牌</a></li>
    <li>{{$title}}</li>
@endsection

@section('content')

    <h2 class="header-dividing">{{$title}} <small></small></h2>
    <div class="row">
        <div class="col-md-12">

            <div class="table-tools" style="margin-bottom: 15px;">
                <div class="pull-right" style="width: 250px;">
                </div>
                <div class="tools-group">
                    <a href="{{ route('brands.create') }}" class="btn btn-primary"><i class="icon icon-plus-sign"></i> 添加</a>
                </div>
            </div>

            @if($brands->count())
                <table class="table table-bordered">
                    <colgroup>
                        <col width="50">
                        <col width="60">
                        <col width="220">
                        <col width="220">
                        <col>
                        <col width="100">
                        <col width="70">
                        <col width="120">
                    </colgroup>
                    <thead>
                    <tr>
                        <th class="text-center">#</th>
                        <th class="text-center">排序</th>
                        <th class="text-center">名称</th>
                        <th class="text-center">LOGO</th>
                        <th class="text-center">链接</th>
                        <th class="text-center">操作</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($brands as $index => $brand)
                        <tr>
                            <td class="text-center">{{ $brand->id }}</td>
                            <td class="text-center">{{ $brand->order}}</td>
                            <td class="text-center">{{ $brand->name}}</td>
                            <td class="text-center"><img src="{{ storage_image_url($brand->image) }}" style="max-width: 200px; height: 60px;" /></td>
                            <td>{{ $brand->url}}</td>
                            <td class="text-center">
                                <a href="{{ route('brands.edit', $brand->id) }}" class="btn btn-xs btn-primary">编辑</a>
                                <a href="javascript:;" data-url="{{ route('brands.destroy', $brand->id) }}" class="btn btn-xs btn-danger form-delete">删除</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

            <div id="paginate-render">
                {{$brands->links('pagination::backend')}}
            </div>
            @else
            <div class="alert alert-info alert-block">暂无数据</div>
            @endif
        </div>
    </div>
@endsection

@section('scripts')

@endsection