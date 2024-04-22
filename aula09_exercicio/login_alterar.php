<?php

    $id = $_GET["id"];

    $con = new mysqli("127.0.0.1",
                        "root",
                        "",
                        "aula07");

    $sql = "SELECT * FROM login WHERE id=$id";

    $rs = $con->query($sql);
    $dados = $rs->fetch_assoc();

    //echo $dados["usuario"];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="login_alterar_salvar.php">
        <input type="text" name="id"
            value="<?php echo $dados["id"]; ?>" >


    <label>Usuario</label>
        <input type="text" name="usuario" 
            value="<?php echo $dados["usuario"]; ?>" >

        <label>Senha</label>
        <input type="text" name="senha" 
            value="<?php echo $dados["senha"]; ?>" >

        <input type="submit" value="SALVAR">

    </form>
</body>
</html>