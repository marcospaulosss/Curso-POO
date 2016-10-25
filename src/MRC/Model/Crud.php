<?php

namespace MRC\Model;

class Crud{
    private $conexao, $tabela, $cliente;
    
    function __construct(\PDO $conexao, $tabela) {
        $this->conexao = $conexao;
        $this->tabela = $tabela;
    }

    public final function findTipoAll($tipo) {
        $select = "SELECT * FROM $this->tabela WHERE TIPO = :tipo";
        $result = $this->conexao->prepare($select);
        $result->bindParam(':tipo', $tipo, \PDO::PARAM_INT);
        $result->execute();
        return $result->fetchAll(\PDO::FETCH_OBJ);
    }
    
    public function persist(Cliente $cliente) {
        $this->cliente = $cliente;
    }
    
    public function flush() {
        //    var_dump($cliente->getEndereço_cobranca());
    
        $insert = "INSERT INTO $this->tabela(
                    NOME, DOCUMENTO, ENDERECO, ENDERECO_COBRANCA, TELEFONE, TIPO, IMPORTANCIA)
                    VALUES(
                    :nome, :doc, :end, :end_cob, :tel, :tipo, :imp)";
        $result = $this->conexao->prepare($insert);
        $result->bindValue(":nome", $this->cliente->getNome());
        $result->bindValue(":doc", $this->cliente->getDocumento());
        $result->bindValue(":end", $this->cliente->getEndereco());
        $result->bindValue(":end_cob", $this->cliente->getEndereço_cobranca());
        $result->bindValue(":tel", $this->cliente->getTelefone());
        $result->bindValue(":tipo", $this->cliente->getTipo());
        $result->bindValue(":imp", $this->cliente->getImportancia());
        
        return $result->execute();
    }
    
    function getConexao() {
        return $this->conexao;
    }

    function getTabela() {
        return $this->tabela;
    }

    function setConexao($conexao) {
        $this->conexao = $conexao;
    }

    function setTabela($tabela) {
        $this->tabela = $tabela;
    }

}
