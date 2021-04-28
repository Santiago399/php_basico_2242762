<?php

use Illuminate\Support\Facades\Route;

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

//funcion anonima
//callback

Route::get('/', function () {
    return view('welcome');
});


Route::get ('variables', function() {

    //definir una variable
    //en php

    $mensaje = 20;

    //funcion var_dump: analizar una variable
    //muestra tipo de dato y valor

    print_r($mensaje);
    echo"<hr />";
    $mensaje = true;
    var_dump($mensaje);




});

Route::get('arreglos', function (){
    //Arreglo: es uun estructura de datos
    $estudiantes = [  'AN' =>  "Ana",
                      'MA' =>  'Maria',
                      'JO' =>  "Jorge" ]; //arreglo vacio [  ];

    echo"<pre>";
    var_dump($estudiantes);
    echo "</pre>";

});
