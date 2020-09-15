<?php

if (isset($_GET['numero1']) && isset($_GET['numero2'])) {

    $numero1 = (int)$_GET['numero1'];
    $numero2 = (int)$_GET['numero2'];
    if ($numero1 < $numero2) {
        for ($i = $numero1; $i < $numero2; $i++) {
            if ($i % 2 != 0) {
                echo $i . ' , ';
            }
        }
    } else {
        echo 'numero1 debe de ser menor que numero2';
    }
} else {
    echo 'Parametros en la URL erroneos';
}
