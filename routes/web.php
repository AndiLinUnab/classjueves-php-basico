<?php

use Faker\Guesser\Name;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/mi-nombre', function () {
    return view('ANDI LIN');
});

Route::get('/php-basico', function () {
    
    echo "<h1 style= 'color:red;'> Aprendiendo PHP </h1>";

    $name = 'Andi Lin';
    $height = 1.72;
    $islogin = true;
    $age = 19;

    echo "<h4> " , $name , " </h4>";
    echo "<p> " , $name , " </p>";

    echo "<br><br><br> ********************** ESTRUCTURAS DE CONTROL **********************<br><br>";  
    
    $message = "Soy $name, tengo $age años.";

    if ($age >= 18) {
        $message = $message . " Soy mayor de edad.";
    } else {
        $message .= " Soy menor de edad.";
    } 

    $message .= ($islogin) ? " Estoy logueado." : " No estoy logueado.";

    echo $message;

    echo "<br><br><br> ********************** FUNCIONES **********************<br><br>";

    $pc = [
        'name' => 'pc Gamer core9',
        'precio' => 6000,
        'marca' => 'Lenovo',
    ];

    $teclado = [
        'name' => 'Teclado',
        'precio' => 200,
        'marca' => 'Asus',
    ];

    $listaProductos = [$pc, $teclado];

    foreach ($listaProductos as $item){
        echo $item['name'] . "<br>";
    }

});

function validateAge($age) {
    if ($age >= 18) {
        return "Soy mayor de edad.";
    } else {
        return "Soy menor de edad.";
    }
}
