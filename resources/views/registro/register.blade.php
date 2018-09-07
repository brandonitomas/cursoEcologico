@extends('layouts.base')
@section('content')


  <div class="form-style-5">
<form>
<fieldset>
<legend>Formulario de Registro</legend>
<input type="text" name="field1" placeholder="Nombre">
<input type="text" name="field1" placeholder="Apellido">
<input type="email" name="field2" placeholder="Email">
<input type="password" name="field3" placeholder="Password">
<input type="password" name="field3" placeholder="Confirmar Password">
</fieldset>
<input type="submit" value="Registrarse" />
</form>
</div>




@endsection
