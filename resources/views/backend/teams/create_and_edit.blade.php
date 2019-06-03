@extends('backend::layouts.app')

@section('title', $title = ($team->id ? '编辑' : '添加') . $teamConfig['name'] )

@section('breadcrumb')
    <li><a href="javascript:;">内容管理</a></li>
    <li><a href="javascript:;">幻灯管理</a></li>
    <li><a href="javascript:;">幻灯片</a></li>
    <li><a href="javascript:;">{{$teamConfig['name']}}管理</a></li>
    <li>{{$title}}</li>
@endsection

@section('content')

    <h2 class="header-dividing">{{$title}} <small></small></h2>
    <div class="row">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-body">
                    <form id="form-validator" class="form-horizontal" method="POST" action="{{ $team->id ? route('teams.update', $team->id) : route('teams.store') }}?redirect={{ previous_url() }}">
                        {{ csrf_field() }}
                        <input type="hidden" name="_method" value="{{ $team->id ? 'PATCH' : 'POST' }}">

                        <div class="form-group has-feedback  has-icon-right">
                            <label for="name" class="col-md-2 col-sm-2 control-label required">名称</label>
                            <div class="col-md-5 col-sm-10">
                            <input type="text" name="name[cn]" id="name" autocomplete="off" placeholder="" class="form-control" value="{{ old('name.cn',fieldCN($team->name)) }}"
                                   required
                                   data-fv-trigger="blur"
                                   minlength="1"
                                   maxlength="100"
                            ></div>
                        </div>
                        <div class="form-group has-feedback  has-icon-right">
                            <label for="name_en" class="col-md-2 col-sm-2 control-label required">名称(英文)</label>
                            <div class="col-md-5 col-sm-10">
                                <input type="text" name="name[en]" id="name_en" autocomplete="off" placeholder="" class="form-control" value="{{ old('name.en',fieldEn($team->name)) }}"
                                       required
                                       data-fv-trigger="blur"
                                       minlength="1"
                                       maxlength="100"
                                ></div>
                        </div>

                        <div class="form-group">
                            <label for="" class="col-md-2 col-sm-2 control-label">图片</label>
                            <div class="col-md-8 col-sm-10">
                            <div class="panel">
                                <div class="panel-body">
                                    <img src="{{ storage_image_url($team->image) }}" id="image_image" class="img-rounded" width="240px" height="300px" alt="">
                                    <input type="hidden" name="image" id="form_image" value="{{ old('image',$team->image) }}" />
                                    <button id="upload_image" type="button" class="btn btn-info uploader-btn-browse"><i class="icon icon-upload"></i> 上传</button>
                                    <button id="delete_thumb" type="button" class="btn btn-danger"><i class="icon icon-remove-sign"></i> 删除</button>
                                </div>
                            </div>
                            </div>
                        </div>

                        <div class="form-group has-feedback  has-icon-right">
                            <label for="description" class="col-md-2 col-sm-2 control-label required">描述</label>
                            <div class="col-md-8 col-sm-10">
                                <textarea name="description[cn]" id="description" class="form-control editor" >{{  old('description.cn', fieldCN($team->description)) }}</textarea>
                            </div>
                        </div>
                        <div class="form-group has-feedback  has-icon-right">
                            <label for="description_en" class="col-md-2 col-sm-2 control-label required">描述(英文)</label>
                            <div class="col-md-8 col-sm-10">
                                <textarea name="description[en]" id="description_en" class="form-control editor" >{{  old('description.en', fieldEn($team->description)) }}</textarea>
                            </div>
                        </div>

                        <div class="form-group has-feedback  has-icon-right">
                            <label for="order" class="col-md-2 col-sm-2 control-label required">排序</label>
                            <div class="col-md-5 col-sm-10">
                            <input type="number" class="form-control" id="order" name="order" autocomplete="off" placeholder="" value="{{ old('order',$team->order ?: 999) }}"
                                   required
                                   data-fv-trigger="blur"
                                   min="0"
                                   max="9999"
                            ></div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-offset-2 col-md-5 col-sm-10">
                                <input type="hidden" name="group" value="{{$group}}" />
                                <button type="submit" class="btn btn-primary">提交</button>
                                <button type="reset" class="btn btn-default">重置</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
@section('styles')
    @include('backend::common._editor_styles')
@stop
@section('scripts')
    @include('backend::common._editor_scripts',[ 'folder'=>'slide', 'object_id'=>create_object_id() ])

    @include('backend::common._upload_image_scripts',['elem' => '#upload_image', 'previewElem' => '#image_image', 'fieldElem' => '#form_image', 'folder'=>'team', 'object_id' => $group->id ?? 0 ])
    @include('backend::common._delete_image_scripts',['elem' => '#delete_thumb', 'previewElem' => '#image_image', 'fieldElem' => '#form_image', ])

@endsection