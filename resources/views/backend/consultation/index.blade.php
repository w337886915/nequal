@extends('backend::layouts.app')

@section('title', '咨询列表')

@section('breadcrumb')
    <li><a href="javascript:;">内容管理</a></li>
    <li>咨询列表</li>
@endsection

@section('content')

    <h2 class="header-dividing">咨询列表 <small></small></h2>
    <div class="row">
        <div class="col-md-12">

            <div class="table-tools" style="margin-bottom: 15px;">
                <div class="pull-right" style="width: 250px;"></div>
                <div class="tools-group"></div>
            </div>

            @if($forms->count())
                <form name="form-consult-list" id="form-consult-list" class="" method="POST" action="{{route('consultations.update')}}">
                    <input type="hidden" name="_method" value="PUT">
                    <input type="hidden" name="id" value="">
                    {{ csrf_field() }}
                <table class="table table-bordered">
                    <colgroup>
                        <col width="30">
                        <col width="120">
                        <col width="120">
                        <col width="120">
                        <col width="120">
                        <col width="120">
                        <col>
                        <col width="180">
                        <col width="80">
                        <col width="200">
                    </colgroup>
                    <thead>
                    <tr>
                        <th class="text-center">#</th>
                        <th class="text-center">咨询人</th>
                        <th class="text-center">咨询人电话</th>
                        <th class="text-center">咨询人邮箱</th>
                        <th class="text-center">公司</th>
                        <th class="text-center">职位</th>
                        <th class="text-center">内容</th>
                        <th class="text-center">咨询时间</th>
                        <th class="text-center">审查核状</th>
                        <th class="text-center">操作</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($forms as $index => $value)
                        <tr>
                            <td class="text-center">{{ $value->id }}</td>
                            <td class="text-center">{{ $value->name }}</td>
                            <td class="text-center">{{ $value->phone }}</td>
                            <td class="text-center">{{ $value->email }}</td>
                            <td class="text-center">{{ $value->company}}</td>
                            <td class="text-center">{{ $value->position}}</td>
                            <td>{{ $value->demand}}</td>
                            <td class="text-center">{{ $value->created_at}}</td>
                            <td class="text-center">{{ $value->isread_name}}</td>
                            <td class="text-center">
                                @if((int)$value->is_read < 1)
                                    <a href="javascript:;" data-url="{{route('consultations.update')}}" data-id="{{$value->id}}" class="btn btn-xs btn-primary form-read">设为已查看</a>
                                @endif
                                <a href="javascript:;" data-url="{{ route('consultations.destroy', $value->id) }}" class="btn btn-xs btn-danger form-delete">删除</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                </form>

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
    <script>
        $("a.form-read").click(function () {
            var tUrl = $(this).attr('data-url');
            var id = $(this).attr('data-id');
            $('input[name=id]').val(id);
            bootbox.confirm({
                size: "small",
                title: "系统提示",
                message: "确认已读吗？",
                callback: function (result) {
                    if (result === true) {
                        $("form#form-consult-list").attr("action", tUrl).submit();
                    }
                }
            });

            return false;
        });
    </script>

@endsection
