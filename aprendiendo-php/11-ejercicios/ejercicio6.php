<?php
echo '<table border=1">';
$contadorT = 1;
while ($contadorT <= 10) {

    $contador = 1;
    echo '<tr>' .' Tabla del ' . $contadorT.'</tr>';
    while ($contador <= 10) {

        echo '<td>' . $contadorT . ' X ' . $contador . '=' . ($contador * $contadorT) . '</td>';

        $contador++;
    }



    $contadorT++;
    
}

echo '</table>';
