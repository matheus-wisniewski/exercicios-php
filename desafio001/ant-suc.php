<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio Antecessor e Sucessor</title>
</head>

<body>
    <div>
        <form action="resposta.php" method="post">
            <h1>Informe um número</h1>

            <label for="number">Número</label>
            <input type="number" name="numero">

            <button type="submit">Calcular</button>
        </form>
    </div>
</body>

<style>
* {
    color: #23001E;
}

body {
    background-color: #A4A9AD;
    width: 100vw;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
}

div {
    background-color: white;
    border-radius: 5px;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    display: flex;
    flex-direction: column;
    justify-content: center;
    text-align: center;
    transition: 0.3s;
    height: 10rem;
}

div:hover {
    box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
}

div>form {
    padding: 2px 16px;
}
</style>

</html>