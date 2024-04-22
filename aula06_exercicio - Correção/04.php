<?php

    $contador = 0;
    $febre = 39.5;
    $dor_cabeca = true;
    $muscular = false;
    $malestar = 1;
    $mancha = 0;

    if ($febre >= 39.5) {
        $contador++;
    }

    if ($dor_cabeca) {
        $contador++;
    }

    if ($muscular) {
        $contador++;
    }

    if ($malestar == 1) {
        $contador++;
    }

    if ($mancha == 1) {
        $contador++;
    }

    if ($contador >= 3) {
        echo "Está com dengue";
    }





    $febre = 39.5;
    $dor_cabeca = true;
    $muscular = false;
    $malestar = 1;
    $mancha = 0;

    if ($feber >= 39.5 && $dor_cabeca && $muscular && 
        $malestar == 1 && $mancah == 1) {
            echo "É véio ta com dengue";
        }
    elseif ($febre >= 39.5 || $dor_cabeca || $muscular && 
    $malestar == 1 || $mancha == 1) {
        echo "Vá trabalhar";
    }
    else {
        echo "Nada.";
    }
?>