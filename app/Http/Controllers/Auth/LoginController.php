<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{

    //funcion para inciar session
    public function Login(){

        //se crea las validaciones para los campos
        $Datos = validator(request() -> all(),[
            'email'         =>          'required|email',
            'password'      =>          'required'
        ]);

        //se crea una array para los datosd de las credenciales
        $Credenciales = array(
            'email'         =>      request() -> input('email'),
            'password'      =>      request() -> input('password')
        );

        //se hace un intento de autenticacion de el usuario
        if(auth()-> attempt($Credenciales)){

            //si funciono arrojara los datos el usuario logeado
            return auth() -> user();

        
            //si la validacion fallo mostrara mensaje 
        } else {

            echo 'No se encontro el usuario';

        }

    }

    public function Salir(){

        auth()->logout();

        return redirect() -> route('Login');

    }

}
