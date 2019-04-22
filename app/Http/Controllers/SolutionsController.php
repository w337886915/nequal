<?php

/**
 * 前台示例控制器
 */
namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class SolutionsController extends Controller
{
    public function index(){
        $category_model = new Category();
        $get_level_one = $category_model->findOrFail(14)->toArray();
        $get_level_two = $category_model->with('articles')->where('parent',14)->get();
        $output['get_level_one'] = $get_level_one;
        $output['get_level_two'] = $get_level_two->toArray();

        //dd($get_level_two);
        //dd($get_level_one);
        //dd($output);
        return laravel_frontend_view('solutions',$output);
    }
}
