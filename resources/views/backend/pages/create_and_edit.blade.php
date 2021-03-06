@extends('backend::layouts.app')

@section('title', $title = $page->id ? '编辑页面' : '添加页面' )

@section('navigation')

@endsection

@section('breadcrumb')
    <li><a href="javascript:;">内容管理</a></li>
    <li><a href="javascript:;">页面管理</a></li>
    <li class="active">{{$title}}</li>
@endsection

@section('content')

    <h2 class="header-dividing">{{$title}} <small></small></h2>
    <div class="row">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-body">
                    <form id="form-validator" class="form-horizontal" method="POST" action="{{ $page->id ? route('pages.update', $page->id) : route('pages.store') }}?redirect={{ previous_url() }}">
                        {{ csrf_field() }}
                        <input type="hidden" name="_method" class="mini-hidden" value="{{ $page->id ? 'PATCH' : 'POST' }}">

                        <div class="form-group has-feedback  has-icon-right">
                            <label for="title" class="col-md-2 col-sm-2 control-label required">标题</label>
                            <div class="col-md-5 col-sm-10">
                                <input type="text" name="title[cn]" required autocomplete="off" id="title" class="form-control" value="{{ old('title.cn',fieldCN($page->title)) }}">
                            </div>
                        </div>
                        <div class="form-group has-feedback  has-icon-right">
                            <label for="title_en" class="col-md-2 col-sm-2 control-label required">标题(英文)</label>
                            <div class="col-md-5 col-sm-10">
                                <input type="text" name="title[en]" required autocomplete="off" id="title_en" class="form-control" value="{{ old('title.en',fieldEn($page->title)) }}">
                            </div>
                        </div>

                        <div class="form-group has-feedback  has-icon-right">
                            <label for="subtitle" class="col-md-2 col-sm-2 control-label">副标题</label>
                            <div class="col-md-5 col-sm-10">
                            <input type="text" name="subtitle[cn]" autocomplete="off" id="subtitle" class="form-control" value="{{ old('subtitle.cn',fieldCN($page->subtitle)) }}" >
                            </div>
                        </div>
                        <div class="form-group has-feedback  has-icon-right">
                            <label for="subtitle_en" class="col-md-2 col-sm-2 control-label">副标题(英文)</label>
                            <div class="col-md-5 col-sm-10">
                                <input type="text" name="subtitle[en]" autocomplete="off" id="subtitle_en" class="form-control" value="{{ old('subtitle.en',fieldEn($page->subtitle)) }}" >
                            </div>
                        </div>

                        <div class="form-group has-feedback  has-icon-right">
                            <label for="keywords" class="col-md-2 col-sm-2 control-label">关键词</label>
                            <div class="col-md-5 col-sm-10">
                            <input type="text" name="keywords[cn]" autocomplete="off" id="keywords" class="form-control" value="{{ old('keywords.cn',fieldCN($page->keywords)) }}" >
                            </div>
                        </div>
                        <div class="form-group has-feedback  has-icon-right">
                            <label for="keywords_en" class="col-md-2 col-sm-2 control-label">关键词(英文)</label>
                            <div class="col-md-5 col-sm-10">
                                <input type="text" name="keywords[en]" autocomplete="off" id="keywords_en" class="form-control" value="{{ old('keywords.en',fieldEn($page->keywords)) }}" >
                            </div>
                        </div>

                        <div class="form-group has-feedback  has-icon-right">
                            <label for="description" class="col-md-2 col-sm-2 control-label">描述</label>
                            <div class="col-md-5 col-sm-10">
                            <textarea name="description[cn]" id="description" class="form-control" rows="4">{{  old('description.cn', fieldCN($page->description)) }}</textarea>
                            </div>
                        </div>
                        <div class="form-group has-feedback  has-icon-right">
                            <label for="description_en" class="col-md-2 col-sm-2 control-label">描述(英文)</label>
                            <div class="col-md-5 col-sm-10">
                                <textarea name="description[en]" id="description_en" class="form-control" rows="4">{{  old('description.en', fieldEn($page->description)) }}</textarea>
                            </div>
                        </div>

                        <div class="form-group has-feedback  has-icon-right">
                            <label for="content" class="col-md-2 col-sm-2 control-label required">内容</label>
                            <div class="col-md-8 col-sm-10">
                            <textarea name="content[cn]" id="content" class="form-control editor">{{  old('content.cn', fieldCN($page->content)) }}</textarea>
                            </div>
                        </div>
                        <div class="form-group has-feedback  has-icon-right">
                            <label for="content_en" class="col-md-2 col-sm-2 control-label required">内容(英文)</label>
                            <div class="col-md-8 col-sm-10">
                                <textarea name="content[en]" id="content_en" class="form-control editor">{{  old('content.en', fieldEn($page->content)) }}</textarea>
                            </div>
                        </div>

                        <div class="form-group has-feedback  has-icon-right">

                                <label class="col-md-2 col-sm-2 control-label">封面</label>
                                <div class="col-md-8 col-sm-10">
                                    <div class="panel">
                                        <div class="panel-body">
                                            <img src="{{ storage_image_url($page->thumb) }}" id="image_image" class="img-rounded" width="660px" height="300px" alt="">
                                            <input type="hidden" name="image" id="form_thumb" value="{{ old('thumb',$page->thumb) }}" />
                                            <button id="upload_thumb" type="button" class="btn btn-info uploader-btn-browse"><i class="icon icon-upload"></i> 上传</button>
                                      {{--      <button id="select_thumb" type="button" class="btn btn-primary"><i class="icon icon-file-image"></i> 选择</button>--}}
                                            <button id="delete_thumb" type="button" class="btn btn-danger"><i class="icon icon-remove-sign"></i> 删除</button>
                                        </div>
                                    </div>
                                </div>
                        </div>

                        <div class="form-group has-feedback has-icon-right">
                            <label for="author" class="col-md-2 col-sm-2 control-label">作者</label>
                            <div class="col-md-5 col-sm-10">
                            <input type="text" name="author" autocomplete="off" id="author" class="form-control" value="{{ old('author',$page->author) }}"
                                   data-fv-trigger="blur"
                                   minlength="1"
                                   maxlength="64"
                            ></div>
                        </div>

                        <div class="form-group has-feedback has-icon-right">
                            <label for="order" class="col-md-2 col-sm-2  required">排序</label>
                            <div class="col-md-5 col-sm-10">
                            <input type="number" name="order" autocomplete="off" id="order" class="form-control" value="{{ old('order',$page->order?:999) }}"
                                   required
                                   data-fv-trigger="blur"
                                   min="1"
                                   max="9999"
                            ></div>
                        </div>

                        <div class="form-group has-feedback has-icon-right">
                            <label for="template" class="col-md-2 col-sm-2 layui-form-label">模板</label>
                            <div class="col-md-5 col-sm-10">
                            @php
                                $templates = get_active_template('page', 'show');
                                $template = old('template',$page->template);
                            @endphp
                            <select name="template" class="form-control">
                                @foreach($templates as $key => $val)
                                    <option @if($template == $key) selected="selected" @endif value="{{$key}}">{{$val}}</option>
                                @endforeach
                            </select>
                            </div>
                        </div>

                        <div class="form-group has-feedback has-icon-right">
                            <label for="" class="col-md-2 col-sm-2 control-label required">状态</label>
                            <div class="col-md-5 col-sm-10">
                            <div class="radio">
                                <label class="radio-inline">
                                    <input type="radio" name="status" value="0" @if($page->status == 0) checked="" @endif required > 隐藏
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="status" value="1" @if($page->status == 1) checked="" @endif required > 显示
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
    @include('backend::common._editor_scripts',['folder'=>'website'])

    @include('backend::common._upload_image_scripts',['elem' => '#upload_thumb', 'previewElem' => '#image_image', 'fieldElem' => '#form_thumb', 'folder'=>'page', 'object_id' => $page->id ?? 0 ])
    @include('backend::common._delete_image_scripts',['elem' => '#delete_thumb', 'previewElem' => '#image_image', 'fieldElem' => '#form_thumb', ])
    @include('backend::common._select_image_scripts',['elem' => '#select_thumb', 'previewElem' => '#image_image', 'fieldElem' => '#form_thumb', 'folder'=>'page', 'object_id' => $page->id ?? 0 ])

@stop