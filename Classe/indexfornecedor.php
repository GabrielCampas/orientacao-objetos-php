<?php
    require_once "fornecedor.class.php";

    $fornecedor = new Fornecedor("Silcar Pneus", "10.100.100/0001-10", "(14)997901010", "silcar@gmail.com");

    echo "Exibindo informações do fornecedor: ";
    echo "<br><br>";
    echo "{$fornecedor->Exibindo()}";
?>