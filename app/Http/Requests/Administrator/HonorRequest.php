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

class HonorRequest extends Request
{
    public function rules()
    {
        return [
            'name' => 'required|max:32',
            'image' => 'required|max:255',
            'order' => 'nullable|integer',
        ];

    }

    public function attributes()
    {
        return [
            'image' => '图片'
        ];
    }
}
