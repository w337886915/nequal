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

class SolutionRequest extends Request

{
    public function rules()
    {

//        dd($this->all());
        switch($this->method())
        {
            // CREATE
            case 'POST':
                return [
                    'brand_ids' => 'nullable|array',
                    'brand_ids.*' => 'integer',
                    'name' => 'required|array',
                    'sub_name' => 'nullable|array',
                    'introduction' => 'required|array',
                    'introduction.*' => 'required',
                    'advantage' => 'required|array',
                    'advantage.*' => 'required',
                    'thumb' => 'nullable|max:255',
                    'order' => 'nullable|integer',
                    'status' => 'nullable|integer',
                    'email' => 'nullable|email',
                    'tel' => 'nullable|integer',
                ];
            // UPDATE
            case 'PUT':
            case 'PATCH':
//                dd($this->get('introduction'));
                return [
                    'brand_ids' => 'nullable|array',
                    'brand_ids.*' => 'integer',
                    'name' => 'required|array',
                    'sub_name' => 'required|array',
                    'introduction' => 'required|array',
                    'introduction.*' => 'required',
                    'advantage' => 'required|array',
                    'advantage.*' => 'required',
                    'thumb' => 'nullable|max:255',
                    'order' => 'nullable|integer',
                    'status' => 'nullable|integer',
                    'email' => 'nullable|email',
                    'tel' => 'nullable|integer',
                ];

            case 'GET':
            case 'DELETE':
            default:
                return [];
        }
    }

    public function attributes()
    {
        return [
            'brand_ids' => '服务品牌',
            'introduction.*' => '产品概述(中/英)',
            'advantage.*' => '产品优势(中/英)',
        ];
    }
}
