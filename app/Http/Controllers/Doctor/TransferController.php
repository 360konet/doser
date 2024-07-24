<?php

namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TransferController extends Controller
{
    //
    public function transfer(){
        return view('doctor.transfer.transfer');
    }
}
