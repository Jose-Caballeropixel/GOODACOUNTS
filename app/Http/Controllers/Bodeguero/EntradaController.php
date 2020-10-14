<?php

namespace App\Http\Controllers\Bodeguero;

use App\Producto;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EntradaController extends Controller
{
    public function index()
    {
        return view('bodeguero.entrada');
    }

    public function buscar(Request $request)
    {
       if($request->ajax()){
            $nombre= request()->get('nombre');
            $productos = Producto::orderBy('id', 'DESC')->nombre($nombre)->get();
            return response()->json($productos);
        }
    }
}
