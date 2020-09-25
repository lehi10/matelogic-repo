<!DOCTYPE html>
<html lang="en">
<head>
  <title>Yachay Exploradores - Alumnos</title>
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
      <h3 style="color:white">Plataforma para Estudiantes </h3>
      
    </div>
    <div class="collapse navbar-collapse" id="myNavbar"  style="text-align:center; margin-top:10px;" >
      <ul class="nav navbar-nav navbar-right">      
        <a href="{{ route('logout') }}"
            onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();"
            style="color: white"><span class="glyphicon glyphicon-log-in" style="color: white"></span> <br>Cerrar Sesión</a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
      </ul>
    </div>
  </div>
</nav>


<div class="jumbotron container-fluid" >
  <h1>Yachay Exploradores</h1>      
  <p><strong>Estudiante: </strong> {{$nameStudent}} </p>
  <p><strong>Código de Clase: </strong> {{$classromID}} </p>
</div>


<div class="container text-center">   

@if (session('status'))
    <div class="alert alert-success alert-dismissible fade show">
        {{ session('status') }}
    </div>
@endif
  
<h2>MI PERFIL</h2>
<hr>
  <div class="row">
    
    <div class="col-sm-3"> 
      <div class="well">
        <img src="../images/poblacion.png" width="150"/>
        <hr>
        <h3>Datos Demográficos</h3>
        <button style="width: 100px;" type="button" class="btn btn-info btn-md" data-toggle="modal" data-target="#modalDemo">Ver</button>

      </div>
      
    </div>
    <div class="col-sm-3">
      <div class="well">
        <img src="../images/encuesta.png" width="150"/>
        <hr>
        <h3>Encuesta</h3>
        <button style="width: 100px;" type="button" class="btn btn-info btn-md" data-toggle="modal" data-target="#modalEncuesta">Ver</button>
      </div>
    </div>
    
    <div class="col-sm-3"> 
      <div class="well">
        <img src="../images/tarea-completada.png" width="150"/>
        <hr>
        <h3>Encuesta Post Test</h3>
        <button style="width: 100px;" type="button" class="btn btn-info btn-md" onclick="window.location.href='/surveyPostform'">Ver</button>

      </div>
      
    </div>
    <div class="col-sm-3">
      <div class="well">
        <img src="../images/usabilidad.png" width="150"/>
        <hr>
        <h3>Encuesta de usabilidad</h3>
        <button style="width: 100px;" type="button" class="btn btn-info btn-md" onclick="window.location.href='/usabilityform'">Ver</button>
      </div>
    </div>

  </div>
</div><br>


