<?php

    include "conexao.php";

    $id = $_GET['ID'];

    $delete = "DELETE FROM viado WHERE ID = '$id'";

    $resultado = $conexao->query($delete);

?>