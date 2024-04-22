<?php

    $texto = 'Lorenzo está imerso em uma jornada emocionante de aprendizado, explorando os meandros do PHP, a linguagem dinâmica que promete dar vida a suas ideias digitais. Com sua mente curiosa e dedicação incansável, ele mergulha nos fundamentos dessa linguagem poderosa, absorvendo cada conceito com entusiasmo.
    Desde os primeiros passos, Lorenzo é cativado pela versatilidade do PHP. Ele aprende a criar páginas web dinâmicas, capazes de interagir com bancos de dados e oferecer experiências personalizadas aos usuários. Com cada linha de código escrita, ele ganha confiança e vislumbra as infinitas possibilidades que o PHP oferece.
    No caminho para a maestria, Lorenzo enfrenta desafios e obstáculos, mas sua determinação é inabalável. Ele consulta recursos online, participa de fóruns de discussão e experimenta novas técnicas para aprimorar suas habilidades. Cada erro é uma oportunidade de aprendizado, e ele os encara com humildade e perseverança.
    À medida que sua proficiência em PHP cresce, Lorenzo começa a construir seus próprios projetos, desde pequenos scripts até aplicativos web completos. Ele se orgulha de cada linha de código que escreve, sabendo que está construindo as bases para uma carreira promissora no desenvolvimento web.
    Embora o caminho à frente possa ser desafiador, Lorenzo está preparado para enfrentar cada novo desafio com determinação e paixão. Com o PHP como sua ferramenta de escolha, ele está pronto para transformar suas ideias em realidade digital, deixando sua marca no vasto mundo da programação web.';

    $array = explode(" ", $texto);

    echo "Os índices que possuem a palavra Lorenzo são ";
    for($i = 0; $i < count($array); $i++) {
        if ( $array[$i] == "Lorenzo" ) {
            //echo "$i, ";
            $vetor[] = $i;
        }
    }
    echo implode(", ", $vetor);
?>