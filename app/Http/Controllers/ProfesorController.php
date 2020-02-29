<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;


class ProfesorController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
       
    }

    
    public function show()
    {

        if(Auth::user()->role != 1)
            abort(403,"Usuario no autorizado.");




        
        return view('profesor.index');
    }
}
