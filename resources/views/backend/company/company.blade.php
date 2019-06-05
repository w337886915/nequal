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
                                >
                            </div>
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
                        <div class="form-group has-feedback  has-icon-right">
                            <label for="vision" class="col-md-2 col-sm-2 control-label required">公司愿景</label>
                            <div class="col-md-5 col-sm-10">
                                <input type="text" class="form-control" id="vision" name="vision" autocomplete="off" placeholder="" value="{{ get_value($site, 'vision') }}"
                                       required
                                       data-fv-trigger="blur"
                                       minlength="1"
                                       maxlength="64"
                                >
                            </div>
                        </div>
                        <div class="form-group has-feedback  has-icon-right">
                            <label for="vision_en" class="col-md-2 col-sm-2 control-label required">公司愿景(英文)</label>
                            <div class="col-md-5 col-sm-10">
                                <input type="text" class="form-control" id="vision_en" name="vision_en" autocomplete="off" placeholder="" value="{{ get_value($site, 'vision_en') }}"
                                       required
                                       data-fv-trigger="blur"
                                       minlength="1"
                                       maxlength="64"
                                ></div>
                        </div>

                        <div class="form-group has-feedback  has-icon-right">
                            <label for="vision_desc" class="col-md-2 col-sm-2 control-label required">公司愿景描述</label>
                            <div class="col-md-5 col-sm-10">
                                <textarea name="visionDesc" id="vision_desc" class="form-control"  required required rows="8">{{ get_value($site, 'visionDesc') }}</textarea>
                            </div>
                        </div>
                        <div class="form-group has-feedback  has-icon-right">
                            <label for="vision_desc_en" class="col-md-2 col-sm-2 control-label required">公司愿景描述(英文)</label>
                            <div class="col-md-5 col-sm-10">
                                <textarea name="visionDesc_en" id="vision_desc_en" required class="form-control" rows="8">{{  get_value($site, 'visionDesc_en') }}</textarea>
                            </div>
                        </div>
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

    <div class="row">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-body">

                    <div class="table-tools" style="margin-bottom: 15px;">
                        <div class="pull-right"> </div>
                        <div class="tools-group">
                            <span style="font-size: 18px;font-weight: 600;padding-right: 30px;">关于我们图文列表</span>
                            <a href="{{route('administrator.company.about.create')}}" class="btn btn-primary"><i class="icon icon-plus-sign"></i> 添加</a>
                        </div>
                    </div>

                    @if($abouts->count())
                        <form name="form-article-list" id="form-article-list" class="" method="POST" action="{{route('articles.order')}}">
                            <input type="hidden" name="_method" value="PUT">
                            {{ csrf_field() }}
                            <table class="table table-bordered">
                                <colgroup>
                                    <col width="30">
                                    <col>
                                    <col width="180">
                                    <col width="180">
                                    <col width="200">
                                </colgroup>
                                <thead>
                                <tr>
                                    <th class="text-center">#</th>
                                    <th class="text-center">副标题</th>
                                    <th class="text-center">操作</th>
                                </tr>
                                </thead>
                                <tbody>
                               @foreach($abouts as $index => $about)
                                <tr>
                                    <td class="text-center">{{$about->id}}</td>
                                    <td>{{ fieldCN($about->sub_title)}}</td>
                                    <td class="text-center">
                                        <a href="{{route('administrator.company.about.edit', $about->id)}}" class="btn btn-xs btn-primary">编辑</a>
                                        <a href="javascript:;"  data-url="{{ route('administrator.company.about.destroy', $about->id) }}"  class="btn btn-xs btn-danger form-delete">删除</a>
                                    </td>
                                </tr>
                                 @endforeach
                                </tbody>
                            </table>
                        </form>
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