<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Requests\Administrator\JoinRequest;
use App\Models\Contact;
use App\Models\Resume;
use Illuminate\Http\Request;

class ResumeController extends Controller
{

    public function __construct()
    {
        static::$activeNavId = 'website.company.resume';
    }


    /**
     * Display a listing of the resource.
     *
     * @param Resume $resume
     * @return \Illuminate\Http\Response
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function index(Resume $resume)
    {
        $this->authorize('index', $resume);

        $resumes = $resume->with(['job' => function ($query) {
            $query->select('id', 'name');
        }])->with('file')->recent()->paginate((config('administrator.paginate.limit')));

        return backend_view('resumes.index', compact('resumes'));

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
     * Remove the specified resource from storage.
     *
     * @param Resume $resume
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function destroy(Resume $resume)
    {
        $this->authorize('destroy', $resume);
        $resume->delete();

        return $this->redirect()->with('success', '删除成功.');
    }


}
