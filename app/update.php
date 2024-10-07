<?php 
require_once('../database/conn.php');

$descricao = filter_input(INPUT_POST, 'descricao');$id = filter_input(INPUT_POST, 'id');

if($descricao && $id){
    $sql = $pdo -> prepare("UPDATE lista_tarefas SET descricao = :descricao WHERE id = :id");       
    $sql -> bindValue(':descricao', $descricao);
    $sql -> bindValue(':id', $id);
    $sql -> execute();
    
    header('Location: ../index.php');
    exit;
} else {
    header('Location: ../index.php');
    exit;
}
?>