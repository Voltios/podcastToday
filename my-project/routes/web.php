<?php

use App\Http\Controllers\PagesController;
use App\Http\Controllers\UserController;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use PhpParser\Builder\Use_;

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

// Route::get('/', [PagesController::class, "inicio"])->name("home");
Route::get("/", function () {
    return view("bienvenido");
});
Route::get("home", [PagesController::class, "inicio"])->name("home");
Route::get("autores", [PagesController::class, "autores"])->name("autores");
// Route::get("autor/{id}", [PagesController::class, "autor"])->name("autor");
Route::get('programs/{id}', [PagesController::class, "programa"])->name('programa');

Route::get("temas", [PagesController::class, 'temas'])->name("temas");
Route::get("progTema/{nombre}", [PagesController::class, 'progTema'])->name('progTema');

Route::get("editarPerfil", [UserController::class, "editarPerfil"])->name("editarPerfil");

Route::get("editarPrograma/{id}", [UserController::class, "editarPrograma"])->name("editarPrograma");
Route::put("editarPrograma/{id}", [UserController::class, "actualizarPrograma"])->name("actualizarPrograma");


Route::get("modificarEpisodios/{id}", [UserController::class, "modificarEpisodios"])->name("modificarEpisodios");

Auth::routes();

Route::get('profile/{id}', [PagesController::class, 'profile'])->name('profile');

Route::get('crearProg', [UserController::class, 'crearProg'])->name('crearProg');
Route::post('crear', [UserController::class, 'crear'])->name('crear');


Route::get("anyadirEpisodios/{id}", [UserController::class, "anyadirEpisodios"])->name("anyadirEps");
Route::post("anyadirEp", [UserController::class, "formAnyadir"])->name("anyadirEp");


Route::get('editarEps/{id}', [UserController::class, "editarEpisodios"])->name('editarEps');
Route::put("editarEp/{id}", [UserController::class, "formEditar"])->name('editarEp');
Route::delete("eliminarEps/{id}", [UserController::class, "borrarEps"])->name("eliminarEps");

Route::post("votar", [PagesController::class, 'votar'])->name("votar");
