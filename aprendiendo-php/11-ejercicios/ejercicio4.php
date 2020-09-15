<?php

if (isset($_GET['numero1']) && isset($_GET['numero2'])) {


    $numero1 = (int) $_GET['numero1'];
    $numero2 = (int) $_GET['numero2'];


    echo "<h3> Operaciones Básicas </h3>";

    echo 'La suma es: ' . ($numero1 + $numero2) . '<br/>';
    echo 'La resta es: ' . ($numero1 - $numero2) . '<br/>';
    echo 'La multiplicacion es: ' . ($numero1 * $numero2) . '<br/>';
    echo 'La division es: ' . ($numero1 / $numero2) . '<br/>';
} else {
    echo 'Inserte contenido correctoen la URL';
}
