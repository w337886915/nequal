<?php

namespace App\Models;

use App\Events\BehaviorLogEvent;

class Honor extends Model
{
    protected $fillable = ['id','name','order', 'image', 'description'];

    protected $dates = ['created_at', 'updated_at'];

    protected $casts = [
        'name' => 'array'
    ];

    public $dispatchesEvents  = [
        'saved' => BehaviorLogEvent::class,
    ];

    public function titleName(){
        return 'name';
    }
}
