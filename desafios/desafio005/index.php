<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio Divisão</title>
</head>

<body>
    <?php 
        $dividendo = $_GET['dividendo'] ?? 0;
        $divisor = $_GET['divisor'] ?? 0;
    ?>
    <main>
        <form action="<?= $_SERVER['PHP_SELF']?>" method="get">
            <label>
                Dividendo:
                <input type="number" name="dividendo" value="<?= $dividendo?>">
            </label>

            <label>
                Divisor:
                <input type="number" name="divisor" value="<?= $divisor?>">
            </label>

            <button type="submit">Exibir</button>
        </form>
    </main>

    <section>
        Estrutura da divisão:
        <?php 
            echo "<p>Dividendo: $dividendo</p>";
            
            echo "<p>Divisor: $divisor</p>"
        ?>
    </section>
</body>

</html>