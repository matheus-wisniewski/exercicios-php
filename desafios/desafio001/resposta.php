<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado Final</title>
</head>

<body>
    <div>
        <h1>Resultado Final</h1>

        <?php 
            $inputNumber = $_POST["numero"];
            $antecessor = $inputNumber - 1;
            $sucessor = $inputNumber + 1;
            
            echo "<p>O número escolhido foi: $inputNumber</p>";
            echo "<p>O seu antecessor é: $antecessor</p>";
            echo "<p>O seu sucessor é: $sucessor</p>";
        ?>

        <button onclick="javascript:history.go(-1)">Voltar</button>
    </div>
</body>

</html>