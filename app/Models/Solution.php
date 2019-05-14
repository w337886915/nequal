<?php

namespace App\Models;

use App\Events\BehaviorLogEvent;

class Solution extends Model
{
    protected $fillable = ['id','name', 'image', 'order',];

    protected $dates = ['created_at', 'updated_at', 'deleted_at'];

    public $dispatchesEvents  = [
        'saved' => BehaviorLogEvent::class,
    ];

    public function titleName(){
        return 'name';
    }
}
