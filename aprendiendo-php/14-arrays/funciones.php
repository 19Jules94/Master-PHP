<?php
$cantantes = ['2pac', 'Drake', 'JL', 'Alfredo'];
$numeros =[1,2,3,6,5,4];

asort($cantantes);
var_dump($cantantes);


//Añadir al array

$cantantes [] = "Natos";
array_push($cantantes,"Waor");
var_dump($cantantes);
array_pop($cantantes);
unset($cantantes[2]);

var_dump($cantantes);

//Aleatorio

$indice = array_rand($cantantes);
echo $cantantes[$indice];

//Dar la vuelta a un array


var_dump(array_reverse($numeros));

//Buscar dentro de un array

$resultado = array_search('Alfredo',$cantantes);
var_dump($resultado);

//Contar numero elementos

echo sizeof($cantantes);