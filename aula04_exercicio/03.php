<?php
    $nome = "joao";
    $idade = 18;
    $sexo = "M";
    $carro = true;
    //                  !$carro = false
    if ($sexo == "M" && $carro == false) {
        echo "$nome não vai sair com Joaquina";
    }
    elseif ($sexo == "M" && $idade > 18 && $carro) {
        echo "Joaquina topa sair com vc";
    }
    elseif ($sexo == "M" && $idade <= 17) {
        echo "Joaquina vai te levar para a escola";
    }
    elseif ($sexo != "M" && $idade <= 17) {
        echo "Joaquina vai te ensinar a fazer maquiagem";
    }
    elseif ($idade > 30 || $carro) {
        echo "Vc é tiozao";
    }

?>