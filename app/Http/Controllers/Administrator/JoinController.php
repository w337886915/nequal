<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Requests\Administrator\JoinRequest;
use App\Models\Contact;
use Illuminate\Http\Request;
use App\Models\Join;

class JoinController extends Controller
{

    public function __construct()
    {
        static::$activeNavId = 'website.company.join';
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Join $join)
    {
        $this->authorize('index', $join);

        $joins = $join->ordered()->recent()->paginate((config('administrator.paginate.limit')));

        return backend_view('join.index', compact('joins'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Join $join)
    {
        $this->authorize('index', $join);

        // 工作地点
        $places = Contact::pluck('name', 'id');

        return backend_view('join.create_and_edit', compact('join', 'places'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(JoinRequest $request, Join $join)
    {
        $this->authorize('create',$join);

        Join::create($request->all());

        return redirect()->route('joins.index')->with('success', '添加成功.');
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
    public function edit(Join $join)
    {
        $this->authorize('update', $join);
        // 工作地点
        $places = Contact::pluck('name', 'id');

        return backend_view('join.create_and_edit', compact('join', 'places'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(JoinRequest $request, Join $join)
    {
        $this->authorize('update', $join);

        $join->update($request->all());

        return $this->redirect('join.index')->with('success', '更新成功.');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Join $join)
    {
        $this->authorize('destroy', $join);
        $join->delete();

        return $this->redirect()->with('success', '删除成功.');
    }


    /**
     *  排序
     * @param Join $join
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function order(Join $join)
    {
        $this->authorize('update', $join);
        $ids = request('id', []);
        $order = request('order', []);

        foreach ($ids as $k => $id) {
            $join->where('id', $id)->update(['order' => $order[$k] ?? 999]);
        }

        return redirect()->route('joins.index')->with('success', '操作成功.');
    }

}
