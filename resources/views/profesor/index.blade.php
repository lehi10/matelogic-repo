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
            <div class="col-sm-12">

            <h3>Métrica sobre Identidad Cultural Arequipeña</h3>
                <div class="col-sm-12">

                <table class="table table-condensed">
                  <thead>
                    <tr>
                        <th></th>
                        <th>Frecuencia</th>
                        <th>Procentaje</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Nunca</td>
                        <td>{{$counters[0]}}</td>
                        @if ($counters[0] + $counters[1]+$counters[2] != 0)
                        <td>{{ round((100*$counters[0])/($counters[0]+$counters[1]+$counters[2]),2)}}</td>
                        @else
                            <td>0</td>
                        @endif
                    </tr>
                    <tr>
                        <td>Aveces</td>
                        <td>{{$counters[1]}}</td>
                        @if ($counters[0] + $counters[1]+$counters[2] != 0)
                        <td>{{ round((100*$counters[1])/($counters[0]+$counters[1]+$counters[2]),2)}}</td>
                        @else
                            <td>0</td>
                        @endif
                    </tr>
                    <tr>
                        <td>Siempre</td>
                        <td>{{$counters[2]}}</td>
                        @if ($counters[0] + $counters[1]+$counters[2] != 0)
                        <td>{{ round((100*$counters[2])/($counters[0]+$counters[1]+$counters[2]),2)}}</td>
                        @else
                            <td>0</td>
                        @endif
                    </tr>
                  </tbody>
                </table>
                <div id='grafico_0'></div>


                <hr>
                <h3>Función de Identidad</h3>
                <div class="col-sm-12">

                <table class="table table-condensed">
                  <thead>
                  <tr>
                      <th>Funciones</th>
                      <th>N° de Preguntas</th>
                      <th>Total de Aciertos</th>
                      <th>Porcentaje</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                      <td>Función Locativa </td>
                      <td>6</td>
                      <td>{{ $oneIntents[0] }}</td>
                      <td>{{ $totalRows > 0 ?round(($oneIntents[0]*100)/($totalRows*6),2): 0 }} %</td>
                  </tr>
                  <tr>
                      <td>Función Selectiva </td>
                      <td>5</td>
                      <td>{{ $oneIntents[1] }}</td>
                      <td>{{ $totalRows > 0? round(($oneIntents[1]*100)/($totalRows*5),2): 0 }} %</td>
                  </tr>
                  <tr>
                      <td>Función Integrativa </td>
                      <td>36</td>
                      <td>{{ $oneIntents[2] }}</td>
                      <td>{{ $totalRows > 0 ?round(($oneIntents[2]*100)/($totalRows*36),2): 0 }} %</td>
                  </tr>

                  </tbody>
                </table>
              
                <div id='grafico_0.1'></div>

                <hr>
                <h3>Gráfico de desempeño</h3>
                <div class="col-sm-12">

                <table class="table table-condensed">
                  <thead>
                  <tr>
                      <th></th>
                      <th>Frecuencia</th>
                      <th>Porcentaje</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                      <td>Correctas</td>
                      <td>{{ $oneIntents[0]+$oneIntents[1]+$oneIntents[2] }}</td>
                      <td>{{ $totalRows > 0 ? round( ($oneIntents[0]+$oneIntents[1]+$oneIntents[2])*100/($totalRows*(6+5+36)),2): 0 }} % </td>
                  </tr>
                  <tr>
                      <td>Incorrectas</td>
                      <td>{{ $moreIntents[0]+$moreIntents[1]+$moreIntents[2] }}</td>
                      <td>{{ $totalRows > 0 ? round( ($moreIntents[0]+$moreIntents[1]+$moreIntents[2])*100/($totalRows*(6+5+36)),2): 0 }} % </td>
                  </tr>

                  </tbody>
                </table>
              
                <div id='grafico_1'></div>


              <h3>Valoración de tienda</h3>
              <div id='grafico_2'></div>


              <h3>Puntaje Acumulado</h3>
                <table class="table table-condensed">
                  <thead>
                  <tr>
                      <th>Escenarios</th>
                      <th>Puntaje Total</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                      <td>Fundo del Fierro</td>
                      <td>{{ $scoreAcc[0] }}</td>
                  </tr>
                  <tr>
                      <td>Plaza de Armas</td>
                      <td>{{ $scoreAcc[1] }}</td>
                  </tr>
                  <tr>
                      <td>Hospital Goyeneche</td>
                      <td>{{ $scoreAcc[2] }}</td>
                  </tr>
                  <tr>
                      <td>Molino de Sabandía</td>
                      <td>{{ $scoreAcc[3] }}</td>
                  </tr>

                  </tbody>
                </table>

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
                    <td><center>ABURRIDO <br><img width="50" src ="/images/aburrido.png"></img>   </center></td><td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td><center>TRISTE <br><img width="50" src ="/images/triste.png"></img>   </center></td><td></td>
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
        
        </div>
    </div>
