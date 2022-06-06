<?php 

/**
 * Namespaces evitam conflito de arquivos de mesmo nome.
 * Outra forma de fazer
 */

require 'classes/produto.php';
require 'models/produto.php';

use models\Produto as productModel;
use classes\Produto as productClass;

$produto = new productModel;
$produto->mostrarDetalhes();

echo "<br>";

$produto = new productClass;
$produto->mostrarDetalhes();
