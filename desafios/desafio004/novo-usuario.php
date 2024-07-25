<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Usuário</title>
</head>

<body>
    <form action="?page=salvar" method="POST">
        <input type="hidden" name="acao" value="cadastrar">

        <label>
            Insira seu nome:
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

        <button type="submit">Cadastrar</button>
    </form>
</body>

</html>