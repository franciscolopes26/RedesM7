<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projeto extends Model
{
    use HasFactory;
    public function fotos()
    {
        return $this->hasMany(Foto::class);
    }

    public function categoria(){
        return $this->belongsTo(Categoria::class);
    }
}