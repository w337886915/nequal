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

use App\Models\Honor;
use App\Models\User;

/**
 * 公司荣誉授权策略
 *
 * @package App\Policies
 */
class HonorPolicy extends Policy
{
    public function index(User $user, Honor $honor)
    {
        return $user->can('manage_company_honor');
    }

    public function create(User $user,  Honor $honor)
    {
        return $user->can('manage_company_honor');
    }

    public function update(User $user,  Honor $honor)
    {
        return $user->can('manage_company_honor');
    }

    public function destroy(User $user,  Honor $honor)
    {
        return $user->can('manage_company_honor');
    }
}
