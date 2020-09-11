<?php
//Operadores aritmeticos

$numero1 = 6;
$numero2 = 4;

echo 'suma: '.($numero1+$numero2).'<br/>';
echo 'resta: '.($numero1-$numero2).'<br/>';
echo 'multiplicacion: '.($numero1*$numero2).'<br/>';
echo 'division: '.($numero1/$numero2).'<br/>';
echo 'modulo: '.($numero1%$numero2).'<br/>';


//Operadores incremento y decremento

$year = 2020;

echo '<h1>'.$year.'</h1>';
$year++;
echo '<h1>'.'Variable incrementada '.$year.'</h1>';

$year--;
echo '<h1>'.'Variable decrementada '.$year.'</h1>';


//Operadores de asignacion

$edad = 55;

echo $edad.'<br/>';

echo ($edad+=5).'<br/>';

?>