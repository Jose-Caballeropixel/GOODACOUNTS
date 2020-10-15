<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    protected $fillable =['NIT','Nombre','direccion','correo','telefono'];

}
