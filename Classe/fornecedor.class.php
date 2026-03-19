<?php
    class Fornecedor{
        public function __construct(private string $razaoSocial="", private string $cnpj = "", private string $celular="", private string $email=""){

        }
        
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