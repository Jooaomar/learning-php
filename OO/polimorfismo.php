<?php

/**
 * Observe como reescrevemos os métodos herdados da classe pai e isso é o polimorfismo
 */

class Animal
{
	public function Andar()
	{
		echo "O animal andou";
	}

	public function Correr()
	{
		echo "O animal correu";
	}
}


class Cavalo extends Animal
{
	public function Andar()
	{
		$this->Correr();
	}
}


$animal = new Cavalo();
$animal->Andar();