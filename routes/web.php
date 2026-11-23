<?php

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
    return view('welcome');
});

Route::get('/salam', function () {
    return 'Halo semuanya! Apa kabar?';
});

Route::get('/salam/{name}', function ($name) {
    return 'Halo '.$name.'! Apa kabar?';
});

Route::get('/halo', function () {
    return view('halo');
});

use App\Http\Controllers\HaloController;
Route::get('/halo/{name}', [HaloController::class, 'halo']);

use App\Http\Controllers\TugasController;
Route::resource('tugaskuliah', TugasController::class);

use App\Http\Controllers\DoaController;
Route::get('/doa/{kelas}/{name}',[DoaController::class,'doa']);

use App\Http\Controllers\BelajarBladeController;
Route::get('/belajarblade', [BelajarBladeController::class, 'index']);

use App\Http\Controllers\ProgramController;
Route::resource('program', ProgramController::class);
