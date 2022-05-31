<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Programa extends Model
{
    public $timestamps = false;
    use HasFactory;

    public function episodios()
    {
        return $this->hasMany(Episodio::class);
    }
    public function autores()
    {
        return $this->hasMany(User::class);
    }
    public function categoria()
    {
        return $this->belongsToMany(Categoria::class, "programa_categoria");
    }
    public function attachCategorias($cat)
    {
        $this->categoria()->attach($cat);
    }

    public function detachCategorias($cat)
    {
        $this->categoria()->detach($cat);
    }
}
