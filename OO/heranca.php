<?php
/* Herança é um recurso que permite que classes compartilhem atributos e métodos */

class Veiculo
{
    public $modelo;
    public $cor;
    public $ano;


    public function Andar()
    {
        echo "Andou";
    }

    public function Parar()
    {
        echo "Parou";
    }
}

class Carro extends Veiculo 
{
    public function ligarLimpador()
    {
        echo "Limpando em 321";
    }
}

class Moto extends Veiculo
{
    public function darGrau()
    {
        "Dando grau em 321";
    }
}


$carro = new Carro;
$carro->modelo = "Gol";
$carro->cor = "Vermelho";
$carro->ano = 2018;
$carro->Andar();
echo "<br>";
var_dump($carro);


$moto = new Moto;
$moto->modelo = "Honda Biz";
$moto->cor = "Azul";
$moto->ano = 2017;
$moto->Parar();
echo "<br>";
var_dump($moto);