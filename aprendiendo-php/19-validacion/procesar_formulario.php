<?php

$error = 'Faltan valores';
if (
    !empty($_POST['nombre']) && !empty($_POST['apellidos']) && !empty($_POST['edad'])
    && !empty($_POST['email']) && !empty($_POST['pass'])
) {

    $error = 'ok';
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $edad = (int)$_POST['edad'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    if (!is_string($nombre) || preg_match("/[0-9]/", $nombre)) {
        $error = 'nombre';
    }
    if (!is_string($apellidos) || preg_match("/[0-9]/", $apellidos)) {
        $error = 'apellidos';
    }
    if (!is_integer($edad) || !filter_var($edad, FILTER_VALIDATE_INT)) {
        $error = 'edad';
    }

    if (!is_string($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = 'email';
    }

    if (empty($pass) || strlen($pass) < 5) {
        $error = 'pass';
    }   
    
} else {
    $error = true;
}
if ($error != 'ok') {
    header("Location:index.php?error=$error");
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <title>Validacion de formularios PHP</title>
    <?php if ($error == 'ok') : ?>
        <h1>Datos Validados correctamente</h1>
        <p><?= $nombre ?></p>
        <p><?= $apellidos ?></p>
        <p><?= $edad ?></p>
        <p><?= $email ?></p>

    <?php endif ?>
</head>

<body>

</body>

</html>