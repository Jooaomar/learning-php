<?php 
/**
 * 
 * @param $args É um parametro GLOBAL do PHP que captura as entradas do script
 */

 $argumentos = $args;
 $script = array_shift($argumentos);
 echo $script, '<br>';

 echo 'Argumentos:<br>';
 
 var_dump($argumentos);
?>