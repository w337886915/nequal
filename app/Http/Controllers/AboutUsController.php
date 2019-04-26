<?php

/**
 * 前台示例控制器
 */
namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    public function index(){
        return laravel_frontend_view('aboutus');
    }
    public function show(Request $request,Article $acticle,Category $category){

       //$info = $acticle->with('categorys')->find($request->id);
        $category_list = $acticle->categorys()->first();
        $category_list->load('articles');
        //dd($category_list->toArray());
       //$cate_articles = $category_list->()->get();
      // dd($cate_articles);
        return frontend_view('aboutus.show',compact('acticle','category_list'));

    }
}
