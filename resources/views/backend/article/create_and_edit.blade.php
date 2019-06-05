@extends('backend::layouts.app')

@section('title', $title = $article->id ? '编辑' : '添加' )

@section('breadcrumb')
    <li><a href="javascript:;">内容管理</a></li>
    <li class="active">{{$title}}</li>
@endsection

@section('content')
    @php
        $object_id = $article->object_id ?? create_object_id();
        $type = $article->type ?? request('type','article');
    @endphp


    <h2 class="header-dividing">{{$title}} <small></small></h2>
    <div class="row">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-body">

                    <form id="form-validator" class="form-horizontal" method="POST" action="{{ $article->id ? route('articles.update', $article->id) : route('articles.store') }}?redirect={{ previous_url() }}">
                        {{ csrf_field() }}
                        <input type="hidden" name="_method"  value="{{ $article->id ? 'PATCH' : 'POST' }}">
                        <input type="hidden" name="type" value="{{ $type }}">

                        <div class="form-group has-feedback  has-icon-right">
                            <label for="type" class="col-md-2 col-sm-2 control-label required">所属分类</label>
                            <div class="col-md-5 col-sm-10">
                            <select name="category_id[]" class="chosen-select form-control" id="category_id[]" tabindex="2">
                                @foreach($category as $value)
                                    <option @if($value['check']) selected @endif value="{{$value['id']}}">/ {{$value['name']}}</option>
                                @endforeach
                            </select>
                            </div>
                        </div>

                        <div class="form-group has-feedback  has-icon-right">
                            <label for="title" class="col-md-2 col-sm-2 control-label required">标题</label>
                            <div class="col-md-5 col-sm-10">
                            <input type="text" name="title[cn]" required autocomplete="off" class="form-control" value="{{ old('title.cn',fieldCN($article->title)) }}" >
                            </div>
                        </div>
                        <div class="form-group has-feedback  has-icon-right">
                            <label for="title" class="col-md-2 col-sm-2 control-label required">标题(英文)</label>
                            <div class="col-md-5 col-sm-10">
                                <input type="text" name="title[en]" required autocomplete="off" class="form-control" value="{{ old('title.en',fieldEn($article->title)) }}" >
                            </div>
                        </div>


                        <div class="form-group has-feedback  has-icon-right">
                            <label for="subtitle" class="col-md-2 col-sm-2 control-label">副标题</label>
                            <div class="col-md-5 col-sm-10">
                            <input type="text" name="subtitle[cn]" autocomplete="off" class="form-control" value="{{ old('subtitle.cn',fieldCN($article->subtitle)) }}" >
                            </div>
                        </div>
                        <div class="form-group has-feedback  has-icon-right">
                            <label for="subtitle" class="col-md-2 col-sm-2 control-label">副标题(英文)</label>
                            <div class="col-md-5 col-sm-10">
                                <input type="text" name="subtitle[en]" autocomplete="off" class="form-control" value="{{ old('subtitle.en',fieldEn($article->subtitle)) }}" >
                            </div>
                        </div>

                        <div class="form-group has-feedback  has-icon-right">
                            <label for="keywords" class="col-md-2 col-sm-2 control-label">关键词</label>
                            <div class="col-md-5 col-sm-10">
                            <input type="text" name="keywords" autocomplete="off" class="form-control" value="{{ old('keywords',$article->keywords) }}" >
                            </div>
                        </div>

                        <div class="form-group has-feedback  has-icon-right">
                            <label for="description" class="col-md-2 col-sm-2 control-label">描述</label>
                            <div class="col-md-5 col-sm-10">
                                <textarea name="description[cn]" id="description" class="form-control" rows="4">{{  old('description.cn', fieldCN($article->description)) }}</textarea>
                            </div>
                        </div>
                        <div class="form-group has-feedback  has-icon-right">
                            <label for="description_en" class="col-md-2 col-sm-2 control-label">描述(英文)</label>
                            <div class="col-md-5 col-sm-10">
                                <textarea name="description[en]" id="description_en" class="form-control" rows="4">{{  old('description.en', fieldEn($article->description)) }}</textarea>
                            </div>
                        </div>

                        <div class="form-group has-feedback  has-icon-right">
                            <label for="content" class="col-md-2 col-sm-2 control-label required">内容</label>
                            <div class="col-md-8 col-sm-10">
                            <textarea name="content[cn]" id="content" class="form-control editor" >{{  old('content.cn', fieldCN($article->content)) }}</textarea>
                            </div>
                        </div>
                        <div class="form-group has-feedback  has-icon-right">
                            <label for="content_en" class="col-md-2 col-sm-2 control-label required">内容(英文)</label>
                            <div class="col-md-8 col-sm-10">
                                <textarea name="content[en]" id="content_en" class="form-control editor" >{{  old('content.en', fieldEn($article->content)) }}</textarea>
                            </div>
                        </div>

                        <div class="form-group has-feedback  has-icon-right">
                                <label class="col-md-2 col-sm-2 control-label">封面</label>
                                <div class="col-md-8 col-sm-10">
                                <div class="panel">
                                    <div class="panel-body">
                                        <img src="{{ storage_image_url($article->thumb) }}" id="image_image" class="img-rounded" width="660px" height="300px" alt="">
                                        <input type="hidden" name="thumb" id="form_thumb" value="{{ old('thumb',$article->thumb) }}" />
                                        <button id="upload_thumb" type="button" class="btn btn-info uploader-btn-browse"><i class="icon icon-upload"></i> 上传</button>
                                      {{--  <button id="select_thumb" type="button" class="btn btn-primary"><i class="icon icon-file-image"></i> 选择</button>--}}
                                        <button id="delete_thumb" type="button" class="btn btn-danger"><i class="icon icon-remove-sign"></i> 删除</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                       {{--@if($type)--}}
                            {{--@includeIf('backend::article.template.'.$type,['article' => $article])--}}
                        {{--@endif--}}

                        {{--上传视频--}}
                        @php
                                $attribute = is_json($article->attribute) ? json_decode($article->attribute) : new \stdClass();
                        @endphp
                        <div class="form-group has-feedback  has-icon-right">
                            <label class="col-md-2 col-sm-2 control-label">视频</label>
                            <div class="col-md-5 col-sm-10">
                                <div class="panel">
                                    <div class="panel-body">
                                        @if(!isset($attribute->video_path))
                                            <img src="{{asset('images/video-none.png')}}" class="img-rounded" width="260px" height="200px" alt="">
                                        @else
                                        <h4 id="video_title_h4">{{ get_value($attribute, 'video_title', '') }}</h4>
                                        <video src="{{  storage_video_url($attribute->video_path ?? null) }}" id="video_path" controls="controls" style="width: 300px;"></video>
                                        @endif
                                    {{--    <input id="upload_video_id" type="hidden" name="attribute[video_id]" value="{{ get_value($attribute, 'video_id', '') }}" >--}}
                                        <input id="upload_video_path" type="hidden" name="attribute[video_path]" value="{{ get_value($attribute, 'video_path', '') }}" >
                                        <input id="upload_video_title" type="hidden" name="attribute[video_title]" value="{{ get_value($attribute, 'video_title', '') }}" >
                                        <button id="upload_video" type="button" class="btn btn-info uploader-btn-browse"><i class="icon icon-upload"></i> 上传</button>
                                        {{--<button id="delete_video" type="button" class="btn btn-danger"><i class="icon icon-remove-sign"></i> 删除</button>--}}
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group has-feedback has-icon-right">
                            <label for="author" class="col-md-2 col-sm-2 control-label">作者</label>
                            <div class="col-md-5 col-sm-10">
                            <input type="text" name="author" autocomplete="off" class="form-control" value="{{ old('author',$article->author) }}"
                                   data-fv-trigger="blur"
                                   minlength="1"
                                   maxlength="64"
                            ></div>
                        </div>

                        <div class="form-group has-feedback has-icon-right">
                            <label class="col-md-2 col-sm-2 control-label required">排序</label>
                            <div class="col-md-5 col-sm-10">
                                <input type="number" name="order" autocomplete="off" class="form-control" value="{{ old('order',$article->order ?: '999') }}"
                                       required
                                       data-fv-trigger="blur"
                                       min="1"
                                       max="9999"
                                ></div>
                        </div>

                        <div class="form-group has-feedback has-icon-right">
                            <label for="template" class="col-md-2 col-sm-2 control-label">模板</label>
                            <div class="col-md-5 col-sm-10">
                            @php
                                $templates = get_active_template('article', 'show');
                                $template = old('template',$article->template);
                            @endphp
                            <select name="template" class="form-control">
                                @foreach($templates as $key => $val)
                                    <option @if($template == $key) selected="selected" @endif value="{{$key}}">{{$val}}</option>
                                @endforeach
                            </select>
                            </div>
                        </div>
                       {{--
                        <div class="form-group has-feedback has-icon-right">
                            <label for="is_link" class="col-md-2 col-sm-2 control-label">链接类型</label>
                            <div class="col-md-5 col-sm-10">
                            <div class="radio">
                                <label class="radio-inline">
                                    <input type="radio" name="is_link" value="0" @if($article->is_link == '0') checked="" @endif > 内链
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="is_link" value="1" @if($article->is_link == '1') checked="" @endif > 外链
                                </label>
                            </div>
                            </div>
                        </div>
--}}


                       <div class="form-group has-feedback has-icon-right">
                            <label for="link" class="col-md-2 col-sm-2 control-label">案例链接</label>
                            <div class="col-md-5 col-sm-10">
                                <input type="text" name="link[case]" autocomplete="off" class="form-control" value="{{ old('link.case',$article->link['case']) }}"
                                       data-fv-trigger="blur"
                                       minlength="1"
                                       maxlength="255"
                                ></div>
                        </div>
                        <div class="form-group has-feedback has-icon-right">
                            <label for="link" class="col-md-2 col-sm-2 control-label">参会链接</label>
                            <div class="col-md-5 col-sm-10">
                                <input type="text" name="link[attend]" autocomplete="off" class="form-control" value="{{ old('link.attend',$article->link['attend']) }}"
                                       data-fv-trigger="blur"
                                       minlength="1"
                                       maxlength="255"
                                ></div>
                        </div>
                        <div class="form-group has-feedback has-icon-right">
                            <label for="link" class="col-md-2 col-sm-2 control-label">下载资料链接</label>
                            <div class="col-md-5 col-sm-10">
                                <input type="text" name="link[material]" autocomplete="off" class="form-control" value="{{ old('link.material',$article->link['material']) }}"
                                       data-fv-trigger="blur"
                                       minlength="1"
                                       maxlength="255"
                                ></div>
                        </div>

                        <div class="form-group has-feedback has-icon-right">
                            <label for="" class="col-md-2 col-sm-2 control-label required">状态</label>
                            <div class="col-md-5 col-sm-10">
                            <div class="radio">
                                <label class="radio-inline">
                                    <input type="radio" name="status" value="0" @if($article->status == 0) checked="" @endif required > 隐藏
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="status" value="1" @if($article->status == 1) checked="" @endif required > 显示
                                </label>
                            </div>
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="col-md-offset-2 col-md-5 col-sm-10">
                                <input type="hidden" name="object_id" value="{{ $object_id }}" />
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

    @include('backend::common._upload_image_scripts',['elem' => '#upload_thumb', 'previewElem' => '#image_image', 'fieldElem' => '#form_thumb', 'folder'=>'article', 'object_id'=>$object_id])
    @include('backend::common._delete_image_scripts',['elem' => '#delete_thumb', 'previewElem' => '#image_image', 'fieldElem' => '#form_thumb', ])

    @include('backend::common._upload_video_scripts',['elem' => '#upload_video', 'previewElem' => '#video_title_h4', 'fieldTitleElem' => '#upload_video_title', 'fieldPathElem' => '#upload_video_path', 'fieldVideoElem' => '#video_path', 'folder'=>'video', 'object_id'=>$object_id])
@stop