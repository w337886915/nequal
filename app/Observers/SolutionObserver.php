<?php
/**
 * LaraCMS - CMS based on laravel
 */

namespace App\Observers;

use App\Models\Solution;
use Illuminate\Support\Facades\Auth;

// creating, created, updating, updated, saving,
// saved,  deleting, deleted, restoring, restored

/**
 * 解决方案观察者
 *
 * Class ArticleObserver
 * @package App\Observers
 */
class SolutionObserver
{
    public function creating(Solution $solution)
    {
        $solution->status = $article->status ?? '1';
        $solution->order = $article->order ?? 999;
    }


    public function saving(Solution $solution)
    {

    }

}