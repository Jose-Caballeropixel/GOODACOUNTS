<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sucursal extends Model
{
    //creamos los atributos de la clase sucursal
    protected $fillable = ['Nombre','Direccion','Correo'];

    public function bodegas()
    {
        return $this->belongsTo(Bodega::class);
    }
}
