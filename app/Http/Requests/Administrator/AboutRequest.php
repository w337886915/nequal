<?php
namespace App\Http\Requests\Administrator;

use Illuminate\Validation\Rule;

class AboutRequest extends Request
{
    public function rules()
    {
        return [
            'sub_title' => 'required|array',
            'position' => 'required|'.Rule::in(['left','right']),
            'content' => 'required|array',
            'thumb' => 'required|max:255',
        ];
    }
    
    public function attributes(){
        return [
            'thumb' => '图片',
        ];
    }
}
