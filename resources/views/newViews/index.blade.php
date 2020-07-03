<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
  </head>
  <body>
    <div class="container-fluid ">
      <div class="row">
        <div class="col-sm-9" >
          <img src="../images/plaza.jpeg" class="background" alt="">
          <div class="row leftSide" >
            <div class="col-sm-3">
              <h1>Yachay Exploradores</h1>
              <img src="../images/logo.png" width="200px">
              <h3>
                Es una plataforma educativa la cual contribuye al fortalecimiento de la identidad cultural arequipeña. 
              </h3>
              <h3>
                A traves de este juego conocerás 4 lugares importantes de la cuidad de Arequipa.
              </h3>
            </div>
            <div class="col-sm-9"></div>
          </div>
        </div>
        <div class="col-sm-3 sideBarLogin">
          <img src="../images/logo.png" width="200px">
          <h2>Yachay Exploradores</h2>
          <form action="/action_page.php">
            <div class="form-group">
              <label for="email">Usuario:</label>
              <input type="email" class="form-control" id="email" placeholder="Ingrese su usuario" name="email">
            </div>
            <div class="form-group">
              <label for="pwd">Clave:</label>
              <input type="password" class="form-control" id="pwd" placeholder="Ingrese su clave" name="pwd">
            </div>
            <div class="checkbox">
              <label><input type="checkbox" name="remember "> Remember me</label>
            </div>
            <button type="submit" class="btn btn-primary btn-lg">Iniciar sesión</button>
          </form>
          
          <div class="registerbtn">
            <button class="btn btn-default btn-lg">Registrate</button>
          </div>
          <div class="row socialNetworks">
            <p>Encuéntranos en: </p>
            <div class="col-sm-4">
              <i class='fab fa-google-play' style='font-size:36px'></i>
            </div>
            <div class="col-sm-4">
              <i class='fab fa-facebook-square' style='font-size:36px'></i>
            </div>
            <div class="col-sm-4">
              <i class='fab fa-youtube' style='font-size:36px'></i>
            </div>
          </div>
        </div>
      </div>
    </div>

  </body>

  <style>
    .registerbtn{
      margin-top: 40px;
      margin-bottom: 40px;
    }

    .socialNetworks{
      padding: 20px 20px 20px 20px;

    }
    .background {
      /* Preserve aspet ratio */
      min-width: 85%;
      position: fixed; 
      left: 0; 
      
    } 
    .sideBarLogin{
      padding: 30px 50px 30px 50px;
      background-color: white;
      height: 100%;
      position: fixed;
      z-index: 1;
      top: 0;
      right: 0;
      overflow-x: hidden; text-align:center;
    }

    .leftSide{
      padding: 60px 30px 30px 30px;
      color: white;
    }
  </style>


</html> 

