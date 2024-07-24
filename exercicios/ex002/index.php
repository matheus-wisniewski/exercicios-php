<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>

<body>
    <h1>Exemplo de PHP</h1>
    <?php
        const PAIS = "Brasil";
        echo "Você mora no " . PAIS;
        echo "<br>";
        echo "Hoje é dia " . date("d/M/Y");
    ?>
</body>

<style>
body {
    background-color: black;
    color: white;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    width: 100vw;
    height: 100vh;
}
</style>

</html>