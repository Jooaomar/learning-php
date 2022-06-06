<?php 

/**
 * Diferença de Referência e clonagem
 */

class Pessoa 
{
	public $idade;
}

$pessoa = new Pessoa();
$pessoa->idade = 25;

$pessoa2 = $pessoa;
$pessoa2->idade = 35;

// Qual a idade?
echo $pessoa->idade;
