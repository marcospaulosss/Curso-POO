<?php

namespace MRC\Model;

class Crud{
    private $conexao, $tabela;
    
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
