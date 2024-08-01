<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banco Popular</title>
</head>

<body>
    <pre>
        <?php
        include_once "Conta.php";

        # Instancia o objeto Conta
        $contaUsuario = new Conta(123, 'corrente', 'Matheus', 5000, 'aberta');
        $contaUsuario->abrirConta('Corrente');
        # Testes
        ?>
    </pre>
</body>

</html>