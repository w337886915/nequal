@extends('backend::layouts.app')

@section('title', $title = $about->id ? '编辑关于我们' : '添加关于我们' )

@section('breadcrumb')
    <li><a href="javascript:;">站点设置</a></li>
    <li class="active">{{$title}}</li>
@endsection

@section('content')
    @php
        $object_id = $about->object_id ?? create_object_id();
    @endphp


    <h2 class="header-dividing">{{$title}} <small></small></h2>
    <div class="row">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-body">

                    <form id="form-validator" class="form-horizontal" method="POST" action="{{ $about->id ? route('administrator.company.about.update', $about->id) : route('administrator.company.about.store') }}?redirect={{ previous_url() }}">
                        {{ csrf_field() }}
                        <input type="hidden" name="_method"  value="{{ $about->id ? 'PATCH' : 'POST' }}">

                        <div class="form-group has-feedback  has-icon-right">
                            <label for="subtitle" class="col-md-2 col-sm-2 control-label required">副标题</label>
                            <div class="col-md-5 col-sm-10">
                            <input type="text" name="sub_title[cn]" autocomplete="off" class="form-control" required value="{{ old('sub_title.cn',fieldCN($about->sub_title)) }}" >
                            </div>
                        </div>
                        <div class="form-group has-feedback  has-icon-right">
                            <label for="subtitle" class="col-md-2 col-sm-2 control-label required">副标题(英文)</label>
                            <div class="col-md-5 col-sm-10">
                                <input type="text" name="sub_title[en]" autocomplete="off" class="form-control" required value="{{ old('sub_title.en',fieldEn($about->sub_title)) }}" >
                            </div>
                        </div>

                        <div class="form-group has-feedback  has-icon-right">
                            <label for="description" class="col-md-2 col-sm-2 control-label required">描述</label>
                            <div class="col-md-5 col-sm-10">
                                <textarea name="content[cn]" id="description" class="form-control" required rows="8">{{  old('content.cn', fieldCN($about->content)) }}</textarea>
                            </div>
                        </div>
                        <div class="form-group has-feedback  has-icon-right">
                            <label for="description_en" class="col-md-2 col-sm-2 control-label required">描述(英文)</label>
                            <div class="col-md-5 col-sm-10">
                                <textarea name="content[en]" id="description_en" required class="form-control" rows="8">{{  old('content.en', fieldEn($about->content)) }}</textarea>
                            </div>
                        </div>

                        <div class="form-group has-feedback  has-icon-right">
                                <label class="col-md-2 col-sm-2 control-label required">图片</label>
                                <div class="col-md-8 col-sm-10">
                                <div class="panel">
                                    <div class="panel-body">
                                        <img src="{{ storage_image_url($about->thumb) }}" id="image_image" class="img-rounded" width="400px" height="200px" alt="">
                                        <input type="hidden" name="thumb" id="form_thumb" required value="{{ old('thumb',$about->thumb) }}" />
                                        <button id="upload_thumb" type="button" class="btn btn-info uploader-btn-browse"><i class="icon icon-upload"></i> 上传</button>
                                        <button id="delete_thumb" type="button" class="btn btn-danger"><i class="icon icon-remove-sign"></i> 删除</button>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="form-group has-feedback has-icon-right">
                            <label for="is_link" class="col-md-2 col-sm-2 control-label required">图片位置</label>
                            <div class="col-md-5 col-sm-10">
                            <div class="radio">
                                <label class="radio-inline">
                                    <input type="radio" name="position" value="right" @if($about->position == 'right') checked="" @endif required> 左
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="position" value="left" @if($about->position == 'left') checked="" @endif required> 右
                                </label>
                            </div>
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
@endsection

@section('styles')
    @include('backend::common._editor_styles')
@stop

@section('scripts')
    @include('backend::common._editor_scripts',[ 'folder'=>'article', 'object_id'=>$object_id ])

    @include('backend::common._upload_image_scripts',['elem' => '#upload_thumb', 'previewElem' => '#image_image', 'fieldElem' => '#form_thumb', 'folder'=>'about', 'object_id'=>$object_id])
    @include('backend::common._delete_image_scripts',['elem' => '#delete_thumb', 'previewElem' => '#image_image', 'fieldElem' => '#form_thumb', ])
@stop
