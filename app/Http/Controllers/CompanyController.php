<?php
/**
 * LaraCMS - CMS based on laravel
 */

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Contact;
use App\Models\Honor;
use App\Models\Join;
use App\Models\Setting;
use App\Models\Team;
use Illuminate\Http\Request;
use App\Models\Slide;

/**
 * 前台公共控制器
 *
 * Class WelcomeController
 * @package App\Http\Controllers
 */
class CompanyController extends Controller
{
    public $slides;

    public function __construct()
    {
        $this->slides = Slide::where('group', Slide::SLIDES_ABOUT)->get();
    }

    /**
     * 关于我们首页(公司介绍)
     *
     * @return mixed
     */
    public function index(Setting $setting)
    {
        $company = $setting->take('company');
        if (app()->getLocale() == 'cn') {
            $vision = $company['vision'];
            $visionDesc = $company['visionDesc'];
        } else {
            $vision = $company['vision_en'];
            $visionDesc = $company['visionDesc_en'];
        }

        return frontend_view('company.company', [
            'slides' => $this->slides,
            'abouts' => About::all(),
            'honors' => Honor::all(),
            'vision' => $vision,
            'visionDesc' => $visionDesc
        ]);
    }

    // 联系我们页面
    public function contact()
    {
        return frontend_view('company.contact',[
            'slides' => $this->slides,
            'contacts' => Contact::all()
        ]);
    }

    // 加入我们页面
    public function join()
    {
        // 幻灯图片
        $slides = $this->slides;

        $place_id = request('id')?? 1;

        $places = Contact::pluck('name', 'id');

        $jobs = Join::where('place_id', $place_id)->ordered()->recent()->paginate(10);

        return frontend_view('company.join', compact('places', 'place_id', 'jobs', 'slides'));
    }

    // 管理团队页面
    public function team()
    {
        // 幻灯图片
        $slides = $this->slides;

        $team_group_id= request('id')?? 1;

        $teams = Team::where('group', $team_group_id)->ordered()->recent()->paginate(5);

        return frontend_view('company.team', compact('team_group_id', 'jobs', 'teams', 'slides'));
    }
}
