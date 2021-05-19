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


Route::get('variables', function () {

    //definir una variable
    //en php

    $mensaje = 20;

    //funcion var_dump: analizar una variable
    //muestra tipo de dato y valor

    print_r($mensaje);
    echo "<hr />";
    $mensaje = true;
    var_dump($mensaje);
});

Route::get('arreglos', function () {
    //Arreglo: es uun estructura de datos
    $estudiantes = [
        'AN' =>  "Ana",
        'MA' =>  'Maria',
        'JO' =>  1
    ]; //arreglo vacio [  ];

    echo "<pre>";
    var_dump($estudiantes);
    echo "</pre>";
});

Route::get("paises", function () { //la ruta paises

 //
 // Fuertemente Tipados: Debe definir el tipo de datos
   //                      No se puede cambiar el tipo de dato
 //                      JAVA , .NET , GO

 // Debilmente Tipados: No se requiere definir el tipo de dato
 //                     Puedes cambiar el tipo de dato
 //                     PHP , JAVASCRIPT , PYTHON
    $paises = [
        "Colombia" => [
            "Capital" => "Bogotá",
            "Moneda" => "Peso",
            "Poblacion" => 50
        ],

        "Peru" => [
            "Capital" => "Lima",
            "Moneda" => "Sol",
            "Poblacion" => 32.8

        ],

        "Paraguay" => [
            "Capital" => "Asunción",
            "Moneda" => "Guaraní",
            "Poblacion" => 7.3

        ]
    ];

    //$suma = 0;
    //foreach ($paises as $nombre => $pais) :
        /*echo "<pre>";
        echo "<h1>$nombre</h1>";
        print_r($pais["Capital"] . "<br />");
        print_r($pais["Moneda"] . "<br />");
        print_r($pais["Poblacion"] . "<br />");
        echo "</pre>";
        echo "<hr />";*/ //linea horizontal

        //$suma+= $pais["Poblacion"];
   // endforeach;

   // echo "la suma de los paises es $suma";

    // cierre alternativa a los corchetes  :
    //                             endforeach


    //llamar a una vista
    //con datos de paises
    //alias : nombre con el cual
    //      se reconoce los datos en la vista

    return view('paises')->with("naciones", $paises);
});


Route::get('formulario_buscador', "MetabuscadorController@formulario_buscador");

Route::post('buscar', "MetabuscadorController@buscar");
