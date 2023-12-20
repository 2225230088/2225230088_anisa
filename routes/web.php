<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\LombaMenariController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/lombamenari',[LombaMenariController::class,'index']);
Route::get('/lombamenari/create',[LombaMenariController::class,'create']);
Route::post('/lombamenari/store',[LombaMenariController::class,'store']);
Route::get('/lombamenari/{id}/edit',[LombaMenariController::class,'edit']);
Route::put('/lombamenari/{id}',[LombaMenariController::class,'update']);
Route::delete('/lombamenari/{id}',[LombaMenariController::class,'destroy']);
