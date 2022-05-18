<?php

namespace App\Http\Controllers;

use App\Models\Autor;
use App\Models\Categoria;
use App\Models\Episodio;
use App\Models\Programa;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PagesController extends Controller
{
    public function inicio()
    {
        $mejorPuntuado = Programa::orderByDesc("puntuacion")->get();
        $programa = Programa::findOrFail($mejorPuntuado->first()->id);

        return view("inicio", compact("programa"));
    }

    public function autores()
    {
        $autores = Autor::all();

        return view("autores", compact("autores"));
    }
    public function temas()
    {
        $categorias = Categoria::all();
        return view("temas", compact("categorias"));
    }

    public function programa($id)
    {
        $programa = Programa::findOrFail($id);
        $episodios = Episodio::where("program_id", $id)->get();
        return view('programs.infoPd', compact('programa', "episodios"));
    }

    // UPDATE Users SET descripcion = $fdesc where id = Auth::user()->id;


}
