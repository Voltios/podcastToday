<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Autor extends Model
{
    public $timestamps = false;
    use HasFactory;

    public function categorias(){
        return $this->belongsToMany(Categoria::class);
    }
    
    public function programas(){
        return $this->belongsToMany(Programa::class);
    }
}
