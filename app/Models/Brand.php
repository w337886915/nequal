<?php
namespace App\Models;

use App\Events\BehaviorLogEvent;


/**
 * 友情链接模型
 *
 * Class Link
 * @package App\Models
 */
class Brand extends Model
{

    protected $fillable = ['id','name', 'url', 'order', 'image', 'brand_table_id', 'brand_table_type'];

    protected $dates = ['created_at', 'updated_at', 'deleted_at'];

    public $dispatchesEvents  = [
        'saved' => BehaviorLogEvent::class,
    ];

    public function titleName(){
        return 'name';
    }
}
