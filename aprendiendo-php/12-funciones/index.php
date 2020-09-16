<?php

function muestraNombre()
{
    echo 'Victor Robles <br/>';
    echo 'Julio <br/>';
    echo 'Sara <br/>';
    echo 'David <br/>';
    echo 'Laura <br/>';
}
muestraNombre();

function tabla($numero)
{
    for ($i = 1; $i <= 10; $i++) {
        echo $numero . ' x ' . $i . '=' . ($numero * $i) . '<br/>';
    }
}

tabla(6);
echo '<br/>';
/***************************/


function calculadora($numero1, $numero2)
{
    echo 'La suma es: ' . ($numero1 + $numero2) . '<br/>';
    echo 'La resta es: ' . ($numero1 - $numero2) . '<br/>';
    echo 'La multiplicacion es: ' . ($numero1 * $numero2) . '<br/>';
    echo 'La division es: ' . ($numero1 / $numero2) . '<br/>';
}

calculadora(4, 2);

echo '<br/>';
/***************************/

//Paramtros opcionales


function calculadora2($numero1, $numero2, $negrita = false)
{
    if ($negrita) {
        echo '<b>';
        echo 'La suma es: ' . ($numero1 + $numero2) . '<br/>';
        echo 'La resta es: ' . ($numero1 - $numero2) . '<br/>';
        echo 'La multiplicacion es: ' . ($numero1 * $numero2) . '<br/>';
        echo 'La division es: ' . ($numero1 / $numero2) . '<br/>';
        echo '</b>';
    } else {
        echo 'La suma es: ' . ($numero1 + $numero2) . '<br/>';
        echo 'La resta es: ' . ($numero1 - $numero2) . '<br/>';
        echo 'La multiplicacion es: ' . ($numero1 * $numero2) . '<br/>';
        echo 'La division es: ' . ($numero1 / $numero2) . '<br/>';
    }
}

calculadora2(4, 2, true);

echo '<br/>';
/***************************/

function devuleveNombre($nombre)
{
    return 'El nombre es ' . $nombre;
}

echo devuleveNombre("Victor Robles");

echo '<br/>';
/***************************/
function getName($nombre)
{
    return 'El nombre es: ' . $nombre;
}
function getApellidos($apellidos)
{
    return 'Los apellidos son: ' . $apellidos;
}

function devulveNombreCompleto($nombre, $apellidos)
{

    $texto = getName($nombre) . ' ' . getApellidos($apellidos);

    return $texto;
}

echo devulveNombreCompleto("Victor", "Robles");
