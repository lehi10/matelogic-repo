<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <title>Yachay Exploradores</title>
    @yield('headers')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/main.css">
      

</head>

<body>
  <div id="fb-root"></div>
  <script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v6.0&appId=1644018785743808&autoLogAppEvents=1"></script>  
  <header>
    <!--<h1>Yachay Exploradores</h1>-->
    <h1 class="img-logo"><img src="/images/logo.png" alt="icon" class="icon regular" /></h1>
    <h2>Plataforma para el fortalecimiento de identidad cultural</h2>
  </div>
    <nav>
      <a style="float: left" href="/">Yachay Exploradores</a>
      <a href="conoceAQP.html">Conoce Arequipa</a>
      <a href="lugaresT.html">Lugares Turísticos</a>
      <a href="mitos.html">Mitos y leyendas</a>
      <a style="float:right" href="/register">Registrate</a>
      <a style="float:right" href="/login">Iniciar sesión</a>
    </nav>
    
  </header>
  <div class="main-menu-wrapper">
    <div class="logo-wrapper">
        Yachay Exploradores
    </div>
    <ul class="main-menu">
        <li class="item">
            <a href=" #">
                <div class="img-wrapper">
                    <img src="/images/inicio.svg" alt="icon" class="icon regular" />
                </div>
                <div class="text-wrapper">
                    <div class="column1">
                        <span class="text">Inicio</span>
                    </div>
                </div>
            </a>
        </li>
        <li class="item">
            <a href=" #">
                <div class="img-wrapper">
                    <img src="images/conocenos.svg" alt="icon" class="icon regular" />
                </div>
                <div class="text-wrapper">
                    <div class="column1">
                        <span class="text">Conócenos</span>
                    </div>
                </div>
            </a>
        </li>
        <li class="item">
            <a href="#">
                <div class="img-wrapper">
                     <img src="images/blog.svg" alt="icon" class="icon regular" />
                </div>
                <div class="text-wrapper">
                    <div class="column1">
                        <span class="text">Blog</span>
                    </div>
                </div>
            </a>
        </li>
        <li class="item">
            <a href="">
                <div class="img-wrapper">
                    <img src="images/micro.png" alt="icon" class="icon regular" />    
                </div>
                <div class="text-wrapper">
                    <div class="column1">
                        <span class="text">Podcast / Video</span>
                    </div>
                </div>
            </a>
        </li>
        <li class="item">
            <a href=" #">
                <div class="img-wrapper">
                    <img src="images/contacto.svg" alt="icon" class="icon regular" />
                </div>
                <div class="text-wrapper">
                    <div class="column1">
                        <span class="text">Contáctanos</span>
                    </div>
                </div>
            </a>
        </li>
    </ul>
  </div>
  

    @yield("content-body")
    
    



  
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/index.js"></script>

</body>
</html>