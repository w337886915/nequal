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

use App\Models\Resume;
use App\Models\User;

/**
 * 简历授权策略
 *
 * Class ReplyPolicy
 * @package App\Policies
 */
class ResumePolicy extends Policy
{

    public function index(User $user, Resume $resume)
    {
        return $user->can('manage_resume');
    }

    public function create(User $user, Resume $resume)
    {
        return $user->can('manage_resume');
    }

    public function update(User $user, Resume $resume)
    {
        return $user->can('manage_resume');
    }

    public function destroy(User $user, Resume $resume)
    {
        return $user->can('manage_resume');
    }
}