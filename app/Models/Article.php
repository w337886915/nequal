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

namespace App\Models;

use DB;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * 分类模型
 */
class Article extends \Wanglelecc\Laracms\Models\Article
{

    protected $fillable = ['id','name','en_name', 'keywords', 'description', 'parent', 'order', 'path', 'type', 'link', 'template', 'email', 'tel'];

}
