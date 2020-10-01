<?php

if (isset($_POST)) {
    require_once './includes/conexion.php';
    $nombre = isset($_POST['nombre']) ? mysqli_real_escape_string($db, $_POST['nombre']) : false;

    $errores = array();

    //Validar antes de guardar en la BD

    if (!empty($nombre)) {
        $nombre_validado = true;
    } else {
        $nombre_validado = false;
        $errores['nombre'] = "El nombre de la categoria no es valido";
    }
    if (count($errores) == 0) {

        $sql = "INSERT into categorias VALUES(NULL,'$nombre');";
        $guardar = mysqli_query($db, $sql);
    }
}

header("Location:index.php");
