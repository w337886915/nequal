<?php

namespace App\Http\Controllers\Administrator;

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

        return backend_view('solutions.create_and_edit', compact('solution'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
