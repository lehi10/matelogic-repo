<!DOCTYPE html>
<html lang="en">
<head>
  <title>Yachay Exploradores - Docentes</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src='https://cdn.plot.ly/plotly-latest.min.js'></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
    
  .carousel-inner img {
      width: 100%; /* Set width to 100% */
      margin: auto;
      min-height:200px;
  }

  /* Hide the carousel text when the screen is less than 600 pixels wide */
  @media (max-width: 600px) {
    .carousel-caption {
      display: none; 
    }
  }
  
  .shadow {
  text-shadow: 2px 2px #525B61;
  }
  .shadow2 {
    text-shadow: 1px 1px #83919B;
  }

   /* Aesthetics */
   body {
        
        font-family: Montserrat, "Open Sans", "Helvetica Neue", Helvetica, Arial, sans-serif;
        line-height: 1.5em;
    }

  .jumbotron {
      background-image: url("../images/cover.jpg");
      background-size: cover;
      background-position:40% 60%;
      color: white;
    }

  .modal-ku {
    padding-top: 100px;
    margin: auto;
    display: flex;
    align-items: center;
    justify-content: center;
    
  }
  

  </style>
</head>
<body>


<nav class="navbar navbar-inverse ">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <h3 style="color:white">Plataforma para Docentes </h3>
      
    </div>
    <div class="collapse navbar-collapse" id="myNavbar"  style="text-align:center; margin-top:10px;" >
      <ul class="nav navbar-nav navbar-right">      
        <a href="#" style="color: white"><span class="glyphicon glyphicon-log-in" style="color: white"></span> <br>Cerrar Sesión</a>
      </ul>
    </div>
  </div>
</nav>


<div class="jumbotron container-fluid" >
  <h1 class="shadow">Yachay Exploradores</h1>      
  <p><strong>Docente:</strong> {{ Auth::user()->name }} </p>
  <p><strong>Código de Aula:</strong> {{ Auth::user()->id }} </p>
</div>


<div class="container text-center">    
<h2>ENCUESTAS</h2>
<hr>
  <div class="row">
    <div class="col-sm-3">
    </div>
    <div class="col-sm-3"> 
      <div class="well">
        <img src="../images/cliente.png" width="150"/>
        <hr>
        <h3>Encuesta de identidad Cultural</h3>
        <button style="width: 100px;" type="button" class="btn btn-info btn-md" data-toggle="modal" data-target="#modalEncuestaIdentidad">Ver</button>

      </div>
      
    </div>
    <div class="col-sm-3">
      <div class="well">
        <img src="../images/usabilidad.png" width="150"/>
        <hr>
        <h3>Encuesta de Usabilidad</h3>
        <button style="width: 100px;" type="button" class="btn btn-info btn-md" data-toggle="modal" data-target="#modalEncuestaUsabildiad">Ver</button>
      </div>
    </div>
    <div class="col-sm-3">
    </div>
  </div>
</div><br>


<div class="container text-center">    
<h2>ESTADISTICAS ESTUDIANTES</h2>
<hr>
  <div class="row">
    <div class="col-sm-4">
      <div class="well">
        <img src="../images/espejo.png" width="150"/>
        <hr>
        <h3>Métrica funciones de la identidad</h3>
        <button style="width: 100px;" type="button" class="btn btn-info btn-md" data-toggle="modal" data-target="#modalIdentidad">Ver</button>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="well">
        <img src="../images/toma-de-decisiones.png" width="150" />
        <hr>
        <h3>Métrica Respuesta correcta e incorrecta</h3>
        <button style="width: 100px;" type="button" class="btn btn-info btn-md" data-toggle="modal" data-target="#modalRespuesta">Ver</button>
      </div>
      
    </div>
    <div class="col-sm-4">
      <div class="well">
        <img src="../images/numero-uno.png" width="150"/>
        <hr>
        <h3>Métrica nivel de aprendizaje al primer intento</h3>
        <button style="width: 100px;" type="button" class="btn btn-info btn-md" data-toggle="modal" data-target="#modalAprendizaje">Ver</button>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-3">
    </div>
    <div class="col-sm-3">
      <div class="well">
        <img src="../images/mario.png" width="150"/>
        <hr>
        <h3>Métrica Puntaje acumulado por cada escenario</h3>
        <button style="width: 100px;" type="button" class="btn btn-info btn-md" data-toggle="modal" data-target="#modalAcumulado">Ver</button>
      </div>
    </div>
    <div class="col-sm-3"> 
      <div class="well">
        <img src="../images/aprobacion.png" width="150"/>
        <hr>
        <h3>Métrica Objeto seleccionado por los estudiantes</h3>
        <button style="width: 100px;" type="button" class="btn btn-info btn-md" data-toggle="modal" data-target="#modalSeleccionado">Ver</button>
      </div>
    </div>
    <div class="col-sm-3">
    </div>
  </div>
</div><br>

<div class="container text-center">    
<h2>NIVEL DE SATISFACCIÓN</h2>
<hr>
  <div class="row">
    <div class="col-sm-3">
    </div>
    <div class="col-sm-3">
      <div class="well">
        <img src="../images/revision.png" width="150"/>
        <hr>
        <h3>Metrica para la valoración de estrellas</h3>
        <button style="width: 100px;" type="button" class="btn btn-info btn-md" data-toggle="modal" data-target="#modalEstrellas">Ver</button>
      </div>
    </div>
    <div class="col-sm-3"> 
      <div class="well">
        <img src="../images/emociones.png" width="150"/>
        <hr>
        <h3>Métrica para las emociones</h3><br>
        <button style="width: 100px;" type="button" class="btn btn-info btn-md" data-toggle="modal" data-target="#modalEmociones">Ver</button>
      </div>
    </div>
    <div class="col-sm-3">
    </div>
  </div>
