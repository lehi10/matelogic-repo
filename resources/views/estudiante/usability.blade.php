@extends('layouts.app')

@section('content')



<div class="container text-center">    
  <div class="row content">

  
    <div class="col-sm-10 text-left">   
    @if (session('status'))
        <div class="alert alert-success alert-dismissible fade show">
            {{ session('status') }}
        </div>
    @endif
    

    <h2>Encuesta de Usabilidad</h2><hr>
            <p>TD: Totalmente desacuerdo</p>
            <p>ED: En desacuerdo</p>
            <p>NI: Ni de acuerdo ni en desacuerdo</p>
            <p>DA: De sacuerdo</p>
            <p>TA: Todalmente de acuerdo</p>

            <form action="/saveUsabilityForm" method="POST">       
            @csrf     
            <div class="row">
                <div class="col-sm-8" > 
                <strong>
                    1. Fue fácil de entender la información brindada en cada escenario del videojuego.
                </strong>
                </div>

                <div class="col-sm-4" >
                    <label class="radio-inline">
                        <input type="radio" name="q1" value = 0 {{ $usability_data["q1"]== 0 ?  "checked" : "" }}>TD
                    </label>&nbsp 
                    <label class="radio-inline">
                        <input type="radio" name="q1" value= 1 {{ $usability_data["q1"]== 1 ?  "checked" : "" }} >ED
                    </label>&nbsp 
                    <label class="radio-inline">
                        <input type="radio" name="q1" value = 2 {{ $usability_data["q1"]== 2 ?  "checked" : "" }} >NI
                    </label>&nbsp 
                    <label class="radio-inline">
                        <input type="radio" name="q1" value = 3 {{ $usability_data["q1"]== 3 ?  "checked" : "" }} >DA
                    </label>&nbsp 
                    <label class="radio-inline">
                        <input type="radio" name="q1" value = 4 {{ $usability_data["q1"]== 4 ?  "checked" : "" }} >TA
                    </label>
                </div>
            </div>
            <hr>
            

            <div class="row">
                <div class="col-sm-8" > 
                <strong>
                2. Comprendí de manera adecuada, como poder desplazarme con el avatar en cada escenario.
                </strong>
                </div>

                <div class="col-sm-4" >
                    <label class="radio-inline">
                        <input type="radio" name="q2" value = 0 {{ $usability_data["q2"]== 0 ?  "checked" : "" }}>TD
                    </label>&nbsp 
                    <label class="radio-inline">
                        <input type="radio" name="q2" value= 1 {{ $usability_data["q2"]== 1 ?  "checked" : "" }} >ED
                    </label>&nbsp 
                    <label class="radio-inline">
                        <input type="radio" name="q2" value = 2 {{ $usability_data["q2"]== 2 ?  "checked" : "" }} >NI
                    </label>&nbsp 
                    <label class="radio-inline">
                        <input type="radio" name="q2" value = 3 {{ $usability_data["q2"]== 3 ?  "checked" : "" }} >DA
                    </label>&nbsp 
                    <label class="radio-inline">
                        <input type="radio" name="q2" value = 4 {{ $usability_data["q2"]== 4 ?  "checked" : "" }} >TA
                    </label>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-sm-8" > 
                <strong>
                3. El contexto en el cual se desarrolló el videojuego fue atractivo e interesante.
                </strong>
                </div>

                <div class="col-sm-4" >
                    <label class="radio-inline">
                        <input type="radio" name="q3" value = 0 {{ $usability_data["q3"]== 0 ?  "checked" : "" }}>TD
                    </label>&nbsp 
                    <label class="radio-inline">
                        <input type="radio" name="q3" value= 1 {{ $usability_data["q3"]== 1 ?  "checked" : "" }} >ED
                    </label>&nbsp 
                    <label class="radio-inline">
                        <input type="radio" name="q3" value = 2 {{ $usability_data["q3"]== 2 ?  "checked" : "" }} >NI
                    </label>&nbsp 
                    <label class="radio-inline">
                        <input type="radio" name="q3" value = 3 {{ $usability_data["q3"]== 3 ?  "checked" : "" }} >DA
                    </label>&nbsp 
                    <label class="radio-inline">
                        <input type="radio" name="q3" value = 4 {{ $usability_data["q3"]== 4 ?  "checked" : "" }} >TA
                    </label>
                </div>
            </div>
            <hr>

            <div class="row">
                <div class="col-sm-8" > 
                <strong>
                4. Existe facilidad en el uso de los recursos dispuestos en el videojuego.
                </strong>
                </div>

                <div class="col-sm-4" >
                    <label class="radio-inline">
                        <input type="radio" name="q4" value = 0 {{ $usability_data["q4"]== 0 ?  "checked" : "" }}>TD
                    </label>&nbsp 
                    <label class="radio-inline">
                        <input type="radio" name="q4" value= 1 {{ $usability_data["q4"]== 1 ?  "checked" : "" }} >ED
                    </label>&nbsp 
                    <label class="radio-inline">
                        <input type="radio" name="q4" value = 2 {{ $usability_data["q4"]== 2 ?  "checked" : "" }} >NI
                    </label>&nbsp 
                    <label class="radio-inline">
                        <input type="radio" name="q4" value = 3 {{ $usability_data["q4"]== 3 ?  "checked" : "" }} >DA
                    </label>&nbsp 
                    <label class="radio-inline">
                        <input type="radio" name="q4" value = 4 {{ $usability_data["q4"]== 4 ?  "checked" : "" }} >TA
                    </label>
                </div>
            </div>
            <hr>

            <div class="row">
                <div class="col-sm-8" > 
                <strong>
                5. Las actividades que presenta el videojuego en cada escenario favoreció a mi aprendizaje.
                </strong>
                </div>

                <div class="col-sm-4" >
                    <label class="radio-inline">
                        <input type="radio" name="q5" value = 0 {{ $usability_data["q5"]== 0 ?  "checked" : "" }}>TD
                    </label>&nbsp 
                    <label class="radio-inline">
                        <input type="radio" name="q5" value= 1 {{ $usability_data["q5"]== 1 ?  "checked" : "" }} >ED
                    </label>&nbsp 
                    <label class="radio-inline">
                        <input type="radio" name="q5" value = 2 {{ $usability_data["q5"]== 2 ?  "checked" : "" }} >NI
                    </label>&nbsp 
                    <label class="radio-inline">
                        <input type="radio" name="q5" value = 3 {{ $usability_data["q5"]== 3 ?  "checked" : "" }} >DA
                    </label>&nbsp 
                    <label class="radio-inline">
                        <input type="radio" name="q5" value = 4 {{ $usability_data["q5"]== 4 ?  "checked" : "" }} >TA
                    </label>
                </div>
            </div>
            <hr>


            <div class="row">
                <div class="col-sm-8" > 
                <strong>
                    6. Resulto atractivo aprender el manejo de las herramientas que ofrece el videojuego.
                </strong>
                </div>

                <div class="col-sm-4" >
                    <label class="radio-inline">
                        <input type="radio" name="q6" value = 0 {{ $usability_data["q6"]== 0 ?  "checked" : "" }}>TD
                    </label>&nbsp 
                    <label class="radio-inline">
                        <input type="radio" name="q6" value= 1 {{ $usability_data["q6"]== 1 ?  "checked" : "" }} >ED
                    </label>&nbsp 
                    <label class="radio-inline">
                        <input type="radio" name="q6" value = 2 {{ $usability_data["q6"]== 2 ?  "checked" : "" }} >NI
                    </label>&nbsp 
                    <label class="radio-inline">
                        <input type="radio" name="q6" value = 3 {{ $usability_data["q6"]== 3 ?  "checked" : "" }} >DA
                    </label>&nbsp 
                    <label class="radio-inline">
                        <input type="radio" name="q6" value = 4 {{ $usability_data["q6"]== 4 ?  "checked" : "" }} >TA
                    </label>
                </div>
            </div>

            <hr>
            <div class="row">
                <div class="col-sm-8" > 
                <strong>
                7. El entorno de cada escenario con elementos culturales e históricos ayudaron en mi aprendizaje.
                </strong>
                </div>

                <div class="col-sm-4" >
                    <label class="radio-inline">
                        <input type="radio" name="q7" value = 0 {{ $usability_data["q7"]== 0 ?  "checked" : "" }}>TD
                    </label>&nbsp 
                    <label class="radio-inline">
                        <input type="radio" name="q7" value= 1 {{ $usability_data["q7"]== 1 ?  "checked" : "" }} >ED
                    </label>&nbsp 
                    <label class="radio-inline">
                        <input type="radio" name="q7" value = 2 {{ $usability_data["q7"]== 2 ?  "checked" : "" }} >NI
                    </label>&nbsp 
                    <label class="radio-inline">
                        <input type="radio" name="q7" value = 3 {{ $usability_data["q7"]== 3 ?  "checked" : "" }} >DA
                    </label>&nbsp 
                    <label class="radio-inline">
                        <input type="radio" name="q7" value = 4 {{ $usability_data["q7"]== 4 ?  "checked" : "" }} >TA
                    </label>
                </div>
            </div>

            <hr>
            <div class="row">
                <div class="col-sm-8" > 
                <strong>
                8. La organización de las secciones de cada escenario es eficiente para el usuario
                </strong>
                </div>

                <div class="col-sm-4" >
                    <label class="radio-inline">
                        <input type="radio" name="q8" value = 0 {{ $usability_data["q8"]== 0 ?  "checked" : "" }}>TD
                    </label>&nbsp 
                    <label class="radio-inline">
                        <input type="radio" name="q8" value= 1 {{ $usability_data["q8"]== 1 ?  "checked" : "" }} >ED
                    </label>&nbsp 
                    <label class="radio-inline">
                        <input type="radio" name="q8" value = 2 {{ $usability_data["q8"]== 2 ?  "checked" : "" }} >NI
                    </label>&nbsp 
                    <label class="radio-inline">
                        <input type="radio" name="q8" value = 3 {{ $usability_data["q8"]== 3 ?  "checked" : "" }} >DA
                    </label>&nbsp 
                    <label class="radio-inline">
                        <input type="radio" name="q8" value = 4 {{ $usability_data["q8"]== 4 ?  "checked" : "" }} >TA
                    </label>
                </div>
            </div>
            <hr>

            <div class="row">
                <div class="col-sm-8" > 
                <strong>
                9. El Bloque de la tienda virtual es fácil de entender y utilizar.
                </strong>
                </div>

                <div class="col-sm-4" >
                    <label class="radio-inline">
                        <input type="radio" name="q9" value = 0 {{ $usability_data["q9"]== 0 ?  "checked" : "" }}>TD
                    </label>&nbsp 
                    <label class="radio-inline">
                        <input type="radio" name="q9" value= 1 {{ $usability_data["q9"]== 1 ?  "checked" : "" }} >ED
                    </label>&nbsp 
                    <label class="radio-inline">
                        <input type="radio" name="q9" value = 2 {{ $usability_data["q9"]== 2 ?  "checked" : "" }} >NI
                    </label>&nbsp 
                    <label class="radio-inline">
                        <input type="radio" name="q9" value = 3 {{ $usability_data["q9"]== 3 ?  "checked" : "" }} >DA
                    </label>&nbsp 
                    <label class="radio-inline">
                        <input type="radio" name="q9" value = 4 {{ $usability_data["q9"]== 4 ?  "checked" : "" }} >TA
                    </label>
                </div>
            </div>
            <hr>

            <div class="row">
                <div class="col-sm-8" > 
                <strong>
                10. El Bloque de consulta de monedas es fácil de entender.
                </strong>
                </div>

                <div class="col-sm-4" >
                    <label class="radio-inline">
                        <input type="radio" name="q10" value = 0 {{ $usability_data["q10"]== 0 ?  "checked" : "" }}>TD
                    </label>&nbsp 
                    <label class="radio-inline">
                        <input type="radio" name="q10" value= 1 {{ $usability_data["q10"]== 1 ?  "checked" : "" }} >ED
                    </label>&nbsp 
                    <label class="radio-inline">
                        <input type="radio" name="q10" value = 2 {{ $usability_data["q10"]== 2 ?  "checked" : "" }} >NI
                    </label>&nbsp 
                    <label class="radio-inline">
                        <input type="radio" name="q10" value = 3 {{ $usability_data["q10"]== 3 ?  "checked" : "" }} >DA
                    </label>&nbsp 
                    <label class="radio-inline">
                        <input type="radio" name="q10" value = 4 {{ $usability_data["q10"]== 4 ?  "checked" : "" }} >TA
                    </label>
                </div>
            </div>
            <hr>

            <div class="row">
                <div class="col-sm-8" > 
                <strong>
                11. El videojuego presenta una jugabilidad fácil de manipular
                </strong>
                </div>

                <div class="col-sm-4" >
                    <label class="radio-inline">
                        <input type="radio" name="q11" value = 0 {{ $usability_data["q11"]== 0 ?  "checked" : "" }}>TD
                    </label>&nbsp 
                    <label class="radio-inline">
                        <input type="radio" name="q11" value= 1 {{ $usability_data["q11"]== 1 ?  "checked" : "" }} >ED
                    </label>&nbsp 
                    <label class="radio-inline">
                        <input type="radio" name="q11" value = 2 {{ $usability_data["q11"]== 2 ?  "checked" : "" }} >NI
                    </label>&nbsp 
                    <label class="radio-inline">
                        <input type="radio" name="q11" value = 3 {{ $usability_data["q11"]== 3 ?  "checked" : "" }} >DA
                    </label>&nbsp 
                    <label class="radio-inline">
                        <input type="radio" name="q11" value = 4 {{ $usability_data["q11"]== 4 ?  "checked" : "" }} >TA
                    </label>
                </div>
            </div>
            <hr>

            <div class="row">
                <div class="col-sm-8" > 
                <strong>
                12. El uso del joystick o teclado sufrió algún problema en el desarrollo del videojuego.

                </strong>
                </div>

                <div class="col-sm-4" >
                   <label class="radio-inline">
                        <input type="radio" name="q12" value = 0 {{ $usability_data["q12"]== 0 ?  "checked" : "" }}>TD
                    </label>&nbsp 
                    <label class="radio-inline">
                        <input type="radio" name="q12" value= 1 {{ $usability_data["q12"]== 1 ?  "checked" : "" }} >ED
                    </label>&nbsp 
                    <label class="radio-inline">
                        <input type="radio" name="q12" value = 2 {{ $usability_data["q12"]== 2 ?  "checked" : "" }} >NI
                    </label>&nbsp 
                    <label class="radio-inline">
                        <input type="radio" name="q12" value = 3 {{ $usability_data["q12"]== 3 ?  "checked" : "" }} >DA
                    </label>&nbsp 
                    <label class="radio-inline">
                        <input type="radio" name="q12" value = 4 {{ $usability_data["q12"]== 4 ?  "checked" : "" }} >TA
                    </label>
                </div>
            </div>
            <hr>

            <div class="row">
                <div class="col-sm-8" > 
                <strong>
                13. Los atributos (colores, textos, diseños, diseño gráfico) de los entornos virtuales son amigables y atractivos.
                </strong>
                </div>

                <div class="col-sm-4" >
                    <label class="radio-inline">
                        <input type="radio" name="q13" value = 0 {{ $usability_data["q13"]== 0 ?  "checked" : "" }}>TD
                    </label>&nbsp 
                    <label class="radio-inline">
                        <input type="radio" name="q13" value= 1 {{ $usability_data["q13"]== 1 ?  "checked" : "" }} >ED
                    </label>&nbsp 
                    <label class="radio-inline">
                        <input type="radio" name="q13" value = 2 {{ $usability_data["q13"]== 2 ?  "checked" : "" }} >NI
                    </label>&nbsp 
                    <label class="radio-inline">
                        <input type="radio" name="q13" value = 3 {{ $usability_data["q13"]== 3 ?  "checked" : "" }} >DA
                    </label>&nbsp 
                    <label class="radio-inline">
                        <input type="radio" name="q13" value = 4 {{ $usability_data["q13"]== 4 ?  "checked" : "" }} >TA
                    </label>
                </div>
            </div>

            <hr>
            <div class="row">
                <div class="col-sm-8" > 
                <strong>
                14. La música del videojuego es amigable y atractiva.
                </strong>
                </div>

                <div class="col-sm-4" >
                    <label class="radio-inline">
                        <input type="radio" name="q14" value = 0 {{ $usability_data["q14"]== 0 ?  "checked" : "" }}>TD
                    </label>&nbsp 
                    <label class="radio-inline">
                        <input type="radio" name="q14" value= 1 {{ $usability_data["q14"]== 1 ?  "checked" : "" }} >ED
                    </label>&nbsp 
                    <label class="radio-inline">
                        <input type="radio" name="q14" value = 2 {{ $usability_data["q14"]== 2 ?  "checked" : "" }} >NI
                    </label>&nbsp 
                    <label class="radio-inline">
                        <input type="radio" name="q14" value = 3 {{ $usability_data["q14"]== 3 ?  "checked" : "" }} >DA
                    </label>&nbsp 
                    <label class="radio-inline">
                        <input type="radio" name="q14" value = 4 {{ $usability_data["q14"]== 4 ?  "checked" : "" }} >TA
                    </label>
                </div>
            </div>

            <hr>
            <div class="row">
                <div class="col-sm-8" > 
                <strong>
                15. Los bienes virtuales (premios) que lograste conseguir durante el videojuego, fueron motivadores.
                </strong>
                </div>

                <div class="col-sm-4" >
                    <label class="radio-inline">
                        <input type="radio" name="q15" value = 0 {{ $usability_data["q15"]== 0 ?  "checked" : "" }}>TD
                    </label>&nbsp 
                    <label class="radio-inline">
                        <input type="radio" name="q15" value= 1 {{ $usability_data["q15"]== 1 ?  "checked" : "" }} >ED
                    </label>&nbsp 
                    <label class="radio-inline">
                        <input type="radio" name="q15" value = 2 {{ $usability_data["q15"]== 2 ?  "checked" : "" }} >NI
                    </label>&nbsp 
                    <label class="radio-inline">
                        <input type="radio" name="q15" value = 3 {{ $usability_data["q15"]== 3 ?  "checked" : "" }} >DA
                    </label>&nbsp 
                    <label class="radio-inline">
                        <input type="radio" name="q15" value = 4 {{ $usability_data["q15"]== 4 ?  "checked" : "" }} >TA
                    </label>
                </div>
            </div>
             <hr>
             <div class="col-sm-12 text-center">   

                <button type="submit" class="btn btn-success">Enviar</button>
            </div>  
        </form>
    </div>
   
  </div>
</div>
<br><br>


@endsection