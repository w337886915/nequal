<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CasesController extends Controller
{
    //
    public function index(){
        return laravel_frontend_view('cases');
    }


    // 案例详情
    public function info($id)
    {
        return laravel_frontend_view('caseInfo');

    }

    public function list(){
        return laravel_frontend_view('caseList');
    }
}
