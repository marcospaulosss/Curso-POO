<?php

namespace MRC\Model;

use MRC\Model\Cliente;
use MRC\Model\ClienteInterface;

class ClientePessoaJuridica extends Cliente implements ClienteInterface{
    private $endereço_cobranca, $importancia;
    
    function __construct() {
    }
    
    public function EnderecoCobranca($end) {
        $this->endereço_cobranca = $end;
        return $this;
    }

    public function Importancia($importancia) {
        $this->importancia = $importancia;
        return $this;
    }

    function getEndereço_cobranca() {
        return $this->endereço_cobranca;
    }

    function getImportancia() {
        return $this->importancia;
    }
}
