<?php
    $pdo = new PDO('mysql:host=localhost;dbname=08_pdo2','root', '');

//O like serve para encontrar um dado que contenho pelo menos aquela informação
//O % serve para dizer que pode vir qualquer coisa antes, ou depois
    $sql = $pdo->prepare("SELECT * FROM CLIENTES WHERE nome LIKE '%l%'");
    $sql->execute();

    $clientes = $sql->fetchAll();

    foreach ($clientes as $key => $value) {
        echo $value['nome'];
    }
?>