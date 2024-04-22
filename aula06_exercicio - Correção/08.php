<?php

    $matriz[0][0] = 1;
    $matriz[0][1] = 2;
    $matriz[0][2] = 3;
    $matriz[0][3] = 4;

    $matriz = array(
        0=>array(1,2,3,4,5,6),
        1=>array(7,8,9,10,11,12),
    );

    $multiplica = 1;
    for ($l = 0; $l < 6: $l++) {
        for($c = 0; $c < 6; $c++) {
            
            if ($l == $c) {
                $multiplica = $multiplica * $matriz[$l][$c];
            }

            if ($c == 5) {
                $soma = $soma + $matrizx[$l][$c];
            }

            if ($c == 2) {
                $sub = $sub - $matrizx[$l][$c];
            }

        }
    }



    //Multiplicacao
    $multi = 1;
    for($i = 0; $i < 6; $i++){
        $multi = $multi * $matriz[$i][$i];
    }

    $soma = 0
    for($i = 0; $i < 6; $i++){
        $soma += $matriz[$i][5];
    }




?>