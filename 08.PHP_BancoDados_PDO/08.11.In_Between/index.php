<?php
    $pdo = new PDO('mysql:host=localhost;dbname=08_pdo2','root', '');

//Seleciona os ids correspondentes
    $sql = $pdo->prepare("SELECT * FROM CLIENTES WHERE id IN(1, 2, 3, 4)");
    $sql->execute();

    $clientes = $sql->fetchAll();

    foreach ($clientes as $key => $value) {
        echo $value['nome'];
    }




echo '<hr>';




    $pdo = new PDO('mysql:host=localhost;dbname=08_pdo','root', '');

    //Seleciona os dados que estão nesse intervalo de registro
        $sql = $pdo->prepare("SELECT * FROM CLIENTES WHERE momento_registro BETWEEN '2020-08-25' and '2020-09-31'");
        $sql->execute();
    
        $clientes = $sql->fetchAll();
    
        foreach ($clientes as $key => $value) {
            echo $value['nome'];
        }





?>