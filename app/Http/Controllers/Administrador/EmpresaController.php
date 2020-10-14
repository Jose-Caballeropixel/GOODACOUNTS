<?php

namespace App\Http\Controllers\Administrador;

use App\Http\Controllers\Controller;
use App\Empresa;
use Illuminate\Http\Request;

class EmpresaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empresas = Empresa::get();
        return view('administrador.empresa.index',compact('empresas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('administrador.empresa.create');
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
            'nit' => 'required',
            'nombre' => 'required',
            'correo' => 'required',
        ]);

        $empresas = new Empresa();
        $empresas->NIT = $data['nit'];
        $empresas->Nombre = $data['nombre'];
        $empresas->Correo = $data['correo'];
        $empresas->save();
        return redirect()->route('administrador.empresa.index');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Empresa  $empresa
     * @return \Illuminate\Http\Response
     */
    public function show(Empresa $empresa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Empresa  $empresa
     * @return \Illuminate\Http\Response
     */
    public function edit(Empresa $empresa)
    {
        return view('administrador.empresa.edit',compact('empresa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Empresa  $empresa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Empresa $empresa)
    {
        $data = $request->validate([
            'nit' => 'required',
            'nombre' => 'required',
            'correo' => 'required',
        ]);

        $empresa->update([
            $empresa->NIT = $data['nit'],
            $empresa->Nombre = $data['nombre'],
            $empresa->Correo = $data['correo'],
        ]);
        return redirect()->route('administrador.empresa.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Empresa  $empresa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Empresa $empresa)
    {
        //
    }
}
