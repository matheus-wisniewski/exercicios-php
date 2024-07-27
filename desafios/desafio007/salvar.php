<?php
include "conexao.php";

$usuario = filter_input(INPUT_POST, 'usuario', FILTER_SANITIZE_SPECIAL_CHARS);

$senha = password_hash($_POST["senha"], PASSWORD_DEFAULT);

$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);


try {
    $sql = "INSERT INTO users (nome, senha, email) VALUES ('{$usuario}', '{$senha}', '{$email}')";
    mysqli_query($conn, $sql);
    header("location: pagina-inicial.php");
} catch (Exception $e) {
    echo "Erro ao cadastrar usuário", $e->getMessage();
}