<?php
    include "conexao.php";

    $id = $_GET['ID'] ?? '';

    $select = "SELECT id, nome, email FROM `viado` WHERE `ID` = $id";

    $resultado = $conexao->query($select);

    $viado = $resultado->fetch_object();

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ATUALIZAR</title>
</head>
<body>
    <a href="read.php">Voltar</a>    <br><br>
    
    <form action="update.php" method="get">

        <input type="text" value="<?= $viado->id ?>" hidden name="id">
        <label for="">Nome do Aluno</label>
        <input type="text" value="<?= $viado->nome ?>" name="nome">

        <label for="email">Email</label>
        <input type="text" value="<?= $viado->email ?>" name="nota">

        <input type="submit" value="Atualizar">

    </form>
</body>
</html>