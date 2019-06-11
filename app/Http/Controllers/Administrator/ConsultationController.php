<?php

namespace App\Http\Controllers\Administrator;

use App\Models\Consultation;
use Illuminate\Http\Request;

//use App\Http\Controllers\Controller;

class ConsultationController extends Controller
{
    public function __construct()
    {
        static::$activeNavId = 'content.consultations.index';
    }

    //列表
    public function index(Consultation $consultation)
    {
        $this->authorize('index', $consultation);

        $forms = $consultation->recent()->paginate(config('administrator.paginate.limit'));

        return backend_view('consultation.index', compact('forms'));
    }


    // 设置为已读
    public function update(Request $request, Consultation $consultation)
    {
        $this->authorize('update', $consultation);

        $consultation->where('id', $request->get('id'))->update(['is_read' => 1]);

        return $this->redirect('consultations.index')->with('success', '更新成功.');
    }

    // 删除
    public function destroy(Consultation $consultation)
    {
        $this->authorize('destroy', $consultation);

        $consultation->delete();

        return $this->redirect()->with('success', '删除成功.');

    }
}
