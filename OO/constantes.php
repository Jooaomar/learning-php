<?php 


class Pessoa
{
    const nome = "Joyce";

    public function exibirNome()
    {
    	// Referencia a constante com self
    	echo self::nome;
    }
}


/**
 * 
 */
class Marcelo extends Pessoa
{
	const nome = "Marcelo";

	public function exibirNome($value='')
	{
		// parent referencia a constante da classe pai
		echo parent::nome;
		// self referencia a constante da classe filha
		echo "<br> ".self::nome;
	}
}

$marcelo = new Marcelo();
$marcelo->exibirNome();
echo "<hr>";
$nomeAleatoria = new Pessoa();
$nomeAleatoria->exibirNome();


?>