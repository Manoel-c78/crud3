<?php
    
    include "conexao.php";

    $select = "SELECT * FROM viado";

    $resultado = $conexao->query($select);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar</title>
</head>
<body>
<table>
        <thead>
            <th>Nome</th> 
            <th>Email</th> 
            <th>Senha</th>
        </thead>
        <tbody>
            <?php 
            while($viado = $resultado->fetch_object()){
                echo "<tr>";
                    echo "<td> $viado->ID </td>";
                    echo "<td> $viado->nome </td>";
                    echo "<td>$viado->email</td>";
                    echo "<td>$viado->senha</td>";
                    
                echo "<td>";

                    echo "<a href='delete.php?ID=$viado->ID'>Excluir<";

                echo "/<tr>";

            }
            
            
            ?>
        </tbody>
    </table>
</body>
</html>