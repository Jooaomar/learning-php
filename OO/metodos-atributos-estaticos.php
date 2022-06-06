<?php 

/**
 * Utilizaremos 'static', que não nos obriga istanciar uma classe para obter seus atributos
 */
class Login 
{
	public static $user;


	/**
	 * Não precisamos istanciar para utilizar essa função
	 */
	public static function verificaLogin() 
	{
		// O 'this' não funciona aqui pois estamos usando o static
		echo "O usuário ".self::$user." está logado!";
	}


	/**
	 * Precisamos istánciar para utilizar esta função
	 */
	public function sairSistema()
	{	
		echo "O usuário deslogou";
	}
}

// Sem istanciar classe
Login::$user = "admin";
Login::verificaLogin();
echo "<hr>";

// Istanciando classe
$login = new Login();
$login->sairSistema();

?>