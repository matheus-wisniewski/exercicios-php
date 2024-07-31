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

        $contaUsuario = new Conta(123, 'corrente', 'Matheus', 5000, 'aberta');

        print_r($contaUsuario);
        $contaUsuario->getInfo('tipo');
        echo "<br>";
        $contaUsuario->depositar(2000);
        $contaUsuario->getInfo('saldo');
        echo "<br>";
        $contaUsuario->sacar(1000);
        $contaUsuario->getInfo('saldo');
        echo "<br>";
        $contaUsuario->pagarMensal(2000);
        $contaUsuario->getInfo('saldo');
        echo "<br>";

        $contaUsuario->setInfo('dono', 'Thena');
        $contaUsuario->getInfo('dono');
        ?>
    </pre>
</body>

</html>