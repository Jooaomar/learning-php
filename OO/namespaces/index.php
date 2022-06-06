<?php 

/**
 * Namespaces evitam conflito de arquivos de mesmo nome.
 */

require 'classes/produto.php';
require 'models/produto.php';

$produto = new \models\Produto();
$produto->mostrarDetalhes();