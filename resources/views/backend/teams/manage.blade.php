@extends('backend::layouts.app')

@section('title', $title = $teamConfig['name'].'管理')

@section('breadcrumb')
    <a href="">内容管理</a>
    <a href="">管理团队</a>
    <a href="">{{$title}}</a>
@endsection

@section('content')
    <h2 class="header-dividing">{{$title}} <small></small></h2>
    <div class="row">
        <div class="col-md-12">

            <div class="table-tools" style="margin-bottom: 15px;">
                <div class="pull-right" style="width: 250px;">
                </div>
                <div class="tools-group">
                    <a href="{{ route('teams.create', $group) }}" class="btn btn-primary"><i class="icon icon-plus-sign"></i> 添加</a>
                    <a href="{{ route('teams.index') }}" class="btn btn-default"><i class="icon icon-arrow-left"></i> 返回幻灯片</a>
                </div>
            </div>
            @if($teams->count())
                <table class="table table-bordered">
                    <colgroup>
                        <col width="50">
                        <col width="80">
                        <col width="100">
                        <col>
                        <col width="120">
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
                    @foreach($teams as $index => $team)
                        <tr>
                            <td class="text-center">{{ $team->id }}</td>
                            <td class="text-center">{{ $team->order}}</td>
                            <td>{{ fieldCN($team->name)}}</td>
                            <td><img class="layui-upload-img" src="{{ storage_image_url($team->image) }}" width="90" height="120"></td>

                            <td class="text-center">
                                <a href="{{ route('teams.edit', $team->id) }}" class="btn btn-xs btn-primary">编辑</a>
                                <a href="javascript:;" data-url="{{ route('teams.destroy', $team->id) }}" class="btn btn-xs btn-danger form-delete">删除</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @else
                <div class="alert alert-info alert-block">暂无数据</div>
            @endif
        </div>
    </div>
@endsection

@section('scripts')
    @include('backend::layouts._paginate',[ 'count' => $teams->total(), ])
@endsection