<?php
//Conectando ao banco
    $pdo = new PDO('mysql:host=localhost;dbname=08_pdo', 'root', '');

//Fazendo um update com base em um id pré definido
    $id = 3;
    $sql = $pdo->prepare("UPDATE `CLIENTES` SET NOME='MARIO', SOBRENOME = 'DA SILVA' WHERE ID = $id");

    if ($sql->execute()) {
        echo 'Atualizado';
    }
?>