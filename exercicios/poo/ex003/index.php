<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livraria</title>
</head>

<body>
    <?php
    require_once "Pessoa.php";
    require_once "Livro.php";

    $pessoa[0] = new Pessoa('Matheus', 25, 'M');
    $pessoa[1] = new Pessoa('Mel', 25, 'F');

    $livro[0] = new Livro('PHP para noobs', 'John Doe', 400, $pessoa[0]->getNome());
    $livro[1] = new Livro('Minecraft para noobs', 'Jane Doe', 600, $pessoa[1]->getNome());
    ?>

    <pre>
        <?php
        print_r($pessoa[0]);
        echo "<br>";
        print_r($pessoa[1]);
        echo "<br>";
        $livro[0]->detalhes();
        echo "<br>";
        $livro[1]->detalhes();
        echo "<br>";
        ?>
    </pre>
</body>

</html>