<?php

namespace MRC\Model;


class Cliente {
    protected $nome;
    protected $documento;
    protected $endereco;
    protected $telefone;
    protected $tipo;
    
    protected $tabela, $conexao;
    
    public final function findAll($tipo) {
        $select = "SELECT * FROM $this->tabela WHERE TIPO = :tipo";
        $result = $this->conexao->prepare($select);
        $result->bindParam(':tipo', $tipo, \PDO::PARAM_INT);
        $result->execute();
        return $result->fetchAll(\PDO::FETCH_OBJ);
    }
    
    function getNome() {
        return $this->nome;
    }

    function getDocumento() {
        return $this->documento;
    }

    function getEndereco() {
        return $this->endereco;
    }

    function getTelefone() {
        return $this->telefone;
    }

    function getTipo() {
        return $this->tipo;
    }

    function setNome($nome) {
        $this->nome = $nome;
        return $this;
    }

    function setDocumento($documento) {
        $this->documento = $documento;
        return $this;
    }

    function setEndereco($endereco) {
        $this->endereco = $endereco;
        return $this;
    }

    function setTelefone($telefone) {
        $this->telefone = $telefone;
        return $this;
    }

    function setTipo($tipo) {
        $this->tipo = $tipo;
        return $this;
    }
    function getTabela() {
        return $this->tabela;
    }

    function getConexao() {
        return $this->conexao;
    }

    function setTabela($tabela) {
        $this->tabela = $tabela;
    }



}
