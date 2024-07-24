<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio número aleatório</title>
</head>

<body>
    <form method="get">
        <h1>Gerador de números aleatórios</h1>

        <p>Gerando um número aleatório entre 0 e 100...</p>
        <?php 
            if(isset($_GET["botaoGerarNum"])) {
                $numeroAleatorio = mt_rand(0, 100);
                echo "O valor gerado é: <b>$numeroAleatorio</b> <hr>";
            }
        ?>
        <button type="submit" name="botaoGerarNum">Gerar</button>
    </form>
</body>

</html>