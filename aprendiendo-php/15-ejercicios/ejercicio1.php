<?php

function mostrarNumeros($numeros)
{
    echo '<ul>';
    foreach ($numeros as $index) {
        echo '<li>' . $index . '</li>';
    }
    echo '</ul>';
}

$numeros = [2, 4, 6, 1, 8, 3, 7, 5];

mostrarNumeros($numeros);
echo '<hr/>';
sort($numeros);
mostrarNumeros($numeros);

echo '<hr/>';

echo sizeof($numeros);

echo '<hr/>';

$resultadoB=array_search(6,$numeros);
echo $resultadoB;