<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entrada extends Model
{
    protected $fillable = ['bodega_id', 'cantidad','producto_id','proveedor_id','valor_compra'];
}
