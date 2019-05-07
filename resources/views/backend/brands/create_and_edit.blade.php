@extends('backend::layouts.app')

@section('title', $title = $brand->id ? '编辑友情链接' : '添加友情链接' )

@section('breadcrumb')
    <a href="">站点设置</a>
    <a href="">友情链接</a>
    <a href="">{{$title}}</a>
@endsection

@section('content')
    <h2 class="header-dividing">{{$title}} <small></small></h2>
    <div class="row">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-body">
                    <form id="form-validator" class="form-horizontal" method="POST" action="{{ $brand->id ? route('brands.update', $brand->id) : route('brands.store') }}?redirect={{ previous_url() }}">
                        {{ csrf_field() }}
                        <input type="hidden" name="_method"  value="{{ $brand->id ? 'PATCH' : 'POST' }}">

                        <div class="form-group has-feedback  has-icon-right">
                            <label for="name" class="col-md-2 col-sm-2 control-label required">名称</label>
                            <div class="col-md-5 col-sm-10">
                            <input type="text" class="form-control" id="name" name="name" autocomplete="off" placeholder="" value="{{ old('name',$brand->name) }}"
                                   required
                                   data-fv-trigger="blur"
                                   minlength="1"
                                   maxlength="128"
                            ></div>
                        </div>

                        <div class="form-group has-feedback  has-icon-right">
                            <label for="url" class="col-md-2 col-sm-2 control-label">链接</label>
                            <div class="col-md-5 col-sm-10">
                            <input type="text" class="form-control" id="url" name="url" autocomplete="off" placeholder="" value="{{ old('url',$brand->url) }}"
                                   data-fv-trigger="blur"
                                   minlength="1"
                                   maxlength="128"
                            ></div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-2 col-sm-2 required">LOGO</label>
                            <div class="col-md-5 col-sm-10">
                            <div class="panel">
                                <div class="panel-body">
                                    <img src="{{ storage_image_url($brand->image) }}" id="image_image" class="img-rounded" width="380px" height="200px" alt="">
                                    <input type="hidden" name="image" id="form_image" required value="{{ old('image',$brand->image) }}" />
                                    <button id="upload_image" type="button" class="btn btn-info uploader-btn-browse"><i class="icon icon-upload"></i> 上传</button>
                                    <button id="delete_thumb" type="button" class="btn btn-danger"><i class="icon icon-remove-sign"></i> 删除</button>
                                </div>
                            </div>
                            </div>
                        </div>

                        <div class="form-group has-feedback  has-icon-right">
                            <label for="order" class="col-md-2 col-sm-2 control-label required">排序</label>
                            <div class="col-md-5 col-sm-10">
                            <input type="number" class="form-control" id="order" name="order" autocomplete="off" placeholder="" value="{{ old('order',$brand->order) }}"
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

    @include('backend::common._upload_image_scripts',['elem' => '#upload_image', 'previewElem' => '#image_image', 'fieldElem' => '#form_image', 'folder'=>'link', 'object_id' => $brand->id ?? 0 ])
    @include('backend::common._delete_image_scripts',['elem' => '#delete_thumb', 'previewElem' => '#image_image', 'fieldElem' => '#form_image', ])

@endsection