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

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;
use App\Events\BehaviorLogEvent;


/**
 * 友情链接模型
 *
 * Class Link
 * @package App\Models
 */
class Contact extends Model
{
    use SoftDeletes;

    protected $fillable = ['id', 'name', 'address', 'email', 'tel', 'zip_code'];

    protected $dates = ['created_at', 'updated_at'];

    protected $casts = [
        'name' => 'array',
        'address' => 'array',
    ];


    public $dispatchesEvents = [
        'saved' => BehaviorLogEvent::class,
    ];

    public function titleName()
    {
        return 'name';
    }

    public function canDestroy()
    {
        // 检查是否有发布的职位
        $count = Join::where('place_id', $this->id)->count();
        if($count){
            return '该联系方式下有发布的职位,无法删除！';
        }
        return true;
    }
}
