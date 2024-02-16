<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function show(){
        echo "Estoy aqui";
        return view('auth.register');
    }

    public function register(RegisterRequest $request){
        echo "Estoy aqui 22222";
        dd($request->all());
         // Intenta crear un nuevo usuario
         try {
            $user = User::create($request->all());

            return redirect('/login')->with('success', '¡Usuario registrado exitosamente!');
        } catch (\Exception $e) {

            return redirect()->back()->with('error', 'Error al registrar el usuario: ' . $e->getMessage());
        }
    }
}
