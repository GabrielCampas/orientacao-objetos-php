<?php
    class Produto2{

        public function __construct(public string $nome="",public float $preco=0.0){
            
        }

        // criando o método para exibir na tela
        public function Exibir(){
            echo "Objeto - Produto 3: $this->nome: | Preço: $this->preco reais.";
        }
    }
?>