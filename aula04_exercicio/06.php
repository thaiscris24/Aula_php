<?php

    $indice = 0;
    while($indice < 1000) {
        
        $array["num_" . $indice] = $indice;
        $indice++;

    }

    var_dump($array);
?>