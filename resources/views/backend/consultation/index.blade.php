@extends('backend::layouts.app')

@section('title', '咨询申请列表')

@section('breadcrumb')
    <li><a href="javascript:;">内容管理</a></li>
    <li>咨询申请列表</li>
@endsection

@section('content')

    <h2 class="header-dividing">咨询申请列表 <small></small></h2>
    <div class="row">
        <div class="col-md-12">

            <div class="table-tools" style="margin-bottom: 15px;">
                <div class="pull-right" style="width: 250px;">
                </div>
                <div class="tools-group">

                </div>
            </div>

            @if($forms->count())
                <table class="table table-bordered">
                    <thead>
                    <tr>

                        <th class="text-center">#</th>
                        <th class="text-center">内容</th>
                        <th class="text-center">公司</th>
                        <th class="text-center">咨询人</th>
                        <th class="text-center">咨询人电话</th>
                        <th class="text-center">咨询人位置</th>
                        <th class="text-center">咨询类目</th>
                        <th class="text-center">客服电话</th>
                        <th class="text-center">咨询时间</th>
                        <th class="text-center">审查核状</th>
                        <th class="text-center">操作</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($forms as $index => $value)
                        <tr>
                            <td class="text-center">{{ $value->id }}</td>
                            <td class="text-center">{{ $value->content }}</td>
                            <td class="text-center">{{ $value->company }}</td>
                            <td class="text-center">{{ $value->name}}</td>
                            <td class="text-center">{{ $value->phone}}</td>
                            <td class="text-center">{{ $value->province}}</td>
                            <td class="text-center">{{ $value->category}}</td>
                            <td class="text-center">{{ $value->salesman_phone}}</td>
                            <td class="text-center">{{ $value->created_at}}</td>
                            <td class="text-center">{{ $value->isread_name}}</td>
                            <td class="text-center">
                                <button  class="btn btn-xs btn-primary " data-id="">设为已查看</button>
                                <a href="javascript:;" data-url="" class="btn btn-xs btn-danger form-delete">删除</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

            <div id="paginate-render">
                {{$forms->links('pagination::backend')}}
            </div>
            @else
            <div class="alert alert-info alert-block">暂无数据</div>
            @endif
        </div>
    </div>
@endsection

@section('scripts')

@endsection
