<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bodega extends Model
{
    protected $fillable = ['Encardo','direccionB'];


    public function sucursals()
    {
        return $this->hasOne(Sucursal::class);
    }
}
