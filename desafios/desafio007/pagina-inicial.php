<?php
include "conexao.php";

$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Home Page</title>
</head>

<body>
    <h1>Eu sou uma página inicial!</h1>
    <?php
    "<h2>Usuários no banco de dados: </h2><br>";
    if ($result->num_rows > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<table>";
            echo "<tr>";

            echo "<tr>";
            echo "<th>" . "Nome" . "</th>";
            echo "<th>" . "Email" . "</th>";
            echo "<th>" . "Senha" . "</th>";
            echo "</tr>";

            echo "<tr>";
            echo "<td>" . $row["nome"] . "</td>";
            echo "<td>" . $row["email"] . "</td>";
            echo "<td>" . $row["senha"] . "</td>";
            echo "</tr>";

            echo "</tr>";
            echo "</table>";
        }
    }

    ?>
</body>

</html>