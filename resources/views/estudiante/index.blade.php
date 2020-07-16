@extends('layouts.app')

@section('content')



<div class="container text-center">    
  <div class="row content">

  
    <div class="col-sm-10 text-left">   
    

    <h2>Identidad Cultural - Formulario de estudiante </h2><hr>
            <p>Buen día, estudiante de la prestigiosa I.E. Independencia Americana de Arequipa. Te pedimos por favor que contestes las preguntas, ya que es para una investigación de carácter académico donde nos interesa conocer tu opinión acerca de la Identidad cultural. La información obtenida será anónima, por lo que no se te pide ningún dato.
                Instrucciones: Lee detenidamente y marca la respuesta con una “X”, que, según tú, sea la opinión que tengas al respecto, teniendo en cuenta la siguiente escala:</p>
            <p>Instrucciones: Lee detenidamente y marca la respuesta con una “X”, que, según tú, sea la opinión que tengas al respecto, teniendo en cuenta la siguiente escala:
                Nunca = N = 1 A veces = AV = 2 Siempre = S = 3</p>
        <br><br>

            @if (session('status'))
                <div class="alert alert-success alert-dismissible fade show">
                    {{ session('status') }}
                </div>
            @endif
                    

            <form action="/saveForm" method="POST">       
            @csrf     
            <div class="row">
                <div class="col-sm-8" > 
                <strong>
                    1. Valoras las festividades religiosas de tu localidad
                </strong>
                </div>

                <div class="col-sm-4" >
                    <label class="radio-inline">
                        <input type="radio" name="q1" value = 0 {{ $datos_estudiante["q1"]== 0 ?  "checked" : "" }}>Nunca
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="q1" value= 1 {{ $datos_estudiante["q1"]== 1 ?  "checked" : "" }} >Aveces
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="q1" value = 2 {{ $datos_estudiante["q1"]== 2 ?  "checked" : "" }} >Siempre
                    </label>
                </div>
            </div>
            <hr>
            

            <div class="row">
                <div class="col-sm-8" > 
                <strong>
                2. Defiendes las costumbres de tu ciudad o localidad.
                </strong>
                </div>

                <div class="col-sm-4" >
                    <label class="radio-inline">
                        <input type="radio" name="q2" value = 0  {{ $datos_estudiante["q2"]== 0 ?  "checked" : "" }}>Nunca
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="q2" value = 1 {{ $datos_estudiante["q2"]== 1 ?  "checked" : "" }}> Aveces
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="q2" value = 2 {{ $datos_estudiante["q2"]== 2 ?  "checked" : "" }}>Siempre
                    </label>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-sm-8" > 
                <strong>
                3. Te identificas con los valores que practican en tu ciudad o comunidad.
                </strong>
                </div>

                <div class="col-sm-4" >
                    <label class="radio-inline">
                        <input type="radio" name="q3" value = 0 {{ $datos_estudiante["q3"]== 0 ?  "checked" : "" }}>Nunca
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="q3" value = 1 {{ $datos_estudiante["q3"]== 1 ?  "checked" : "" }}>Aveces
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="q3" value = 2 {{ $datos_estudiante["q3"]== 2 ?  "checked" : "" }}>Siempre
                    </label>
                </div>
            </div>
            <hr>

            <div class="row">
                <div class="col-sm-8" > 
                <strong>
                4. Difundes la historia de tu ciudad y/o comunidad.
                </strong>
                </div>

                <div class="col-sm-4" >
                    <label class="radio-inline">
                        <input type="radio" name="q4" value = 0 {{ $datos_estudiante["q4"]== 0 ?  "checked" : "" }}>Nunca
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="q4" value = 1 {{ $datos_estudiante["q4"]== 1 ?  "checked" : "" }}>Aveces
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="q4" value = 2 {{ $datos_estudiante["q4"]== 2 ?  "checked" : "" }}>Siempre
                    </label>
                </div>
            </div>
            <hr>

            <div class="row">
                <div class="col-sm-8" > 
                <strong>
                5. Valoras la historia de tu ciudad y/o comunidad
                </strong>
                </div>

                <div class="col-sm-4" >
                    <label class="radio-inline">
                        <input type="radio" name="q5" value = 0 {{ $datos_estudiante["q5"]== 0 ?  "checked" : "" }}>Nunca
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="q5" value = 1 {{ $datos_estudiante["q5"]== 1 ?  "checked" : "" }}>Aveces
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="q5" value = 2 {{ $datos_estudiante["q5"]== 2 ?  "checked" : "" }}>Siempre
                    </label>
                </div>
            </div>
            <hr>


            <div class="row">
                <div class="col-sm-8" > 
                <strong>
                6. Valoras a los personajes históricos y hechos históricos de tu ciudad y/o comunidad
                </strong>
                </div>

                <div class="col-sm-4" >
                    <label class="radio-inline">
                        <input type="radio" name="q6" value = 0 {{ $datos_estudiante["q6"]== 0 ?  "checked" : "" }}>Nunca
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="q6" value = 1 {{ $datos_estudiante["q6"]== 1 ?  "checked" : "" }}>Aveces
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="q6" value = 2 {{ $datos_estudiante["q6"]== 2 ?  "checked" : "" }} >Siempre
                    </label>
                </div>
            </div>

            <hr>
            <div class="row">
                <div class="col-sm-8" > 
                <strong>
                7. Las personalidades arequipeñas intelectuales, políticos, literatos, Científicos, tecnólogos, artistas, filósofos y humanistas te motivan a ser más arequipeño.
                </strong>
                </div>

                <div class="col-sm-4" >
                    <label class="radio-inline">
                        <input type="radio" name="q7" value = 0 {{ $datos_estudiante["q7"]== 0 ?  "checked" : "" }} >Nunca
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="q7" value = 1 {{ $datos_estudiante["q7"]== 1 ?  "checked" : "" }}>Aveces
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="q7" value = 2 {{ $datos_estudiante["q7"]== 2 ?  "checked" : "" }}>Siempre
                    </label>
                </div>
            </div>

            <hr>
            <div class="row">
                <div class="col-sm-8" > 
                <strong>
                8. Te identificas bastante con los edificios y plazas del Centro Histórico y demás Monumentos históricos en los distintos distritos de Arequipa.
                </strong>
                </div>

                <div class="col-sm-4" >
                    <label class="radio-inline">
                        <input type="radio" name="q8" value = 0 {{ $datos_estudiante["q8"]== 0 ?  "checked" : "" }}>Nunca
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="q8" value = 1 {{ $datos_estudiante["q8"]== 1 ?  "checked" : "" }}>Aveces
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="q8" value = 2 {{ $datos_estudiante["q8"]== 2 ?  "checked" : "" }}>Siempre
                    </label>
                </div>
            </div>
            <hr>

            <div class="row">
                <div class="col-sm-8" > 
                <strong>
                9. Las campiñas y el sillar en las construcción de edificios coloniales te hacen sentir muy arequipeño.
                </strong>
                </div>

                <div class="col-sm-4" >
                    <label class="radio-inline">
                        <input type="radio" name="q9" value = 0 {{ $datos_estudiante["q9"]== 0 ?  "checked" : "" }} >Nunca
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="q9" value = 1 {{ $datos_estudiante["q9"]== 1 ?  "checked" : "" }}>Aveces
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="q9" value = 2 {{ $datos_estudiante["q9"]== 2 ?  "checked" : "" }}>Siempre
                    </label>
                </div>
            </div>
            <hr>

            <div class="row">
                <div class="col-sm-8" > 
                <strong>
                10. Promueves el aprendizaje de dialecto o loncco arequipeño en tu barrio
                </strong>
                </div>

                <div class="col-sm-4" >
                    <label class="radio-inline">
                        <input type="radio" name="q10" value = 0 {{ $datos_estudiante["q10"]== 0 ?  "checked" : "" }}>Nunca
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="q10" value = 1 {{ $datos_estudiante["q10"]== 1 ?  "checked" : "" }}>Aveces
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="q10" value = 2 {{ $datos_estudiante["q10"]== 2 ?  "checked" : "" }}>Siempre
                    </label>
                </div>
            </div>
            <hr>

            <div class="row">
                <div class="col-sm-8" > 
                <strong>
                11. Te esfuerzas por aprender más el loncco y arequipeñismos de nuestra ciudad.
                </strong>
                </div>

                <div class="col-sm-4" >
                    <label class="radio-inline">
                        <input type="radio" name="q11" value = 0 {{ $datos_estudiante["q11"]== 0 ?  "checked" : "" }}>Nunca
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="q11" value = 1 {{ $datos_estudiante["q11"]== 1 ?  "checked" : "" }}>Aveces
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="q11" value = 2 {{ $datos_estudiante["q11"]== 2 ?  "checked" : "" }}>Siempre
                    </label>
                </div>
            </div>
            <hr>

            <div class="row">
                <div class="col-sm-8" > 
                <strong>
                12. Valoras la gastronomía de la ciudad de Arequipa en tu localidad

                </strong>
                </div>

                <div class="col-sm-4" >
                    <label class="radio-inline">
                        <input type="radio" name="q12" value = 0 {{ $datos_estudiante["q12"]== 0 ?  "checked" : "" }}>Nunca
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="q12" value = 1 {{ $datos_estudiante["q12"]== 1 ?  "checked" : "" }}>Aveces
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="q12" value = 2 {{ $datos_estudiante["q12"]== 2 ?  "checked" : "" }}>Siempre
                    </label>
                </div>
            </div>
            <hr>

            <div class="row">
                <div class="col-sm-8" > 
                <strong>
                13. Te gusta los platos típicos (roco relleno, soltero de queso, adobo antaño, etc.).
                </strong>
                </div>

                <div class="col-sm-4" >
                    <label class="radio-inline">
                        <input type="radio" name="q13" value = 0 {{ $datos_estudiante["q13"]== 0 ?  "checked" : "" }}>Nunca
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="q13" value = 1 {{ $datos_estudiante["q13"]== 1 ?  "checked" : "" }}>Aveces
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="q13" value = 2 {{ $datos_estudiante["q13"]== 2 ?  "checked" : "" }}>Siempre
                    </label>
                </div>
            </div>

            <hr>
            <div class="row">
                <div class="col-sm-8" > 
                <strong>
                14. Participas en las fiestas y aniversarios en la ciudad de Arequipa.
                </strong>
                </div>

                <div class="col-sm-4" >
                    <label class="radio-inline">
                        <input type="radio" name="q14" value = 0 {{ $datos_estudiante["q14"]== 0 ?  "checked" : "" }}>Nunca
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="q14" value = 1 {{ $datos_estudiante["q14"]== 1 ?  "checked" : "" }}>Aveces
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="q14" value=2 {{ $datos_estudiante["q14"]== 2 ?  "checked" : "" }}> Siempre
                    </label>
                </div>
            </div>

            <hr>
            <div class="row">
                <div class="col-sm-8" > 
                <strong>
                15. Te interesas por aprender y practicar las tradiciones y costumbres de la ciudad de Arequipa
                </strong>
                </div>

                <div class="col-sm-4" >
                    <label class="radio-inline">
                        <input type="radio" name="q15" value = 0 {{ $datos_estudiante["q15"]== 0 ?  "checked" : "" }}>Nunca
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="q15" value = 1 {{ $datos_estudiante["q15"]== 1 ?  "checked" : "" }}>Aveces
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="q15" value = 2 {{ $datos_estudiante["q15"]== 2 ?  "checked" : "" }}>Siempre
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