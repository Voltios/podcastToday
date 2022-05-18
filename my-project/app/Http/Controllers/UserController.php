<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Programa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware("auth");
    }


    public function editarPerfil(Request $req)
    {
        Auth::user()->descripcion = $req->fdesc;
        return back()->with(Auth::user());
    }

    public function crearPrograma(Request $req)
    {
    }

    public function editarPrograma($id)
    {
        $programa = Programa::findOrFail($id);
        $categorias = Categoria::all();
        return view("programs.editar", compact("programa", "categorias"));
    }

    public function actualizarPrograma(Request $req)
    {
    }
}
