<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Registro</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
  </head>
  <body class="body">
    <div class="container-fluid ">
      <div class="row">
        <div>
          <div class="col-sm-3"> </div>
          <div class="col-sm-6 title"> 
            <h2>Yachay Exploradores<h2>
          </div>
          <div class="col-sm-1 " ></div>
          <div class="col-sm-2 " >
            <div class="dropdown">
            <button class="buttonTransparent" style='font-size:50px' data-toggle="dropdown"  id="menu1"> <i class='far fa-user-circle' ></i></button>
              <span class="caret"></span></button>
              <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                <li role="presentation" class="dropdown-header">Usuario</li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Cambiar de Clave</a></li>
                <li role="presentation" class="divider"></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Cerrar Sesión</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="row title"> 
        <div class="col-sm-5 " ></div>
        <div class="col-sm-2 " >
          <div class="panel panel-default" style="">
            <div  class="panel-body"> <strong>Nombre del Aula :</strong> 123456 </div>
          </div>
        </div>
        <div class="col-sm-5 " ></div>
        
      </div>
    </div>    
  </body>

  <style>
    .title{
      text-align : center;
    }

    .body{
      padding: 30px 30px 30px 30px;
    }

    .buttonTransparent {
      background-color: Transparent;
      background-repeat:no-repeat;
      border: none;
      cursor:pointer;
      overflow: hidden;
      outline:none;
    }
        
  </style>


</html> 

