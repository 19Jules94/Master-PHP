<?php

/*
Para mostrar el valor de las cookies tengo que usar $_COOKIE,que es una variable superglobal,
es un array asociativo
*/

if(isset($_COOKIE['micookie'])){
    echo '<h1>'.$_COOKIE['micookie'].'</h1>';
}else{
    echo 'No existe micookie';
}

if(isset($_COOKIE['unyear'])){
    echo '<h1>'.$_COOKIE['unyear'].'</h1>';
}else{
    echo 'No existe unyear';
}
?>

<a href="borrar_cookies.php">borrar mis galletas</a>

<a href="crear_cookies.php">crear mis galletas</a>