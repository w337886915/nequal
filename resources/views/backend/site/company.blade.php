@extends('backend::layouts.app')

@section('title', $title = '公司信息' )

@section('breadcrumb')
    <li><a href="javascript:;">站点设置</a></li>
    <li class="active">{{$title}}</li>
@endsection

@section('content')
    <h2 class="header-dividing">{{$title}} <small></small></h2>
    <div class="row">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-body">
                    <form id="form-validator" class="form-horizontal" method="POST" action="{{route('administrator.site.company')}}">
                        {{ csrf_field() }}
                        <input type="hidden" name="_method" value="POST">

                        <div class="form-group has-feedback  has-icon-right">
                            <label for="name" class="col-md-2 col-sm-2 control-label required">公司名称</label>
                            <div class="col-md-5 col-sm-10">
                                <input type="text" class="form-control" id="name" name="name" autocomplete="off" placeholder="" value="{{ get_value($site, 'name') }}"
                                       required
                                       data-fv-trigger="blur"
                                       minlength="1"
                                       maxlength="64"
                                ></div>
                        </div>
                        <div class="form-group has-feedback  has-icon-right">
                            <label for="name_en" class="col-md-2 col-sm-2 control-label required">公司名称(英文)</label>
                            <div class="col-md-5 col-sm-10">
                                <input type="text" class="form-control" id="name_en" name="name_en" autocomplete="off" placeholder="" value="{{ get_value($site, 'name_en') }}"
                                       required
                                       data-fv-trigger="blur"
                                       minlength="1"
                                       maxlength="64"
                                ></div>
                        </div>
                        {{--<div class="form-group">
                            <label for="description" class="col-md-2 col-sm-2 control-label">公司简介</label>
                            <div class="col-md-5 col-sm-10">
                            <textarea class="form-control" rows="6" id="description" name="description"
                                      data-fv-trigger="blur"
                                      minlength="1"
                            >{{ get_value($site, 'description') }}</textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="description_en" class="col-md-2 col-sm-2 control-label">公司简介(英文)</label>
                            <div class="col-md-5 col-sm-10">
                            <textarea class="form-control" rows="6" id="description_en" name="description_en"
                                      data-fv-trigger="blur"
                                      minlength="1"
                            >{{ get_value($site, 'description_en') }}</textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="content" class="col-md-2 col-sm-2 control-label">公司介绍</label>
                            <div class="col-md-8 col-sm-10">
                            <textarea class="form-control editor" rows="6" id="content" name="content"
                                      data-fv-trigger="blur"
                                      minlength="1"
                            >{{ get_value($site, 'content') }}</textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="content_en" class="col-md-2 col-sm-2 control-label">公司介绍(英文)</label>
                            <div class="col-md-8 col-sm-10">
                            <textarea class="form-control editor" rows="6" id="content_en" name="content_en"
                                      data-fv-trigger="blur"
                                      minlength="1"
                            >{{ get_value($site, 'content_en') }}</textarea>
                            </div>
                        </div>--}}
                        <div class="form-group">
                            <div class="col-md-offset-2 col-md-5 col-sm-10">
                                <button type="submit" class="btn btn-primary">提交</button>
                                <button type="reset" class="btn btn-default">重置</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    {{--==========================--}}

    <div class="row">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-body">
                    <div class="tools-group">
                        <a href="#"  class="btn btn-primary"><i class="icon icon-plus-sign"></i> 添加</a>
                    </div>

                    @if(1)
                        <form name="form-article-list" id="form-article-list" class="" method="POST" action="{{route('articles.order')}}">
                            <input type="hidden" name="_method" value="PUT">
                            {{ csrf_field() }}
                            <table class="table table-bordered">
                                <colgroup>
                                    <col width="30">
                                    <col width="200">
                                    <col>
                                    <col width="180">
                                    <col width="180">
                                    <col width="200">
                                </colgroup>
                                <thead>
                                <tr>
                                    <th class="text-center"><input type="checkbox" id="form-all-checked" value="0" ></th>
                                    <th class="text-center">#</th>
                                    <th class="text-center">副标题</th>
                                    <th class="text-center">内容</th>
                                    <th class="text-center">图片</th>
                                    <th class="text-center">图片位置</th>
                                    <th class="text-center">操作</th>
                                </tr>
                                </thead>
                                <tbody>
                                {{--  @foreach($articles as $index => $article)--}}
                                <tr>
                                    <td class="text-center">1</td>
                                    <td>第三方客户端尽快发货{{-- fieldCN($article->title) --}}</td>
                                    <td class="text-center">发货速度快发贺卡收到回复</td>
                                    {{--<td class="text-center">@switch($article->status)
                                            @case(0)<span class="label label-badge">隐藏</span>@break
                                            @case(1)<span class="label label-badge label-success">正常</span>@break
                                            @case(2)<span class="label label-badge label-danger">封禁</span>@break
                                        @endswitch</td>--}}

                                    <td class="text-center">
                                        <a href="#" class="btn btn-xs btn-primary">编辑</a>
                                        <a href="javascript:;" data-url="" class="btn btn-xs btn-danger form-delete">删除</a>
                                    </td>
                                </tr>
                                {{--   @endforeach--}}
                                </tbody>
                            </table>
                        </form>

                        {{-- <div id="paginate-render">
                             {{$articles->links('pagination::backend')}}
                         </div>--}}
                    @else
                        <div class="alert alert-info alert-block">暂无数据</div>
                    @endif

                </div>
            </div>
        </div>
    </div>


@endsection


@section('styles')
    @include('backend::common._editor_styles')
@stop

@section('scripts')
    @include('backend::common._editor_scripts',['folder'=>'company'])
@stop