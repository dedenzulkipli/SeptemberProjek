<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\LaporanKejadianController;
use App\Http\Controllers\UserController;
use App\Models\LaporanKejadian;
use App\Models\User;
use Illuminate\Support\Facades\Route;

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
    return view('home');
});
Route::get('/home', [HomeController::class, 'index']);
Route::get('/login', [UserController::class, 'showLoginForm']);
Route::get('/register', [UserController::class, 'register']);
Route::post('/auth', [UserController::class, 'auth']);
Route::post('/register', [UserController::class, 'createuser']);
Route::get('/logout',[UserController::class, 'logout']);
Route::middleware(['\App\Http\Middleware\StatusLogin::class,'])->group(function(){
    Route::middleware(['\App\Http\Middleware\adminauth::class,'])->group(function(){
        Route::get('/laporan',[LaporanKejadianController::class,'laporan']);
        Route::get('admind', [UserController::class, 'admind']);
        Route::get('/laporan/viewcreate', [LaporanKejadianController::class, 'viewcreate']);
        Route::post('/laporan/create',[LaporanKejadianController::class, 'laporancreate']);
        Route::get('/laporan/delete/{id}',[LaporanKejadianController::class,'delete']);
        Route::get('/jadwal',[JadwalController::class,'jadwal']);
        Route::get('/jadwal/viewcreate',[JadwalController::class, 'viewcreate']);
        Route::post('/jadwal/create',[JadwalController::class,'jadwalcreate']);
        Route::get('/jadwal/delete/{id}',[JadwalController::class, 'delete']);
        Route::get('/laporan/edit/{id}',[LaporanKejadianController::class, 'laporanedit']);
        Route::post('/laporan/edit/{id}',[LaporanKejadianController::class, 'edit']);
        Route::get('/jadwal/edit/{id}',[JadwalController::class, 'jadwaledit']);
        Route::post('/jadwal/edit/{id}',[JadwalController::class, 'edit']);
        Route::get('/jadwal/search',[JadwalController::class,'hhsearch']);
        // Route::get('/user',[UserController::class,'user']);
        

    });
    Route::get('/index', [UserController::class, 'hh']);
    Route::get('/detailjadwal',[JadwalController::class,'detailjadwal']);
    Route::get('/detaillaporan', [LaporanKejadianController::class,'detaillaporan']);
    Route::get('/detaillaporan/detailcreate',[LaporanKejadianController::class,'detailcreate']);
    Route::post('/detaillaporan/create',[LaporanKejadianController::class, 'detaillaporancreate']);
    Route::get('/detaillaporan/delete/{id}',[LaporanKejadianController::class, 'detaildelete']);
    Route::get('/detailjadwal/search',[JadwalController::class,'search']);
});


//  Route::get('/register', function () {
//     return view('register');
//  });
//  Route::get('/pengguna', function () {
//     return view('pengguna');
//  });

