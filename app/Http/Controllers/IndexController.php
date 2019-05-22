<?php

/**
 * 前台示例控制器
 */
namespace App\Http\Controllers;

use App\Models\Slide;
use Illuminate\Http\Request;

class indexController extends Controller
{
    public function index(Slide $slide){
        $slides_list = $slide->where('group','1')->where('status',1)->limit(4)->order('order desc')->get();
        dd($slides_list->toArry());
        return laravel_frontend_view('index');
    }
    public function lang($lang){
        session(['lang'=>$lang]);
        header('location:'.$_SERVER['HTTP_REFERER']);

    }
}
