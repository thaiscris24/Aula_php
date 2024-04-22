<?php

    $array[] = "um";
    $array[] = "dois";
    $array[] = "tres";
    $array[] = "quatro";
    $array[] = "cinco";
    $array["numero"] = "seis";
    $array["cleiverson"] = "Cleiverson Santos";
    $array[254] = "óia";
    $array[] = "este";

    foreach ($array as $indice => $linha) {
        echo "Indice: " . $indice . 
            "- Valor: " . $linha . "<BR>";
    }


?>