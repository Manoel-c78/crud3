<?php 
include "conexao.php";

$nome = $_GET['nome'];
$notas = $_GET['notas'];

$insert = "INSERT INTO aluno (id, nome, notas) VALUES (NULL, '$nome', '$notas') ";

$resultado = $conn->query($insert);

if($resultado == TRUE){
    echo "cadastrado com sucesso";
}else{
    echo "não cadastrado";
}



?>

<a href="read.php">voltar</a>;