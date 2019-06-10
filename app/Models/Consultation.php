<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Consultation extends Model
{
    protected $fillable = ['name', 'phone', 'email', 'company', 'position', 'demand', 'is_read'];

    protected $appends = ['isreadname'];

    public function getIsreadnameAttribute()
    {
        if (isset($this->attributes['is_read'])) {
            return $this->attributes['isread'] ? "已读" : "未读";
        } else {
            return "未读";
        }
    }
}
