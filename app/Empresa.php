<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    // creamos los atributos de la clase empresa
    protected $fillable=['NIT','Nombre','Correo'];

    public function user()
    {
        return $this->hasMany(User::class);
    }
}
