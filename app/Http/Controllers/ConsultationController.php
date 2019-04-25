<?php

namespace App\Http\Controllers;

use App\Http\Requests\ConsultationRequest;
use App\Models\Consultation;


class ConsultationController extends Controller
{
    //
    public function store(ConsultationRequest $request,Consultation $consultation){

            $status = $consultation->create($request->all());
            return response()->json($status);
    }
}
