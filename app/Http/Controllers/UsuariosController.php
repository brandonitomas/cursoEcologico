<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class UsuariosController extends Controller
{

  public function guardar(Request $request) {

    $this->validate($request,
      [ 'usuario'=>'required',
         'email' =>'required',
         'password' =>'required'],
      ['usuario.required'=>'Los usuarios deben de tener un nombre',
         'email.required'=>'Los usuarios deben de tener un email',
         'password.required'=>'Los usuarios deben de tener una contraseña']
       );

    $usuario = new Usuario([
        'name' => $request->input('usuario'),
        'email' => $request->input('email'),
        'password' => $request->input('password')
      ]);

      $usuario->save();


      return redirect('/index');
    }

}
