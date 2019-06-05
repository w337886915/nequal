<?php

namespace App\Models;


use Illuminate\Database\Eloquent\SoftDeletes;

class Resume extends Model
{
    use SoftDeletes;

    protected $fillable = ['id', 'job_id', 'file_id',];

    protected $dates = ['created_at', 'updated_at', 'deleted_at'];


    // 和表join的关联
    public function job(){
        return $this->belongsTo(Join::class, 'job_id', 'id');
    }

    // 和file表的关联
    public function file(){
        return $this->hasOne(File::class, 'id', 'file_id');
    }

}
