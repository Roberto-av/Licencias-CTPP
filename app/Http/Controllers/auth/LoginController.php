<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Support\Facades\Log;

class LoginController extends Controller
{
    public function show(){
        return view('auth.login');
    } 

    public function login(Request $request){
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Autenticación exitosa
            Log::debug('Se inicio sesion correctamente');
            return redirect('')->with('success', '¡Se ha iniciado la sesion correctamente!');
        } else {
            // Autenticación fallida
            return back()->withErrors(['email' => 'Estas credenciales no coinciden con nuestros registros.']);
        }
    }
}
