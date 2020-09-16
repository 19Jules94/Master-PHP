<?php


$tabla = array(
    "ACCION" => array("GTA", "COD", "PUBG"),
    "AVENTURA" => array("AC", "POP", "TW3"),
    "DEPORTES" => array("F1", "WRC", "MOTO GP")

);
$categorias = array_keys($tabla);
?>

<table border="1px">
    <?php require_once 'includes/encabezados.php'; ?>
    <?php require_once 'includes/primera.php'; ?>

    <?php require_once 'includes/segunda.php'; ?>
    <?php require_once 'includes/tercera.php'; ?>
</table>