<?php

namespace App\Http\Controllers;
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

Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/', function () {
    return view('cek');
});
Route::get('/landingpage', function () {
    return view('frontend.index');
});
Route::get('/login', [Auth\LoginController::class, 'index'])->name('login');
Route::post('/login/proses', [Auth\LoginController::class, 'login']);
Route::get('/logout',[Auth\LoginController::class, 'logout']);

Route::get('/register', [Auth\RegisterController::class, 'index']);
Route::post('/register/proses', [Auth\RegisterController::class, 'register']);

Route::middleware(['auth'])->group(function(){
    
    Route::get('/alsya', function () {
        return view('admin.alsya');
    });
    Route::get('/fahmi', function () {
        return view('admin.fahmi');
    });
    Route::get('/iqlima', function () {
        return view('admin.iqlima');
    });
    Route::get('/janet', function () {
        return view('admin.janet');
    });

    Route::get('/index', function () {
        return view('backend.dashboard');
    });
    /* Route Tipe Bis */
    Route::get('/tipebis', [TipeBisController::class, 'index']);
    Route::get('/tipebis/create', [TipeBisController::class, 'create']);
    Route::post('/tipebis/simpan-data', [TipeBisController::class, 'store']);

    Route::get('/tipebis/edit/{id}', [TipeBisController::class, 'edit']);
    Route::post('/tipebis/update/{id}', [TipeBisController::class, 'update']);
    Route::get('/tipebis/delete/{id}', [TipeBisController::class, 'delete']);

    /* Route Supir */
    Route::get('/supir', [SupirController::class, 'index']);
    Route::get('/supir/create', [SupirController::class, 'create']);
    Route::post('/supir/simpan-data', [SupirController::class, 'store']);

    Route::get('/supir/edit/{id}', [SupirController::class, 'edit']);
    Route::post('/supir/update/{id}', [SupirController::class, 'update']);
    Route::get('/supir/delete/{id}', [SupirController::class, 'delete']);

    /* Route Pembelian */
    Route::get('/pembelian', [PembelianController::class, 'index']);
    Route::get('/pembelian/create', [PembelianController::class, 'create']);
    Route::post('/pembelian/simpan-data', [PembelianController::class, 'store']);

    Route::get('/pembelian/edit/{id}', [PembelianController::class, 'edit']);
    Route::post('/pembelian/update/{id}', [PembelianController::class, 'update']);
    Route::get('/pembelian/delete/{id}', [PembelianController::class, 'delete']);

    /* Route Paket Bis */
    Route::get('/paketbis', [PaketBisController::class, 'index']);
    Route::get('/paketbis/create', [PaketBisController::class, 'create']);
    Route::post('/paketbis/simpan-data', [PaketBisController::class, 'store']);

    Route::get('/paketbis/edit/{id}', [PaketBisController::class, 'edit']);
    Route::post('/paketbis/update/{id}', [PaketBisController::class, 'update']);
    Route::get('/paketbis/delete/{id}', [PaketBisController::class, 'delete']);

    /* Route Bis */
    Route::get('/bis', [BisController::class, 'index']);
    Route::get('/bis/create', [BisController::class, 'create']);
    Route::post('/bis/simpan-data', [BisController::class, 'store']);

    Route::get('/bis/edit/{id}', [BisController::class, 'edit']);
    Route::post('/bis/update/{id}', [BisController::class, 'update']);
    Route::get('/bis/delete/{id}', [BisController::class, 'delete']);
    
});