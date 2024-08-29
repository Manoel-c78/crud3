<?php 

include "conexao.php";

$id = $_GET['id'];
$nome = $_GET['nome'];
$notas = $_GET['notas'];

$update = "UPDATE aluno SET nome = '$nome', notas = '$notas' WHERE id = '$id'";

$result = $conn->query($update);

if($result === true){
    echo "atualizada com sucesso!";
}else{

    echo "nao atulizada";
}
    $conn->close ();
    header("Location:read.php")

?>