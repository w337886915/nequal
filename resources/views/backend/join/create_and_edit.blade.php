@extends('backend::layouts.app')

@section('title', $title = $join->id ? '编辑联系方式' : '添加联系方式' )

@section('breadcrumb')
    <a href="">站点设置</a>
    <a href="">联系方式</a>
    <a href="">{{$title}}</a>
@endsection

@section('content')
    <h2 class="header-dividing">{{$title}} <small></small></h2>
    <div class="row">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-body">
                    <form id="form-validator" class="form-horizontal" method="POST" action="{{ $join->id ? route('joins.update', $join->id) : route('joins.store') }}?redirect={{ previous_url() }}">
                        {{ csrf_field() }}
                        <input type="hidden" name="_method"  value="{{ $join->id ? 'PATCH' : 'POST' }}">

                        <div class="form-group has-feedback  has-icon-right">
                            <label for="name" class="col-md-2 col-sm-2 control-label required">职位名称</label>
                            <div class="col-md-5 col-sm-10">
                            <input type="text" class="form-control" id="name" name="name[cn]" autocomplete="off" placeholder="" value="{{ old('name.cn',fieldCN($join->name)) }}"
                                   required
                                   data-fv-trigger="blur"
                                   minlength="1"
                                   maxlength="128"
                            ></div>
                        </div>
                        <div class="form-group has-feedback  has-icon-right">
                            <label for="name" class="col-md-2 col-sm-2 control-label required">职位名称(英文)</label>
                            <div class="col-md-5 col-sm-10">
                                <input type="text" class="form-control" id="name" name="name[en]" autocomplete="off" placeholder="" value="{{ old('name.en',fieldEn($join->name)) }}"
                                       required
                                       data-fv-trigger="blur"
                                       minlength="1"
                                       maxlength="128"
                                ></div>
                        </div>

                        <div class="form-group has-feedback  has-icon-right">
                            <label for="type" class="col-md-2 col-sm-2 control-label required">工作地点</label>
                            <div class="col-md-5 col-sm-10">
                                <select name="place_id" class="chosen-select form-control" id="category_id" tabindex="2">
                                    @foreach($places as $index => $value)
                                        <option @if($join->place_id == $index) selected @endif value="{{$index}}">/ {{$value['cn']}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group has-feedback  has-icon-right">
                            <label for="keywords" class="col-md-2 col-sm-2 control-label required">关键词</label>
                            <div class="col-md-5 col-sm-10">
                                <input type="text" id="keywords" name="keywords[cn]" autocomplete="off" class="form-control" required value="{{ old('keywords.cn',fieldCN($join->keywords)) }}" placeholder="多个请用逗号(英文)隔开">
                            </div>
                        </div>
                        <div class="form-group has-feedback  has-icon-right">
                            <label for="keywords_en" class="col-md-2 col-sm-2 control-label required">关键词(英文)</label>
                            <div class="col-md-5 col-sm-10">
                                <input type="text" id="keywords_en" name="keywords[en]" autocomplete="off" class="form-control" required value="{{ old('keywords.en',fieldEn($join->keywords)) }}">
                            </div>
                        </div>

                        <div class="form-group has-feedback  has-icon-right">
                            <label for="content" class="col-md-2 col-sm-2 control-label">职位描述</label>
                            <div class="col-md-8 col-sm-10">
                                <textarea name="content[cn]" id="content" class="form-control editor" >{{  old('content.cn', fieldCN($join->content)) }}</textarea>
                            </div>
                        </div>
                        <div class="form-group has-feedback  has-icon-right">
                            <label for="content_en" class="col-md-2 col-sm-2 control-label">职位描述(英文)</label>
                            <div class="col-md-8 col-sm-10">
                                <textarea name="content[en]" id="content_en" class="form-control editor" >{{  old('content.en', fieldEn($join->content)) }}</textarea>
                            </div>
                        </div>
                        <div class="form-group has-feedback has-icon-right">
                            <label class="col-md-2 col-sm-2 control-label required">排序</label>
                            <div class="col-md-5 col-sm-10">
                                <input type="number" name="order" autocomplete="off" class="form-control"
                                       value="{{ old('order',$join->order ?: '999') }}"
                                       required
                                       data-fv-trigger="blur"
                                       min="1"
                                       max="9999">
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
    @include('backend::common._editor_scripts',[ 'folder'=>'article', 'object_id'=>0 ])
@endsection