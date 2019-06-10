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
                        'name'=>'required',
                        'phone'=>'required',
                        'company'=>'required',
                        'email'=>'required|email',
                        'position'=>'required',
                        'demand'=>'required'
                    ];
                }
            default:
                return [];
        }


    }
    public function messages()
    {
        $message = [
            'name.required'      =>'姓名不能为空',
            'phone.required'      =>'电话不能为空',
            'email.required'      =>'邮箱不能为空',
            'company.required'      =>'公司不能为空',
            'position.required'      =>'职位不能为空',
            'demand.required'      =>'需求不能为空'
        ];
        return $message;
    }


}
