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

namespace App\Policies;

use App\Models\User;
use App\Models\Team;

/**
 * 幻灯授权策略
 *
 * Class TeamPolicy
 * @package App\Policies
 */
class TeamPolicy extends Policy
{
    public function index(User $user, Team $team)
    {
        return $user->can("manage_team");
    }

    public function manage(User $user, Team $team)
    {
        return $user->can("manage_team");
    }

    public function create(User $user, Team $team)
    {
        return $user->can("manage_team");
    }

    public function update(User $user, Team $team)
    {
        return $user->can("manage_team");
    }

    public function destroy(User $user, Team $team)
    {
        return $user->can("manage_team");
    }
}
