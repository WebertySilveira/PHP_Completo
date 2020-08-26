<?php

        $pdo = new PDO('mysql:host=localhost;dbname=08_pdo2','root', '');

        //Agrupar por cargos (um de cada)
        $sql = $pdo->prepare("SELECT * FROM `clientes` GROUP BY `cargo`");
        $sql->execute();
        $clientes = $sql->fetchAll();

        foreach ($clientes as $key => $value) {
            echo $value['nome'] . '<br>';
        }


echo "<hr>";


        //Ordenar por (Do 2 para o 1)
        $sql = $pdo->prepare("SELECT * FROM `clientes` Order BY `cargo` DESC");
        $sql->execute();
        $clientes = $sql->fetchAll();
    
        foreach ($clientes as $key => $value) {
            echo $value['nome'] . '<br>';
        }


echo "<hr>";


        //Ordenar por (Do 1 até o 3)
        $sql = $pdo->prepare("SELECT * FROM `clientes` Order BY `nome` ASC LIMIT 1,3");
        $sql->execute();
        $clientes = $sql->fetchAll();
    
        foreach ($clientes as $key => $value) {
            echo $value['nome'] . '<br>';
        }
    

?>