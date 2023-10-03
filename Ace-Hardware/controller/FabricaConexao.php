<?php   

define('SERVIDOR', 'mysql:host-localhost; dbname=aceHardware; charset=utf8'); 
define('USER', 'root'); 
define("PASSWORD", "ROOT"); 
class FabricaConexao{
    private static $con;
    
    public static function Conexao(){

        try {
        if (!isset(self::$con)):
        self:: $con = new PDO(SERVIDOR, USER, PASSWORD);
        self:: $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION); endif;
        return self::$con;
        } 
        catch (PDOException $e) {
            echo "Falha de CONEXAO".$e->getMessage();
            die();
        }
    }    
}
?>