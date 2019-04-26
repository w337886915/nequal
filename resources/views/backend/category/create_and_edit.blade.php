@extends('backend::layouts.app')

@section('title', $title = $category->id ? '编辑分类' : '添加分类' )

@section('breadcrumb')
    <li><a href="javascript:;">站点设置</a></li>
    <li><a href="javascript:;">内容管理</a></li>
    <li><a href="javascript:;">@switch($type)
            @case('article')文章分类@break
        @endswitch</a></li>
    <li class="active">{{$title}}</li>
@endsection

@section('content')

    @php
        $categoryHandler = app(\App\Handlers\CategoryHandler::class);
        $categoryItems = $categoryHandler->select($categoryHandler->getCategorys($type));
    @endphp

    <h2 class="header-dividing">{{$title}} <small></small></h2>
    <div class="row">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-body">
                    <form id="form-validator" class="form-horizontal" method="POST" action="{{ $category->id ? route('administrator.category.update', [$category->id, $type]) : route('administrator.category.store', $type) }}?redirect={{ previous_url() }}">
                        {{ csrf_field() }}
                        <input type="hidden" name="_method" class="mini-hidden" value="{{ $category->id ? 'PUT' : 'POST' }}">

                        <div class="form-group has-feedback  has-icon-right">
                            <label for="parent" class="col-md-2 col-sm-2 control-label required">父级</label>
                            <div class="col-md-5 col-sm-10">
                            <select data-placeholder="请选择父级菜单" class="chosen-select form-control"  tabindex="2" name="parent">
                                <option value=""></option>
                                <option @if($parent == 0) selected @endif value="0">/</option>
                                @foreach($categoryItems as $key => $value)
                                    <option @if($parent == $key) selected @endif value="{{$key}}">/ {{$value}}</option>
                                @endforeach
                            </select></div>
                        </div>

                        <div class="form-group has-feedback  has-icon-right">
                            <label for="name" class="col-md-2 col-sm-2 control-label required">名称</label>
                            <div class="col-md-5 col-sm-10">
                            <input type="text" name="name" autocomplete="off" class="form-control" value="{{ old('name',$category->name) }}"
                                   required
                                   data-fv-trigger="blur"
                                   minlength="1"
                                   maxlength="128"
                            ></div>
                        </div>
                        <div class="form-group has-feedback  has-icon-right">
                            <label for="en_name" class="col-md-2 col-sm-2 control-label">英文名称</label>
                            <div class="col-md-5 col-sm-10">
                                <input type="text" name="en_name" id="en_name" autocomplete="off" class="form-control" value="{{ old('en_name',$category->en_name) }}"
                                       data-fv-trigger="blur"
                                       minlength="1"
                                       maxlength="128"
                                ></div>
                        </div>
                        <div class="form-group has-feedback  has-icon-right">
                            <label for="en_name" class="col-md-2 col-sm-2 control-label">分类图片</label>
                            <div class="col-md-5 col-sm-10">
                                <img id="image_image" src="{{ storage_image_url($category->thumb) }}">
                                <input id="form_thumb" type="hidden" name="thumb" value="{{ old('thumb',$category->thumb) }}">
                                <button id="upload_thumb" type="button" class="btn btn-info uploader-btn-browse"><i class="icon icon-upload"></i> 上传</button>
                            </div>
                        </div>

                        <div class="form-group has-feedback  has-icon-right">
                            <label for="keywords" class="col-md-2 col-sm-2 control-label">关键字</label>
                            <div class="col-md-5 col-sm-10">
                            <input type="text" name="keywords" autocomplete="off" placeholder="请输入关键字" class="form-control" value="{{ old('keywords',$category->keywords) }}"
                                   data-fv-trigger="blur"
                                   minlength="1"
                                   maxlength="128"
                            ></div>
                        </div>

                        <div class="form-group has-feedback  has-icon-right">
                            <label for="" class="col-md-2 col-sm-2 control-label required">排序</label>
                            <div class="col-md-5 col-sm-10">
                            <input type="number" name="order" autocomplete="off" placeholder="请输入排序" class="form-control" value="{{ old('order',$category->order) ?? 999}}"
                                   required
                                   data-fv-trigger="blur"
                                   min="1"
                                   max="99999"
                            ></div>
                        </div>

                        <div class="form-group has-feedback  has-icon-right">
                            <label for="link" class="col-md-2 col-sm-2 control-label">链接</label>
                            <div class="col-md-5 col-sm-10">
                            <input type="text" name="link" autocomplete="off" placeholder="请输入链接" class="form-control" value="{{ old('link',$category->link) }}"
                                   data-fv-trigger="blur"
                                   minlength="1"
                                   maxlength="255"
                            ></div>
                        </div>

                        <div class="form-group has-feedback  has-icon-right">
                            <label for="" class="col-md-2 col-sm-2 control-label required">自定义模板</label>
                            @php
                                $templates = get_active_template($type, 'list');
                                $template = old('template',$category->template);
                            @endphp
                            <div class="col-md-5 col-sm-10">
                            <select name="template" class="form-control">
                                @foreach($templates as $key => $val)
                                    <option @if($template == $key) selected="selected" @endif value="{{$key}}">{{$val}}</option>
                                @endforeach
                            </select></div>
                        </div>

                        <div class="form-group has-feedback  has-icon-right">
                            <label for="" class="col-md-2 col-sm-2 control-label">描述</label>
                            <div class="col-md-5 col-sm-10">
                            <textarea name="description" placeholder="请输入描述" class="form-control" rows="3"
                                      data-fv-trigger="blur"
                                      maxlength="255"
                            >{{  old('description', $category->description) }}</textarea>
                            </div>
                        </div>
                        <div class="form-group has-feedback  has-icon-right">
                            <label for="tel" class="col-md-2 col-sm-2 control-label">联系电话</label>
                            <div class="col-md-5 col-sm-10">
                                <input type="text" name="tel" id="tel" autocomplete="off" class="form-control" value="{{ old('tel',$category->tel) }}"
                                       data-fv-trigger="blur"
                                       minlength="1"
                                       maxlength="128"
                                ></div>
                        </div>
                        <div class="form-group has-feedback  has-icon-right">
                            <label for="email" class="col-md-2 col-sm-2 control-label">联系邮箱</label>
                            <div class="col-md-5 col-sm-10">
                                <input type="email" name="email" id="email" autocomplete="off" class="form-control" value="{{ old('email',$category->email) }}"
                                       data-fv-trigger="blur"
                                       minlength="1"
                                       maxlength="128"
                                ></div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-offset-2 col-md-5 col-sm-10">
                                <input type="hidden" name="type" value="{{$type}}">
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
    @include('backend::common._upload_image_scripts',['elem' => '#upload_thumb', 'previewElem' => '#image_image', 'fieldElem' => '#form_thumb', 'folder'=>'category','object_id'=>create_object_id()])
@endsection