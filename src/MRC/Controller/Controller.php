<?php

namespace MRC\Controller;

use MRC\Model\BDClientes;
use MRC\Model\Crud;
use MRC\Model\ClientePessoaFisica;
use MRC\Model\ClientePessoaJuridica;


class Controller {
    private $conexao;
    
    function __construct() {
        
    }
    
    public function ListarClientes() {
        
        //INSTANCIANDO CLASSE DO PDO//
        $conexao = BDClientes::getConexao();
        $crud_cliente = new Crud($conexao, 'cliente');
        $resulPessoaFisica = $crud_cliente->findTipoAll(1);
        $resulPessoaJuridica = $crud_cliente->findTipoAll(2);
//        var_dump($clientes);

        include_once 'src/MRC/View/Listagem.phtml';
    }
    
    function getConexao() {
        return $this->conexao;
    }
    
}
