<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

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


Route::get('/',[StudentController::class,'index']);
Route::get('/create',[StudentController::class,'create']);
Route::get('/show/{id}',[StudentController::class,'show']);
Route::get('/edit/{id}',[StudentController::class,'edit']);



Route::post('/store',[StudentController::class,'store']);

Route::post('/update/{id}',[StudentController::class,'update']);
