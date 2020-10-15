<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $fillable = ['nombre','apellido','identificacion','correo','telefono'];

    // creamos la funcion de buscar por medio de la identificacion

    public function scopeIdentificacion($query , $identi)
    {
        if ($identi) {
            return $query->where('identificacion', 'LIKE', "%$identi%");
        }
    }
}
