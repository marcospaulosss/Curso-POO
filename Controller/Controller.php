<?php

class Controller {
    function __construct() {
        
    }
    
    public function InserirClientes() {
        require_once 'Model/Cliente.php';
        $clientes = array();
        
        for ($i=0;$i<10;$i++){
            $clientes[$i] = new Cliente();
        }
        
        $clientes[0]->nome = "Marcos";
        $clientes[0]->endereco = "rua francisco 612";

        $clientes[1]->nome = "Paulo";
        $clientes[1]->endereco = "rua francisco 900";

        $clientes[2]->nome = "Sousa";
        $clientes[2]->endereco = "rua francisco 1000";

        $clientes[3]->nome = "Santos";
        $clientes[3]->endereco = "rua francisco 12";

        $clientes[4]->nome = "Maria";
        $clientes[4]->endereco = "rua francisco 20";

        $clientes[5]->nome = "Joice";
        $clientes[5]->endereco = "rua francisco 50";

        $clientes[6]->nome = "Renata";
        $clientes[6]->endereco = "rua francisco 70";

        $clientes[7]->nome = "Lais";
        $clientes[7]->endereco = "rua francisco 95";

        $clientes[8]->nome = "Miguel";
        $clientes[8]->endereco = "rua francisco 126";

        $clientes[9]->nome = "Gercino";
        $clientes[9]->endereco = "rua francisco 258";

        foreach ($clientes as $cliente) {
            $cliente->cpf = rand(31111111111, 99999999999);
            $cliente->telefone = rand(900000000, 999999999);
        }
        
        include_once 'View/Listagem.phtml';
    }
}
