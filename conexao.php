<?php 

    $dbHost = "localhost:3307";
    $dbUsername = "root";
    $dbPassword = "";
    $dbName = "japaalien";

    $conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

   if($conexao->connect_errno){
        echo "Nao foi possivel conectar";
   }
   else{
    echo "Deu certo";
   }


?>