<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salário Mínimo</title>
</head>

<body>
    <?php
    $salarioInformado = $_POST['salarioInformado'] ?? 0;
    $salarioMinimo = 1.380;
    $quantidadeSalario = 0;
    $calculoSalarioMinimo = $salarioInformado / $salarioMinimo
    ?>

    <main>
        <h1>Informe seu salário</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
            <label>
                Salário (R$)
                <input type="number" step="0.01" name="salarioInformado" id="salarioInformado"
                    value="<?= $salarioInformado ?>">
            </label>

            <button type="submit">Calcular</button>
        </form>

        <section>
            <h1>Resultado Final</h1>
            <?php
            $padrao = numfmt_create(
                "pt_BR",
                NumberFormatter::CURRENCY
            );

            echo "Quem recebe um salário de " . numfmt_format_currency($padrao, $salarioInformado, "BRL") . " ganha " . $quantidadeSalario . " salários minímos + " . numfmt_format_currency($padrao, $calculoSalarioMinimo, "BRL");
            ?>
        </section>
    </main>
</body>

</html>