<?php 

/**
 * Método construct automaticamente inicializa quando uma classe é istanciada
 */
class Login
{	

	private $email;
	private $senha; 
	private $nome;
	

	// A instancia da classe deve passar 3 parâmetros
	function __construct($email, $senha, $nome)
	{	
		$this->nome = $nome;
		$this->setEmail($email);

	}


	public function getEmail()
	{
		return $this->email;
	}


	public function setEmail($e)
	{
		$email = filter_var($e, FILTER_SANITIZE_EMAIL);
		$this->email = $email; 
	}

}


$logar = new Login("teste@teste.com", "123456", "João");
