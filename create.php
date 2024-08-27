<?php 

    include('config.php');
    $nome = $_GET ['nome'];
    $email = $_GET ['email'];
    $senha = $_GET ['senha'];

   $insert = "INSERT INTO 'viado' ('nome', 'email', 'senha') VALUES (NULL, '$nome', '$nota')";

   $resultado = $conexao->query($insert);

   if($resultado == TRUE){
    echo "cadastrado com sucesso !"
}
    else{
        echo "Erro ao cadastrar !"
   }

?>