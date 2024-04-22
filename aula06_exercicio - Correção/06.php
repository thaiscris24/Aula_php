<?php
    $contador = 0;
    do {
        $array[] = $contador;
        $contador+=1;
    } while ($contador < 800);


    for($contador =0;  $contador < 800;   $contador++) {
        if ($array[$contador] % 2 == 1) {
            echo "impar";
        }
        else {
            echo "par";
        }
    }

?>