<?php 

class Conexao {

    public static $istance;

    public static function get_instance(){
        if(!isset(self::$istance)) {
            self::$istance = new PDO ("mysql:host=localhost;dbname=sistema_login;", "root", "",
            array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
            self::$istance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }

        return self::$istance;
    }
}

?>