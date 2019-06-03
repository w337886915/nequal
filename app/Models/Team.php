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

/**
 * 公司管理层模型
 *
 * Class Slide
 * @package App\Models
 */
class Team extends Model
{
    protected $fillable = ['id', 'group', 'name', 'description', 'image', 'order'];

    protected $dates = ['created_at', 'updated_at'];

    protected $casts = [
        'name' => 'array',
        'description' => 'array'
    ];

}
