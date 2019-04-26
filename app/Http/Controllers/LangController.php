<?php

namespace App\Http\Controllers;

use http\Env\Response;
use Illuminate\Http\Request;

class LangController extends Controller
{
    //语言切换
    public function index(Request $request)
    {
        if(!$request->ajax()){
            return response()->json([
                'status' => false,
                'msg' => '请求方式错误'
            ]);
        }
        $lang = $request->get('lang');
        switch ($lang){
            case 'zh-CN':
                $now = 'en'; break;
            case 'en':
                $now = 'zh-CN'; break;
            default:
                $now = 'zh-CN'; break;
        }
        app()->setLocale($now);
        $request->session()->put('lang', $now);
        return response()->json([
            'status' => true,
            'msg' => 'ok'
        ]);
    }
}
