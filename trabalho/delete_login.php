<?php

// Connect to the database
$conexao = new mysqli("127.0.0.1", "root", "", "aula07");

// Get the user ID from the GET request
$id = $_GET['id'];

// Prepare the DELETE statement
$sql = "DELETE FROM login WHERE id=$id";

// Execute the statement
$conexao->query($sql);

// Redirect back to the login_buscar.php page
header("Location: login_buscar.php");