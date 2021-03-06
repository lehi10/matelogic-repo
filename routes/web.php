<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

Route::get('/', function(){
    return view('index');
});


Route::get('/',function(){
    return view('index');
});


Route::post('/endpoint', 'EndpointController@questions');
Route::post('/endpoint/login/', 'EndpointController@login');



Route::group(['middleware'=>['web','auth']],function(){

    Route::get('/home',function(){
        if(Auth::user()->role==0)
        {
            return redirect("/estudiante");
        }
        else{
            return redirect("/profesor");
        }
    });


    Route::get('/estudiante', 'EstudianteController@show');
    Route::get('/demoform', 'EstudianteController@demoform_show');
    
    Route::post('/saveDemoForm', 'EstudianteController@demoform_save');


    Route::get('/profesor', 'ProfesorController@show');

    Route::post('/saveForm', 'EstudianteController@saveForm');
});

