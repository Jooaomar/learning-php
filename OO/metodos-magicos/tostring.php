<?php
/**
 * tostring
 * Quando ocorre um erro em uma string estabelecemos uma mensagem padrão
 */

 class Pessoa 
 {
     private $dados = array();

     public function __set($nome, $valor)
     {
         $this->dados[$nome] = $valor;
     }

     public function __get($nome)
     {
         return $this->dados[$nome];
     }

     public function __toString()
     {
        return "Tentei imprimir o objeto";
     }
 }

 $pessoa = new Pessoa();
 $pessoa->nome = "João";
 $pessoa->idade = 25;
 $pessoa->sexo = "M";

 var_dump($pessoa);
 echo "<br>";
 echo $pessoa;

 