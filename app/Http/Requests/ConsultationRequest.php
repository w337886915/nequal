<?php
/**
 * LaraCMS - CMS based on laravel
 *
 * @category  LaraCMS
 * @package   Laravel
 * @author    Wanglelecc <wanglelecc@gmail.com>
 * @date      2018/06/06 09:08:00
 * @copyright Copyright 2018 LaraCMS
 * @license   https://opensource.org/licenses/MIT
 * @github    https://github.com/wanglelecc/laracms
 * @link      https://www.laracms.cn
 * @version   Release 1.0
 */

namespace App\Http\Requests;

class ConsultationRequest extends Request
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        switch($this->method())
        {
            case 'POST':
                {
                    return [
                        'content'=>'required',
                        'name'=>'required',
                        'phone'=>'required|regex:/^1[3456789]\d{9}$/',
                        'province'=>'required'
                    ];
                }
            default:
                return [];
        }


    }
    public function messages()
    {
        $message = [
            'phone.required'      =>'手机号码不能为空',
            'phone.regex'      =>'手机号码不正确',
            'content.required'      =>'咨询内容不能为空',
            'province.required'      =>'所在地不能为空',
            'name.required'      =>'称呼不能为空'
        ];
        return $message;
    }


}
