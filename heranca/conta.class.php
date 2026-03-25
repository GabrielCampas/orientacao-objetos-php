<?php
    // na classe genérica os atributos são protegidos para apenas as classes filhas acessarem
    class Conta{
        public function __construct(protected int $banco=0, protected string $agencia="", protected string $conta="", protected float $saldo=0.00){}

        //region depositar
        public function Depositar(float $valor){
            if($valor<=0){
                echo "O valor do depósito é inválido.";
            } else {
                $this->saldo += $valor;
                return "Saldo atual: {$this->getSaldo()}";
            }
        }
        //endregion
        public function Sacar($valor){
            $this->saldo -= $valor;
        }
    }
?>