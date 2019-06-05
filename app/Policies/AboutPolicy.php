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
use App\Models\About;

/**
 * 授权策略
 *
 * Class ArticlePolicy
 * @package App\Policies
 */
class AboutPolicy extends Policy
{
    public function index(User $user, About $about)
    {
        return $user->can('manage_about');
    }

    public function create(User $user, About $about)
    {
        return $user->can('manage_about');
    }

    public function update(User $user, About $about)
    {
        return $user->can('manage_about');
    }

    public function destroy(User $user, About $about)
    {
        return $user->can('manage_about');
    }
}
