@extends('layouts.app')

@section('headers')
<script src='https://cdn.plot.ly/plotly-latest.min.js'></script>

@endsection

@section('content')

<div class="container text-center">  
    <h2>Maestro: {{ Auth::user()->name }}</h2>
    <h3>Código : {{ Auth::user()->id }}</h3>


    <hr>


    <div class="row content">    
        <div class="col-sm-12 text-left">   

        <div class="row">
        <div class="col-sm-8">
          <div class="well">

          <h3>Gráfico de desempeño</h3>

          <div id='grafico_1'></div>


          <h3>Valoración de tienda</h3>
          <div id='grafico_2'></div>


          <h3>Puntaje Acumulado</h3>
          <div id='grafico_3'></div>

          <h3>Objetos seleccionados por el usuario</h3>
          <div id='grafico_4'></div>

          <h3>Valoración de escenario</h3>
          <table class="table">
            <thead>
              <tr>
                <th>Valoración</th>
                <th>Porcentaje de estudiantes</th>
                <th>Total </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><img width="15" src ="/images/estrella.png"></img></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td>
                  <img width="15" src ="/images/estrella.png"></img>
                  <img width="15" src ="/images/estrella.png"></img>
                </td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td>
                  <img width="15" src ="/images/estrella.png"></img>
                  <img width="15" src ="/images/estrella.png"></img>
                  <img width="15" src ="/images/estrella.png"></img>
                </td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td>
                  <img width="15" src ="/images/estrella.png"></img>
                  <img width="15" src ="/images/estrella.png"></img>
                  <img width="15" src ="/images/estrella.png"></img>
                  <img width="15" src ="/images/estrella.png"></img>
                </td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td>
                  <img width="15" src ="/images/estrella.png"></img>
                  <img width="15" src ="/images/estrella.png"></img>
                  <img width="15" src ="/images/estrella.png"></img>
                  <img width="15" src ="/images/estrella.png"></img>
                  <img width="15" src ="/images/estrella.png"></img>
                </td>
                <td></td>
                <td></td>
              </tr>
              
            </tbody>
          </table>

          <div id='grafico_5'></div>

          <h3>Emociones</h3>
          
          <table class="table">
            <thead>
              <tr>
                <th>Emociones</th>
                <th>Porcentaje de estudiantes</th>
                <th>Total </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><center>FELIZ <br><img width="50" src ="/images/feliz.png"></img>   </center></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td><center>ABURRIDO <br><img width="50" src ="/images/aburrido.png"></img>   </center></td>                <td></td>
                <td></td>
              </tr>
              <tr>
                <td><center>TRISTE <br><img width="50" src ="/images/triste.png"></img>   </center></td>                <td></td>
                <td></td>
              </tr>
            </tbody>
          </table>



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

@section('afterbody')


<script>
var data = [
  {
    x: ['giraffes', 'orangutans', 'monkeys'],
    y: [20, 14, 23],
    type: 'bar'
  }
];

Plotly.newPlot('grafico_1', data);


</script>


<script>
var trace1 = {
  x: ['giraffes', 'orangutans', 'monkeys'],
  y: [20, 14, 23],
  name: 'SF Zoo',
  type: 'bar'
};

var trace2 = {
  x: ['giraffes', 'orangutans', 'monkeys'],
  y: [12, 18, 29],
  name: 'LA Zoo',
  type: 'bar'
};

var data = [trace1, trace2];

var layout = {barmode: 'group'};

Plotly.newPlot('grafico_3', data, layout);
</script>



<script>
var data = [{
  values: [19, 26, 55,45,10],
  labels: ['1 Estrella', '2 Estrellas', '3 Estrellas', '4 Estrellas', '5 Estrellas'],
  type: 'pie'
}];

var layout = {
  height: 400,
  width: 500
};

Plotly.newPlot('grafico_5', data, layout);
</script>


@endsection