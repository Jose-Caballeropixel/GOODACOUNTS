<?php

namespace App\Http\Controllers\Bodeguero;

use App\Bodega;
use App\Entrada;
use App\Producto;
use App\Proveedor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class EntradaController extends Controller
{
    public function index(Request $request)
    {
        $bodegaId= intval($request->get('bodega'));
        $nit= $request->get('nit');
        $proveedor= Proveedor::where('NIT',$nit)->find(1);
        $bodega= Bodega::where('id',$bodegaId)->get();
        return view('bodeguero.entrada',compact('bodega','proveedor'));
    }

    public function buscar(Request $request)
    {
       if($request->ajax()){
            $nombre= request()->get('nombre');
            $productos = Producto::orderBy('id', 'DESC')->nombre($nombre)->get();
            return response()->json($productos);
        }
    }
    public function agregarEntrada(Request $request)
    {
        $contador=0;
        foreach ($request as  $entrada) {
            $data=$request[$contador];
            $entrada=new Entrada($data);
            $entrada->save();
            $contador++;
        }

        return response()->json('mensaje','Entradas Agreagadas Correctamente');
    }
}
