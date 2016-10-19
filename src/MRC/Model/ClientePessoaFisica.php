<?php

namespace MRC\Model;

use MRC\Model\Cliente;
use MRC\Model\ClienteInterface;

/**
 * Description of ClientePessoaFisica
 *
 * @author marcos santos
 */
class ClientePessoaFisica extends Cliente implements ClienteInterface {
    
    private $endereço_cobranca;


    public function getImportancia() {
        return rand(1, 5);
    }
    
    public function EnderecoCobranca($end) {
        $this->endereço_cobranca = $end;
        return $this;
    }
    function getEndereço_cobranca() {
        return $this->endereço_cobranca;
    }

    function setEndereço_cobranca($endereço_cobranca) {
        $this->endereço_cobranca = $endereço_cobranca;
    }


}
