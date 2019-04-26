<?php
/**
 * LaraCMS - CMS based on laravel
 *
 * @category  LaraCMS
 * @package   Laravel
 * @author    Wanglelecc <wanglelecc@gmail.com>
 * @date      2018/06/06 09:08:00
 * @copyright Copyright 2018 LaraCMS
 * @license   https://opensource.org/licenses/MIT
 * @github    https://github.com/wanglelecc/laracms
 * @link      https://www.laracms.cn
 * @version   Release 1.0
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Slide;

/**
 * 前台公共控制器
 *
 * Class WelcomeController
 * @package App\Http\Controllers
 */
class WelcomeController extends Controller
{
    /**
     * 前台首页
     *
     * @return mixed
     */
    public function index(Slide $slide)
    {
        $slides_list = $slide->where('group',1)->where('status','1')->orderby('order','desc')->get();
        $slides_list = $slides_list->toArray();
        //解决方案
        
        //dd($slides_list);
//        return frontend_view('welcome');
        return frontend_view('index',compact('slides_list'));
    }

    /**
     * 关于我们
     */
    public function company(){
        return frontend_view('company');
    }

    /**
     * 站点地图
     */
    public function map(){
        return frontend_view('map');
    }
}