</div><br>



  
<div class="container text-center">    
  <h2>QUE SE ESPERA LOGRAR</h2>
  <hr>
  <div class="row">
    <div class="col-sm-4">
      <div class="well">
        <h3>Competencias</h3>
        <button style="margin-bottom: 20px; margin-top: 10px;" type="button" class="btn btn-danger btn-lg" data-toggle="collapse" data-target="#comp">Mostrar</button>
        <div id="comp" class="collapse">
          <ul class="list-group">
            <li class="list-group-item">Construye su identidad</li>
            <li class="list-group-item">Construye interpretaciones historicas</li>
          </ul>
        </div>
      </div>
      
    </div>
    <div class="col-sm-4"> 
      <div class="well">
        <h3>Capacidades</h3>
        <button style="margin-bottom: 20px; margin-top: 10px;" type="button" class="btn btn-primary btn-lg" data-toggle="collapse" data-target="#cap">Mostrar</button>
        <div id="cap" class="collapse">
          <ul class="list-group">
            <li class="list-group-item">Se valora asi mismo</li>
            <li class="list-group-item">Interpreta criticamente fuentes diversas</li>
          </ul>
        </div>
      </div>
      
    </div>
    <div class="col-sm-4">
      <div class="well">
        <h3>Desempeño</h3>
        <button style="margin-bottom: 20px; margin-top: 10px;" type="button" class="btn btn-success btn-lg" data-toggle="collapse" data-target="#desemp">Mostrar</button>
        <div id="desemp" class="collapse">
          <ul class="list-group">
            <li class="list-group-item">Analiza las principales practicas culturales (Molino de Sabandia, Plaza de Armas Fundo el Fierro) de la cuidad de Arequipa para enriquecer su identidad cultural</li>
            <li class="list-group-item">Utiliza diversas fuentes históricas sobre determinados procesos históricos  para reconocer los hechos históricos  ocurridos en (Molino de Sabandia, Plaza de Armas, Hospital Goyeneche, Fundo el Fierro).</li>
          </ul>
        </div>
      </div>
      
    </div>
  </div>
</div><br>

<footer class="container-fluid text-center">
  <strong><p>Encuentranos tambien en : </p></strong>
  <div class="row" style="display: flex; justify-content: center;">
    <div >
      <a href="">
        <img src="../images/facebook.png" width="50px" style="margin: 10px;"/>
      </a>
    </div>
    <div >
      <img src="../images/youtube.png" width="50px" style="margin: 10px;"/>
    </div>
    <div >
      <img src="../images/google-play.png" width="50px" style="margin: 10px;"/>
    </div>
  </div>
</footer>



<!-- Modal -->
<div id="modalEstrellas" class="modal fade" role="dialog">
  <div class="modal-dialog modal-ku">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Metrica para la valoración de estrellas</h4>
      </div>
      <div class="modal-body">
        
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
        

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>


<!-- Modal -->
<div id="modalEmociones" class="modal fade" role="dialog">
  <div class="modal-dialog modal-ku">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Métrica para las emociones</h4>
      </div>
      <div class="modal-body">
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

        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

<!-- Modal -->
<div id="modalAcumulado" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Métrica Puntaje acumulado por cada escenario</h4>
      </div>
      <div class="modal-body">
        
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

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

<!-- Modal -->
<div id="modalSeleccionado" class="modal fade" role="dialog">
  <div class="modal-dialog modal-ku">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Métrica Objeto seleccionado por los estudiantes</h4>
      </div>
      <div class="modal-body">
        <div id='grafico_4'></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

<!-- Modal -->
<div id="modalAprendizaje" class="modal fade" role="dialog">
  <div class="modal-dialog modal-ku">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Métrica nivel de aprendizaje al primer intento</h4>
      </div>
      <div class="modal-body">
        
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
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

<!-- Modal -->
<div id="modalRespuesta" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Métrica Respuesta correcta e incorrecta</h4>
      </div>
      <div class="modal-body">
        

        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

<!-- Modal -->
<div id="modalEncuestaUsabildiad" class="modal fade" role="dialog">
  <div class="modal-dialog modal-ku">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Encuesta de Usabilidad</h4>
      </div>
      <div class="modal-body">
        

        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

<!-- Modal -->
<div id="modalIdentidad" class="modal fade" role="dialog">
  <div class="modal-dialog modal-ku">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Encuesta de Usabilidad</h4>
      </div>
      <div class="modal-body">
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

        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

<!-- Modal -->
<div id="modalEncuestaIdentidad" class="modal fade" role="dialog">
  <div class="modal-dialog modal-ku">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Encuesta de identidad Cultural</h4>
      </div>
      <div class="modal-body">
        
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

        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>



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
    x: ['Función Selectiva', 'Función Locativa', 'Función Integrativa'],
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
  name: 'Dimensión de Valoración',
  type: 'bar'
};

var trace2 = {
  x: ['Fundo del Fierro','Plaza de Armas', 'Hospital Goyeneche', 'Molino de Sabandia'],
  y: [{{ $metricsObjSelected[1] }},
      {{ $metricsObjSelected[4] }},
      {{ $metricsObjSelected[7] }},
      {{ $metricsObjSelected[10] }}
   ],
  name: 'Dimensión de Interes',
  type: 'bar'
};

var trace3 = {
  x: ['Fundo del Fierro','Plaza de Armas', 'Hospital Goyeneche', 'Molino de Sabandia'],
  y: [{{ $metricsObjSelected[2] }},
      {{ $metricsObjSelected[5] }},
      {{ $metricsObjSelected[8] }},
      {{ $metricsObjSelected[11] }}
   ],
  name: 'Dimensión de percepciones',
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


</body>
</html>
