<?php

/*
Arrays
*/

$pelicula = "Batman";
$peliculas = array('Batman', 'Spiderman', 'El señor de los anillos');
$cantantes = ['2pac', 'Drake', 'JL'];
$personas = array(
    'nombre' => 'Victor',
    'apellidos' => 'Robles'
);


//echo $peliculas[1];
echo $personas['nombre'];

echo "<ul>";
for ($index = 0; $index < count($peliculas); $index++) {
    echo '<li>' . $peliculas[$index] . '<br/>' . '</li>';
}
echo "</ul>";

echo "<ul>";
foreach ($cantantes as $index) {
    echo '<li>' . $index . '<br/>' . '</li>';
}

echo "</ul>";

//Array multidmiensionales

$contactos = array(
    array(
        'nombre' => 'Antonio',
        'email' => 'antonio@antonio.com'
    ), array(
        'nombre' => 'Luis',
        'email' => 'luis@luis.com'
    ), array(
        'nombre' => 'Juan',
        'email' => 'juan@juan.com'
    )
);

//echo $contactos[1]['nombre'];

foreach($contactos as $index){
    echo $index['nombre'].'<br/>';
}