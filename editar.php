<?php 

    include "conexao.php";

    $id = $_GET['id'];
   
    $select = "SELECT nome, notas FROM aluno WHERE id= $id";

    $result = $conn->query($select);
    
    $aluno = $result->fetch_object();
?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar</title>
</head>
<body>
    <form action="update.php" method="get">

      <input type="number" value="<?= $id ?>" name="id" hidden>
        <label for="">nome do aluno</label>
        <input type="text" value="<?= $aluno->nome ?>" name="nome">

        <label for="">notas</label>
        <input type="number" value="<?= $aluno->notas ?>" name="notas" max="10" min="0" step="0.01">

        <input type="submit" value="editar">        
    </form>

</body>
</html>