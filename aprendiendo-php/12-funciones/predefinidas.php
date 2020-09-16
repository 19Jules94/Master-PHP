<?php

//Funciones predefinidas de PHP 

//Debuguear

$nombre = "victor Robles";

var_dump($nombre);

//Fechas

echo date('d-m-Y') . '<br/>';
echo time() . '<br/>';

//Matematicas

echo 'Raiz cuadrada de 36 es: ' . sqrt(36) . '<br/>';
echo 'Numero aleatorio entre 10 y 40: ' . rand(10, 40) . '<br/>';
echo 'Numero PI: ' . pi() . '<br/>';

//Mas funciones generales

//Deteccion de tipos
echo gettype($nombre) . '<br/>';

if (is_string($nombre)) {
    echo 'Esa variable es un String';
}

echo '<br/>';

//Comprobar la existencia 

if (isset($edad)) {
    echo 'La variable existe';
} else {
    echo 'La variable no existe';
}

echo '<br/>';

//Limpiar espacios
$frase = "       contenido         ";

echo trim($frase);
echo '<br/>';

//Eliminar indices/variables

$year = 2020;
unset($year); //elimina la variable
echo '<br/>';
//Empty,comprueba si una vriable esta vacia,no existe o su longitud es 0

$texto = "";

if (empty($texto)) {
    echo "La variable texto esta vacia";
} else {
    echo "La variable tiene contenido";
}
echo '<br/>';
$texto2 = "abc";
echo strlen($texto2);

echo '<br/>';

//Encontrar un caracter

$frase = "Ser o no ser";

echo strpos($frase,'e');















