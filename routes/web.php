<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ControladorLareirista;
use App\Http\Controllers\ControladorDownloadInscricao;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/home', [HomeController::class, 'index']);
Route::get('/lareirista', [ControladorLareirista::class, 'index']);
Route::get('/lareiristacompleto/{id}', [ControladorLareirista::class, 'show']);
Route::get('/lareirista/novo', [ControladorLareirista::class, 'create']);
Route::post('/lareirista', [ControladorLareirista::class, 'store']);
Route::get('/lareirista/apagar/{id}', [ControladorLareirista::class, 'destroy']);
Route::get('/lareirista/editar/{id}', [ControladorLareirista::class, 'edit']);
Route::post('/lareirista/{id}', [ControladorLareirista::class, 'update']);
