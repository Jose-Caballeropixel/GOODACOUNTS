<?php

namespace App\Http\Controllers\Bodeguero;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('bodeguero.index');
    }
}
