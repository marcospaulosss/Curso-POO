<?php
require_once './Cliente.php';

$clientes = array();
$clientes[] = new Cliente();

$clientes[0]->nome = "Marcos";
$clientes[0]->cpf = "33475826869";
$clientes[0]->endereco = "rua francisco 612";
$clientes[0]->telefone = "9984480636";

print_r($clientes[0]);

