<?php

    $pdo = new PDO('mysql:host=localhost;dbname=08_pdo2','root', '');

//Faz a tabela esperar 10 segundos enquanto armazena os dados, até que outra possa armazenar também
//Evita conflito de dados simultâneos
    $pdo->exec("LOCK TABLES `clientes` WRITE");
    sleep(10);
?>