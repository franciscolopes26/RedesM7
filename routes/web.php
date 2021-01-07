<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/project', function () {
    return view('project');
})->name('project');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/projetos', [App\Http\Controllers\ProjetoController::class, 'index'])->name('projetos');
Route::post('/projetos', [App\Http\Controllers\ProjetoController::class, 'store']);
Route::get('/projetos/create', [App\Http\Controllers\ProjetoController::class, 'create'])->name('projetos.create');