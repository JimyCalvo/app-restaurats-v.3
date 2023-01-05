<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    //---- Función de visualización de la vista---\\
    public function show(){
        if(Auth::check()){
            return redirect('/home');
        }
        return view('auth.register');
    }
    //--- Función de Registrar---\\
    public function register(RegisterRequest $request){
        $user=User::create($request->validated());
        return redirect('/login')->with('success','Se a registrado correctamente su información');
    }
}
