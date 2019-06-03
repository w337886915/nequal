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
use App\Models\Join;

/**
 * 发布职位授权策略
 *
 * Class LinkPolicy
 * @package App\Policies
 */
class JoinPolicy extends Policy
{

    public function index(User $user, Join $join)
    {
        return $user->can('manage_join');
    }

    public function create(User $user, Join $join)
    {
        return $user->can('manage_join');
    }

    public function update(User $user, Join $join)
    {
        return $user->can('manage_join');
    }

    public function destroy(User $user, Join $join)
    {
        return $user->can('manage_join');
    }
}
