<?php 

class Login
{
    private $email;
    private $senha;
    private $nome;

    public function __construct($email, $senha, $nome) {
    	// Método construtor ao criar instáncia da classe
    	$this->nome = $nome;
    	$this->setEmail($email);
    	$this->setSenha($senha);
    }

    public function getNome() {
    	return $this->nome;
    }

    public function getEmail() {
    	return $this->email;
    }


    public function setEmail($e) {
    	// Limpando e-mail utilizando a biblioteca do PHP filter_var
    	$email = filter_var($e, FILTER_SANITIZE_EMAIL);
    	$this->email = $email;
    }


    public function getSenha() {
    	return $this->senha;
    }


    public function setSenha($s) {
    	$this->senha = $s;
    }


    public function Logar() {
    	if ($this->email == 'teste@teste.com' and $this->senha == '123456') {
    		// code...
    		echo "Logado com sucesso";
    	} else {
    		// code...
    		echo "Dados inválidos";
    	}
    	
    }
}

$logar = new Login("teste@teste.com", "123456", "João Marcelo");
$logar->Logar();
echo "<br>";
echo $logar->getEmail();


?>