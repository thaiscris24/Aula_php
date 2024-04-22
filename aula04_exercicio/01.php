<?php
    /*
    Matriz
    A	B	C
    D	E	F
    G	H	I
    */
    $matriz[0][0] = "A";
    $matriz[0][1] = "B";
    $matriz[0][2] = "C";
    $matriz[1][0] = "D";
    $matriz[1][1] = "E";
    $matriz[1][2] = "F";
    $matriz[2][0] = "G";
    $matriz[2][1] = "H";
    $matriz[2][2] = "I";
    
    echo $matriz[1][2];
    echo "<pre>";
    var_dump($matriz);


    $matriz2 = array(
        0 => array(
            0 => "A",
            1 => "B",
            2 => "C"
        ),
        1 => ["D", "E", "F"]
    );

?>