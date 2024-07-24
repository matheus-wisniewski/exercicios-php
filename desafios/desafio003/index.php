<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de Moedas V1.0</title>
</head>

<body>
    <form action="resposta.php" method="post">
        <h1>Conversor de Moedas V1.0</h1>

        <label for="valor">
            Quantos R$ você tem?
            <input type="number" step="0.01" min="0" name="valor">

            <button type="submit">Converter</button>
        </label>
    </form>
</body>

</html>