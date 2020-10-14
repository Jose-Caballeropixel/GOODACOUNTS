<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $fillable=['nombre', 'codigo','imagen','precio'];


    public function scopeNombre($query, $nombre)
    {
        if ($nombre) {
            return $query->where('nombre' , 'LIKE', "%$nombre%");
        }
    }
}
