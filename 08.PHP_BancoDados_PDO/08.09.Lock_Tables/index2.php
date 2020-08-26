<?php

    $pdo = new PDO('mysql:host=localhost;dbname=08_pdo2','root', '');

    $sql = $pdo->prepare("SELECT * FROM `clientes`");
    $sql->execute();

    $usuarios = $sql->fetchAll();
    foreach ($usuarios as $key => $value) {
        echo $value['nome']. '<br>';
    }
?>