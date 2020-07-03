<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container-fluid">
  <h1>Hello World!</h1>
  <p>Resize the browser window to see the effect.</p>
  <p>The columns will automatically stack on top of each other when the screen is less than 768px wide.</p>
  <div class="row">
    <div class="col-sm-4" style="background-color:lavender;">.col-sm-4</div>
    <div class="col-sm-4" style="background-color:lavenderblush;">.col-sm-4</div>
    <div class="col-sm-4" style="background-color:lavender;">.col-sm-4</div>
  </div>
</div>

</body>
</html>





@extends('layouts.yachay')


@section('content-body')

<div class="wrapper">
    <section id='intro'>
        <h2> Quienes somos</h2>
        <p>Somos una plataforma educativa, la cual contribuye al fortalecimiento de la indentidad cultural arequipeña a traves de videojuegos y opciones adicionales para conocer más de nuestra región Arequipa.</p>
    </section>

    <section id="content">
        
        <div class="fb-page" data-href="https://www.facebook.com/KaraokeFeelYourVoice/" data-tabs="timeline" data-width="" data-height="10" data-small-header="true" data-adapt-container-width="false" data-hide-cover="true" data-show-facepile="false"><blockquote cite="https://www.facebook.com/KaraokeFeelYourVoice/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/KaraokeFeelYourVoice/">Feel Your Voice - Karaoke Privado</a></blockquote></div>
    </section>
</div>


@endsection
