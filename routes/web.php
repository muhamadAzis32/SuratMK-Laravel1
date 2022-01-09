<?php

use App\Http\Controllers\SuratController;
use App\Http\Controllers\SuratMasukController;
use App\Http\Controllers\LoginController;
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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/main', [SuratController::class, 'main']);
Route::get('/surat', [SuratController::class, 'index'])->middleware('auth');
//Route::get('/login', [SuratController::class, 'viewLogin']);

Route::get('/view-sm', [SuratMasukController::class, 'viewSm']);
Route::get('/input-sm', [SuratMasukController::class, 'inputSm']);
Route::post('/save-sm', [SuratMasukController::class, 'saveSm']);
Route::get('/edit-sm/{id}', [SuratMasukController::class, 'editSm']);
Route::post('/update-sm/{id}', [SuratMasukController::class, 'updateSm']);
Route::get('/hapus-sm/{id}', [SuratMasukController::class, 'hapusSm']);


Route::get('/view-sk', [SuratController::class, 'viewSk']);
Route::get('/input-sk', [SuratController::class, 'inputSk']);
Route::get('/edit-sk', [SuratController::class, 'editSk']);

Route::get('/view-jenis', [SuratController::class, 'viewJenis']);
Route::get('/input-jenis', [SuratController::class, 'inputJenis']);
Route::post('/save-jenis', [SuratController::class, 'saveJenis']);
Route::get('/edit-jenis/{id}', [SuratController::class, 'editJenis']);
Route::post('/update-jenis/{id}', [SuratController::class, 'updateJenis']);
Route::get('/hapus-jenis/{id}', [SuratController::class, 'hapusJenis']);


//Login
Route::get('/view-login', [LoginController::class, 'viewLogin'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'login']);
Route::get('/logout', [LoginController::class, 'logout']);

Route::get('/view-user', [LoginController::class, 'viewUser']);
Route::get('/input-user', [LoginController::class, 'inputUser']);
Route::post('/save-user', [LoginController::class, 'saveUser']);
Route::get('/edit-user', [LoginController::class, 'editUser']);
