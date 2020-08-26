<?php

    $pdo = new PDO('mysql:host=localhost;dbname=08_pdo2','root', '');

//O Inner Join só funciona quando os dados das duas tabelas batem
//O LEFT funciona mesmo quando apenas um lado da tabela tem informações(O Right é o contrário)
    $sql = $pdo->prepare("SELECT * FROM `clientes` LEFT JOIN cargos ON `clientes`.`cargo` = `cargos`.`id`");

    $sql->execute();
    $clientes = $sql->fetchAll();

    foreach ($clientes as $key => $value) {
        echo $value['nome'] . '<br>';
        echo $value['nome_cargo'] . '<br>';
    }

?>