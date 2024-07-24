<?php

namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    //
    public function patient(){
        return view('doctor.patient.patient');
    }


}
