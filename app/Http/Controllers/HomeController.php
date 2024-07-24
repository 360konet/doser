<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DrugModel;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $drugs_count = DrugModel::count('id');
        return view('doctor.home',compact('drugs_count'));
    }
}
