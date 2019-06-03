<?php

namespace App\Http\Controllers;

use App\Models\Resume;
use Illuminate\Http\Request;
use App\Handlers\UploadHandler;

class ResumeController extends Controller
{
    public function __construct()
    {
        $this->middleware('laracms.auth');
    }

    // 上传简历
    public function uploader(Request $request, UploadHandler $uploader)
    {
        // 检测是否是允许的类型
        if ( ! in_array( $request->folder, config('filesystems.uploader.folder', []) ) ) {
            return [
             'status' => false,
             'message' => '非法上传，上传类型错误'
            ];
        }

        // 判断是否有上传文件，并赋值给 $file
        if( !($file = $request->file('file')) ) {
            return [
                'status' => false,
                'message' => '上传文件不允许未空'
            ];
        }

        // 获取上传的类型
        $file_type = $request->file_type ?? 'file';

        // 检查文件大小是否合法
        if( $file->getSize() <= 0 ){
            return [
                'status' => false,
                'message' => '文件大小不能为: 0 '
            ];
        }

        // 获取文件的后缀名，因图片从剪贴板里黏贴时后缀名为空，所以此处确保后缀一直存在
        $extension = strtolower($file->getClientOriginalExtension()) ? : 'png';

        // 检查文件后缀是否是规则允许后缀
        if ( ! in_array($extension, config('filesystems.uploader.'.$file_type.'.allowed_ext')) ) {
            return [
                'status' => false,
                'message' => '文件类型错误!允许类型为:'.implode(',',config('filesystems.uploader.'.$file_type.'.allowed_ext'))
            ];
        }

        if( $file->getSize() > config('filesystems.uploader.'.$file_type.'.size_limit') ){
            $message = '大小不能超过 '. byte_to_size(config('filesystems.uploader.'.$file_type.'.size_limit')) .'';
            return [
                'status' => false,
                'message' => $message
            ];
        }

        // 保存附件到文件系统
        $result = $uploader->saveUploadFile( $file_type,$request->object_id ?? 0, $file, $request->folder, $request->editor ?? 0 );

        if($result){
            // 上传成功
            Resume::firstOrCreate([
                'job_id' => $request->get('job_id'),
                'file_id'  => $result['id'],
            ]);
            return [
                'status' => true,
                'message' => '上传成功'
            ];
        }else{
            // 上传失败
           return [
                'status' => false,
                'message' => '上传失败'
            ];
        }
    }

}
