<?php
//Conectando ao banco
    $pdo = new PDO('mysql:host=localhost;dbname=08_pdo', 'root', '');

//Fazendo um delete com base em um id pré definido
    $id = 16;
    $sql = $pdo->prepare("DELETE FROM `CLIENTES` WHERE ID = ?");


//Use sempre o array para melhorar a segurança
    if ($sql->execute(array($id))) {
        echo 'Deletado';
    }
?>