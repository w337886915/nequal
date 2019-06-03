@extends('backend::layouts.app')

@section('title', $title = '简历列表')

@section('breadcrumb')
    <li><a href="javascript:;">站点设置</a></li>
    <li><a href="javascript:;">简历管理</a></li>
    <li>{{$title}}</li>
@endsection

@section('content')

    <h2 class="header-dividing">{{$title}} <small></small></h2>
    <div class="row">
        <div class="col-md-12">
            @if($resumes->count())
                <table class="table table-bordered">
                    <colgroup>
                        <col width="50">
                        <col width="300">
                        <col>
                        <col width="200">
                        <col width="120">
                    </colgroup>
                    <thead>
                    <tr>
                        <th class="text-center">#</th>
                        <th class="text-center">应聘职位</th>
                        <th class="text-center">简历下载地址</th>
                        <th class="text-center">创建时间</th>
                        <th class="text-center">操作</th>
                    </tr>
                    </thead>
                    <tbody>
                   @foreach($resumes as $index => $resume)
                        <tr>
                            <td class="text-center">{{ $resume->id }}</td>
                            <td class="text-center">{{ fieldCN($resume->job->name)}} </td>
                            <td><a href="{{ storage_url($resume->file->path) }}">{{ $resume->file->title}}</a></td>
                            <td class="text-center">{{ $resume->created_at}} </td>
                            <td class="text-center">
                                <a href="javascript:;" data-url="{{ route('resumes.destroy', $resume->id) }}" class="btn btn-xs btn-danger form-delete">删除</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

            <div id="paginate-render">
                {{$resumes->links('pagination::backend')}}
            </div>
            @else
            <div class="alert alert-info alert-block">暂无数据</div>
            @endif
        </div>
    </div>
@endsection
