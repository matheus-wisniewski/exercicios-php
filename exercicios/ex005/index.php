<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    <?php 
        $valor1 = $_REQUEST['valor1'] ?? 0;
        $valor2 = $_REQUEST['valor2'] ?? 0;
        $resultadoDaSoma = $valor1 + $valor2;
    ?>

    <main>
        <form action="<?=$_SERVER['PHP_SELF'] ?>" method="get">

            <label>
                Insira o primeiro valor
                <input type="number" name="valor1" value="<?= $valor1?>">
            </label>

            <label>
                Insira o segundo valor
                <input type="number" name="valor2" value="<?= $valor2?>">
            </label>

            <button type="submit">Somar</button>
        </form>
    </main>

    <section>
        <?= "O valor da soma dos valores é: " . $resultadoDaSoma ?>
    </section>
</body>

</html>