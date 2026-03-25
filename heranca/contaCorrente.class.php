<?php
    class Corrente extends Conta{
        public function __construct(private float $limite=0.00, 
        // esses elementos são parâmetros e não atributos, por isso não precisam do modificador private/protected ou public
        int $banco, string $agencia, string $conta, float $saldo){
            // passando os parâmetros da classe pai na ordem
            parent:: __construct($banco, $agencia, $conta, $saldo);
        }
        //region get
        public function getLimite(){
            return $this->limite;
        }

        public function getBanco(){
            return $this->banco;
        }

        public function getAgencia(){
            return $this->agencia;
        }

        public function getConta(){
            return $this->conta;
        }

        public function getSaldo(){
            return $this->saldo;
        }
        //endregion

        //region set
        public function setLimite(){
            $this->limite = $limite;
        }

        public function setBanco(){
            $this->banco = $banco;
        }

        public function setAgencia(){
            $this->agencia = $agencia;
        }

        public function setConta(){
            $this->conta = $conta;
        }

        public function setSaldo(){
            $this->saldo = $saldo;
        }
        //endregion

        public function Sacar($valor){
            if($this->saldo + $this->limite >= $valor){
                // pegando o método específico da classe pai
                parent:: Sacar($valor);
            }
        }
    }
?>