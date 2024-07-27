<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <main>
        <h1>Olá, seja bem vindo!</h1>
        <form action="salvar.php" method="post">
            <label>
                Insira seu usuário:
                <input type="text" name="usuario">
            </label>

            <label>
                Insira seu email:
                <input type="email" name="email">
            </label>

            <label>
                Insira sua senha:
                <input type="password" name="senha">
            </label>

            <button type="submit">Entrar</button>
        </form>
    </main>
</body>

</html>