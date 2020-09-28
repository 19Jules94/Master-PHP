<?php

//Conectar a la base de datos

$conexion = mysqli_connect('localhost', 'root', '', 'phpmysql');

//Comprobar si la conexion es correcta
if (mysqli_connect_errno()) {
    echo 'La conexion a la base de datos ha fallado ' . mysqli_connect_errno();
} else {
    echo 'Conexion a la base de datos correctamente';
}

//Consulta para configurar la codificacion de caracteres

mysqli_query($conexion, "SET NAMES 'utf8'");

//Consulta SELECT
$query = mysqli_query($conexion, "SELECT * FROM notas");

while ($nota = mysqli_fetch_assoc($query)) {
    var_dump($nota);
    
}


//Insertar en la base de datos desde PHP
$sql = "INSERT into notas VALUES(NULL,'Notas desde PHP','Esto es una nota desde PHP','green')";
$insert  = mysqli_query($conexion,$sql);

if($insert){
    echo "Datos introducidos correctamente";
}else{
    echo "Error al insertar";
}