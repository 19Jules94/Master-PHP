<?php
$resultado = false;
if (isset($_POST['numero1']) && isset($_POST['numero2'])) {

    if (isset($_POST['sumar'])) {
        $resultado = "El resultado es " . ($_POST['numero1'] + $_POST['numero2']);
    }
    if (isset($_POST['restar'])) {
        $resultado = "El resultado es " . ($_POST['numero1'] - $_POST['numero2']);
    }
    if (isset($_POST['multiplicar'])) {
        $resultado = "El resultado es " . ($_POST['numero1'] * $_POST['numero2']);
    }
    if (isset($_POST['dividir'])) {
        $resultado = "El resultado es " . ($_POST['numero1'] / $_POST['numero2']);
    }
}


?>



<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Calculadora PHP</title>
</head>

<body>

    <form action="" method="POST">
        <input type="number" name="numero1" placeholder="numero1" /> <br /><br />
        <input type="number" name="numero2" placeholder="numero1" /><br /><br />

        <input type="submit" value="Sumar" name="sumar"><br />
        <input type="submit" value="Restar" name="restar"><br />
        <input type="submit" value="Multiplicar" name="multiplicar"><br />
        <input type="submit" value="Dividir" name="dividir"><br />
    </form>
    <?php

    if ($resultado != false) :
        echo $resultado;
    endif;
    ?>

</body>

</html>