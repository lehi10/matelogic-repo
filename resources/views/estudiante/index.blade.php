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



</body>
</html>
