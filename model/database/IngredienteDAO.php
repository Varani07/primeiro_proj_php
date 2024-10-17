<?php

require_once 'DB.php';

class IngredienteDAO {
    public function list($id = null) {
        $where = ($id ? " WHERE id_ingredientes = $id":'');
        $query = "SELECT * FROM ingredientes$where";
        $connect = DB::getConnection()->query($query);
        $resultado = $connect->fetchAll();
        return $resultado;
    }
    public function insert(Ingrediente $obj) {
        // SE USAR ARRAY ENVIAR PARAMETROS COMO VALUES (?, ?)
        $query = "INSERT INTO ingredientes (id_ingredientes, descricao) VALUES (NULL, :descricao)";
        $connect = DB::getConnection()->prepare($query);
        $connect->execute(array(':descricao'=>$obj->descricao));
        return $connect->rowCount()>0;
    }
}
