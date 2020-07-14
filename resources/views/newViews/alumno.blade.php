<!DOCTYPE html>
<html lang="en">
<head>
  <title>Yachay Exploradores - Alumnos</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#" style="color: white"><span class="glyphicon glyphicon-log-in" style="color: white"></span> Cerrar Sesión</a></li>
      </ul>
    </div>
  </div>
</nav>


<div class="jumbotron container-fluid" >
  <h1>Yachay Exploradores</h1>      
  <p><strong>Estudiante:</strong> Nombre del estudiante </p>
</div>


<div class="container text-center">    
<h2>MI PERFIL</h2>
<hr>
  <div class="row">
    <div class="col-sm-3">
    </div>
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
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Metrica para la valoración de estrellas</h4>
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
<div id="modalEmociones" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Métrica para las emociones</h4>
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
<div id="modalAcumulado" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Métrica Puntaje acumulado por cada escenario</h4>
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
<div id="modalSeleccionado" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Métrica Objeto seleccionado por los estudiantes</h4>
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
<div id="modalAprendizaje" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Métrica nivel de aprendizaje al primer intento</h4>
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
<div id="modalEncuesta" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Encuesta</h4>
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
<div id="modalDemo" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Datos Demográficos</h4>
      </div>
      <div class="modal-body">
        

        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>



</body>
</html>
