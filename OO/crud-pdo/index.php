<?php
// SETS
/**
 * Para fazer um carregamento automático das classes 'Model' sem precisar fazer um 'require' de cada
 * Classe utilizamos o 'autoload' utilizando o padrão 'psr-4' (saiba mais em https://www.php-fig.org/psr/)
 * e configuração do "composer.json" https://getcomposer.org/doc/01-basic-usage.md
 */
require 'vendor/autoload.php';


/**
 * Instância da classe Produto
 *
 * Experimente fazer modificações nos valores setados pelos métodos "set" para consulta, atualização, 
 * deletar e criar dados no Banco
 */
$produto = new \App\Model\Produto();
$produto->setId(1);
$produto->setNome('Janela');
$produto->setDescricao('Vidro');


/**
 * Instância da Classe ProdutoDaoo
 *
 * Permite consultar, atualizar, deletar e criar dados no Banco
 * Experimente alterar as instâncias e usar os métodos: create, read, update e delete;
 */
$produtoDao = new \App\Model\ProdutoDao();
$produtoDao->update($produto);
// $produtoDao->create($produto);
// $produtoDao->delete(4);
$produtoDao->read($produto);




/**
 * OBS: usando o método "read()" da classe ProdutoPdo ela devolve um array, e para vizualizar o resultado
 * fazemos um foreach 
 */
foreach ($produtoDao->read() as $produto) {
    echo $produto['nome']."<br>".$produto['descricao']."<hr>";
}