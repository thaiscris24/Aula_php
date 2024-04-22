<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">    
        <div class="row">
            <h2>Registro de login</h2>
            <form method="post" action="login_cadastro_salvar.php">
                <label class="form-label">Usuário</label>
                <input type="text" name="usuario" class="form-control"/>

                <br/>

                <label class="form-label">Senha</label>
                <input type="password" name="senha" class="form-control"/>

                <input type="submit" value="SALVAR"
                    class="btn btn-primary" />

                <br/>
                
                <a href="login.php" class="btn btn-success">
                    VOLTAR
                </a>

            </form>
        </div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>