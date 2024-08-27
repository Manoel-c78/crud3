<?php 

    include('conexao.php');

    $nome = $_GET ['nome'] ?? '';
    $email = $_GET ['email'] ?? '';
    $senha = $_GET ['senha'] ?? '';

    $result = mysqli_query($conexao, "INSERT INTO viado(nome, email, senha) VALUES('$nome', '$email', '$senha')");
    
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>
<body>
    <h1>Cadastro</h1>
    <form action="cadastro.php" method="get">
        <label for="nome">Insira seu nome</label>
        <input type="text" name="nome" id="nome" placeholder="Nome">

        <label for="email">Insira seu email</label>
        <input type="email" name="email" id="email" placeholder="Email">

        <label for="senha">Insira sua senha</label>
        <input type="password" name="senha" id="senha" placeholder="Senha">

        <input type="submit" value="Enviar">


    </form>
</body>
</html>