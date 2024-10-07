<?php 
require_once('database/conn.php');
$tarefas =[];
$sql = $pdo -> query("SELECT * FROM lista_tarefas");
if($sql -> rowCount() > 0){
    $tarefas = $sql -> fetchAll(PDO::FETCH_ASSOC);
    var_dump($tarefas);
}
?><!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="src/style/style.css">
    <link rel="stylesheet" href="src/assets/fonts/fonte.css">

    <title>Lista de Tarefas</title>
</head>

<body>
    <div id="lista">
        <h1>Lista de Tarefas</h1>
        <form action="" class="lista_form">
            <input type="text" name="descricao" placeholder="Digite a tarefa aqui" required>
            <button type="submit" class="form_button"><i class="fa-solid fa-plus"></i></button>
        </form>
        <div id="tarefas">
            <div class="tarefa">
                <input type="checkbox" name="progresso" class="progresso">
                
                <p class="descricao_tarefa">
                    Tarefa 1
                </p>
                <div class="acoes_tarefa">
                    <a class="acao_button editar_button">
                        <i class="fa-regular fa-edit"></i>
                    </a>
                    
                    <a class="acao_button deletar_button">
                        <i class="fa-regular fa-trash-can"></i>
                    </a>
                </div>
                <form action="" class="lista_form editar_tarefa hidden">
                    <input type="text" name="descricao" placeholder="Edite sua tarefa aqui">
                    <button type="submit" class="form_button confirma_button">
                        <i class="fa-solid fa-check"></i>
                    </button>
                </form>
            </div>
        </div>
    </div>
    <script src='src/javascript/script.js'></script>
</body>

</html>