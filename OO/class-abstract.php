<?php   


/* Classes abstratas não podem ser instánciadas de forma direta, apenas por meio de subclasses*/
abstract class Banco 
{
    protected $saldo;
    protected $limiteSaldo;
    protected $juros;

    public function setSaldo($s)
    {
    	return $this->saldo = $s;
    }

    public function getSaldo()
    {
    	return $this->saldo;
    }

    // Métodos abstratos obrigam as classes que a estendem possuir os métodos conforme o módelo criado 
    abstract protected function Sacar($s);
    abstract protected function Depositar($d);
}


/**
 * Aqui nós extendemos da classe abstrata Banco e usamos os métodos abstratos definidos como modelos
 */
class Itau extends Banco 
{
	public function Sacar($s) 
	{
		$this->saldo -= $s;
		echo "<hr> Sacou: ".$s;
	}

	public function Depositar($d)
	{
		$this->saldo += $d;
		echo "<hr> Depositou: ".$d;
	}	
}


$itau = new Itau();
$itau->setSaldo(1000);
echo "<hr> Saldo: ".$itau->getSaldo();
$itau->Sacar(250);
echo "<hr> Saldo: ".$itau->getSaldo();
$itau->Depositar(900);
echo "<hr> Saldo: ".$itau->getSaldo();















?>