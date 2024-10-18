<?php
    include_once '../model/Ingrediente.php'; 
    include_once '../model/database/IngredienteDAO.php';
    
    
    $acao = '';
    $objeto = new Ingrediente();
    $dao = new IngredienteDAO();
    switch ($acao){
        case 'inserir':
            $objeto->descricao = 'Canela';
            if($dao->insert($objeto)){
                echo 'Ingrediente inserido.';
                echo '<hr/>';
            }
            break;
        case 'alterar':
            $objeto->id_ingredientes = 5;
            $objeto->descricao = 'Todd';
            if($dao->update($objeto)){
                echo 'Ingrediente alterado';
                echo '<hr/>';
            }
        case 'deletar':
            if($dao->delete(5)){
                echo 'Ingrediente deletado';
                echo '<hr/>';
            }
            break;
        default:
            break;
    }
    $lista_ingredientes = $dao->list();
    echo 'Lista de ingredientes:<br/><br/>';
    foreach ($lista_ingredientes as $value){
        echo "$value->id_ingredientes: $value->descricao<br/>";
    }
    
    
    
?>

