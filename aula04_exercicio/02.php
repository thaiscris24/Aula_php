<?php
    //Condicionais

    $variavel = "5";

    if ($variavel === 5) {
        echo "Valor igual";
    }
    elseif( $variavel === "5") {
        echo "É igual e possui o mesmo tipo";
    }
    else {
        echo "Valor diferente";
    }
?>