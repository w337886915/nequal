@extends('backend::layouts.app')

@section('title', $title = '公司荣誉列表')

@section('breadcrumb')
    <li><a href="javascript:;">站点设置</a></li>
    <li><a href="javascript:;">公司荣誉</a></li>
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
                    <a href="{{route('administrator.company.honor.create')}}" class="btn btn-primary"><i class="icon icon-plus-sign"></i> 添加</a>
                </div>
            </div>

            @if($honors->count())
                <table class="table table-bordered">
                    <colgroup>
                        <col width="50">
                        <col width="60">
                        <col width="220">
                        <col>
                        <col width="320">
                    </colgroup>
                    <thead>
                    <tr>
                        <th class="text-center">#</th>
                        <th class="text-center">排序</th>
                        <th class="text-center">名称</th>
                        <th class="text-center">图片</th>
                        <th class="text-center">操作</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($honors as $index => $honor)
                        <tr>
                            <td class="text-center">{{ $honor->id }}</td>
                            <td class="text-center">{{ $honor->order}}</td>
                            <td class="text-center">{{ fieldCN($honor->name)}}</td>
                            <td class="text-center"><img src="{{ storage_image_url($honor->image) }}" style="max-width: 200px; height: 120px;" /></td>
                            <td class="text-center">
                                <a href="{{ route('administrator.company.honor.edit', $honor->id) }}" class="btn btn-xs btn-primary">编辑</a>
                                <a href="javascript:;" data-url="{{ route('administrator.company.honor.destroy', $honor->id) }}" class="btn btn-xs btn-danger form-delete">删除</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

                <div id="paginate-render">
                    {{$honors->links('pagination::backend')}}
                </div>
            @else
                <div class="alert alert-info alert-block">暂无数据</div>
            @endif
        </div>
    </div>
@endsection

@section('scripts')

@endsection