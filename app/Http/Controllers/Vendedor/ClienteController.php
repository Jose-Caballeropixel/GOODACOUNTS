<?php

namespace App\Http\Controllers\Vendedor;
use App\Http\Controllers\Controller;
use App\Cliente;
use Facade\FlareClient\Http\Client;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes = Cliente::latest()->paginate(4);
        return view('vendedor.cliente.index',compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('vendedor.cliente.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request -> validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'identificacion' => 'required',
            'correo' => 'required',
            'telefono' => 'required'
        ]);
        $clientes = new Cliente();
        $clientes->nombre = $data['nombre'];
        $clientes->apellidos = $data['apellido'];
        $clientes->identificacion = $data['indentificacion'];
        $clientes->correo = $data['correo'];
        $clientes->telefono = $data['telefono'];
        $clientes->save();
        return redirect()->route('vendedo.cliente.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function show(Cliente $cliente)
    {


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function edit(Cliente $cliente)
    {
        return view('vendedor.cliente.edit',compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cliente $cliente)
    {
        $data = $request -> validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'identificacion' => 'required',
            'correo' => 'required',
            'telefono' => 'required'
        ]);

        $cliente->update([
            $cliente->nombre = $data['nombre'],
            $cliente->apellidos = $data['apellido'],
            $cliente->identificacion = $data['indentificacion'],
            $cliente->correo = $data['correo'],
            $cliente->telefono = $data['telefono'],
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cliente $cliente)
    {
        //
    }
}
