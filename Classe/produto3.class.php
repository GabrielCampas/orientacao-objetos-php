<?php
    class Produto3{

        // usando private nos atributos do construct
        public function __construct(private string $nome="",private float $preco=0.0){
            
        }

        // criando o método para exibir na tela
        public function Exibir(){
            echo "Objeto - Produto 3: $this->nome: | Preço: $this->preco reais.";
        }

        // criando método para devolver o conteúdo dos nomes
        public function getNome(){
            return $this->nome;
        }

        // devolvendo conteudo do preço
        public function getPreco(){
            return $this->preco;
        }
        
        // criando método pra nome receber conteúdo (pega o conteúdo antigo e substitui pelo novo)
        public function setNome(string $nome){
            $this->nome = $nome;
        }

        // recendo conteúdo em preço (pega o conteúdo antigo e substitui pelo novo)
        public function setPreco(float $preco){
            $this->preco = $preco;
        }
    }
?>