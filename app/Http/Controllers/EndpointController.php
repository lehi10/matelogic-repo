<?php

namespace App\Http\Controllers;
use Auth;
use  App\User;
use Illuminate\Http\Request;

class EndpointController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth');
    }

    public function login(Request $request)
    {
        $username=$request['username'];
        $password=$request['pass'];

        error_log($username);
        if (Auth::attempt(['username' => $username, 'password' => $password]))
        {
            $datos = User::where('username',$username)->get()[0];
            error_log($datos["name"]);
            $id =  $datos["id"];
            $name= $datos["name"];
            $email= $datos["email"];
            return response()->json(['id'=> $id,'name' => $name, 'state' => $email]);

        }
        else{
            error_log("nel");
            return response()->json(['code'=> 400,'message'=>'Not Found']);
        }

        return response()
        ->json(['name' => 'Abigail', 'state' => 'CA']);
    }

    public function questions(Request $request)
    {

        
        return response()
        ->json(['name' => 'Abigail', 'state' => 'CA']);
    }
}
