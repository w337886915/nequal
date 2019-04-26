<?php

/**
 * 前台示例控制器
 */
namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;

class SolutionsController extends Controller
{
    public function index(Request $request,Category $category){

        $get_level_one = $category->findOrFail(14)->toArray();
        $get_level_two = $category->with(['articles' => function ($query) {
            $query->select('title','id');
        }])->where('parent',14)->get();
        $output['get_level_one'] = $get_level_one;
        $output['get_level_two'] = $get_level_two->toArray();
        //dd($output);
        //dd($get_level_two);
        //dd($get_level_one);
        //dd($output);
        return frontend_view('solutions',$output);
    }
    public function show(Request $request,Article $article){
        $info = $article->with('categorys')->find($request->id);
        return frontend_view('solutions.show',compact('info'));
    }
}
