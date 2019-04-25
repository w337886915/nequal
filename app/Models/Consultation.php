<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Consultation extends Model
{
    //
    protected  $fillable = ['content','company','name','phone','province','salesman_phone','category'];
    protected $appends = ['isreadname'];

    public function getIsreadnameAttribute(){
        if(isset($this->attributes['isread'])){
            return $this->attributes['isread']?"已审阅":"未审阅";
        }else{
            return "未审阅";
        }

    }
}
