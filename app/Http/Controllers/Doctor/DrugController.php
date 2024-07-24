<?php

namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DrugModel;

class DrugController extends Controller
{
    //
    public function drug(){
        $drugs = DrugModel::latest()->get();

        return view('doctor.drug.drug', compact('drugs'));
    }

    public function add_drug(Request $request){
        $drug = new DrugModel();

        $drug->drug_id = $request ->input('drug_id');
        $drug->drug_name = $request ->input('drug_name');
        $drug->morning_dosage = $request ->input('morning_dosage');
        $drug->morning_time = $request ->input('morning_time');
        $drug->afternoon_dosage = $request ->input('afternoon_dosage');
        $drug->afternoon_time = $request ->input ('afternoon_time');
        $drug->evening_dosage = $request ->input('evening_dosage');
        $drug->evening_time = $request ->input('evening_time');

        $drug ->save();

        return redirect()->back();
    }
}