</div>
@endsection

@section('afterbody')



<script>
var data = [{
  values: [{{$counters[0]}}, {{$counters[1]}},{{$counters[2]}}],
  labels: ['Nunca', 'Aveces', 'Siempre'],
  type: 'pie'
}];

var layout = {
  height: 400,
  width: 900
};

Plotly.newPlot('grafico_0', data, layout);
</script>


<script>
var data = [
  {
    x: ['Función Locativa', 'Función Selectiva', 'Función Integrativa'],
    y: [
        {{ $totalRows > 0 ?round(($oneIntents[0]*100)/($totalRows*6),2): 0 }}, 
        {{ $totalRows > 0 ?round(($oneIntents[1]*100)/($totalRows*5),2): 0 }},
        {{ $totalRows > 0 ?round(($oneIntents[2]*100)/($totalRows*36),2): 0 }}],
    type: 'bar'
  }
];

Plotly.newPlot('grafico_0.1', data);


</script>



<script>
var data = [
  {
    x: ['Correctas', 'Incorrectas'],
    y: [{{ $oneIntents[0]+$oneIntents[1]+$oneIntents[2] }}, {{ $moreIntents[0]+$moreIntents[1]+$moreIntents[2] }}],
    type: 'bar'
  }
];

Plotly.newPlot('grafico_1', data);


</script>




<script>
var trace1 = {
  x: ['Fundo del Fierro','Plaza de Armas', 'Hospital Goyeneche', 'Molino de Sabandia'],
  y: [{{ $metricsObjSelected[0] }},
      {{ $metricsObjSelected[3] }},
      {{ $metricsObjSelected[6] }},
      {{ $metricsObjSelected[9] }}
   ],
  name: 'Locativa',
  type: 'bar'
};

var trace2 = {
  x: ['Fundo del Fierro','Plaza de Armas', 'Hospital Goyeneche', 'Molino de Sabandia'],
  y: [{{ $metricsObjSelected[1] }},
      {{ $metricsObjSelected[4] }},
      {{ $metricsObjSelected[7] }},
      {{ $metricsObjSelected[10] }}
   ],
  name: 'Selectiva',
  type: 'bar'
};

var trace3 = {
  x: ['Fundo del Fierro','Plaza de Armas', 'Hospital Goyeneche', 'Molino de Sabandia'],
  y: [{{ $metricsObjSelected[2] }},
      {{ $metricsObjSelected[5] }},
      {{ $metricsObjSelected[8] }},
      {{ $metricsObjSelected[11] }}
   ],
  name: 'Integrativa',
  type: 'bar'
};

var data = [trace1, trace2,trace3];

var layout = {barmode: 'group'};

Plotly.newPlot('grafico_4', data, layout);
</script>



<script>
var data = [{
  values: [19, 26, 55,45,10],
  labels: ['1 Estrella', '2 Estrellas', '3 Estrellas', '4 Estrellas', '5 Estrellas'],
  type: 'pie'
}];

var layout = {
  height: 400,
  width: 900
};

Plotly.newPlot('grafico_5', data, layout);
</script>


@endsection