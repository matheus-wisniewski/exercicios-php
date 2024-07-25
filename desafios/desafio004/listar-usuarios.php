<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar usuários</title>
</head>

<body>
    <h1>Listar usuários</h1>
    <?php
    $sql = "SELECT * FROM users";

    $res = $conn->query($sql);
    $qtd = $res->num_rows;

    if ($qtd > 0) {
        print "<table>";
        while ($row = $res->fetch_object()) {
            print "<tr>";
            print "<td>" . $row->id . "</td>";
            print "<td>" . $row->nome . "</td>";
            print "<td>" . $row->senha . "</td>";
            print "<td>" . $row->email . "</td>";
            print "</tr>";
        }
        print "</table>";
    } else {
        print "<p>Resultados não encontrados.</p>";
    }
    ?>

    <button onclick="javascript: history.go(-1)">Voltar</button>
</body>

</html>