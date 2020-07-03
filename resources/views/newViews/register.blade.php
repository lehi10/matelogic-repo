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
        <div class="title">
          <h2>Registro Docente / Alumno<h2>
          <div class="row">
            <div class="col-sm-3" ></div>
            <div class="col-sm-2" ><img src="../images/exp1.png" width="150px"/></div>
            <div class="col-sm-2" >
              <img src="../images/logo2.png" width="150px"/>
            </div>
            <div class="col-sm-2" ><img src="../images/exp2.png" width="150px"/></div>
            <div class="col-sm-3" ></div>
          </div>
        </div>
        <div class="row forms-register">  
          <div class="col-sm-6"  >
            <img src="../images/profesor.png" width="200px">
            <h3>Docente</h3>
            <form action="/action_page.php" class="form-child">
              <div class="form-group">
                <label for="email">Usuario:</label>
                <input type="email" class="form-control" id="email" placeholder="Ingrese su usuario" name="email">
              </div>
              <div class="form-group">
                <label for="pwd">Clave:</label>
                <input type="password" class="form-control" id="pwd" placeholder="Ingrese su clave" name="pwd">
              </div>
              <div class="checkbox">
                <label><input type="checkbox" name="remember "> Recuerdame</label>
              </div>
              <button type="submit" class="btn btn-primary btn-lg">Aula</button>
            </form>
          </div>
          <div class="col-sm-6" >
            <img src="../images/estudiante.png" width="200px">
            <h3>Alumno</h3>
            <form action="/action_page.php" class="form-child">
              <div class="form-group">
                <label for="email">Aula:</label>
                <input type="email" class="form-control" id="email" placeholder="Ingrese su usuario" name="email">
              </div>
              <button type="submit" class="btn btn-primary btn-lg">Iniciar sesión</button>
            </form>
          </div>
        </div>
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
    .forms-register{
      text-align : center;
    }
    .form-child{
      padding-left: 250px;
      padding-right: 250px;
    }
  </style>


</html> 

