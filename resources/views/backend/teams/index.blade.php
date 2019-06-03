@extends('backend::layouts.app')

@section('title', $title = '管理团队 ')

@section('breadcrumb')
    <li><a href="javascript:;">站点设置</a></li>
    <li><a href="javascript:;">管理团队</a></li>
    <li class="active">{{$title}}</li>
@endsection

@section('content')

    <h2 class="header-dividing">{{$title}} <small></small></h2>
    <div class="row">
        <div class="col-md-12">

            <div class="table-tools" style="margin-bottom: 15px;">
                <div class="pull-right" style="width: 250px;">
                </div>
                <div class="tools-group">
                </div>
            </div>
            @if($teams->count())
                <table class="table table-bordered">
                    <colgroup>
                        <col width="50">
                        <col width="200">
                        <col width="300">
                        <col>
                        <col width="120">
                    </colgroup>
                    <thead>
                    <tr>
                        <th class="text-center">#</th>
                        <th class="text-center">标识</th>
                        <th class="text-center">名称</th>
                        <th class="text-center">描述</th>
                        <th class="text-center">操作</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($teams as $index => $team)
                        <tr>
                            <td class="text-center">{{ $team['id'] }}</td>
                            <td>{{ $team['mark']}}</td>
                            <td>{{ $team['name']}}</td>
                            <td>{{ $team['description']}}</td>
                            <td class="text-center">
                                <a href="{{ route('teams.manage', $team['id']) }}" class="btn btn-xs btn-primary">管理</a>
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

@endsection