<?php

namespace App\Http\Controllers\Administrator;

use App\Models\Consultation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ConsultationController extends Controller
{
    public static $activeNavId = 'content.consultations.index';
    //
    public function index(Consultation $consultation){
        $forms = $consultation->paginate(config('administrator.paginate.limit'));
        //dd($forms->toArray(0));
        if( $forms->count() < 1 && $forms->lastPage() > 1 ){
            return redirect($forms->url($forms->lastPage()));
        }
        return backend_view('consultation.index',compact('forms'));
    }

}
