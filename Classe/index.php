<?php
    require_once "produto.class.php";
    require_once "produto2.class.php";
    require_once "produto3.class.php";

    // usa o constructor padrao da linguagem PHP
    $produto1 = new Produto();
    // usa o constructor definido na classe "Produto2" em "produto2.class.php"
    // passando parametros nomeados por valor, seguindo a ordem do constructor
    $produto2 = new Produto2("Calça", 69.99);
    // passando parametros nomeados por referencia, sem seguir a ordem do constructor
    // o objeto 'produto3' está usando a classe "Produto2"
    $produto3 = new Produto2(preco: 55, nome:"Relógio");
    $produto4 = new Produto3("Camisa", 39.90);

    // atribuindo valores para os atributos da classe produto
    $produto1->nome = "Tênis";
    $produto1->preco= 89.99;

    // mostrando dados sem usar método
    echo "Exibindo os dados sem usar nenhum método:";
    echo "<br><br>";
    echo "Objeto - Produto 1: {$produto1->nome} | Preço: {$produto1->preco} reais.<br>";
    echo "Objeto - Produto 2 - {$produto2->nome} | Preço: {$produto2->preco} reais.<br>";

    echo "<hr>";
    // mostrando dados que estão no objeto usando o método "Exibir()"
    echo "Exibindo os dados chamando o método 'Exibir()'";
    echo "<br><br>";
    $produto3->Exibir();

    // usando a classe "Produto 3"
    // Criamos um objeto da classe "Produto 3" que os atributos são privados e os métodos públicos
    // acessou o valor do atributo nome por meio de um método get, pois o atributo é privado e não pode ser acessado fora da classe
    echo "<hr>";

    echo "Usando os métodos <strong>'getNome()'</strong>, <strong>'setNome'</strong>, <strong>'getPreco'</strong> e <strong>'setPreco'</strong>.";
    echo "<br><br>";
    echo "Objeto - Produto 4: {$produto4->getNome()} | Preço: {$produto4->getPreco()} reais.";
    echo "<br><br>";
    echo "- O nome antigo de Produto 4 era: <strong>{$produto4->getNome()}</strong>. ";
    echo "<br>";

    // solicitou a alteração do valor do atributo nome por meio de um método set, pois o atributo é privado e não pode ser acessado fora da classe
    echo "- Usando o método <strong>'setNome()'</strong>, mudamos o nome dele para: Camiseta. ";
    echo "<br>";
    echo "- Usando o método <strong>'setPreco()'</strong>, mudamos o preço dele para: 45. ";
    $produto4->setNome("Camiseta");
    $produto4->setPreco(45);

    // chamando pra mostrar o novo nome
    echo "<br><br>";
    echo "Agora, se exibirmos o produto 4 novamente, será: <strong>{$produto4->getNome()}</strong>, <strong>{$produto4->getPreco()} reais</strong>.";
    echo "<br><br>";
    echo "Objeto - Produto 4: {$produto4->getNome()} | Preço: {$produto4->getPreco()} reais."
    
?>