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

use App\Models\Brand;
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
    public function index(Slide $slide, Brand $brand)
    {
        $active = 'index';

        //获取服务品牌列表
        $brands = $brand->ordered()->get();

        return frontend_view('index',compact('slides' ,'active', 'brands'));
    }

    /**
     * 站点地图
     */
    public function map(){
        return frontend_view('map');
    }
}
