<?php
/**
 * set
 * get
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
 }

 $pessoa = new Pessoa();
 $pessoa->nome = "João";
 $pessoa->idade = 25;
 $pessoa->sexo = "M";

 var_dump($pessoa);
 echo $pessoa->nome."<br>";
 echo $pessoa->idade."<br>";
 echo $pessoa->sexo."<br>";

 