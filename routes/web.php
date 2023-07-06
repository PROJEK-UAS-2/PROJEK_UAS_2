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

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/', function () {
    return view('cek');
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