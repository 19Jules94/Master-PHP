<?php


if (isset($_POST)) {
    require_once './includes/conexion.php';

    if (!isset($_SESSION)) {
        session_start();
    }

    $nombre = isset($_POST['nombre']) ? mysqli_real_escape_string($db, $_POST['nombre']) : false;
    $apellidos = isset($_POST['apellidos']) ? mysqli_real_escape_string($db, $_POST['apellidos']) : false;
    $email = isset($_POST['email']) ? mysqli_real_escape_string($db, trim($_POST['email'])) : false;
    $password = isset($_POST['password']) ? mysqli_real_escape_string($db, $_POST['password']) : false;

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

    if (!empty($email)  && filter_var($email, FILTER_VALIDATE_EMAIL)) {
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
        //Cifrar la contraseña
        $password_segura = password_hash($password, PASSWORD_BCRYPT, ['cost' => 4]);

        //insertar en la BD

        $sql = "INSERT INTO usuarios VALUES (null,'$nombre','$apellidos','$email','$password_segura', CURDATE() );";
        $guardar = mysqli_query($db, $sql);


        if ($guardar) {
            $_SESSION['completado'] = "Registro completado con exito";
        } else {
            $_SESSION['errores']['general'] = "Fallo al guardar el usuario";
        }
    } else {
        $_SESSION['errores'] = $errores;
        header('Location:index.php');
    }
}

header('Location:index.php');
