<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DatasetController;
use App\Http\Controllers\Verifdata_UserController;
use App\Http\Controllers\Profil_UserController;
use App\Http\Controllers\DatahitungController;
use App\Http\Controllers\VerifDatahitung_UserController;
use App\Http\Controllers\DatahasilController;
use App\Http\Controllers\FuzzySawController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\KriteriaController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Users
Route::get('/', [HomeController::class, 'user'])->middleware('guest')->name('login');
Route::post('/login', [AuthController::class, 'authenticate']);
Route::post('/logout', [AuthController::class, 'logout']);
Route::post('/register', [RegisterController::class, 'store']);
Route::get('/dashboard', [DashboardController::class, 'user'])->middleware('auth');
Route::resource('/verif_data', Verifdata_UserController::class)->middleware('auth');
Route::resource('/profil_user', Profil_UserController::class)->middleware('auth');
Route::resource('/verif_datahitung', VerifDatahitung_UserController::class)->middleware('auth');
Route::resource('/upload', FileController::class)->middleware('auth');




// Admin
Route::get('/admin', [HomeController::class, 'admin'])->middleware('login.admin:admin');
Route::get('/admin/login', [HomeController::class, 'admin'])->middleware('login.admin:admin');
Route::post('/login_admin', [AuthController::class, 'authenticate_admin']);
Route::post('/logout_admin', [AuthController::class, 'logout_admin']);
Route::get('/admin/dashboard', [DashboardController::class, 'admin'])->middleware('auth:admin');
Route::resource('/admin/data_users', UserController::class)->middleware('auth:admin');
Route::post('/data_users/import', [UserController::class, 'UsersImport'])->middleware('auth:admin');
Route::resource('/admin/datasets', DatasetController::class)->middleware('auth:admin');
Route::resource('/admin/datahitungs', DatahitungController::class)->middleware('auth:admin');
Route::resource('/admin/datahasils', DatahasilController::class)->middleware('auth:admin');
Route::resource('/admin/kriteria', KriteriaController::class)->middleware('auth:admin');
Route::post('/admin/kriteria/{kriteria:id}', [KriteriaController::class, 'updatee']);
Route::get('/admin/datapenerima', [DatahasilController::class, 'index_penerima'])->middleware('auth:admin');
Route::post('/datasets/export', [DatasetController::class, 'datasetExport'])->middleware('auth:admin');
Route::post('/datahitungs/export', [DatahitungController::class, 'datahitungExport'])->middleware('auth:admin');
Route::post('/datasets/import', [DatasetController::class, 'datasetImport'])->middleware('auth:admin');
Route::post('/datahitungs/import', [DatahitungController::class, 'datahitungImport'])->middleware('auth:admin');
Route::post('/admin/datahitungs/{dataset:id}', [DatahitungController::class, 'store']);
Route::post('/verifikasi/{datahitung:id}', [DatahitungController::class, 'verif']);
Route::post('/notverifikasi/{datahitung:id}', [DatahitungController::class, 'notverif']);
Route::post('/tentukan_penerima', [FuzzySawController::class, 'tentukan_penerima'])->middleware('auth:admin');
Route::post('/salurkan/{datahasil:id}', [DatahasilController::class, 'salurkan']);
Route::post('/valid/{datahasil:id}', [DatahasilController::class, 'valid']);
Route::post('/notvalid/{datahasil:id}', [DatahasilController::class, 'notvalid']);
Route::post('/reset_datahitung', [DatahitungController::class, 'reset']);
Route::get('/admin/proses_hitung', [FuzzySawController::class, 'index'])->middleware('auth:admin');
Route::get('/admin/convert', [FuzzySawController::class, 'indexConvert'])->middleware('auth:admin');
Route::get('/admin/normalisasi', [FuzzySawController::class, 'indexNormalisasi'])->middleware('auth:admin');
Route::get('/admin/prefensi', [FuzzySawController::class, 'indexPrefensi'])->middleware('auth:admin');
Route::get('/admin/hasil', [FuzzySawController::class, 'indexHasil'])->middleware('auth:admin');
Route::get('/test', [FuzzySawController::class, 'test'])->middleware('auth:admin');
