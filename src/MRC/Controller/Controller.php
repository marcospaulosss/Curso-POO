<?php

namespace MRC\Controller;

use MRC\Model\ClientePessoaFisica;
use MRC\Model\ClientePessoaJuridica;

class Controller {
    function __construct() {
        
    }
    
    public function InserirClientes() {
        $clientes = array();
        
        for ($i=0;$i<15;$i++){
            ($i <= 9) ? $clientes[$i] = new ClientePessoaFisica() : $clientes[$i] = new ClientePessoaJuridica();
        }
        
        $clientes[0]->setNome("Marcos")
                    ->setEndereco("rua francisco 612");

        $clientes[1]->setNome("Paulo")
                    ->setEndereco("rua francisco 900")
                    ->EnderecoCobranca("rua Mata Machado 1200");

        $clientes[2]->setNome("Sousa")
                    ->setEndereco("rua francisco 1000");

        $clientes[3]->setNome("Santos")
                    ->setEndereco("rua francisco 12");

        $clientes[4]->setNome("Maria")
                    ->setEndereco("rua francisco 20");

        $clientes[5]->setNome("Joice")
                    ->setEndereco("rua francisco 50");

        $clientes[6]->setNome("Renata")
                    ->setEndereco("rua francisco 70");

        $clientes[7]->setNome("Lais")
                    ->setEndereco("rua francisco 95")
                    ->EnderecoCobranca("rua Mata Machado 1600");

        $clientes[8]->setNome("Miguel")
                    ->setEndereco("rua francisco 126");

        $clientes[9]->setNome("Gercino")
                    ->setEndereco("rua francisco 100");
        
        
        //INCLUINDO PESSOA JURIDICA//
        $clientes[10]->setNome("Tereza")
                    ->setEndereco("rua francisco 203");

        $clientes[11]->setNome("Angelina")
                    ->setEndereco("rua francisco 299")
                    ->EnderecoCobranca("rua Mata Machado 15890");

        $clientes[12]->setNome("Monica")
                    ->setEndereco("rua francisco 369");

        $clientes[13]->setNome("Milena")
                    ->setEndereco("rua francisco 298");

        $clientes[14]->setNome("Rodrigo")
                    ->setEndereco("rua francisco 244")
                    ->EnderecoCobranca("rua Mata Machado 1850");
        
        $i = 0;
        foreach ($clientes as $cliente) {
            if($i <= 9){
                $cliente->setDocumento(rand(31111111111, 99999999999))
                        ->setTelefone(rand(900000000, 999999999))
                        ->setTipo("Pessoa Física");
            }else{
                $cliente->setDocumento(rand(311111111000111, 999999999999999))
                        ->setTelefone(rand(900000000, 999999999))
                        ->setTipo("Pessoa Juridica");
            }
            $i++;
        }
        
        include_once 'src/MRC/View/Listagem.phtml';
    }
}
