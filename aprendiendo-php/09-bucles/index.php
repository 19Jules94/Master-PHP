<?php

$numero = 0;

while ($numero <= 100) {

    if ($numero == 50) {
        echo $numero . ',<br/>';
    } else if ($numero == 100) {
        echo $numero;
    } else {
        echo $numero . ',';
    }
    $numero++;
}

echo '<br/>';

if (isset($_GET['numero'])) {
    $numero = (int)$_GET['numero'];
} else {
    $numero = 1;
}


echo "<h1> Tabla de multiplicar del numero $numero </h1>";

$contador = 0;
while($contador <=10){
    echo "$numero x $contador = ".($numero*$contador).'<br/>';
    $contador++;
}

//Do WHILE

$edad = 18;
$contador =1;
do{
    echo 'Acceso permitido'.'<br/>';
    $contador++;
}while($edad >=18  && $contador <=10);
