<?php

    $contador = 0;
    $sair = false;

    while( !$sair ) {
        echo "$contador <BR>";
        //$contador = $contador + 1;
        $contador++;
        $contador += 1;

        if ($contador >= 100) {
            $sair = true;
        }
    }

?>