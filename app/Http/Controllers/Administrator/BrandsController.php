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

use App\Models\Brand;
use Illuminate\Http\Request;
use App\Http\Requests\Administrator\BrandRequest;

/**
 * 友情链接
 *
 * Class BrandsController
 * @package App\Http\Controllers\Administrator
 */
class BrandsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    
        static::$activeNavId = 'content.brands';
    }

    /**
     * 列表
     *
     * @param Request $request
     * @param Brand $brand
     * @return mixed
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
	public function index(Request $request, Brand $brand)
	{
	    $this->authorize('index',$brand);

	    $brands = $brand->ordered()->recent()->paginate((config('administrator.paginate.limit')));

		return backend_view('brands.index', compact('brands'));
	}

    /**
     * 详情
     *
     * @param Brand $brand
     * @return mixed
     */
    public function show(Brand $brand)
    {
        return backend_view('brands.show', compact('brand'));
    }

    /**
     * 创建
     *
     * @param Brand $brand
     * @return mixed
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
	public function create(Brand $brand)
	{
        $this->authorize('create',$brand);

        return backend_view('brands.create_and_edit', compact('brand'));
	}

    /**
     * 保存
     *
     * @param BrandRequest $request
     * @param Brand $brand
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
	public function store(BrandRequest $request, Brand $brand)
	{
        $this->authorize('create',$brand);

        $brand = Brand::create($request->all());

        return redirect()->route('brands.index')->with('success', '添加成功.');
	}

    /**
     * 编辑
     *
     * @param Brand $brand
     * @return mixed
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
	public function edit(Brand $brand)
	{
        $this->authorize('update', $brand);

        return backend_view('brands.create_and_edit', compact('brand'));
	}

    /**
     * 更新
     *
     * @param BrandRequest $request
     * @param Brand $brand
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
	public function update(BrandRequest $request, Brand $brand)
	{
		$this->authorize('update', $brand);

		$brand->update($request->all());

		return $this->redirect('brands.index')->with('success', '更新成功.');
	}

    /**
     * 删除
     *
     * @param Brand $brand
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
	public function destroy(Brand $brand)
	{
		$this->authorize('destroy', $brand);
		$brand->delete();

		return $this->redirect()->with('success', '删除成功.');
	}
}