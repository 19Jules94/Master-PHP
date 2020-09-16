
<?php
//Variable global

$frase = "Esto es una frase";

echo $frase;

function mostrarFrase(){
    //En PHP hay que indicarle que es una variable global,si no no funciona

    global $frase;

    echo "<h1> $frase </h1>";

    //Variable local

    $year = 2020;
    echo $year;
}

mostrarFrase();

echo '<br/>';
/**************************/

function buenosDias(){

    return 'Buenos dias,a desayunar';
}

function buenosTardes(){

    return 'Buenas tardes,a comer';
}

function buenasNoches(){

    return 'Buenas noches,a cenar';
}

$horario = "buenasNoches";

echo $horario();
