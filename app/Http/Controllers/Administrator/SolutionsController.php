<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Requests\Administrator\SolutionRequest;
use App\Models\Article;
use App\Models\Brand;
use App\Models\Solution;
use Illuminate\Http\Request;

class SolutionsController extends Controller
{
    public function __construct(Request $request)
    {
        static::$activeNavId = 'content.solutions';
    }


    /**
     * Display a listing of the resource.
     *
     * @param Solution $solution
     * @return mixed
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function index(Solution $solution)
    {
        $this->authorize('index', $solution);

        $solutions = $solution->ordered()->recent()->paginate((config('administrator.paginate.limit')));

        return backend_view('solutions.index', compact('solutions'));
    }

    /**
     * @param Solution $solution
     * @return mixed
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function create(Solution $solution)
    {
        $this->authorize('create',$solution);

        $brands = Brand::all()->toArray();

        return backend_view('solutions.create_and_edit', compact('solution', 'brands'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param SolutionRequest $request
     * @param Solution $solution
     * @return \Illuminate\Http\Response
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function store(SolutionRequest $request, Solution $solution)
    {
        $this->authorize('create', $solution);
        //dd($request->all());
        $solution = Solution::create($request->all());

        return redirect()->route('solutions.index')->with('success', '添加成功.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Solution $solution)
    {
        $this->authorize('update', $solution);

        $brands = [];
        foreach(Brand::all() as $value) {
            $brands[] = [
                'id' => $value->id,
                'name' => $value->name,
                'check' => in_array($value->id, $solution->brand_ids ?: [])
            ];
        }
        return backend_view('solutions.create_and_edit', compact('solution', 'brands'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param SolutionRequest $request
     * @param Solution $solution
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function update(SolutionRequest $request, Solution $solution)
    {
        $this->authorize('update', $solution);

        $solution->update($request->all());

        return $this->redirect('solutions.index')->with('success', '更新成功.');
    }

    /**
     * 删除
     * @param Solution $solution
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function destroy(Solution $solution)
    {
        $this->authorize('destroy', $solution);
        $solution->delete();

        return $this->redirect()->with('success', '删除成功.');
    }



    /**
     * 排序
     *
     * @param Solution $solution
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function order(Solution $solution){
        $this->authorize('update', $solution);
        $ids = request('id',[]);
        $order = request('order',[]);

        foreach($ids as $k => $id){
            $solution->where('id',$id)->update(['order' => $order[$k] ?? 999 ]);
        }

        return redirect()->route('solutions.index')->with('success', '操作成功.');
    }

}
