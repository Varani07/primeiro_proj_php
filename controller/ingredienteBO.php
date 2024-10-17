<?php
    include_once '../model/Ingrediente.php'; 
    include_once '../model/database/IngredienteDAO.php';
    
    $dao = new IngredienteDAO();
    $lista_ingredientes = $dao->list();
    
    echo 'Lista de ingredientes:<br/><br/>';
    foreach ($lista_ingredientes as $value){
        echo "$value->id_ingredientes: $value->descricao<br/>";
    }
?>

