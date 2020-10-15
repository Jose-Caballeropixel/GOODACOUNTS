<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{


    use AuthenticatesUsers;

    protected function authenticated(Request $request, $user)
    {
        if($user->role_id==1){
            return redirect()->route('administrador.index');
        }else if($user->role_id==2){
            return redirect()->route('gerente.index');
        }else if($user->role_id==3){
            return redirect()->route('vendedor.index');
        }else if($user->role_id==4){
            return redirect()->route('bodeguero.index');
        }else if($user->role_id==5){
            return redirect()->route('proveedor.index');
        }
    }
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
