@extends('backend::layouts.app')

@section('title', $title = '联系方式列表')

@section('breadcrumb')
    <li><a href="javascript:;">站点设置</a></li>
    <li><a href="javascript:;">联系方式</a></li>
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
                    <a href="{{ route('contacts.create') }}" class="btn btn-primary"><i class="icon icon-plus-sign"></i> 添加</a>
                </div>
            </div>

            @if($contacts->count())
                <table class="table table-bordered">
                    <colgroup>
                        <col width="50">
                        <col width="220">
                        <col width="220">
                        <col width="220">
                        <col width="220">
                        <col>
                        <col width="150">
                    </colgroup>
                    <thead>
                    <tr>
                        <th class="text-center">#</th>
                        <th class="text-center">名称</th>
                        <th class="text-center">电话</th>
                        <th class="text-center">邮箱</th>
                        <th class="text-center">邮编</th>
                        <th class="text-center">地址</th>
                        <th class="text-center">操作</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($contacts as $index => $item)
                        <tr>
                            <td class="text-center">{{ $item->id }}</td>
                            <td class="text-center">{{ fieldCN($item->name)}}</td>
                            <td class="text-center">{{ fieldCN($item->tel)}}</td>
                            <td class="text-center">{{ fieldCN($item->email)}}</td>
                            <td class="text-center">{{ fieldCN($item->zip_code)}}</td>
                            <td class="text-center">{{ fieldCN($item->address)}}</td>
                            <td class="text-center">
                                <a href="{{ route('contacts.edit', $item->id) }}" class="btn btn-xs btn-primary">编辑</a>
                         {{--       <a href="javascript:;" data-url="{{ route('contacts.destroy', $item->id) }}" class="btn btn-xs btn-danger form-delete">删除</a>--}}
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

            <div id="paginate-render">
                {{$contacts->links('pagination::backend')}}
            </div>
            @else
            <div class="alert alert-info alert-block">暂无数据</div>
            @endif
        </div>
    </div>
@endsection

@section('scripts')

@endsection