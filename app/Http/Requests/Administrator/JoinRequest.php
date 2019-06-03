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

class JoinRequest extends Request
{
    public function rules()
    {
        return [
            'name' => 'required|array',
            'keywords' => 'required|array',
            'order' => 'nullable|integer',
            'content' => 'nullable|array',
            'place_id' => 'required|integer'
        ];

    }

    public function attributes()
    {
        return [
            'place_id' => '工作地点',
        ];
    }

}
