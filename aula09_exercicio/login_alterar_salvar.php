<?php

    $id = $_POST["id"];
    $usuario = $_POST["usuario"];
    $senha = $_POST["senha"];

    $con = new mysqli("127.0.0.1",
                        "root",
                        "",
                        "aula07");
    
    $sql = "SELECT COUNT(1) as total FROM login WHERE id=$id";
    $rs = $con->query($sql);
    $total = $rs->fetch_assoc();

    if ($total["total"] == 0) {
        echo "Id não existe";
        exit;
    }

    $sql = "UPDATE login
               SET usuario = '$usuario',
                   senha = '$senha'
              WHERE id = $id";

    $con->query($sql);
    header("location: login_buscar.php");


?>