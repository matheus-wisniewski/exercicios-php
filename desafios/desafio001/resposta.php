<?php 
    $inputNumber = $_POST["numero"];
    $antecessor = $inputNumber - 1;
    $sucessor = $inputNumber + 1;
?>

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
            echo "<p>O número escolhido foi: $inputNumber</p>";
            echo "<p>O seu antecessor é: $antecessor</p>";
            echo "<p>O seu sucessor é: $sucessor</p>";
        ?>

        <button id="btn-redirecionar">Voltar</button>
    </div>
</body>
<style>
body {
    background-color: #A4A9AD;
    width: 100vw;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
}

div {
    align-items: center;
    background-color: white;
    border-radius: 5px;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    display: flex;
    flex-direction: column;
    justify-content: center;
    height: 20rem;
    transition: 0.3s;
    width: 30rem;
}

div:hover {
    box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
}

button {
    width: 100px;
}
</style>
<script>
document.getElementById('btn-redirecionar').addEventListener('click', function() {
    history.go(-1);
});
</script>

</html>