<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Perfil</title>
    <link rel="stylesheet" href="/css/cursoEcologico.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  </head>
  <body>

    <div class="container-fluid well span6">
	<div class="row-fluid">
        <div class="span2" >
		    <img src="" class="img-circle">
        </div>

        <div class="span8">
            <h3><span>{{ Auth::user()->name }}</span></h3>
            <h6>Email: </h6>
            <h6>Puntaje: </h6>
            <h6>Módulos pendientes: </h6>
            <a href="/modulo1">Continuar</a>
        </div>

        </div>
        </div>

            <div class="logout">
               <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
               <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                 {{ csrf_field() }}
               </form>
               <br>
               <br>
               <a href="/index">Home</a>
            </div>

</body>
</html>
