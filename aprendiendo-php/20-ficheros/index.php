<?php

/*
$archivo = fopen("fichero.txt", "a+");

while (!feof($archivo)) {
    $contenido = fgets($archivo);
    echo $contenido.'<br/>';
}

fwrite($archivo,"Escribiendo desde PHP");

fclose($archivo);
*/

//Copiar fichero

//copy("fichero.txt","fichero_copy.txt");

//rename("fichero_copy.txt","copia.txt");
//unlink('copia.txt') or die('Error al borrar');

if(file_exists("fichero.txt")){
    echo "Si existe";
}else{
    echo "No existe";
}