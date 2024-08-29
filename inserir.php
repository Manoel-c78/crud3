

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de notas</title>
</head>
<body>
    <form action="create.php" method="get">
        <label for="">nome do aluno</label>
        <input type="text" name="nome">

        <label for="">notas</label>
        <input type="number" name="notas" max="10" min="0" step="0.01">

        <input type="submit" value="cadastrar">        
    </form>
    <a href="read.php">ir para a lista</a>
</body>
</html>