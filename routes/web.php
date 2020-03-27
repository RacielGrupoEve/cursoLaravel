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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/mostrar-fecha',function () {
    $titulo = "Estoy mostrando la fecha";
return view('mostrar-fecha', array(
    'titulo' => $titulo
  ));
});

Route::get('/pelicula/{title}/{year?}', function($titulo = 'no hay una pelicula seleccionada', $year = 2020) {

    return view('pelicula', array(
        'titulo' => $titulo,
        'year' => $year
    ));
})->where(array( //condicional para aceptar parametros
       'title' => '[a-zA-Z]+',
        'year' => '[0-9]+'
));

Route::get('/listado-peliculas',function (){
    $titulos = "Listado de peliculas";
    $listado = array("batman","spiderman", "Gran Torino");
   return view('peliculas.listado') //metodo para adjuntar variables nuevas with
       ->with('titulos', $titulos)
       ->with('listado', $listado);
});

Route::get('/pagina-generica', function (){

    return view('pagina');
});
