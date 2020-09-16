<?php

$matriz=array("hola",88);
$titulo="master en PHP";
$numero=6;
$verdadero=true;

if(is_array($matriz)){
    echo "El array es un array";
}

if(is_string($titulo)){
    echo $titulo;
}

if(is_integer($numero)){
    echo "Es un entero";
}

if(is_bool($verdadero)){
    echo "El booleano es verdadero";
}