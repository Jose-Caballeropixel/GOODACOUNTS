<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sucursal extends Model
{
    //creamos los atributos de la clase sucursal
    protected $fillable = ['Nombre','Direccion','Correo'];

    public function bodega()
    {
        return $this->hasOne(Bodega::class);
    }

    public function scopeNombre($query, $nombre)
    {
        if ($nombre) {
            return $query->where('Nombre','LIKE',"%$nombre%");
        }
    }
}
