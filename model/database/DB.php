<?php


abstract class DB {
    private static $instancia;
    
    public static function getConnection() {
        $server = 'localhost';
        $user = 'root';
        $database = 'doceria';
        $password = '';
        
        if(empty(self::$instancia)){
            try {
                self::$instancia = new PDO("mysql:host=$server;dbname=$database;", $user, $password,[pdo::ATTR_DEFAULT_FETCH_MODE=>pdo::FETCH_OBJ]);
            } catch (PDOException $exc) {
                dir('Erro de conexão ='.$exc->getMessage());
            }
        }
        return self::$instancia;
    }
    protected function __construct() {
        
    }
    private function __clone() {
        
    }
}
