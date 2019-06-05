<script type="text/javascript">

    var message = null;

    var uploader = WebUploader.create({
        // swf文件路径
        swf: "{{asset('vendor/laracms/plugins/webuploader/Uploader.swf')}}",
        // 文件接收服务端。
        server: "{{ route('uploader') }}?file_type=video&folder={{$folder}}&object_id={{$object_id}}",
        // 选择文件的按钮。可选。
        // 内部根据当前运行是创建，可能是input元素，也可能是flash.
        pick: "{{ $elem }}",
        formData: {
            _token:'{{csrf_token()}}'
        },
        // 不压缩image, 默认如果是jpeg，文件上传前会压缩一把再上传！
        resize: false,
        chunked: false, // 是否分片
        chunkSize:5242880, // 单片大小，默认5MB
        fileVal: 'upload_file',
        accept: {
            title: 'Video',
            extensions: '{{ implode(',', config('filesystems.uploader.video.allowed_ext'))  }}',
            mimeTypes: 'video/mp4'
        },
        fileNumLimit: 100,
        fileSingleSizeLimit: {{ config('filesystems.uploader.video.size_limit') }},
        auto: true
    });

    uploader.on('error', function (type) {
        console.log(type);
        if( type == 'Q_TYPE_DENIED'){
            new $.zui.Messager('文件类型错误,请选择: {{ implode(',', config('filesystems.uploader.video.allowed_ext'))  }} 格式文件', {
                type : 'warning',
                icon: 'icon icon-info-sign'
            }).show();
        }else if( type == 'F_EXCEED_SIZE'){
            new $.zui.Messager('文件大小不能超过: {{ byte_to_size(config('filesystems.uploader.video.size_limit')) }}', {
                type : 'warning',
                icon: 'icon icon-info-sign'
            }).show();
        }else if( type == 'Q_EXCEED_NUM_LIMIT' ){
            new $.zui.Messager('单次只能上传100个文件，请勿过多选择.', {
                type : 'warning',
                icon: 'icon icon-info-sign'
            }).show();
        }
    });

    //前一个文件未传完，不能再添加文件
    uploader.on('beforeFileQueued', function (file) {
        console.log('加入队列之前',file.source);
        var stats = uploader.getStats();
        if(stats.progressNum > 0){
            new $.zui.Messager('请等待上一个文件传完！', {
                type : 'danger',
                icon: 'icon icon-remove-sign',
                placement : 'bottom-left',
                time : 3000,
                close: false
            }).show();
            return false;
        }
    });

    // 文件加入队列后开始上传
    uploader.on('fileQueued', function (file) {
        console.log('文件被加入队列后',file);
        message = new $.zui.Messager('计算文件校验值中...', {
            type : 'info',
            icon: 'icon icon-spin icon-spinner-indicator',
            placement : 'bottom-left',
            time : 0,
            close: false
        }).show();

        uploader.md5File(file.source).fail(function () {
            // console.log('计算文件MD5值....');
        }).progress(function (percentage) {
            console.log('读取文件进度:' + parseInt(percentage * 100) + "%");
        }).then(function (md5Value) {
            console.log('文件验证完毕. MD5:' + md5Value);
            message.hide(); // 关闭消息
            // file.md5 = md5Value;
        });
    });

    uploader.on('uploadSuccess', function (file, response) {
        // console.log(response);
        if (response.success == true) {
            $("{{$fieldPathElem}}").val(response.path);
            $("{{$fieldVideoElem}}").attr('src', response.url);
            $("{{$fieldTitleElem}}").val(response.original);
            $("{{$previewElem}}").html(response.original);
        }
    });
</script>