<?php
    // primeiro sempre requer a classe pai
    require_once "conta.class.php";
    // depois as filhas
    require_once "contaPoupanca.class.php";
    require_once "contaCorrente.class.php";
    
    $conta1=new Conta(1, "123-1", "100", 1000);
    $contap=new Poupanca(600, 1, "123-2", "101", 1000);
    $contac=new Corrente(500, 1, "123-3", "103", 1500);

    /*echo "<pre>";
    var_dump($conta1);
    echo "</pre>";

    echo "<br><br>";

    echo "<pre>";
    var_dump($contap);
    echo "</pre>";

    echo "<br><br>";

    echo "<pre>";
    var_dump($contac);
    echo "</pre>";*/

    echo $contac->getSaldo() . "<br>";
    $retorno = $contac->Depositar(99.99);
    if(is_string($retorno)){
        echo "$retorno<br>";
    } else {
        echo number_format($retorno, 2, ",", ".") . "<br>";
    }
?>