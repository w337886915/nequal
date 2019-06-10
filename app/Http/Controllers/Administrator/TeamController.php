<?php
/**
 * LaraCMS - CMS based on laravel
 */

namespace App\Http\Controllers\Administrator;

use App\Models\Team;
use Illuminate\Http\Request;
use App\Http\Requests\Administrator\TeamRequest;

/**
 * 管理层控制器
 *
 * Class TeamController
 * @package App\Http\Controllers\Administrator
 */
class TeamController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
        static::$activeNavId = 'website.company.team';
    }

    /**
     * 列表
     *
     * @param Request $request
     * @param Team $team
     * @return mixed
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function index(Request $request, Team $team)
    {
        $this->authorize('index', $team);

        $teams = $team->ordered()->recent()->paginate((config('administrator.paginate.limit')));

        return backend_view('teams.index', compact('teams'));
    }

    /**
     * 创建
     *
     * @param $group
     * @param Team $team
     * @return mixed
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function create(Team $team)
    {
        $this->authorize('create', $team);

        return backend_view('teams.create_and_edit', compact('team'));
    }

    /**
     * 保存
     *
     * @param TeamRequest $request
     * @param Team $team
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function store(TeamRequest $request, Team $team)
    {
        $this->authorize('create', $team);

        $team = Team::create($request->all());

        return redirect()->route('teams.index')->with('success', '添加成功.');
    }

    /**
     * 编辑
     *
     * @param Team $team
     * @return mixed
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function edit(Team $team)
    {
        $this->authorize('update', $team);

        return backend_view('teams.create_and_edit', compact('team'));
    }

    /**
     * 更新
     *
     * @param TeamRequest $request
     * @param Team $team
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function update(TeamRequest $request, Team $team)
    {
        $this->authorize('update', $team);

        $team->update($request->all());

        return redirect()->route('teams.index')->with('success', '更新成功.');
    }

    /**
     * 删除
     *
     * @param Team $team
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function destroy(Team $team)
    {
        $this->authorize('destroy', $team);

        $team->delete();

        return $this->redirect()->with('success', '删除成功.');
    }

}