<?php
    //Array
    $carros[] = "Relampago Mcqueen";
    $carros[] = "Mate";
    $carros[] = "Opala";
    $carros[1051] = "Fusca";
    $carros[] = "Monza";

    echo "<pre>";
    

    echo "<br><br>";
    $filmes[] = "Madona a rainha da noite";
    $filmes["Drama"] = "A espera de um milagre";
    $filmes["Acao"] = "Duro de matar 3";
    $filmes[] = "Se meu fusca falasse";

    $carros[] = 111111;

    $filmes["Infantil"] = $carros;

    //var_dump($carros);
    echo "<br>";
    var_dump($filmes);
    echo "<br>";


    //O carro que eu mais gosto é o MacuoQuim

    //$filmes["Infantil"][0];

    $carros[999] = "Fiat 147";
    var_dump($carros);
    var_dump($filmes);

    $ano_fabricacao[] = 1979;
    $ano_fabricacao[] = 1980;
    $ano_fabricacao[] = 1981;
    $ano_fabricacao[] = 1982;

    $carros[] = $ano_fabricacao;
    $filmes["Infantil"] = $carros;

    //
    echo $filmes["Infantil"][1054][2];


    var_dump($GLOBALS);

?>