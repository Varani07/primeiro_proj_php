<?php


class Ingrediente {
    private $id_ingredientes;
    private $descricao;
    
    public function __construct() {
        
    }
    public function __get($name) {
        return $this->$name;
    }
    public function __set($name, $value) {
        $this->$name = $value;
    }
}