<div class="container text-center">    
<h2>ESTADISTICAS</h2>
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
        <h3>Métrica para la valoración de estrellas</h3>
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
          </ul>
        </div>
      </div>
      
    </div>
    <div class="col-sm-4">
      <div class="well">
        <h3>Desempeños</h3>
        <button style="margin-bottom: 20px; margin-top: 10px;" type="button" class="btn btn-success btn-lg" data-toggle="collapse" data-target="#desemp">Mostrar</button>
        <div id="desemp" class="collapse">
          <ul class="list-group">
            <li class="list-group-item">Analiza las principales practicas culturales (Molino de Sabandia, Plaza de Armas Fundo el Fierro) de la cuidad de Arequipa para enriquecer su identidad cultural</li>
            <li class="list-group-item">Explica y valora sus caracteristicas personales, culturales y sociales relacionadas a la cuidad de Arequipa. </li>
            <li class="list-group-item">Opina reflexivamente sobre las practicas culturales de la cuidad de Arequipa</li>
            <li class="list-group-item">Muestra aprecio por su herencia y cultural, y la del país, sintiendose parte de el.</li>
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
      <a href="https://web.facebook.com/YachayExploradores/">
        <img src="../images/facebook.png" width="50px" style="margin: 10px;"/>
      </a>
    </div>
    <div >
      <a href="">
      <img src="../images/youtube.png" width="50px" style="margin: 10px;"/>
      </a>
    </div>
    <div >
      <a href="https://play.google.com/store/apps/details?id=com.lizard.yachay&hl=es">
        <img src="../images/google-play.png" width="50px" style="margin: 10px;"/>
      </a>
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
        <h4 class="modal-title">Métrica para la valoración de estrellas</h4>
      </div>
      <div class="modal-body">
      <table class="table">
        <thead>
            <tr>
              <th>Escenario</th>
              <th>Estrellas dadas por el estudiante</th>
              
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Plaza de Armas</td>
              <td><img width="15" src ="/images/estrella.png"></img></td>
              
              
            </tr>
            <tr>
            <td>Fundo el fierro</td>
              <td>
              @for($i = 0; $i < $stars['fundo'] ;$i++)
                <img width="15" src ="/images/estrella.png"></img>
              @endfor
                
                
              </td>
              
            </tr>
            <tr>
              <td>Hospital Goyeneche</td>
              <td>
                @for($i = 0; $i < $stars['hospital'] ;$i++)
                  <img width="15" src ="/images/estrella.png"></img>
                @endfor
              </td>
              
            </tr>
            <tr>
              <td>Molino de Sabandia</td>
              <td>
                @for($i = 0; $i < $stars['molino'] ;$i++)
                  <img width="15" src ="/images/estrella.png"></img>
                @endfor
              </td>
            </tr>

            
          </tbody>
        </table>

        <div id='grafico_6'></div>


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
              <th>Escenario</th>
              <th>Emociones</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Plaza de Armas</td>
              <td>
              @if ($stars['plaza'] == 0)
                  No se calificó
              @elseif ($stars['plaza'] <= 2)
                <img width="50" src ="/images/triste.png" />
              @elseif ($stars['plaza'] <= 4)
                <img width="50" src ="/images/aburrido.png" />
              @else
                <img width="50" src ="/images/feliz.png" />
              @endif
              </td>              
            </tr>
            <tr>
            <td>Fundo el fierro</td>
              <td>
                @if ($stars['fundo'] == 0)
                  No se calificó
                @elseif ($stars['fundo'] <= 2)
                  <img width="50" src ="/images/triste.png" />
                @elseif ($stars['fundo'] <= 4)
                  <img width="50" src ="/images/aburrido.png" />
                @else
                  <img width="50" src ="/images/feliz.png" />
                @endif        
              </td>
              
            </tr>
            <tr>
              <td>Hospital Goyeneche</td>
              <td>
                @if ($stars['hospital'] == 0)
                  No se calificó
                @elseif ($stars['hospital'] <= 2)
                  <img width="50" src ="/images/triste.png" />
                @elseif (($stars['plaza']) <= 4)
                  <img width="50" src ="/images/aburrido.png" />
                @else
                  <img width="50" src ="/images/feliz.png" />
                @endif
              </td>
              
            </tr>
            <tr>
              <td>Molino de Sabandia</td>
              <td>
                @if ($stars['molino'] == 0)
                  No se calificó
                @elseif ($stars['molino'] <= 2)
                  <img width="50" src ="/images/triste.png" />
                @elseif ($stars['plaza'] <= 4)
                  <img width="50" src ="/images/aburrido.png" />
                @else
                  <img width="50" src ="/images/feliz.png" />
                @endif
              </td>
            </tr>
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
  <div class="modal-dialog modal-ku">

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
                <td>{{$coins['fundo']}}</td>
            </tr>
            <tr>
                <td>Plaza de Armas</td>
                <td>{{$coins["plaza"]}}</td>
            </tr>
            <tr>
                <td>Hospital Goyeneche</td>
                <td>{{$coins['hospital']}}</td>
            </tr>
            <tr>
                <td>Molino de Sabandía</td>
                <td>{{$coins['molino']}}</td>
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
<div id="modalSeleccionado" class="modal fade" role="dialog">
  <div class="modal-dialog modal-ku">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Métrica Objeto seleccionado por los estudiantes</h4>
      </div>
      <div class="modal-body">
        
      <div id='grafico_5'></div>
        
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
                <th>Nivel de aprendizaje</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>Satisfactorio(36-46) </td>
                <td>{{$firstIntentMetric['total'] >= 36 ? "Usted se encuentra en este nivel" : ""}}</td>
            </tr>
            <tr>
                <td>Proceso(24-35)</td>
                <td>{{$firstIntentMetric['total'] >= 24 && $firstIntentMetric['total'] < 36? "Usted se encuentra en este nivel" : ""}}</td>
            </tr>
            <tr>
              <td>Inicio(12-23)</td>
              <td>{{$firstIntentMetric['total'] >= 12 && $firstIntentMetric['total'] < 24  ? "Usted se encuentra en este nivel" : ""}}</td>
            </tr>
            <tr>
              <td>Previo al inicio(0-11)</td>
              <td>{{$firstIntentMetric['total'] <= 12 ? "Usted se encuentra en este nivel" : ""}}</td>
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
<div id="modalRespuesta" class="modal fade" role="dialog">
  <div class="modal-dialog modal-ku">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Métrica Respuesta correcta e incorrecta</h4>
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
                <td>Incorrectas </td>
                <td>0</td>
                <td>0%</td>
            </tr>
            <tr>
                <td>Correctas</td>
                <td>0</td>
                <td>0 %</td>
            </tr>
            </tbody>
          </table>

        <div id='grafico_02'></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

