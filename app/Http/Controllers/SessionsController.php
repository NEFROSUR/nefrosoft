<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
//REQUIERE DE MAS REVISION ( ES SOLO PARA EL LOGIN)
class SessionsController extends Controller
{
    public function create() {
        
        return view('auth.login');
    }
    //CONTROLADOR DE LA SESION
    public function store() {
        
        if(auth()->attempt(request(['email', 'password'])) == false) {
            return back()->withErrors([
                'message' => 'El correo o la contraseña es incorrecto, intentelo nuevamente',
            ]);

        } else {

            if(auth()->user()->role == 'admin') {
                return redirect()->route('admin.index');
            } else {
                return redirect()->to('/');
            }
        }
    }

    public function destroy() {

        auth()->logout();

        return redirect()->to('/init');
    }
}
