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

//use App\Http\Requests\Request;
use Wanglelecc\Laracms\Http\Requests\Administrator\CategoryRequest as ParentCategoryRequest;

class CategoryRequest extends ParentCategoryRequest
{
    /**
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|min:1|max:255',
            'en_name' => 'nullable|min:1|max:255',
            'keywords' => 'nullable|max:150',
            'description' => 'nullable|max:255',
            'parent' => 'required|integer',
            'order' => 'nullable|integer',
            'path' => 'nullable|max:255',
            'type' => 'required|alpha_dash|min:1|max:30',
            'link' => 'nullable|url|max:255',
            'template' => 'nullable|alpha_dash|max:255',
            'email' => 'nullable|email|min:1|max:255',
            'tel' => 'nullable|min:1|max:50'
        ];
    }

}
