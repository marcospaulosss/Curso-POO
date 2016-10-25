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
        $this->conexao = BDClientes::getConexao();
        $crud_cliente = new Crud($this->conexao, 'cliente');
        $resulPessoaFisica = $crud_cliente->findTipoAll(1);
        $resulPessoaJuridica = $crud_cliente->findTipoAll(2);
//        var_dump($clientes);

        include_once 'src/MRC/View/Listagem.phtml';
    }
    
    public function ActionIncluir($request) {
//        var_dump($request);
        $this->conexao = BDClientes::getConexao();
        $crud_cliente = new Crud($this->conexao, 'cliente');
        
        if($request['rd_tipo'] == 1){
            //PESSOA FISICA//
            $pessoa_fisica = new ClientePessoaFisica();
            $pessoa_fisica->setNome($request['txt_nome'])
                            ->setTipo($request['rd_tipo'])
                            ->setDocumento($request['txt_doc'])
                            ->setEndereco($request['txt_end'])
                            ->setTelefone($request['txt_tel'])
                            ->EnderecoCobranca($request['txt_end_cob'])
                            ->Importancia($request['txt_inportancia']);
//                    var_dump($pessoa_fisica);
            $crud_cliente->persist($pessoa_fisica);
            
            if($crud_cliente->flush($pessoa_fisica)){
                //incluido com sucesso//
                $error['number'] = 0;
                $error['msg'] = "Cliente Cadastrado com Sucesso!!!";
            }else{
                //CLIENTE NAO INCLUIDO
                $error['number'] = 1;
                $error['msg'] = "Erro ao Cadastrar Cliente.";
            }
                            
        }else{
            //PESSOA JURIDICA//
            $pessoa_juridica = new ClientePessoaJuridica();
            $pessoa_juridica->setNome($request['txt_nome'])
                            ->setTipo($request['rd_tipo'])
                            ->setDocumento($request['txt_doc'])
                            ->setEndereco($request['txt_end'])
                            ->setTelefone($request['txt_tel'])
                            ->EnderecoCobranca($request['txt_end_cob'])
                            ->Importancia($request['txt_inportancia']);
//                    var_dump($pessoa_fisica);
            
            $crud_cliente->persist($pessoa_juridica);
            
            if($crud_cliente->flush($pessoa_juridica)){
                //incluido com sucesso//
                $error['number'] = 0;
                $error['msg'] = "Cliente Cadastrado com Sucesso!!!";
            }else{
                //CLIENTE NAO INCLUIDO
                $error['number'] = 1;
                $error['msg'] = "Erro ao Cadastrar Cliente.";
            }
        }
        
        echo json_encode($error);
    }
    
    function getConexao() {
        return $this->conexao;
    }
    
}
