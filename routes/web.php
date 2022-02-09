<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;


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

// Route::get('/', function () {
//     return view('home');
// });
// home
Route::get('/search',[SearchController::class,'index']);
Route::get('/',[SearchController::class,'home']);
Route::post('/',[SearchController::class,'search']);

Route::middleware('admin')->group(function(){
Route::get('/admin/dashboard/',[AdminController::class,'dashboard']);
Route::get('/admin/tb_kamus/',[AdminController::class,'tb_kamus']);
Route::get('/admin/form_tambah_kata/',[AdminController::class,'form_tambah_kata']);
Route::post('/admin/tambah_kata/',[AdminController::class,'tambah_kata']);
Route::get('/admin/form_ubah_kata/{id}',[AdminController::class,'form_ubah_kata']);
Route::patch('/admin/ubah_kata/{id}',[AdminController::class,'ubah_kata']);
Route::delete('/admin/hapus/{id}',[AdminController::class,'destroy_kata']);
});
// login
Route::get('/auth/login',[AuthController::class,'form_login']);
Route::post('/auth/login',[AuthController::class,'login']);
Route::get('/auth/logout',[AuthController::class,'logout']);
