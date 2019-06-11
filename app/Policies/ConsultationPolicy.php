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
use App\Models\Consultation;

/**
 * 授权策略
 *
 * Class LinkPolicy
 * @package App\Policies
 */
class ConsultationPolicy extends Policy
{

    public function index(User $user, Consultation $consultation)
    {
        return $user->can('manage_consultations');
    }

    public function update(User $user, Consultation $consultation)
    {
        return $user->can('manage_consultations');
    }

    public function destroy(User $user, Consultation $consultation)
    {
        return $user->can('manage_consultations');
    }
}
