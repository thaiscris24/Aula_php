<?php
    //Banco V
    //Buscar todos os usuarios
    //Adicionar eles na TABLE

    $con = new mysqli("127.0.0.1",
                      "root",
                      "",
                      "aula07");
    
    $sql = "SELECT * FROM login";
    $rs = $con->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta Usuários</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-6">
                <div class="input-group mb-3">
                    <form method="" action="">
                        <input type="text" class="form-control"
                                name="localizar" 
                                placeholder="Digite até 3 letras para procurar"
                            />
                        <input type="submit" class="input-group-text" 
                                value="BUSCAR"/>
                    </form>
                </div>
                <a href="login_cadastro.php" class="btn btn-success">NOVO</a>
            </div>
            <div class="col-12">
                <h2>Listagem de usuários</h2>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <td>ID</td>
                            <td>Usuário</td>
                            <td>Opções</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            while($linha = $rs->fetch_assoc()) {
                                echo "  <tr>
                                            <td>" . $linha["id"] . "</td>
                                            <td>" . $linha["usuario"] . "</td>
                                            <td>
                                                <a href='login_alterar.php?id=" . $linha["id"] . "' style='text-decoration:none'>✏️</a>
                                                <a href='' class='btn btn-danger'>🗑️</a>
                                            </td>
                                        </tr>";
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>