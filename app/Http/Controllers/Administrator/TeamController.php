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

        $teams = collect(config('teams'));

        return backend_view('teams.index', compact('teams'));
    }

    /**
     * 管理
     *
     * @param $group
     * @param Request $request
     * @param Team $team
     * @return mixed
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function manage($group, Request $request, Team $team)
    {
        $this->authorize('manage', $team);

        $teamConfig = $this->checkGroup($group);

        $teams = $team->where('group', $group)->ordered()->recent()->paginate((config('administrator.paginate.limit')));

        return backend_view('teams.manage', compact('teams', 'teamConfig', 'group'));
    }

    /**
     * 创建
     *
     * @param $group
     * @param Team $team
     * @return mixed
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function create($group, Team $team)
    {
        $this->authorize('create', $team);

        $teamConfig = $this->checkGroup($group);

        return backend_view('teams.create_and_edit', compact('team','teamConfig', 'group'));
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

        return redirect()->route('teams.manage', $team->group)->with('success', '添加成功.');
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
        $group = $team->group;

        $teamConfig = $this->checkGroup($group);

        return backend_view('teams.create_and_edit', compact('team','teamConfig', 'group'));
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

        return redirect()->route('teams.manage', $team->group)->with('success', '更新成功.');
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

        $group = $team->group;
        $team->delete();

        return $this->redirect()->with('success', '删除成功.');
    }

    /**
     * 检查分组
     *
     * @param $group
     * @return \Illuminate\Config\Repository|mixed
     */
    private function checkGroup($group){
        if( !($teamConfig = config('teams.'.$group)) ){
            abort(404);
        }

        return $teamConfig;
    }



}