<?php 
// Associação
// Acontece quando um objeto "utiliza" outro, porém, sem que eles dependam um do outro.


class Pedido
{
    public $numero;
    public $cliente;
}


class Cliente
{
    public $nome;
    public $endereco;
}


$cliente = new Cliente();
$cliente->nome = "João Marcelo Cunha";
$cliente->endereco = "Rua xxx, Número: 177";

$Pedido = new Pedido();
$pedido->numero = "123";
$pedido->cliente = $cliente;

$dados = array(
	'numero' => $pedido->numero, 
	'nome_cliente' => $pedido->cliente->nome,
	'endereco_cliente' => $pedido->cliente->endereco
);

var_dump($dados);

