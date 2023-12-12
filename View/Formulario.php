
<!DOCTYPE html>
<html>
<head>
    <title>Formulário de Cadastro</title>
</head>
<body>
    <h2>Cadastro de Usuário</h2>
    <form action="index.php" method="post">
        <input type="hidden" name="acao" value="cadastrar">

        <label for="nome">Nome:</label>
        <input type="text" name="nome" required><br>

        <label for="cpf">Cpf:</label>
        <input type="text" name="cpf" required><br>

        <input type="submit" value="Cadastrar">
    </form>

    <h2>Listar Todos os Usuários</h2>
    <form action="index.php" method="post">
        <input type="hidden" name="acao" value="listar">
        <input type="submit" value="Listar">
    </form>

    <h2>Deletar Usuário</h2>
    <form action="index.php" method="post">
        <input type="hidden" name="acao" value="deletar">
        <label for="cpf"> Cpf:</label>
        <input type="text" name="cpf" required><br>

        <input type="submit" value="Deletar">
    </form>
</body>
</html>