<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request) {
      return view('home.index');
    }

    public function descripcion(Request $request) {
      return view('descripcion.descripcion');
    }

    public function perfil(Request $request) {
      return view('perfil.perfil');
    }

    public function curso(Request $request) {
      return view('curso.modulo1');
    }


}
