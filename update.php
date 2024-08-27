<?php

include "conexao.php";

$id = $_GET['ID'];
$nome = $_GET['nome'];
$email = $_GET ['email'];

$update = "UPDATE viado SET nome = $nome, email = $email WHERE `ID` = $id";

$result = $conexao->query($update);

if($result === true){

    echo "Atualizado";
}
else{

    echo "Erro";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="read.php">Voltar</a>
</body>
</html>