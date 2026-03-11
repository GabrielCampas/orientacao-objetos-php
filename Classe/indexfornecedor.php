<?php
    require_once "fornecedor.class.php";

    $fornecedor = new Fornecedor();

    echo "Exibindo informações do fornecedor: ";
    echo "<br><br>";
    echo "{$fornecedor->Exibindo()}";
?>