<?php

namespace App\Models;

use App\Events\BehaviorLogEvent;
use Illuminate\Database\Eloquent\SoftDeletes;

class About extends Model
{
    use SoftDeletes;

    protected $fillable = ['id','sub_title', 'content',  'thumb'];

    protected $dates = ['created_at', 'updated_at', 'deleted_at'];

    protected $casts = [
        'sub_title' => 'array',
        'content' => 'array'
    ];

    public $dispatchesEvents  = [
        'saved' => BehaviorLogEvent::class,
    ];

    public function titleName(){
        return 'sub_title';
    }
}
