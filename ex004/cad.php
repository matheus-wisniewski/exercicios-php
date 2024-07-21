<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>

<body>
    <heaader>
        <h1>Resultado de processamento</h1>
    </heaader>

    <main>
        <?php 
            $name = $_POST['nomeUsuario'];
            echo $name;
        ?>
    </main>
</body>

</html>