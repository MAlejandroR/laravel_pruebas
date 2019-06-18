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


//Ruta por get a una url llamada principal que retorna una vista llamada
//pagina_principal ubicada en resources/views (html)
Route::get("principal", function () {
    return view("/pagina_principal");
}
);

//Ruta por get o post a un recurso llamado about
//La vista que retorna estará en resources/views/prueba1/about.blade.php
Route::match(['get', 'post'], "about", function () {
    return view("prueba1/about");
}
);

//Ruta contacta por post
Route::post("contacta", function () {
    return view("prueba1/contacta");
}
);

//Ruta por cualquier verbo http a la url noticias
Route::any("noticias", function () {

    return view("prueba1/noticias");
}
);
Route::any("articulo", function () {

    return view("prueba1/articulo");
}
);

//Si no existe la ruta haz esto
Route::fallback(function() {
    return "<h1>Esta página no existe</h1>";
});


//Ruta parametrizada con la variable num
//Además controlamos el valor que sea numérico
Route::get("noticias/{num}", function($num) {
    Return "<h1> Estoy accediendo a noticias $num </h1>";
})->where('num', '[0-9]+');




Route::get('/', function () {
    return view('welcome');
});



Route::get("empresa", function() {
    return view("empresa/principal");
});

Route::get("about_empresa", function() {
    return view("empresa/about");
});
Route::get("contacta_empresa", function() {
    return view("empresa/contacta");
});
Route::get("noticias_empresa", function() {
    return view("empresa/noticias");
});
