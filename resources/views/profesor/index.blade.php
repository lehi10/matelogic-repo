@extends('layouts.app')

@section('content')

<div class="container text-center">  
    <h2>Maestro: {{ Auth::user()->name }}</h2>



    <hr>





    <div class="row content">    
        <div class="col-sm-12 text-left">   

        <div class="row">
        <div class="col-sm-8">
          <div class="well">
          <h2>Metricas sobre la identidad cultural Arequipa</h2>   
          <hr>       

            <table class="table table-condensed">
            <thead>
            <tr>
                <th></th>
                <th></th>
                <th>Frecuencia</th>
                <th>Porcentaje</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>Nuna (0-5)</td>
                <td>El estudiante no se siente identificado culturalmente con la cuidad de Arequipas</td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>Aveces (6-10)</td>
                <td>El estudiante muestra interés y realiza algunas actividades que lo involucran culturalmente con la cuidad de Arequipa</td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>Siempre (11-15)</td>
                <td>El estudiante se siente identificado culturalmente con la cuidad de Arequipa, realizando diversas actividades que se desarrollan en nuestra cuidad</td>
                <td></td>
                <td></td>
            </tr>
            </tbody>
        </table>

        </div>
        </div>
        <div class="col-sm-6">
          <div class="well">
          <div id="chartdiv"></div>
        </div>
        </div>
      </div>

        


    </div>
</div>
@endsection