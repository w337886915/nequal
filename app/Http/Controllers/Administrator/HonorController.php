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
 * @brand      https://www.laracms.cn
 * @version   Release 1.0
 */

namespace App\Http\Controllers\Administrator;

use App\Models\Honor;
use Illuminate\Http\Request;
use App\Http\Requests\Administrator\HonorRequest;

/**
 * 友情链接
 *
 * Class BrandsController
 * @package App\Http\Controllers\Administrator
 */
class HonorController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    
        static::$activeNavId = 'website.company.honor';
    }


    // 公司荣誉列表
    public function index(Honor $honor)
    {
        $this->authorize('index', $honor);

        $honors = $honor->ordered()->recent()->paginate(20);

        return backend_view('honor.index', compact('honors'));

    }

    // 新建公司荣誉
    public function create(Honor $honor)
    {
        $this->authorize('create', $honor);

        return backend_view('honor.create_and_update', compact('honor'));

    }

    public function store(HonorRequest $request, Honor $honor)
    {
        $this->authorize('create', $honor);

        Honor::create($request->all());

        return redirect()->route('administrator.company.honor')->with('success', '添加成功.');

    }

    // 更新公司荣誉
    public function edit(Honor $honor)
    {
        $this->authorize('update', $honor);

        return backend_view('honor.create_and_update', compact('honor'));

    }

    public function update(HonorRequest $request, Honor $honor)
    {
        $this->authorize('update', $honor);

        $honor->update($request->all());

        return $this->redirect('administrator.company.honor')->with('success', '更新成功.');

    }

    // 删除公司荣誉图片
    public function destroy(Honor $honor)
    {
        $this->authorize('destroy', $honor);

        $honor->delete();

        return $this->redirect()->with('success', '删除成功.');
    }
}