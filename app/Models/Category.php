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
 *
 * Class Category
 * @package Wanglelecc\Laracms\Models
 */
class Category extends \Wanglelecc\Laracms\Models\Category
{
   public function __construct(array $attributes = [])
   {
       $this->fillable = array_merge($this->fillable, ['en_name']);
   }
}