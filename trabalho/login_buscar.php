<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscar Login</title>
</head>
<body>
    <h1>Buscar Login</h1>

    <!-- Add the search form -->
    <form action="login_buscar.php" method="post">
        <label for="busca">Buscar por usuário:</label>
        <input type="text" id="busca" name="busca" required>
        <button type="submit">BUSCAR</button>
    </form>

    <!-- Display the search results -->
    <?php
    // Connect to the database
    $conexao = new mysqli("127.0.0.1", "root", "", "aula07");

    // Get the search value from the POST request
    $busca = $_POST['busca'];

    // Prepare the SELECT statement
    $sql = "SELECT * FROM login WHERE usuario LIKE '%$busca%'";

    // Execute the statement
    $resultado = $conexao->query($sql);

    // Display the results
    if ($resultado->num_rows > 0) {
        echo "<table>";
        echo "<tr><th>ID</th><th>Usuário</th><th>Senha</th><th>Ação</th></tr>";
        while ($tabela = $resultado->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $tabela['id'] . "</td>";
            echo "<td>" . $tabela['usuario'] . "</td>";
            echo "<td>" . $tabela['senha'] . "</td>";
            echo '<td>
                    <a href="delete_login.php?id=' . $tabela['id'] . '">EXCLUIR</a>
                  </td>';
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "Nenhum resultado encontrado.";
    }
    ?>
</body>
</html>