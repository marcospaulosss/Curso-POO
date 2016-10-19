<?php

namespace MRC\Model;

class Cliente {
    protected $nome;
    protected $documento;
    protected $endereco;
    protected $telefone;
    protected $tipo;
    
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


}
