<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Cursos Ecologicos</title>
    <link rel="stylesheet" href="/css/cursoEcologico.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  </head>
  <body>
    <div class="titulo">
      <div class="menu">
        <a href="/index">Home</a>
        @auth
        <a href="/perfil" target="_self">{{ Auth::user()->name }}</a>
        @else
        <a href="/login" target="_self">Login</a>
        @endauth
      </div>
      <header>Cursos Ecológicos para Docentes</header>
      <p>Cursos de certificación oficial de EcoHouse</p>
    </div>




    @yield('content')





    <footer>Todos los derechos reservados. 2018 EcoHouse.</footer>
  </body>
</html>