<!-- Modal -->
<div id="modalEncuesta" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Encuesta</h4>
      </div>
      <div class="modal-body">
        <form action="/saveIdentityForm" method="POST">       
          @csrf     
          <div class="row">
              <div class="col-sm-8" > 
              <strong>
                  1. Valoras las festividades religiosas de tu localidad
              </strong>
              </div>

              <div class="col-sm-4" >
                  <label class="radio-inline">
                      <input type="radio" name="q1" value = 0 {{ $encuesta_identidad["q1"]== 0 ?  "checked" : "" }}>Nunca
                  </label>
                  <label class="radio-inline">
                      <input type="radio" name="q1" value= 1 {{ $encuesta_identidad["q1"]== 1 ?  "checked" : "" }} >Aveces
                  </label>
                  <label class="radio-inline">
                      <input type="radio" name="q1" value = 2 {{ $encuesta_identidad["q1"]== 2 ?  "checked" : "" }} >Siempre
                  </label>
              </div>
          </div>
          <hr>
          

          <div class="row">
              <div class="col-sm-8" > 
              <strong>
              2. Defiendes las costumbres de tu ciudad o localidad.
              </strong>
              </div>

              <div class="col-sm-4" >
                  <label class="radio-inline">
                      <input type="radio" name="q2" value = 0  {{ $encuesta_identidad["q2"]== 0 ?  "checked" : "" }}>Nunca
                  </label>
                  <label class="radio-inline">
                      <input type="radio" name="q2" value = 1 {{ $encuesta_identidad["q2"]== 1 ?  "checked" : "" }}> Aveces
                  </label>
                  <label class="radio-inline">
                      <input type="radio" name="q2" value = 2 {{ $encuesta_identidad["q2"]== 2 ?  "checked" : "" }}>Siempre
                  </label>
              </div>
          </div>
          <hr>
          <div class="row">
              <div class="col-sm-8" > 
              <strong>
              3. Te identificas con los valores que practican en tu ciudad o comunidad.
              </strong>
              </div>

              <div class="col-sm-4" >
                  <label class="radio-inline">
                      <input type="radio" name="q3" value = 0 {{ $encuesta_identidad["q3"]== 0 ?  "checked" : "" }}>Nunca
                  </label>
                  <label class="radio-inline">
                      <input type="radio" name="q3" value = 1 {{ $encuesta_identidad["q3"]== 1 ?  "checked" : "" }}>Aveces
                  </label>
                  <label class="radio-inline">
                      <input type="radio" name="q3" value = 2 {{ $encuesta_identidad["q3"]== 2 ?  "checked" : "" }}>Siempre
                  </label>
              </div>
          </div>
          <hr>

          <div class="row">
              <div class="col-sm-8" > 
              <strong>
              4. Difundes la historia de tu ciudad y/o comunidad.
              </strong>
              </div>

              <div class="col-sm-4" >
                  <label class="radio-inline">
                      <input type="radio" name="q4" value = 0 {{ $encuesta_identidad["q4"]== 0 ?  "checked" : "" }}>Nunca
                  </label>
                  <label class="radio-inline">
                      <input type="radio" name="q4" value = 1 {{ $encuesta_identidad["q4"]== 1 ?  "checked" : "" }}>Aveces
                  </label>
                  <label class="radio-inline">
                      <input type="radio" name="q4" value = 2 {{ $encuesta_identidad["q4"]== 2 ?  "checked" : "" }}>Siempre
                  </label>
              </div>
          </div>
          <hr>

          <div class="row">
              <div class="col-sm-8" > 
              <strong>
              5. Valoras la historia de tu ciudad y/o comunidad
              </strong>
              </div>

              <div class="col-sm-4" >
                  <label class="radio-inline">
                      <input type="radio" name="q5" value = 0 {{ $encuesta_identidad["q5"]== 0 ?  "checked" : "" }}>Nunca
                  </label>
                  <label class="radio-inline">
                      <input type="radio" name="q5" value = 1 {{ $encuesta_identidad["q5"]== 1 ?  "checked" : "" }}>Aveces
                  </label>
                  <label class="radio-inline">
                      <input type="radio" name="q5" value = 2 {{ $encuesta_identidad["q5"]== 2 ?  "checked" : "" }}>Siempre
                  </label>
              </div>
          </div>
          <hr>


          <div class="row">
              <div class="col-sm-8" > 
              <strong>
              6. Valoras a los personajes históricos y hechos históricos de tu ciudad y/o comunidad
              </strong>
              </div>

              <div class="col-sm-4" >
                  <label class="radio-inline">
                      <input type="radio" name="q6" value = 0 {{ $encuesta_identidad["q6"]== 0 ?  "checked" : "" }}>Nunca
                  </label>
                  <label class="radio-inline">
                      <input type="radio" name="q6" value = 1 {{ $encuesta_identidad["q6"]== 1 ?  "checked" : "" }}>Aveces
                  </label>
                  <label class="radio-inline">
                      <input type="radio" name="q6" value = 2 {{ $encuesta_identidad["q6"]== 2 ?  "checked" : "" }} >Siempre
                  </label>
              </div>
          </div>

          <hr>
          <div class="row">
              <div class="col-sm-8" > 
              <strong>
              7. Las personalidades arequipeñas intelectuales, políticos, literatos, Científicos, tecnólogos, artistas, filósofos y humanistas te motivan a ser más arequipeño.
              </strong>
              </div>

              <div class="col-sm-4" >
                  <label class="radio-inline">
                      <input type="radio" name="q7" value = 0 {{ $encuesta_identidad["q7"]== 0 ?  "checked" : "" }} >Nunca
                  </label>
                  <label class="radio-inline">
                      <input type="radio" name="q7" value = 1 {{ $encuesta_identidad["q7"]== 1 ?  "checked" : "" }}>Aveces
                  </label>
                  <label class="radio-inline">
                      <input type="radio" name="q7" value = 2 {{ $encuesta_identidad["q7"]== 2 ?  "checked" : "" }}>Siempre
                  </label>
              </div>
          </div>

          <hr>
          <div class="row">
              <div class="col-sm-8" > 
              <strong>
              8. Te identificas bastante con los edificios y plazas del Centro Histórico y demás Monumentos históricos en los distintos distritos de Arequipa.
              </strong>
              </div>

              <div class="col-sm-4" >
                  <label class="radio-inline">
                      <input type="radio" name="q8" value = 0 {{ $encuesta_identidad["q8"]== 0 ?  "checked" : "" }}>Nunca
                  </label>
                  <label class="radio-inline">
                      <input type="radio" name="q8" value = 1 {{ $encuesta_identidad["q8"]== 1 ?  "checked" : "" }}>Aveces
                  </label>
                  <label class="radio-inline">
                      <input type="radio" name="q8" value = 2 {{ $encuesta_identidad["q8"]== 2 ?  "checked" : "" }}>Siempre
                  </label>
              </div>
          </div>
          <hr>

          <div class="row">
              <div class="col-sm-8" > 
              <strong>
              9. Las campiñas y el sillar en las construcción de edificios coloniales te hacen sentir muy arequipeño.
              </strong>
              </div>

              <div class="col-sm-4" >
                  <label class="radio-inline">
                      <input type="radio" name="q9" value = 0 {{ $encuesta_identidad["q9"]== 0 ?  "checked" : "" }} >Nunca
                  </label>
                  <label class="radio-inline">
                      <input type="radio" name="q9" value = 1 {{ $encuesta_identidad["q9"]== 1 ?  "checked" : "" }}>Aveces
                  </label>
                  <label class="radio-inline">
                      <input type="radio" name="q9" value = 2 {{ $encuesta_identidad["q9"]== 2 ?  "checked" : "" }}>Siempre
                  </label>
              </div>
          </div>
          <hr>

          <div class="row">
              <div class="col-sm-8" > 
              <strong>
              10. Promueves el aprendizaje de dialecto o loncco arequipeño en tu barrio
              </strong>
              </div>

              <div class="col-sm-4" >
                  <label class="radio-inline">
                      <input type="radio" name="q10" value = 0 {{ $encuesta_identidad["q10"]== 0 ?  "checked" : "" }}>Nunca
                  </label>
                  <label class="radio-inline">
                      <input type="radio" name="q10" value = 1 {{ $encuesta_identidad["q10"]== 1 ?  "checked" : "" }}>Aveces
                  </label>
                  <label class="radio-inline">
                      <input type="radio" name="q10" value = 2 {{ $encuesta_identidad["q10"]== 2 ?  "checked" : "" }}>Siempre
                  </label>
              </div>
          </div>
          <hr>

          <div class="row">
              <div class="col-sm-8" > 
              <strong>
              11. Te esfuerzas por aprender más el loncco y arequipeñismos de nuestra ciudad.
              </strong>
              </div>

              <div class="col-sm-4" >
                  <label class="radio-inline">
                      <input type="radio" name="q11" value = 0 {{ $encuesta_identidad["q11"]== 0 ?  "checked" : "" }}>Nunca
                  </label>
                  <label class="radio-inline">
                      <input type="radio" name="q11" value = 1 {{ $encuesta_identidad["q11"]== 1 ?  "checked" : "" }}>Aveces
                  </label>
                  <label class="radio-inline">
                      <input type="radio" name="q11" value = 2 {{ $encuesta_identidad["q11"]== 2 ?  "checked" : "" }}>Siempre
                  </label>
              </div>
          </div>
          <hr>

          <div class="row">
              <div class="col-sm-8" > 
              <strong>
              12. Valoras la gastronomía de la ciudad de Arequipa en tu localidad

              </strong>
              </div>

              <div class="col-sm-4" >
                  <label class="radio-inline">
                      <input type="radio" name="q12" value = 0 {{ $encuesta_identidad["q12"]== 0 ?  "checked" : "" }}>Nunca
                  </label>
                  <label class="radio-inline">
                      <input type="radio" name="q12" value = 1 {{ $encuesta_identidad["q12"]== 1 ?  "checked" : "" }}>Aveces
                  </label>
                  <label class="radio-inline">
                      <input type="radio" name="q12" value = 2 {{ $encuesta_identidad["q12"]== 2 ?  "checked" : "" }}>Siempre
                  </label>
              </div>
          </div>
          <hr>

          <div class="row">
              <div class="col-sm-8" > 
              <strong>
              13. Te gusta los platos típicos (roco relleno, soltero de queso, adobo antaño, etc.).
              </strong>
              </div>

              <div class="col-sm-4" >
                  <label class="radio-inline">
                      <input type="radio" name="q13" value = 0 {{ $encuesta_identidad["q13"]== 0 ?  "checked" : "" }}>Nunca
                  </label>
                  <label class="radio-inline">
                      <input type="radio" name="q13" value = 1 {{ $encuesta_identidad["q13"]== 1 ?  "checked" : "" }}>Aveces
                  </label>
                  <label class="radio-inline">
                      <input type="radio" name="q13" value = 2 {{ $encuesta_identidad["q13"]== 2 ?  "checked" : "" }}>Siempre
                  </label>
              </div>
          </div>

          <hr>
          <div class="row">
              <div class="col-sm-8" > 
              <strong>
              14. Participas en las fiestas y aniversarios en la ciudad de Arequipa.
              </strong>
              </div>

              <div class="col-sm-4" >
                  <label class="radio-inline">
                      <input type="radio" name="q14" value = 0 {{ $encuesta_identidad["q14"]== 0 ?  "checked" : "" }}>Nunca
                  </label>
                  <label class="radio-inline">
                      <input type="radio" name="q14" value = 1 {{ $encuesta_identidad["q14"]== 1 ?  "checked" : "" }}>Aveces
                  </label>
                  <label class="radio-inline">
                      <input type="radio" name="q14" value=2 {{ $encuesta_identidad["q14"]== 2 ?  "checked" : "" }}> Siempre
                  </label>
              </div>
          </div>

          <hr>
          <div class="row">
              <div class="col-sm-8" > 
              <strong>
              15. Te interesas por aprender y practicar las tradiciones y costumbres de la ciudad de Arequipa
              </strong>
              </div>

              <div class="col-sm-4" >
                  <label class="radio-inline">
                      <input type="radio" name="q15" value = 0 {{ $encuesta_identidad["q15"]== 0 ?  "checked" : "" }}>Nunca
                  </label>
                  <label class="radio-inline">
                      <input type="radio" name="q15" value = 1 {{ $encuesta_identidad["q15"]== 1 ?  "checked" : "" }}>Aveces
                  </label>
                  <label class="radio-inline">
                      <input type="radio" name="q15" value = 2 {{ $encuesta_identidad["q15"]== 2 ?  "checked" : "" }}>Siempre
                  </label>
              </div>
          </div>
            <hr>
            <div class="col-sm-12 text-center">   

              <button type="submit" class="btn btn-success">Enviar</button>
          </div>  
      </form>
        
        
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

