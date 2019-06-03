<?php

namespace App\Models;

use App\Events\BehaviorLogEvent;

class Join extends Model
{
    protected $fillable = ['id','name', 'keywords', 'order', 'content', 'place_id'];

    protected $dates = ['created_at', 'updated_at'];

    protected $casts = [
        'name'=>'array',
        'keywords' => 'array',
        'content' => 'array'
    ];

    public $dispatchesEvents  = [
        'saved' => BehaviorLogEvent::class,
    ];

    public function titleName(){
        return 'name';
    }


    public function place()
    {
        return $this->hasOne(Contact::class, 'id', 'place_id');
    }



}
