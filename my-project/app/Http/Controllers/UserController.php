<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Episodio;
use App\Models\Programa;
use Exception;
use GuzzleHttp\Handler\Proxy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

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


    public function crearProg()
    {
        $cat = Categoria::all();
        return view("programs.crear", compact("cat"));
    }
    public function crear(Request $req)
    {
        try {
            $programa = new Programa;
            $programa->nombre = $req->fnom;
            $programa->descripcion = $req->fdesc;
            $programa->user_id = Auth::id();
            $programa->puntuacion = 0;
            $programa->created_at = time();
            $programa->updated_at = time();

            $programa->save();
            $programa->attachCategorias($req->categorias);
        } catch (Exception $e) {
            Log::error($e->getMessage());
            return back()->with('mensaje', 'Error al crear un programa, revisa los campos');
        }
        Log::info("Programa añadido con éxito");
        return back()->with("mensaje", "Programa insertado correctamente");
    }

    public function editarPrograma($id)
    {
        $programa = Programa::findOrFail($id);
        $categorias = Categoria::all();
        return view("programs.editar", compact("programa", "categorias"));
    }

    public function actualizarPrograma(Request $req, $id)
    {
        $req->validate([
            "nombre" => "required",
            "descripcion" => "required",
        ]);

        try {
            $programa = Programa::findOrFail($id);
            $programa->nombre = $req->nombre;
            $programa->descripcion = $req->descripcion;

            $programa->updated_at = now();
            $programa->save();
            return back()->with("mensaje", "Programa editado con éxito");
        } catch (Exception $e) {
            Log::error("Error al añadir (" . $e->getMessage() . ")");
            return back()->with("mensaje", "Error al añadir el programa, comprueba los campos");
        }
    }

    public function modificarEpisodios($id)
    {
        $programa = Programa::findOrFail($id);
        $episodios = Episodio::where("program_id", $id)->get();
        $categorias = Categoria::all();
        return view("episodes.infoEp", compact("programa", "episodios", "categorias"));
    }

    public function anyadirEpisodios($id)
    {
        $programa = Programa::findOrFail($id);
        return view("episodes.crear", compact("programa"));
    }

    public function formAnyadir(Request $req)
    {

        $req->validate([
            "nombre" => "required",
            "descripcion" => "required"
        ]);
        try {

            $ep = new Episodio;
            $ep->nombre = $req->nombre;
            $ep->descripcion = $req->descripcion;
            $ep->program_id = Auth::id();
            $ep->created_at = now();
            $ep->updated_at = now();
            $ep->save();
            Log::info("Episodio nsertado correctamente");

            return back()->with("mensaje", "Episodio insertado con éxito");
        } catch (Exception $e) {
            Log::error("Error (" . $e->getMessage() . ")");
            return back()->with("mensaje", "Error al insertar el episodio, comprueba los campos");
        }
    }

    public function editarEps($id)
    {
        $ep = Episodio::findOrFail($id);
        return view("programs.editar", compact("ep"));
    }

    public function formEditar(Request $req, $id)
    {
        $req->validate([
            "nombre" => "required",
            "descripcion" => "required",
        ]);

        try {
            $ep = Episodio::findOrFail($id);
            $ep->nombre = $req->nombre;
            $ep->descripcion = $req->descripcion;

            $ep->updated_at = now();
            $ep->save();
            return back()->with("mensaje", "Episodio editado con éxito");
        } catch (Exception $e) {
            Log::error("Error al añadir (" . $e->getMessage() . ")");
            return back()->with("mensaje", "Error al añadir el episodio, comprueba los campos");
        }
    }

    public function borrarEps($id, $progId)
    {
        $borrar = Episodio::findOrFail($id);
        $borrar->delete();
        $programa = Programa::findOrFail($progId);
        return view("episodes.infoEp", compact("programa"));
    }
}
