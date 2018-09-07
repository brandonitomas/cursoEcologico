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

    public function registro(Request $request) {
      return view('registro.registro');
    }

    public function register(Request $request) {
      return view('registro.register');
    }

    public function login(Request $request) {
      return view('login.login');
    }

}
