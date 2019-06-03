@extends('backend::layouts.app')

@section('title', $title = '职位需求列表')

@section('breadcrumb')
    <li><a href="javascript:;">站点设置</a></li>
    <li><a href="javascript:;">发布职位</a></li>
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
                    <a href="{{ route('joins.create') }}" class="btn btn-primary"><i class="icon icon-plus-sign"></i> 添加</a>
                    <button type="submit" class="btn btn-info" form="form-article-list"><i class="icon icon-sort-by-order-alt"></i> 排序</button>
                </div>
            </div>

          @if($joins->count())
                <form name="form-article-list" id="form-article-list" class="" method="POST" action="{{route('joins.order')}}">
                    <input type="hidden" name="_method" value="PUT">
                    {{ csrf_field() }}
                <table class="table table-bordered">
                    <colgroup>
                        <col width="50">
                        <col width="80">
                        <col width="250">
                        <col>
                        <col width="220">
                        <col width="220">
                        <col width="150">
                    </colgroup>
                    <thead>
                    <tr>
                        <th class="text-center">#</th>
                        <th class="text-center">排序</th>
                        <th class="text-center">职位名称</th>
                        <th class="text-center">关键词</th>
                        <th class="text-center">工作地点</th>
                        <th class="text-center">操作</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($joins as $index => $item)
                        <tr>
                            <td class="text-center">
                               {{$item->id}}
                                <input type="hidden" name="id[]" value="{{$item->id}}">
                            </td>
                            <td class="text-center">
                                <input type="number" name="order[]" class="form-control text-center" value="{{ $item->order  }}">
                            </td>
                            <td class="text-center">{{ fieldCN($item->name)}}</td>
                            <td class="text-center">{{ fieldCN($item->keywords)}}</td>
                            <td class="text-center">{{ fieldCN($item->place->name)}}</td>
                            <td class="text-center">
                                <a href="{{ route('joins.edit', $item->id) }}" class="btn btn-xs btn-primary">编辑</a>
                                <a href="javascript:;" data-url="{{ route('joins.destroy', $item->id) }}" class="btn btn-xs btn-danger form-delete">删除</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                </form>

            <div id="paginate-render">
                {{$joins->links('pagination::backend')}}
            </div>
            @else
            <div class="alert alert-info alert-block">暂无数据</div>
            @endif
        </div>
    </div>
@endsection

@section('scripts')

@endsection