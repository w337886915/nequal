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
use App\Models\Solution;

/**
 * 解决方案授权策略
 *
 * Class ArticlePolicy
 * @package App\Policies
 */
class SolutionPolicy extends Policy
{
    public function index(User $user, Solution $solution)
    {
        return $user->can('manage_solutions');
    }

    public function create(User $user, Solution $solution)
    {
        return $user->can('manage_solutions');
    }

    public function update(User $user, Solution $solution)
    {
        return $user->can('manage_solutions');
    }

    public function destroy(User $user, Solution $solution)
    {
        return $user->can('manage_solutions');
    }
}
