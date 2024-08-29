<?php 
    include "conexao.php";

    $select = "SELECT * FROM aluno";

    $result = $conn->query($select);

?>

<a href="index.php">voltar</a>
<br>
<br>

<table border="1">
    <thead>
        <th>id</th> <th>Nome</th> <th>Nota</th> <th>   </th> <th>   </th>
    </thead>
    <tbody>
        <?php 
            while($aluno = $result->fetch_object()){
                echo "<tr>";
                    echo "<td>".$aluno->id."</td>";
                    echo "<td>".$aluno->nome."</td>";
                    echo "<td>".$aluno->notas."</td>";

                    echo "<td>";
                        echo "<a href='delete.php?id=$aluno->id'>Excluir</a>";
                    echo "</td>";

                    echo "<td>";
                        echo "<a href='editar.php?id=$aluno->id'>Editar</a>";
                    echo "</td>";
                echo "</tr>";    

            }
        ?>

    </tbody>



</table>