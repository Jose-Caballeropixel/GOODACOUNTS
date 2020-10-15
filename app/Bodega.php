<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bodega extends Model
{
    protected $fillable = ['Encardo','direccionB'];


    public function sucursal()
    {
        return $this->belongsTo(Sucursal::class);
    }

    public function entradas()
    {
        return $this->hasMany(Entrada::class);
    }
}
