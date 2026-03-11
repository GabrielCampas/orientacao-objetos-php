<?php
    class Fornecedor{
        public function __construct(private string $razaoSocial="FATEC", private string $cnpj = "111.111.111-11", private string $celular="(14) 99710-1010", private string $email="fornecedor@gmail.com"){

        }
        
        //private string $razaoSocial = "FATEC";
        //private string $cnpj = "111.111.111-11";
        //private string $celular = "(14) 99710-1010";
        //private string $email = "fornecedor@gmail.com";
        
        public function Exibindo(){
            echo "<strong>Razão Social:</strong> {$this->razaoSocial} <br> <strong>CNPJ:</strong> {$this->cnpj} <br> <strong>Celular:</strong> {$this->celular} <br> <strong>Email: </strong>{$this->email}.";
        }

        public function getRazao(){
            return $this->razaoSocial;
        }

        public function getCNPJ(){
            return $this->cnpj;
        }

        public function getCelular(){
            return $this->celular;
        }

        public function getEmail(){
            return $this->email;
        }
    }
?>