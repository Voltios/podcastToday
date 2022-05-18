<?php

use App\Http\Controllers\PagesController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', [PagesController::class, "inicio"])->name("home");
Route::get("home", [PagesController::class, "inicio"])->name("home");
Route::get("autores", [PagesController::class, "autores"])->name("autores");
Route::get("autores", [PagesController::class, "autores"])->name("autores");
Route::get('programs/{id}', [PagesController::class, "programa"])->name('programa');

Route::get("editarPerfil", [UserController::class, "editarPerfil"])->name("editarPerfil");

Route::get("editarPrograma/{id}", [UserController::class, "editarPrograma"])->name("editarPrograma");
Route::put("editarPrograma/{id}", [UserController::class, "actualizarPrograma"])->name("actualizarPrograma");


Auth::routes();

Route::get('/profile', [App\Http\Controllers\HomeController::class, 'profile'])->name('profile');
