<?php

use App\Http\Controllers\FormController;
use App\Http\Controllers\Hellocontroller;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

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



Route::get('/form',[FormController::class,'show_form']);
Route::post('/form-upload',[FormController::class,'store_record'])->name('store_rec');
Route::get('/form-val',[FormController::class,'show'])->name('show');
Route::delete('/form-val-del/{id}',[FormController::class,'delete']);
Route::get('/changeS',[FormController::class,'changeS'])->name('changeS');


Route::get('/admin',[FormController::class,'adminform']);
Route::post('/adminu',[FormController::class,'adminformlog'])->name('loggedin');
Route::get('/hello',[Hellocontroller::class,'hello']);




