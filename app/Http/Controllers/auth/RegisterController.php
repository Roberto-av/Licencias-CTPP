<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    public function show(){
        return view('auth.register');
    }

    public function register(RegisterRequest $request){
         // Intenta crear un nuevo usuario
         try {
            $user = new User();
            $user->name = $request->input('name');
            $user->rpe = $request->input('rpe');
            $user->password = bcrypt($request->input('password'));
            $user->save();

            return redirect('login')->with('success', '¡Usuario registrado exitosamente!');
        } catch (\Exception $e) {

            return redirect()->back()->with('error', 'Error al registrar el usuario: ' . $e->getMessage());
        }
    }
}
