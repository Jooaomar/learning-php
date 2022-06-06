<?php 

/**
 * Criar conexão com Banco de Dados utilizando PDO (é uma classe embutida no PHP).
 * O PHP Data Objects( PDO ) define uma interface leve e consistente para acessar bancos de 
 * dados em PHP.
 *
 * OBS: Antes desse código foi configurado o servidor do Banco de dados, onde criamos o banco de dados "pdo"
 * (poderia ser qualquer outro nome) e a tabela "produtos".
 */
namespace App\Model;

class Conexao
{
	private static $instance;

	public static function getConn()
	{
		// Se não houver uma instancia conectada ao BD, criaremos. 
		if (!isset(self::$instance)) {
			// Instância da classe PDO é uma classe embutida no PHP e ao instanciar deve-se usar "\" ficando "new \PDO();"
			self::$instance = new \PDO('mysql:host=localhost:3306;dbname=pdo;charset=utf8', 'root', 'password');
		}
		return self::$instance;
			
	}
}