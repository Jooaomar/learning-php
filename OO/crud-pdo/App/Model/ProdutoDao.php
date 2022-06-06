<?php

namespace App\Model;

/**
 * Responsáve por fazer o CRUD. 
 * 
 * OBS: Antes desse código foi configurado o servidor do Banco de dados, onde criamos o banco de dados "pdo"
 * (poderia ser qualquer outro nome) e a tabela "produtos".
 */
class ProdutoDao {

    // Criação dos produtos na tabela do BD
    // Recebe como parâmetro a classe Produto()
    public function create(Produto $p)
    {   
        // (Código SQL) Inserir valor na tabela produtos 
        $sql = 'INSERT INTO produtos (nome, descricao) VALUES (?,?)';

        // Chamando Classe Conexao e PDO. O "prepare()" é uma instrução SQL para ser executada pelo PDOStatement::execute() método
        $cadastro = Conexao::getConn()->prepare($sql);
        // "bindValue()" Vincula um valor a um espaço reservado com nome ou ponto de interrogação correspondente na instrução SQL que foi usada para preparar a instrução. 
        $cadastro->bindValue(1, $p->getNome());
        $cadastro->bindValue(2, $p->getDescricao());
        // Executa uma instrução preparada 
        $cadastro->execute();
    }

    // Leitura da tabela "produtos"
    public function read()
    {
        $sql = 'SELECT * FROM produtos';

        $verificaDados = Conexao::getConn()->prepare($sql);
        $verificaDados->execute();

        // "rowCount()" Verificando se há registros no BD
        if ($verificaDados->rowCount() > 0) {
            // "fetchAll()" devolve um array
            $resultado = $verificaDados->fetchAll(\PDO::FETCH_ASSOC);
            return $resultado;
        } else{
            // Sem registros devolve um array vazio
            return [];
        }
    }

    // Atualizar
    public function update(Produto $p)
    {
        $sql = 'UPDATE produtos SET nome = ?, descricao = ? WHERE id = ?';

        $atualizaDados = Conexao::getConn()->prepare($sql);
        $atualizaDados->bindValue(1, $p->getNome());
        $atualizaDados->bindValue(2, $p->getDescricao());
        $atualizaDados->bindValue(3, $p->getId());

        $atualizaDados->execute();
    }

    public function delete($id)
    {
        $sql = 'DELETE FROM produtos WHERE id = ?';

        $deletar = Conexao::getConn()->prepare($sql);
        $deletar->bindValue(1, $id);
        $deletar->execute();
        
    }
    
}










