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
    
    Route::get('/admin/horario', [App\Http\Controllers\HorarioController::class, 'index'])->name('admin.horario.index');
    Route::get('/admin/horario', [HorarioController::class, 'index']);
});
