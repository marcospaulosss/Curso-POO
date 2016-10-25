<?php
namespace MRC\Model;

/**
 * Description of BDClientes
 *
 * @author marcos santos
 */
class BDClientes {
    public static $conexao;
    
    public static function getConexao() {
        if(!isset(self::$conexao)){
            try {
                self::$conexao = new \PDO("mysql:host=localhost;dbname=Clientes", "root", "");
            } catch (\PDOException $e) {
                echo $e->getMessage();
            }
        }
        return self::$conexao;
    }
}