<!-- Modal -->
<div id="modalDemo" class=" modal fade " role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Datos Demográficos</h4>
      </div>
      <div class="modal-body">
        <form action="/saveDemoForm" method="POST">
          @csrf
            
            <div class="form-group">
              <label for="direccion">Dirección</label>
              <input type="text" class="form-control" name="direccion" required="true" value={{$demoSurvey['q1']}} >
            </div>

            <div class="form-group">
              <label >Lugar de Nacimiento</label>
              <input type="text" class="form-control" name="l_nac" required="true" value={{$demoSurvey['q2']}}>
            </div>

            <div class="form-group">
              <label >Lugar de Nacimiento del Padre</label>
              <input type="text" class="form-control" name="l_nac_padre" value={{$demoSurvey['q3']}}>
            </div>

            <div class="form-group">
              <label >Lugar de Nacimiento de la Madre</label>
              <input type="text" class="form-control" name="l_nac_madre" value={{$demoSurvey['q4']}}>
            </div>

            <div class="form-group">
              <label >Sexo</label>
              <input type="text" class="form-control" name="sexo" required="true" value={{$demoSurvey['q5']}}>
            </div>

            <div class="form-group">
              <label >Idioma</label>
              <input type="text" class="form-control" name="idioma" required="true" value={{$demoSurvey['q6']}}>
            </div>

            <div class="form-group">
              <label >¿Con que lugar de la provincia de Arequipa te sientes identificado?</label>
              <input type="text" class="form-control" name="cuidad_identificado" required="true" value={{$demoSurvey['q7']}}>
            </div>

            <div class="form-group">
              <label >¿Cuál es tu plato típico favorito de Arequipa?</label>
              <input type="text" class="form-control" name="plato_tipico" required="true" value={{$demoSurvey['q8']}}>
            </div>

            <div class="form-group">
              <label >¿Qué animal típico de Arequipa es de tu agrado?</label>
              <input type="text" class="form-control" name="animal_tipico" required="true" value={{$demoSurvey['q9']}}>
            </div>
            
            <button type="submit" class="btn btn-success">Guardar</button>
          </form>
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
        <h4 class="modal-title">Datos Demográficos</h4>
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
              <td>5</td>
              <td>{{$identityFunctionMetric["locativa"]}}</td>
              <td>{{ $identityFunctionMetric["total"] == 0 ? 0 : $identityFunctionMetric["locativa"] / $identityFunctionMetric["total"]}}%</td>
          </tr>
          <tr>
              <td>Función Selectiva </td>
              <td>6</td>
              <td>{{$identityFunctionMetric["selectiva"]}}</td>
              <td>{{ $identityFunctionMetric["total"] == 0 ? 0 : $identityFunctionMetric["selectiva"] / $identityFunctionMetric["total"]}}%</td>
          </tr>
          <tr>
              <td>Función Integrativa </td>
              <td>35</td>
              <td>{{$identityFunctionMetric["integrativa"]}}</td>
              <td>{{ $identityFunctionMetric["total"] == 0 ? 0 : $identityFunctionMetric["integrativa"] / $identityFunctionMetric["total"]}}%</td>
          </tr>

          </tbody>
        </table>
      
        <div id='grafico_01'></div>

        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>



<script>
var data = [
  {
    x: ['Locativa', 'Selectiva', 'Función Integrativa'],
    y: [{{$identityFunctionMetric["locativa"]}},{{$identityFunctionMetric["selectiva"]}},{{$identityFunctionMetric["integrativa"]}}],
    type: 'bar'
  }
];

Plotly.newPlot('grafico_01', data);
</script>

<script>
var data = [
  {
    x: ['Correctas', 'Incorrectas'],
    y: [{{$correctIncorrectMetric['totalCorrect']}},{{$correctIncorrectMetric['totalIncorrect']}}],
    type: 'bar'
  }
];

Plotly.newPlot('grafico_02', data);
</script>
<script>
var data = [
  {
    x: ['Satisfactorio','Proceso','Inicio','Previo al inicio'],
    y: [0,0,0,0],
    type: 'bar'
  }
];

Plotly.newPlot('grafico_03', data);
</script>

<script>

var data = [
  {
    x: ['Valoracion','Interes', 'Percepción'],
    y: [{{$storeMetric['valoracion']}},{{$storeMetric["interes"]}},{{$storeMetric["percepcion"]}}],    
    type: 'bar'
  }
];
Plotly.newPlot('grafico_5', data);


  
</script>








</body>
</html>
