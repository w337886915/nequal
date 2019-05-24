<?php

namespace App\Http\Controllers;

use App\Handlers\CategoryHandler;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;

class CasesController extends Controller
{

    // 案例首页
    public function index(CategoryHandler $categoryHandler, Category $category){
        $active = '成功案例';
        // 服务品牌分类ID
        $brandId = 15;
        $caseId = 2;
        $childs = $categoryHandler->withRecursion(Category::all(),$category->id);
        $first_child_id = !empty($childs) ? $childs[0]->id : 0;
        // 判断子类下是否有文章
        $childHasArtricle = false;
        foreach ($childs as $child){
            if($child->articles()->get()->count()){
                $childHasArtricle = true;
                break;
            }
        }

        $cases= $category->articles()->active()->ordered()->recent()->get();
        $brands = Category::with('articles')->find($brandId);

        return frontend_view('cases.index', compact('category','cases', 'brands', 'first_child_id', 'childHasArtricle'));
    }


    // 分类显示
    public function category(CategoryHandler $categoryHandler, Category $category, Category $child)
    {
        $childs = $categoryHandler->withRecursion(Category::all(), $category->id);

        $articles = $child->articles()->active()->ordered()->recent()->paginate(10);

        return frontend_view('cases.category',compact('category', 'child', 'childs', 'articles'));
    }

    // 分类显示
    public function list(Category $category)
    {
        $articles = $category->articles()->active()->ordered()->recent()->paginate(10);
        return frontend_view('cases.category',compact('category', 'articles'));
    }

    // 案例详情
    public function info(Article $article)
    {
        $category= $article->categorys()->orderBy('category_id', 'desc')->limit(1)->first();
        $pre = $category->articles()->where('id', '<',$article->id)->orderBy('id','desc')->limit(1)->get();
        $next = $category->articles()->where('id', '>',$article->id)->orderBy('id','asc')->limit(1)->get();

        return frontend_view('cases.info', compact( 'article', 'pre', 'next'));

    }
}
