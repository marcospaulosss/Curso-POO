<?php
define('CLASS_DIR', 'src/');
set_include_path(get_include_path().PATH_SEPARATOR.CLASS_DIR);
spl_autoload_register();

$acao = isset($_REQUEST['acao']) ? $_REQUEST['acao'] : NULL;

$controller = new MRC\Controller\Controller();
        
switch ($acao) {
    case NULL:
        $controller->ListarClientes();
    break;
    case "ActionIncluir":
        //print_r($_REQUEST);
        $controller->ActionIncluir($_REQUEST);
    break;

    default:
        echo json_encode("Requisição não encontrada");
    break;
}






