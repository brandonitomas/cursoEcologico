@extends('layouts.base')
@section('content')

<div class="environment">

  <div class="descripcion">Este curso consiste en 10 módulos orientados a la enseñanza de prácticas de concientización y pedagogía ecológica ambiental.</div>

  <div class="comenzar">
    <a href="{{ route('register') }}">Comenzar</a>
    @auth
    <a href="/modulo1">Continuar</a>
    @endauth
  </div>


</div>




@endsection
