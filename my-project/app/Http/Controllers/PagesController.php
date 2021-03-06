<?php

namespace App\Http\Controllers;

use App\Models\Autor;
use App\Models\Categoria;
use App\Models\Episodio;
use App\Models\Programa;
use App\Models\User;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use ProgramaCategoria;

class PagesController extends Controller
{
    public function inicio()
    {
        $tiempo = Carbon::now('GMT+2');
        if ($tiempo == Carbon::now()->firstOfMonth()) {
            $programas = Programa::all();
            foreach ($programas as $pro) {
                $pro->puntuacion = 0;
                $pro->save();
            }
        }
        $mejorPuntuado = Programa::orderByDesc("puntuacion")->get();
        $programa = Programa::findOrFail($mejorPuntuado->first()->id);

        return view("inicio", compact("programa"));
    }

    public function autores()
    {
        $autores = User::all();
        $autores = DB::table('users')->get();
        return view("programs.autores", ['autores' => $autores]);
    }

    public function temas()
    {
        $categorias = Categoria::all();
        $todosProgramas = Programa::take(3)->get();
        return view("programs.temas", compact("categorias",'todosProgramas'));
    }

    public function programa($id)
    {

        $programa = Programa::findOrFail($id);
        $episodios = Episodio::where("program_id", $id)->get();
        return view('programs.infoPd', compact('programa', "episodios"));
    }

    // UPDATE Users SET descripcion = $fdesc where id = Auth::user()->id;

    public function profile($id)
    {
        $user = User::findOrFail($id);
        Log::info("entra en perfil $user->name");
        $programas = Programa::where("user_id", $id)->get();
        $todosProgramas = Programa::take(3)->get();
        return view('profile', compact('user', 'programas', 'todosProgramas'));
    }

    public function progTema($nombre)
    {
        $programas = Programa::all();
        $categorias = Categoria::where("nombre", $nombre)->get();
        /* HACER EL SELECT DE LOS QUE TENGAN LA CATEGORIA CON EL MISMO NOMBRE */
        return view("programs.progTema", compact("programas", "categorias"));
    }


    public function votar($progId)
    {
        $programa = Programa::findOrFail($progId);
        $programa->puntuacion += 1;
        $programa->save();
        return back();
    }

    public function programas(){
        // $progs = Programa::paginate(10);
        $progs = Programa::all();
        return view('programs.listaProgramas', compact('progs'));
    }
}
