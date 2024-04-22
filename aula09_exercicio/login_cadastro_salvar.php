<?php

    $usuario = @$_POST['usuario'];
    $senha   = @$_POST['senha'];

    $conexao = new mysqli(
        "127.0.0.1",    //Servidor hospedagem
        "root",         //usuario
        "",             // senha
        "aula07"        //Nome do banco
    );

    $sql = "
    INSERT INTO login (usuario, senha) 
    VALUES ('$usuario','$senha')
    ";

    $rs = $conexao->query($sql);

    header("location: login_buscar.php");

?>