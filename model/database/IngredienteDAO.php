<?php

require_once 'DB.php';

class IngredienteDAO {
    public function list($id = null) {
        $where = ($id ? " WHERE id_ingredientes = $id":'');
        $query = "SELECT * FROM ingredientes$where";
        $conect = DB::getConnection()->query($query);
        $resultado = $conect->fetchAll();
        return $resultado;
    }
}
