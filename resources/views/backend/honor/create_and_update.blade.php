@extends('backend::layouts.app')

@section('title', $title = $honor->id ? '编辑公司荣誉' : '添加公司荣誉' )

@section('breadcrumb')
    <a href="">站点设置</a>
    <a href="">公司荣誉</a>
    <a href="">{{$title}}</a>
@endsection

@section('content')
    <h2 class="header-dividing">{{$title}} <small></small></h2>
    <div class="row">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-body">
                    <form id="form-validator" class="form-horizontal" method="POST" action="{{ $honor->id ? route('administrator.company.honor.update', $honor->id) : route('administrator.company.honor.store') }}?redirect={{ previous_url() }}">
                        {{ csrf_field() }}
                        <input type="hidden" name="_method"  value="{{ $honor->id ? 'PATCH' : 'POST' }}">

                        <div class="form-group has-feedback  has-icon-right">
                            <label for="name" class="col-md-2 col-sm-2 control-label required">名称</label>
                            <div class="col-md-5 col-sm-10">
                                <input type="text" class="form-control" id="name" name="name[cn]" autocomplete="off" placeholder="" value="{{ old('name.cn',fieldCN($honor->name)) }}"
                                       required
                                       data-fv-trigger="blur"
                                       minlength="1"
                                       maxlength="128"
                                ></div>
                        </div>
                        <div class="form-group has-feedback  has-icon-right">
                            <label for="name" class="col-md-2 col-sm-2 control-label required">名称(英文)</label>
                            <div class="col-md-5 col-sm-10">
                                <input type="text" class="form-control" id="name" name="name[en]" autocomplete="off" placeholder="" value="{{ old('name.en',fieldEn($honor->name)) }}"
                                       required
                                       data-fv-trigger="blur"
                                       minlength="1"
                                       maxlength="128"
                                ></div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 col-sm-2 required">图片</label>
                            <div class="col-md-5 col-sm-10">
                                <div class="panel">
                                    <div class="panel-body">
                                        <img src="{{ storage_image_url($honor->image) }}" id="image_image" class="img-rounded" width="280px" height="350px" alt="">
                                        <input type="hidden" name="image" id="form_image" required value="{{ old('image',$honor->image) }}" />
                                        <button id="upload_image" type="button" class="btn btn-info uploader-btn-browse"><i class="icon icon-upload"></i> 上传</button>
                                        <button id="delete_thumb" type="button" class="btn btn-danger"><i class="icon icon-remove-sign"></i> 删除</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group has-feedback  has-icon-right">
                            <label for="order" class="col-md-2 col-sm-2 control-label required">排序</label>
                            <div class="col-md-5 col-sm-10">
                                <input type="number" class="form-control" id="order" name="order" autocomplete="off" placeholder="" value="{{ old('order',$honor->order??999) }}"
                                       required
                                       data-fv-trigger="blur"
                                       min="0"
                                       max="9999"
                                ></div>
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

@section('scripts')

    @include('backend::common._upload_image_scripts',['elem' => '#upload_image', 'previewElem' => '#image_image', 'fieldElem' => '#form_image', 'folder'=>'honor', 'object_id' => $honor->id ?? 0 ])
    @include('backend::common._delete_image_scripts',['elem' => '#delete_thumb', 'previewElem' => '#image_image', 'fieldElem' => '#form_image', ])

@endsection