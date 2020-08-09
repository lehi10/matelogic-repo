
@extends('layouts.app')

@section('content')



<div class="container">
  <h2>Datos demográficos</h2>
  <form action="/saveDemoForm" method="POST">
  @csrf
    
    <div class="form-group">
      <label for="direccion">Dirección</label>
      <input type="text" class="form-control" name="direccion" required="true">
    </div>

    <div class="form-group">
      <label >Lugar de Nacimiento</label>
      <input type="text" class="form-control" name="l_nac" required="true">
    </div>

    <div class="form-group">
      <label >Lugar de Nacimiento del Padre</label>
      <input type="text" class="form-control" name="l_nac_padre">
    </div>

    <div class="form-group">
      <label >Lugar de Nacimiento de la Madre</label>
      <input type="text" class="form-control" name="l_nac_madre">
    </div>

    <div class="form-group">
      <label >Sexo</label>
      <input type="text" class="form-control" name="sexo" required="true">
    </div>

    <div class="form-group">
      <label >Idioma</label>
      <input type="text" class="form-control" name="idioma" required="true">
    </div>

    <div class="form-group">
      <label >¿Con que lugar de la provincia de Arequipa te sientes identificado?</label>
      <input type="text" class="form-control" name="cuidad_identificado" required="true">
    </div>

    <div class="form-group">
      <label >¿Cuál es tu plato típico favorito de Arequipa?</label>
      <input type="text" class="form-control" name="plato_tipico" required="true">
    </div>

    <div class="form-group">
      <label >¿Qué animal típico de Arequipa es de tu agrado?</label>
      <input type="text" class="form-control" name="animal_tipico" required="true">
    </div>
    
    <button type="submit" class="btn btn-success">Guardar</button>
  </form>
</div>

@endsection