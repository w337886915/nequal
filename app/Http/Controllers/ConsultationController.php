<?php

namespace App\Http\Controllers;

use App\Http\Requests\ConsultationRequest;
use App\Models\Consultation;
use Illuminate\Http\Request;


class ConsultationController extends Controller
{
    public function store(ConsultationRequest $request,Consultation $consultation){
            $res = $consultation->create($request->all());
            if(!$res->id){
                return [
                    'status'=> false,
                    'message' => '保存失败'
                ];
            }
        return [
            'status'=> true,
            'message' => ''
        ];

    }
}
