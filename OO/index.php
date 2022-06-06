<?php

class Pessoa {
    public $nome;
    public $idade;

    public function Falar(){
        echo $this->nome." de ".$this->idade." Falou <br>";
    }
}

$joao = new Pessoa();
$joao->nome = "João Marcelo Cunha";
$joao->idade = 25;
$joao->Falar();

var_dump($joao);

echo "string";

echo "<br>";

$maria = new Pessoa();
$maria->nome = "Joyce Maria";
$maria->idade = 22;
$maria->Falar();

var_dump($maria);
echo "<br>";
echo $maria->nome;
echo "<br>";
echo $joao->nome;