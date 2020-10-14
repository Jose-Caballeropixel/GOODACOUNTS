<?php


namespace App\Http\Controllers\Gerente;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Producto;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos = Producto::latest()->paginate(10);
        return view('gerente.producto.index', compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('gerente.producto.create');
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
            'nombre' => 'required|string|min:2',
            'codigo' => 'required|string|',
            'imagen' => 'mimes:png,jpeg,jpg|',
            'precio' => 'required|'
        ]);
        $producto = new  Producto();

        if($request->file('imagen')){
            $archivo=$request->file('imagen');
            $ruta= public_path('/storage/productos');
            $nombreArchivo=time().'.'.$request->file('imagen')->extension();
            $archivo->move($ruta,$nombreArchivo);
            $producto->imagen = $nombreArchivo;

        }else{
            $producto->imagen = 'sinimagen.png';

        }
        $producto->nombre = $data['nombre'];
        $producto->codigo = $data['codigo'];
        $producto->precio = $data['precio'];

        $producto->save();
        return redirect()->route('gerente.producto.index')->with('mensaje', 'Producto '.$producto->nombre. 'Agregado Correctamente');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function show(Producto $producto)
    {
        return view('gerente.producto.show', compact('producto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function edit(Producto $producto)
    {
        return view('gerente.producto.edit', compact('producto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Producto $producto)
    {
        $data = $request->validate([
            'nombre' => 'required|string|min:2',
            'codigo' => 'required|string|',
            'imagen' => 'mimes:png,jpeg,jpg|',
            'precio' => 'required|'
        ]);

        if($request->file('imagen')){
            $archivo=$request->file('imagen');
            $ruta= public_path('/storage/productos');
            $nombreArchivo=time().'.'.$request->file('imagen')->extension();
            $archivo->move($ruta,$nombreArchivo);
            $producto->imagen = $nombreArchivo;

        }
        $producto->nombre = $data['nombre'];
        $producto->codigo = $data['codigo'];
        $producto->precio = $data['precio'];

        $producto->save();
        return redirect()->route('gerente.producto.index')->with('mensaje', 'Producto '.$producto->nombre. 'Actulizado Correctamente');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Producto $producto)
    {
        //
    }

    //Metodos para consumir por ajax

    public function buscar(Request $request)
    {
        $nombre=$request['nombre'];
        $productos= Producto::where('nombre', 'LIKE', "%$nombre%");
        return response()->json($productos, 200);
    }
}
