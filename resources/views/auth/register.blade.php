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
          <img src="../images/logo.gif" width="150px">
          <h2>Yachay Exploradores</h2>
          <hr>
          
            <div class="card-body">
            <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row" >
                            <label for="role" class="col-md-4 col-form-label text-md-right">Tipo de Cuenta</label>
                            <div class="col-md-6">
                                <select class="form-control"  id="role_selector" name="role" onChange="onChange()"> 
                                    <option value="0" >Estudiante</option>
                                    <option value="1" >Maestro</option>
                                </select>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                        
                        </div>



                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Nombre</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('role')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">Correo</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="username" class="col-md-4 col-form-label text-md-right">Usuario</label>

                            <div class="col-md-6">
                                <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="email">

                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Contraseña</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>                        

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Confirmar Contraseña</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>



                        <div class="form-group row" id="code-form">
                            <label for="code" class="col-md-4 col-form-label text-md-right">Código de Clase <br>(Si no tiene código puede solicitarlo a su profesor)</label>

                            <div class="col-md-6" >
                                <input id="code" type="text" class="form-control @error('code') is-invalid @enderror" name="code"  autocomplete="code">

                                @error('code')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0 centerButton">
                            <div class="col-md-6 offset-md-4">
                                <button onclick="myFunction()" type="submit" class="btn btn-primary btn-lg">
                                    Registrar
                                </button>
                            </div>
                        </div>
                    </form>
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
      min-width: 80%;
      position: fixed; 
      left: -100px; 
      
    } 
    .sideBarLogin{
      padding: 30px 50px 30px 50px;
      background-color: white;
      height: 100%;
      position: fixed;
      z-index: 1;
      top: 0;
      right: 0;
      width: 40%;
      overflow-x: hidden; text-align:center;
    }

    .leftSide{
      padding: 60px 30px 30px 30px;
      color: white;
    }

    .centerButton{
        width: 100%;
        display: flex;
        justify-content: center;
    }
  </style>

<script>

function myFunction() {
    if(document.getElementById("role_selector").value==0)
    {
        document.getElementById("code").required = 1;

    }
    else 
    {
        document.getElementById("code").required = 0;
    }
}

function onChange(){
    if(document.getElementById("role_selector").value==1)
    {
        document.getElementById("code-form").style.visibility = "hidden";
    }
    else{
        document.getElementById("code-form").style.visibility = "visible";
    }
}


</script>
    


</html> 


    