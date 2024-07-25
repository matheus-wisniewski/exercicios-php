<?php
switch ($_REQUEST["acao"]) {
    case 'cadastrar':
        $usuario = $_POST['usuario'];
        $senha = $_POST['senha'];
        $email = $_POST['email'];

        $sql = "INSERT INTO users (nome, senha, email) VALUES ('{$usuario}', '{$senha}', '{$email}')";

        $res = $conn->query($sql);

        break;
    case 'editar':
        break;
    case 'excluir':
    default:
        echo "Ação não reconhecida";
        break;
}