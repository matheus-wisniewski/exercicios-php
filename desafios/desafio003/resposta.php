<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resposta conversor</title>
</head>

<body>
    <?php 
        $cotação = 5.22;
        $valorUsuario = $_POST['valor'];
        $valorMultiplicado = $valorUsuario / $cotação;

        // Código que desenvolvi para o desafio proposto, porém, o Guanabara apresentou um código utilizando a biblioteca Internalization php, melhor e mais indicada para valores monetários. Vou deixar ambos os códigos no arquivo para fins de referência.
        echo "<p>Seus R$ $valorUsuario equivalem à <b>US$ $valorMultiplicado</b> </p>";

        // Código utilizando a biblioteca Internalization.
        $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
        echo "<p>Seus " . numfmt_format_currency($padrao, $valorUsuario, "BRL") . " equivalem à " . numfmt_format_currency($padrao, $valorMultiplicado, "USD") . "</p>";
    ?>

    <p>*<b>Cotação fixa de R$5.22</b> informada diretamente no código.</p>
</body>

</html>