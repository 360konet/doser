<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Doctor\PatientController;
use App\Http\Controllers\Doctor\DrugController;
use App\Http\Controllers\Doctor\TransferController;
use App\Http\Controllers\Doctor\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

//Doctor
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Patient
Route::get('/patients',[PatientController::class,'patient']);

//Drugs
Route::get('/drugs',[DrugController::class,'drug']);
Route::post('/add-drug',[DrugController::class,'add_drug']);

//Transfers
Route::get('/transfers',[TransferController::class,'transfer']);


//Users
Route::get('/users',[UserController::class,'user']);
