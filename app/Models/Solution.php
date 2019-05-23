<?php

namespace App\Models;

use App\Events\BehaviorLogEvent;
use Illuminate\Database\Eloquent\SoftDeletes;

class Solution extends Model
{
   use SoftDeletes;

    protected $fillable = ['id','name','sub_name','introduction', 'advantage', 'thumb', 'order','status','email', 'tel'];

    protected $dates = ['created_at', 'updated_at', 'deleted_at'];

    protected $casts = [
        'name' => 'array',
        'sub_name' => 'array',
        'introduction' => 'array',
        'advantage' => 'array',

    ];

    public $dispatchesEvents  = [
        'saved' => BehaviorLogEvent::class,
    ];

    public function titleName(){
        return 'name';
    }
}
