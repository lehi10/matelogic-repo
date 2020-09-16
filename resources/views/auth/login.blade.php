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
              <img src="../images/logo.gif" width="200px">
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
          <img src="../images/logo.gif" width="200px">
          <h2>Yachay Exploradores</h2>
          
            <div class="card-body">
              <form method="POST" action="{{ route('login') }}">
                  @csrf
                  <div class="form-group">
                      <label for="email">Usuario:</label>
                          <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="email" autofocus>
                          @error('username')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                  </div>

                  <div class="form-group ">
                      <label for="password">Contraseña</label>
                          <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                          @error('password')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                  </div>
                  <div class="form-group ">
                    <button type="submit" class="btn btn-primary btn-lg" >
                        Iniciar Sesión
                    </button>
                  </div>
              </form>
            </div>          
          <div class="registerbtn">
            <button class="btn btn-default btn-lg" onclick="javascript:location.href='../register'">Registrate</button>
          </div>

          <div class="row socialNetworks">
            <p>Encuéntranos en: </p>
            <div class="col-sm-4">
              <a href="https://play.google.com/store/apps/details?id=com.lizard.yachay&hl=es">
                <img src="../images/google-play.png" width="50px" style="margin: 10px;"/>
              </a>
            </div>
            <div class="col-sm-4">
              <a href="https://web.facebook.com/YachayExploradores/">
                <img src="../images/facebook.png" width="50px" style="margin: 10px;"/>
              </a>
            </div>
            <div class="col-sm-4">
              <img src="../images/youtube.png" width="50px" style="margin: 10px;"/>
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


                
  