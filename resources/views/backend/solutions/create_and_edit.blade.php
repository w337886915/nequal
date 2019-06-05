@extends('backend::layouts.app')

@section('title', $title = $solution->id ? '编辑解决方案' : '添加解决方案' )

@section('breadcrumb')
    <a href="">内容管理</a>
    <a href="">解决方案</a>
    <a href="">{{$title}}</a>
@endsection

@section('content')
    @php
        $object_id = $solution->object_id ?? create_object_id();
    @endphp
    <h2 class="header-dividing">{{$title}}
        <small></small>
    </h2>
    <div class="row">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-body">
                    <form id="form-validator" class="form-horizontal" method="POST"
                          action="{{ $solution->id ? route('solutions.update', $solution->id) : route('solutions.store') }}?redirect={{ previous_url() }}">
                        {{ csrf_field() }}
                        <input type="hidden" name="_method" value="{{ $solution->id ? 'PATCH' : 'POST' }}">

                        <div class="form-group has-feedback  has-icon-right">
                            <label for="name" class="col-md-2 col-sm-2 control-label required">名称</label>
                            <div class="col-md-5 col-sm-10">
                                <input type="text" class="form-control" id="name" name="name[cn]" autocomplete="off"
                                       placeholder="" value="{{ old('name.cn',fieldCN($solution->name)) }}"
                                       required
                                       data-fv-trigger="blur"
                                       minlength="1"
                                       maxlength="128"
                                ></div>
                        </div>
                        <div class="form-group has-feedback  has-icon-right">
                            <label for="name" class="col-md-2 col-sm-2 control-label required">英文名称</label>
                            <div class="col-md-5 col-sm-10">
                                <input type="text" class="form-control" id="name" name="name[en]" autocomplete="off"
                                       placeholder="" value="{{ old('name.en',fieldEn($solution->name)) }}"
                                       required
                                       data-fv-trigger="blur"
                                       minlength="1"
                                       maxlength="128"
                                ></div>
                        </div>

                        <div class="form-group has-feedback  has-icon-right">
                            <label for="sub_name" class="col-md-2 col-sm-2 control-label">副标题</label>
                            <div class="col-md-5 col-sm-10">
                                <input type="text" class="form-control" id="sub_name" name="sub_name[cn]"
                                       autocomplete="off" placeholder=""
                                       value="{{ old('sub_name.cn',fieldCN($solution->sub_name)) }}"
                                       data-fv-trigger="blur"
                                       minlength="1"
                                       maxlength="128"
                                ></div>
                        </div>
                        <div class="form-group has-feedback  has-icon-right">
                            <label for="sub_name_en" class="col-md-2 col-sm-2 control-label">副标题(英文)</label>
                            <div class="col-md-5 col-sm-10">
                                <input type="text" class="form-control" id="sub_name_en" name="sub_name[en]"
                                       autocomplete="off" placeholder=""
                                       value="{{ old('sub_name.en',fieldEn($solution->sub_name)) }}"
                                       data-fv-trigger="blur"
                                       minlength="1"
                                       maxlength="128"
                                ></div>
                        </div>
                        <div class="form-group">
                            <label for="anchor" class="col-md-2 col-sm-2 control-label">锚点设置</label>
                            <div class="col-md-5 col-sm-10">
                                <input type="text" class="form-control" id="anchor" name="anchor" value="{{old('anchor')}}">
                                <p>用户设置前台页面定位。注：名字不能重复哦</p>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-2 col-sm-2">图片</label>
                            <div class="col-md-5 col-sm-10">
                                <div class="panel">
                                    <div class="panel-body">
                                        <img src="{{ storage_image_url($solution->thumb) }}" id="image_image"
                                             class="img-rounded" width="380px" height="200px" alt="nEqual"="">
                                        <input type="hidden" name="thumb" id="form_image" required
                                               value="{{ old('thumb',$solution->thumb) }}"/>
                                        <button id="upload_image" type="button"
                                                class="btn btn-info uploader-btn-browse"><i
                                                    class="icon icon-upload"></i> 上传
                                        </button>
                                        <button id="delete_thumb" type="button" class="btn btn-danger"><i
                                                    class="icon icon-remove-sign"></i> 删除
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group has-feedback  has-icon-right">
                            <label for="introduction" class="col-md-2 col-sm-2 control-label required">产品概述</label>
                            <div class="col-md-8 col-sm-10">
                                <textarea name="introduction[cn]" id="introduction"
                                          class="form-control editor">{{  old('introduction.cn', fieldCN($solution->introduction)) }}</textarea>
                            </div>
                        </div>
                        <div class="form-group has-feedback  has-icon-right">
                            <label for="introduction_en"
                                   class="col-md-2 col-sm-2 control-label required">产品概述(英文)</label>
                            <div class="col-md-8 col-sm-10">
                                <textarea name="introduction[en]" id="introduction_en"
                                          class="form-control editor">{{  old('introduction.en', fieldEn($solution->introduction)) }}</textarea>
                            </div>
                        </div>

                        <div class="form-group has-feedback  has-icon-right">
                            <label for="advantage" class="col-md-2 col-sm-2 control-label required">产品优势</label>
                            <div class="col-md-8 col-sm-10">
                                <textarea name="advantage[cn]" id="advantage"
                                          class="form-control editor">{{  old('advantage.cn', fieldCN($solution->advantage)) }}</textarea>
                            </div>
                        </div>
                        <div class="form-group has-feedback  has-icon-right">
                            <label for="advantage_en" class="col-md-2 col-sm-2 control-label required">产品优势(英文)</label>
                            <div class="col-md-8 col-sm-10">
                                <textarea name="advantage[en]" id="advantage_en"
                                          class="form-control editor">{{  old('advantage.en', fieldEn($solution->advantage)) }}</textarea>
                            </div>
                        </div>

                        <div class="form-group has-feedback  has-icon-right">
                            <label for="type" class="col-md-2 col-sm-2 control-label">服务客户</label>
                            <div class="col-md-5 col-sm-10">
                                <select name="brand_ids[]" class="chosen-select form-control" id="brand_ids[]"
                                        tabindex="2" multiple="">
                                    <option value=""></option>
                                    @foreach($brands as $value)
                                        <option @if( isset($value['check']) and $value['check']) selected
                                                @endif value="{{$value['id']}}">
                                            {{$value['name']}}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group has-feedback has-icon-right">
                            <label for="status" class="col-md-2 col-sm-2 control-label required">状态</label>
                            <div class="col-md-5 col-sm-10">
                                <div class="radio">
                                    <label class="radio-inline">
                                        <input type="radio" name="status" value="1"
                                               @if($solution->status == 1) checked="" @endif required> 显示
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="status" value="0"
                                               @if($solution->status == 0) checked="" @endif required> 隐藏
                                    </label>

                                </div>
                            </div>
                        </div>
                        <div class="form-group has-feedback  has-icon-right">
                            <label for="email" class="col-md-2 col-sm-2 control-label">联系邮箱</label>
                            <div class="col-md-5 col-sm-10">
                                <input type="text" class="form-control" id="email" name="email" autocomplete="off"
                                       placeholder="" value="{{ old('email',$solution->email) }}"
                                       data-fv-trigger="blur"
                                       minlength="1"
                                       maxlength="128"
                                ></div>
                        </div>
                        <div class="form-group has-feedback  has-icon-right">
                            <label for="tel" class="col-md-2 col-sm-2 control-label">联系电话</label>
                            <div class="col-md-5 col-sm-10">
                                <input type="text" class="form-control" id="tel" name="tel" autocomplete="off"
                                       placeholder="" value="{{ old('tel',$solution->tel) }}"
                                       data-fv-trigger="blur"
                                       minlength="1"
                                       maxlength="128"
                                ></div>
                        </div>

                        <div class="form-group has-feedback  has-icon-right">
                            <label for="order" class="col-md-2 col-sm-2 control-label required">排序</label>
                            <div class="col-md-5 col-sm-10">
                                <input type="number" class="form-control" id="order" name="order" autocomplete="off"
                                       placeholder="" value="{{ old('order',$solution->order?:999) }}"
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
@section('styles')
    @include('backend::common._editor_styles')
@stop

@section('scripts')
    @include('backend::common._editor_scripts',[ 'folder'=>'solution', 'object_id'=>$object_id ])

    @include('backend::common._upload_image_scripts',['elem' => '#upload_image', 'previewElem' => '#image_image', 'fieldElem' => '#form_image', 'folder'=>'link', 'object_id' => $solution->id ?? 0 ])
    @include('backend::common._delete_image_scripts',['elem' => '#delete_thumb', 'previewElem' => '#image_image', 'fieldElem' => '#form_image', ])

@endsection