<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POO em PHP</title>
</head>

<body>
    <?php
    require_once "Classes.php";

    $bic = new Caneta();
    $bic->cor = "azul";
    $bic->ponta = 0.5;
    $bic->tampada = false;
    #$bic->rabiscar();

    $novoBic = new Caneta();
    $bicArr = [
        'modelo' => $_REQUEST['modelo'],
        'cor' => $_REQUEST['cor'],
        'ponta' => $_REQUEST['ponta'],
        'tampada' => $_REQUEST['tampada'],
    ];
    $novoBic->recebendoDados($bicArr);

    print_r($novoBic);

    #print_r($bic);
    ?>

    <form action="<?= $_SERVER['PHP_SELF'] ?>">
        <label>Modelo<input type="text" name="modelo" value="<?= @$modelo ?>"></label>
        <label>Cor<input type="text" name="cor" value="<?= @$cor ?>"></label>
        <label>Ponta<input type="text" name="ponta" value="<?= @$ponta ?>"></label>
        <label>Tampada<input type="text" max="3" name="tampada" value="<?= @$tampada ?>"></label>

        <button type="submit">Cadastrar Caneta</button>
    </form>
</body>

</html>