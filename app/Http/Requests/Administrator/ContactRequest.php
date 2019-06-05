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

namespace App\Http\Requests\Administrator;

use Illuminate\Validation\Rule;

class ContactRequest extends Request
{
    public function rules()
    {
        return [
            'name' => 'required|array',
            'address' => 'required|array',
            'tel' => 'required|min:1',
            'email' => 'required|email',
            'zip_code' => 'required|numeric|digits_between:6,6',
        ];

    }

    public function attributes()
    {
        return [
            'zip_code' => '邮编',
        ];
    }
    
}
