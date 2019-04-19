<?php

/**
 * 前台示例控制器
 */
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SolutionsController extends Controller
{
    public function index(){
        return laravel_frontend_view('solutions');
    }
}
