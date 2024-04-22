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
    SELECT * FROM login
        WHERE usuario='$usuario'
        AND senha='$senha'
    ";

    $resultado = $conexao->query($sql);
    $tabela = $resultado->fetch_assoc();

    if ($tabela == null) {
        echo "Usuário e/ou senha inválidos";
    }
    else {
        echo "Seja bem vindo " . $tabela['usuario'];
    }

    /*
    echo $sql;
    echo "<pre>";
    var_dump($tabela);
    */
?>