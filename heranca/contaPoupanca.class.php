<?php
    class Poupanca extends Conta{                            
        public function __construct(private int $aniversario=0,
        // esses elementos são parâmetros e não atributos, por isso não precisam do modificador private/protected ou public 
        int $banco, string $agencia, string $conta, float $saldo){
            // passando os parâmetros da classe pai na ordem
            parent:: __construct($banco, $agencia, $conta, $saldo);
        }
        //region get
        public function getAniversario(){
            return $this->aniversario;
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
        public function setAniversario(){
            $this->aniversario = $aniversario;
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
            $this->conta = $conta;
        }
        //endregion
    }
?>