<?php 

/**
 * Ocorrência normal que pode afetar o funcionamento da aplicação deve ser tratada
 * Exception é a classe base para todas Exceptions
 * parâmetros fornecidos: message, code, file, line
 */

class Newsletter 
{
	public function cadastraEmail($email)
	{
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			throw new Exception("Este email é inválido", 1);
		} else {
			echo "Email cadastrado com sucesso!";
		}
		
	}
}

$newsletter = new Newsletter();


// Exibição de erro
try {
	$newsletter->cadastraEmail("contato@");
} catch (Exception $e) {
	echo "Mensagem: ".$e->getMessage()."<br>";
	echo "Código: ".$e->getCode()."<br>";
	echo "Linha: ".$e->getLine()."<br>";
	echo "Arquivo: ".$e->getFile()."<br>";
}