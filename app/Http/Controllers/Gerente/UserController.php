<?php

namespace App\Http\Controllers\Gerente;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Role;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $usuarios = User::first()->paginate(4);
        return view('gerente.usuarios.index', compact('usuarios'));
    }
    public function create()
    {
        $roles=Role::all();
        return view('gerente.usuarios.create', compact('roles'));
    }
    public function store(Request $request)
    {
        $data= $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'rol' => ['required'],
        ]);
        $usuario= User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'empresa_id' => 1,
            'role_id' => $data['rol'],
        ]);
        return redirect()->route('gerente.usuarios.index');
    }
}
