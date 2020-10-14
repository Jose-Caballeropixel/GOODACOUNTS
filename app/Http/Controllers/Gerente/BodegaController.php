<?php

namespace App\Http\Controllers\Gerente;
use App\Http\Controllers\Controller;
use App\Bodega;
use App\Sucursal;
use Illuminate\Http\Request;

class BodegaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sucursal = Sucursal::get();
        $bodegas = Bodega::latest()->paginate(4);
        return view('gerente.bodega.index',compact('bodegas','sucursal'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    public function crearBodega(Sucursal $sucursal)
    {
        return view('gerente.bodega.create',compact('sucursal'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'encargado' => 'required',
            'direccion' => 'required',
            'sucursal_id' => 'required',
        ]);
        $bodegas = new Bodega();
        $bodegas->Encargado = $data['encargado'];
        $bodegas->direccionB = $data['direccion'];
        $bodegas->sucursal_id = $data['sucursal_id'];
        $bodegas->save();
        echo $bodegas;
        return redirect()->route('gerente.bodega.index');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Bodega  $bodega
     * @return \Illuminate\Http\Response
     */
    public function show(Bodega $bodega)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Bodega  $bodega
     * @return \Illuminate\Http\Response
     */
    public function edit(Bodega $bodega)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Bodega  $bodega
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bodega $bodega)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Bodega  $bodega
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bodega $bodega)
    {
        //
    }
}
