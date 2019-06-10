<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class Consultation extends Model
{
    use SoftDeletes;

    protected $fillable = ['name', 'phone', 'email', 'company', 'position', 'demand', 'is_read'];

    protected $appends = ['isreadname'];

    public function getIsreadnameAttribute()
    {
        if (isset($this->attributes['is_read'])) {
            return $this->attributes['is_read'] ? "已读" : "未读";
        } else {
            return "未读";
        }
    }
}
