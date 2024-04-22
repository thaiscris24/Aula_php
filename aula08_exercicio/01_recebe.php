<?php

    /*
Caso o e-mail não esteja preenchido deverá mostrar a mensagem: "E-mail é obrigatório e deve ser informado."
Caso a senha não esteja preenchida deverá mostrar a mensagem: "Senha é obrigatória e deve ser informada."
Verifique se o e-mail é servidor@teste.com, 
caso seja diferente, mostre a mensagem: "E-mail inválido."
Verifique se a senha é aual123, 
caso não seja, mostre a mensagem "Senha inválida."
Caso o e-mail e senha possuam os valores servidor@teste.com e aula123, apresente a seguinte mensagem: "Usuário logado com sucesso. Seja bem vindo"
    */

    if (@$_POST["email"] == "") {
        echo "E-mail é obrigatório e deve ser informado.";
    }

    if (@$_POST["senha"] == "") {
        echo "Senha é obrigatória e deve ser informada.";
    }

    if (@$_POST["email"] != "servidor@teste.com") {
        echo "E-mail inválido.";
    }

    if (@$_POST["senha"] != "aula123") {
        echo "Senha inválida.";
    }

    if (@$_POST["email"] == "servidor@teste.com"
        && @$_POST["senha"] == "aula123"
    ) {
        echo "Seja bem vindo amiguinho.";
    }
?>