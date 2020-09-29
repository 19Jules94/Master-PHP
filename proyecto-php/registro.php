<?php
session_start();
if (isset($_POST)) {

    $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : false;
    $apellidos = isset($_POST['apellidos']) ? $_POST['apellidos'] : false;
    $email = isset($_POST['email']) ? $_POST['email'] : false;
    $password = isset($_POST['password']) ? $_POST['password'] : false;

    //Errores

    $errores = array();

    //Validar antes de guardar en la BD

    if (!empty($nombre)  && !is_numeric($nombre) && !preg_match("/[0-9]/", $nombre)) {
        $nombre_validado = true;
    } else {
        $nombre_validado = false;
        $errores['nombre'] = "El nombre no es valido";
    }


    if (!empty($apellidos)  && !is_numeric($apellidos) && !preg_match("/[0-9]/", $apellidos)) {
        $apellidos_validado = true;
    } else {
        $apellidos_validado = false;
        $errores['apellidos'] = "Los apellidos no son validos";
    }

    if (!empty($apellidos)  && filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $email_validado = true;
    } else {
        $email_validado = false;
        $errores['email'] = "Email  no  valido";
    }

    if (!empty($password)) {
        $pass_validada = true;
    } else {
        $pass_validada = false;
        $errores['password'] = "Password vacio";
    }

    $guardar_usuario = false;
    if (count($errores) == 0) {
        $guardar_usuario = true;
        //insertar en la BD


    } else {
        $_SESSION['errores'] = $errores;
        header('Location:index.php');
    }
}
