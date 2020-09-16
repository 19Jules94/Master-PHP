<?php

$texto="";

if(empty($texto)){

    $texto="hola,este texto esta en minusculas,pero se mostrara en mayusculas";
    $mayusculas=strtoupper($texto);
    echo'<b>'.$mayusculas.'</b>';
}else{
    echo 'La variable tiene este contenido dentro: '.$texto;
}