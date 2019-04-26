@extends('frontend.customize.layouts.app')
@section('style')
    <link rel="stylesheet" href="{{asset('vendor/nequal/css/frontend.css')}}"/>
    <style>
        .page-content-wrapper{
            margin-top: 0;
        }
        .page-content-wrapper .container .page-content {
            min-height: 500px;
        }

        .zxsq {
            text-align: center;
        }
    </style>

@endsection
@section('content')
    @include('frontend.customize.layouts.navbar', ['active' => '解决方案', 'fixdBackgroud' => true])
    <div class="page-content-wrapper products">
        <div class="container">
            <div class="page-title">
                <h2>{{$info['title']}}</h2>
            </div>
            <div class="page-content">
                {!! html_entity_decode($info['content']) !!}
            </div>
        </div>
        <div class="zxsq">
            <button class="btn btn-primary apply" data-email="{{$info['categorys'][0]['email']}}" data-tel="{{$info['categorys'][0]['tel']}}" data-name="{{$info['title']}}">咨询试用</button>
        </div>
    </div>
    <div class="modal fade alert-modal-css form-wrapper in" id="feedback-modal" tabindex="-1" role="dialog"
         aria-labelledby="feedback-modal-label" data-keyboard="false" data-backdrop="true" style="display: none;">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">×</span></button>
                    <h4 class="modal-title" id="feedback-modal-label">申请咨询/试用</h4>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal" id="feedback-form" action="/consultation" accept-charset="UTF-8"
                          data-remote="true" method="post"><input name="utf8" type="hidden" value="✓"><input
                                type="hidden" name="authenticity_token"
                                value="/nKYt2EwTAz6lJ7XNHyAhbEv0CW3gfcbddK5rg1mUYlRCqNmNYL7kNU+8bEQWWLb1cGWZqSxgC0FqNB4BS/48w==">
                        {{ csrf_field() }}
                        <div class="tips text-center d-none">

                        </div>


                        <div class="form-group valid-bottom-border">
                            <label for="feedback-content" class="col-sm-2 control-label">咨询内容</label>
                            <div class="col-sm-10">
                                <textarea maxlength="255" placeholder="请详细描述您的需求" class="form-control"
                                          id="feedback-content" name="content" cols="" rows="5"></textarea>
                            </div>
                        </div>

                        <div class="form-group valid-up-border">
                            <label for="feedback-company" class="col-sm-2 control-label">公司名称</label>
                            <div class="col-sm-10">
                                <input class="form-control" placeholder="请输入您的公司名" id="feedback-company" type="text"
                                       name="company">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="feedback-name" class="col-sm-2 control-label">
                                <small class="text-danger required-mark">*</small>
                                称呼</label>
                            <div class="col-sm-10">
                                <input class="form-control" placeholder="请输入您的称呼" id="feedback-name" validate="true"
                                       type="text" name="name">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="feedback-phone" class="col-sm-2 control-label">
                                <small class="text-danger required-mark">*</small>
                                电话</label>
                            <div class="col-sm-10">
                                <input class="form-control" placeholder="请输入您的手机号" id="feedback-phone" validate="true"
                                       validate="true" type="phone" name="phone">

                            </div>
                        </div>
                        <div class="form-group">
                            <label for="feedback-city" class="col-sm-2 control-label">
                                <small class="text-danger required-mark">*</small>
                                地区</label>
                            <div class="col-sm-10" id="province_city" required="true">
                                <select name="province" id="province" class="province form-control" style="">
                                    <option value="">请选择</option>
                                    <option value="北京市">北京市</option>
                                    <option value="天津市">天津市</option>
                                    <option value="河北省">河北省</option>
                                    <option value="山西省">山西省</option>
                                    <option value="内蒙古自治区">内蒙古自治区</option>
                                    <option value="辽宁省">辽宁省</option>
                                    <option value="吉林省">吉林省</option>
                                    <option value="黑龙江省">黑龙江省</option>
                                    <option value="上海市">上海市</option>
                                    <option value="江苏省">江苏省</option>
                                    <option value="浙江省">浙江省</option>
                                    <option value="安徽省">安徽省</option>
                                    <option value="福建省">福建省</option>
                                    <option value="江西省">江西省</option>
                                    <option value="山东省">山东省</option>
                                    <option value="河南省">河南省</option>
                                    <option value="湖北省">湖北省</option>
                                    <option value="湖南省">湖南省</option>
                                    <option value="广东省">广东省</option>
                                    <option value="广西壮族自治区">广西壮族自治区</option>
                                    <option value="海南省">海南省</option>
                                    <option value="重庆市">重庆市</option>
                                    <option value="四川省">四川省</option>
                                    <option value="贵州省">贵州省</option>
                                    <option value="云南省">云南省</option>
                                    <option value="西藏自治区">西藏自治区</option>
                                    <option value="陕西省">陕西省</option>
                                    <option value="甘肃省">甘肃省</option>
                                    <option value="青海省">青海省</option>
                                    <option value="宁夏回族自治区">宁夏回族自治区</option>
                                    <option value="新疆维吾尔自治区">新疆维吾尔自治区</option>
                                    <option value="香港特别行政区">香港特别行政区</option>
                                    <option value="澳门特别行政区">澳门特别行政区</option>
                                    <option value="台湾">台湾</option>
                                </select>

                            </div>
                        </div>

                        <div class="actions" style="text-align: center">
                            <button onclick="submitForm()" type="button" class="btn btn-primary submit-btn">提交</button>
                            <input type="hidden" name="category" id="category">
                            <input type="hidden" name="salesman_phone" id="Salesman_phone">
                        </div>

                        <div class="tips text-center bottom-tips ">
                            <p></p>
                            <p>可以发邮件到 <span class="tips-dark" id="email"></span> 咨询</p>
                            <p>您也可以拨打 <span class="tips-dark" id="tel"></span> 进行电话咨询</p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script-content')
    <link href="https://cdn.bootcss.com/bootstrap-validator/0.5.3/css/bootstrapValidator.min.css" rel="stylesheet">
    <script src="https://cdn.bootcss.com/bootstrap-validator/0.5.3/js/bootstrapValidator.min.js"></script>
    <script src="{{asset('js/bootbox.min.js')}}"></script>
    <script>
        $(function () {
            $(".apply").click(function () {
                var _this = $(this)
                $("#email").html(_this.attr('data-email'))
                $("#tel").html(_this.attr('data-tel'))
                $("#category").val(_this.attr('data-name'))
                $("#Salesman_phone").val(_this.attr('data-tel'))
                $("#feedback-modal").modal('show')

            })
            $('#feedback-form').bootstrapValidator({
                fields: {
                    //验证手机
                    'phone': {          //input中的name 值
                        validators: {

                            notEmpty: {
                                message: '手机号不能为空'
                            },
                            regexp: {
                                regexp: /^1[3456789]\d{9}$/,
                                message: '手机号码不正确'
                            }

                        }
                    },
                    'province': {
                        validators: {
                            notEmpty: {
                                message: '请选择你所在地'
                            }
                        }
                    },
                    'name': {
                        validators: {
                            notEmpty: {
                                message: '称呼不能为空'
                            }
                        }
                    },
                    'content': {
                        validators: {
                            notEmpty: {
                                message: '咨询内容不能为空'
                            }
                        }
                    }


                }
            });
        })

        function submitForm() {

            var $form = $('#feedback-form');
            $form.data("bootstrapValidator").validate(); // 手动验证
            var isValid = $form.data("bootstrapValidator").isValid(); // 是否验证成功
            if (isValid) {
                var url = $form.attr("action");
                $.ajax({
                    url: url,
                    type: "post",
                    async: true, // 是否异步请求（此处需这只为异步请求true，否则bootstrap的modal不会顺序显示）
                    cache: false, // 是否缓存此页面，每次都请求服务器
                    contentType: "application/x-www-form-urlencoded", // 内容编码类型，默认
                    dataType: "json", // 预期服务器返回数据格式
                    timeout: 60000, // 超时时间，60s
                    data: $form.serialize(), // 请求参数
                    beforeSend: function (xhr) {

                    }, // 发送请求预处理
                    error: function (xhr, errMsg, e) {

                        //console.log(xhr.responseJSON.errors);
                        var error = xhr.responseJSON.errors;
                        var str = "";
                        for (var i in error) {
                            for (var n in error[i]) {
                                str += error[i][n] + ";"
                            }
                        }
                        bootbox.alert(str);
                        // bootbox.alert("请求服务器失败！");
                    }, // 请求服务器失败的处理
                    dataFilter: function (data, type) {
                        return data;
                    }, // 请求成功预处理，返回的值为success的参数data
                    success: function (data) {
                        bootbox.alert("提交成功");
                        $("#feedback-modal").modal('hide')

                    }
                });
            }
        }

    </script>

@endsection



