<?php

namespace App\Http\Controllers\Administrador;

use App\Empresa;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $usuarios=User::latest()->paginate('4');
        return view('administrador.usuarios.index', compact('usuarios'));
    }
    public function create(Empresa $empresa)
    {
        return view('administrador.usuarios.create',compact('empresa'));
    }
    public function store(Request $request)
    {
        $data= $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'empresa_id'=> 'required'
        ]);
        $usuario= User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'empresa_id' => $data['empresa_id'],
            'role_id' => 1
        ]);
        return redirect()->route('administrador.usuarios.index');
    }
}
