<?php

    $num_inicial = @$_GET['num_inicial'];
    $num_final   = @$_GET['num_final'];

    for($i = $num_inicial; $i < $num_final; $i++) {
        echo "O número atual é $i <br>";
    }

    $i = $num_final;
    while ($i > $num_inicial) {
        echo "O número atual é $i <br>";
        $i--;
    }
?>