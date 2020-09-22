<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <title>Validacion de formularios PHP</title>
</head>

<body>
    <h1>Validar formularios en PHP</h1>
    <?php

    if (isset($_GET['error'])) {
        $error = $_GET['error'];
        if ($error == 'faltan datos') {
            echo '<strong style="color:red">' . 'Introduce todos los datos en los campos del formulario' . '</strong>';
        }
        if ($error == 'nombre') {
            echo '<strong style="color:red">' . 'Introduce bien el nombre' . '</strong>';
        }
        
        if ($error == 'apellidos') {
            echo '<strong style="color:red">' . 'Introduce bien los apellidos' . '</strong>';
        }

        if ($error == 'edad') {
            echo '<strong style="color:red">' . 'Introduce bien la edad' . '</strong>';
        }

        if ($error == 'nombre') {
            echo '<strong style="color:red">' . 'Introduce bien el email' . '</strong>';
        }

        if ($error == 'pass') {
            echo '<strong style="color:red">' . 'La pass no puede superar los 5 caracteres' . '</strong>';
        }
    }
    ?>


    <form action="procesar_formulario.php" method="POST">
        <label for=nombre">Nombre</label><br />
        <input type="text" name="nombre" required="required" pattern="[a-zA-Z]+" ><br />

        <label for=apellidos">Apellidos</label><br />
        <input type="text" name="apellidos" required="required" pattern="[a-zA-Z]+"><br />

        <label for=edad">Edad</label><br />
        <input type="number" name="edad" required="required" pattern="[0-9]+"><br />

        <label for=email">Email</label><br />
        <input type="text" name="email" required="required" ><br />

        <label for=pass">Password</label><br />
        <input type="password" name="pass" required="required" ><br />

        <input type="submit" value="Enviar" />

    </form>
</body>

</html>