<?php


//Condiconales

/*
Operadores de comparacion

== igual
===identico
!=diferente
<> diferente
!== no identico
< menor que
<= menor o igual que
> mayor que
>= mayor o igual que
*/

$color = "rojo";

if ($color == "rojo") {
    echo 'El color es rojo';
} else {

    echo 'El color no es rojo';
}

echo '<br/>';

/**********************************/

$year = 2019;


if ($year == 2019) {
    echo 'Estamos en el 2019';
} else {

    echo 'No estamos en el 2019';
}
echo '<br/>';
/**********************************/

$nombre = "David Extremadura";
$edad = 42;
$mayoria_edad = 18;

if ($edad >= $mayoria_edad) {
    echo $nombre . ' es mayor de edad';
} else {
    echo $nombre . ' no es mayor de edad';
}

echo '<br/>';

/**********************************/

$dia = 3;

if ($dia == 1) {
    echo 'Es lunes';
} else if ($dia == 2) {
    echo 'Es martes';
} else if ($dia == 3) {
    echo 'Es miercoles';
} else if ($dia == 4) {
    echo 'Es jueves';
} else if ($dia == 5) {
    echo 'Es viernes';
}
echo '<br/>';

/**********************************/



$trabajar = 18;
$jubilacion = 67;
$edad = 26;

if ($edad >= $trabajar && $edad <= $jubilacion) {
    echo 'Esta en edad de trabajar';
} else {
    echo 'No esta en edad de trabajar';
}

echo '<br/>';

/**********************************/

$pais = "Spain";

if ($pais == "Spain" || $pais == "Argentina" || $pais == "Venezuela") {
    echo 'En este pais se habla español';
} else {
    echo 'En este pais no se habla español';
}

echo '<br/>';

/**********************************/

$dia = 6;

switch ($dia) {
    case 1:
        echo 'Es lunes';
        break;
    case 2:
        echo 'Es martes';
        break;
    case 3:
        echo 'Es miercoles';
        break;
    case 4:
        echo 'Es jueves';
        break;
    case 5:
        echo 'Es viernes';
        break;
    default:
        echo 'Es fin de semana';
}

echo '<br/>';

/**********************************/

//GOTO
goto marca;

echo 'Intruccion 1';
echo 'Intruccion 2';
echo 'Intruccion 3';
echo 'Intruccion 4';

marca:
echo 'Me he saltado 4 echos';
