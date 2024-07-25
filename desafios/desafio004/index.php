<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Home Page</title>
</head>

<body>
    <nav>
        <a href="?page=novo">Cadastro</a>
        <a href="?page=listar">Lista de usuários</a>
    </nav>
</body>

<?php
include "conexao.php";
switch (@$_REQUEST["page"]) {
    case "novo":
        include("novo-usuario.php");
        break;
    case "listar":
        include("listar-usuarios.php");
        break;
    case "salvar":
        include("salvar.php");
        break;
    default:
        print "<h1> Olá, sejam bem vindos! </h1>";
}
?>

</html>