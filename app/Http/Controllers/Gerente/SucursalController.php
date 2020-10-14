<?php

namespace App\Http\Controllers\Gerente;

use App\Http\Controllers\Controller;
use App\Sucursal;
use Illuminate\Http\Request;
use Psy\Sudo;

class SucursalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sucursales = Sucursal::latest()->paginate(4);
        return view('gerente.sucursal.index',compact('sucursales'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('gerente.sucursal.create');
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
            'nombre' => 'required|string',
            'direccion' => 'required|string',
            'correo' => 'required|string',
        ]);

        $sucursales = new Sucursal();
        $sucursales->Nombre = $data['nombre'];
        $sucursales->Direccion = $data['direccion'];
        $sucursales->Correos = $data['correo'];
        $sucursales->save();

        return redirect()->route('gerente.sucursal.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Sucursal  $sucursal
     * @return \Illuminate\Http\Response
     */
    public function show(Sucursal $sucursal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sucursal  $sucursal
     * @return \Illuminate\Http\Response
     */
    public function edit(Sucursal $sucursal)
    {
        return view('gerente.sucursal.edit',compact('sucursal'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sucursal  $sucursal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sucursal $sucursal)
    {
        $data = $request->validate([
            'nombre' => 'required|string',
            'direccion' => 'required|string',
            'correo' => 'required|string',
        ]);
        $sucursal->update([
        $sucursal->Nombre = $data['nombre'],
        $sucursal->Direccion = $data['direccion'],
        $sucursal->Correos = $data['correo']
        ]);
        return redirect()->route('gerente.sucursal.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sucursal  $sucursal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sucursal $sucursal)
    {
        //
    }
}
