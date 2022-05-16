<?php

namespace App\Http\Controllers;

use App\Models\Autor;
use App\Models\Categoria;
use App\Models\Programa;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function inicio()
    {
        $programas = Programa::all();
        return view("inicio", compact("programas"));
    }
    public function autores()
    {
        $autores = Autor::all();
        
        return view("autores", compact("autores"));
    }
    public function temas(){
        $categorias = Categoria::all();
        return view("temas", compact("categorias"));
    }
}
