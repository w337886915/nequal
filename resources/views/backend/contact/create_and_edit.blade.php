@extends('backend::layouts.app')

@section('title', $title = $contact->id ? '编辑联系方式' : '添加联系方式' )

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
                    <form id="form-validator" class="form-horizontal" method="POST" action="{{ $contact->id ? route('contacts.update', $contact->id) : route('contacts.store') }}?redirect={{ previous_url() }}">
                        {{ csrf_field() }}
                        <input type="hidden" name="_method"  value="{{ $contact->id ? 'PATCH' : 'POST' }}">

                        <div class="form-group has-feedback  has-icon-right">
                            <label for="name" class="col-md-2 col-sm-2 control-label required">名称</label>
                            <div class="col-md-5 col-sm-10">
                            <input type="text" class="form-control" id="name" name="name[cn]" autocomplete="off" placeholder="" value="{{ old('name.cn',fieldCN($contact->name)) }}"
                                   required
                                   data-fv-trigger="blur"
                                   minlength="1"
                                   maxlength="128"
                            ></div>
                        </div>
                        <div class="form-group has-feedback  has-icon-right">
                            <label for="name" class="col-md-2 col-sm-2 control-label required">名称(英文)</label>
                            <div class="col-md-5 col-sm-10">
                                <input type="text" class="form-control" id="name" name="name[en]" autocomplete="off" placeholder="" value="{{ old('name.en',fieldEn($contact->name)) }}"
                                       required
                                       data-fv-trigger="blur"
                                       minlength="1"
                                       maxlength="128"
                                ></div>
                        </div>

                        <div class="form-group has-feedback  has-icon-right">
                            <label for="address" class="col-md-2 col-sm-2 control-label required">地址</label>
                            <div class="col-md-5 col-sm-10">
                                <input type="text" class="form-control" id="address" name="address[cn]" autocomplete="off" placeholder="" value="{{ old('address.cn',fieldCN($contact->address)) }}"
                                       required
                                       data-fv-trigger="blur"
                                       minlength="1"
                                       maxlength="128"
                                ></div>
                        </div>
                        <div class="form-group has-feedback  has-icon-right">
                            <label for="address_en" class="col-md-2 col-sm-2 control-label required">地址(英文)</label>
                            <div class="col-md-5 col-sm-10">
                                <input type="text" class="form-control" id="address_en" name="address[en]" autocomplete="off" placeholder="" value="{{ old('address.en',fieldEn($contact->address)) }}"
                                       required
                                       data-fv-trigger="blur"
                                       minlength="1"
                                       maxlength="128"
                                ></div>
                        </div>

                        <div class="form-group has-feedback  has-icon-right">
                            <label for="tel" class="col-md-2 col-sm-2 control-label required">联系电话</label>
                            <div class="col-md-5 col-sm-10">
                                <input type="text" class="form-control" id="tel" name="tel" autocomplete="off" placeholder="" value="{{ old('tel',$contact->tel) }}"
                                       required
                                       data-fv-trigger="blur"
                                       minlength="1"
                                       maxlength="50"
                                ></div>
                        </div>
                        <div class="form-group has-feedback  has-icon-right">
                            <label for="email" class="col-md-2 col-sm-2 control-label required">联系邮箱</label>
                            <div class="col-md-5 col-sm-10">
                                <input type="text" class="form-control" id="email" name="email" autocomplete="off" placeholder="" value="{{ old('email',$contact->email) }}"
                                       required
                                       data-fv-trigger="blur"
                                       minlength="1"
                                       maxlength="128"
                                ></div>
                        </div>
                        <div class="form-group has-feedback  has-icon-right">
                            <label for="zip_code" class="col-md-2 col-sm-2 control-label required">邮编</label>
                            <div class="col-md-5 col-sm-10">
                                <input type="text" class="form-control" id="zip_code" name="zip_code" autocomplete="off" placeholder="" value="{{ old('zip_code',$contact->zip_code) }}"
                                       required
                                       data-fv-trigger="blur"
                                       minlength="6"
                                       maxlength="6"
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

@endsection