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
    public function update(Ingrediente $obj) {
        $query = "UPDATE ingredientes SET descricao = :p_descricao WHERE id_ingredientes = :p_id_ingredientes";
        $connect = DB::getConnection()->prepare($query);
        $connect->execute(array(':p_descricao'=>$obj->descricao,':p_id_ingredientes'=>$obj->id_ingredientes));
        return $connect->rowCount()>0;
    }
    public function delete($id) {
        $query = "DELETE FROM ingredientes WHERE id_ingredientes = :p_id";
        $connect = DB::getConnection()->prepare($query);
        $connect->execute(array(':p_id'=>$id));
        return $connect->rowCount()>0;
    }
}
