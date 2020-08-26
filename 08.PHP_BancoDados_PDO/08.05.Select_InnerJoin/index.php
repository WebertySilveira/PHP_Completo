<?php

//Conectando ao banco
    $pdo = new PDO('mysql:host=localhost;dbname=08_pdo', 'root', '');

//Selecionando todas as colunas
                                              //Where categoria_id = 2 -> pegaria apenas os esportes
    $sql = $pdo->prepare("SELECT * FROM posts");
    $sql->execute();

//Passa todas as informações pela variavel e printa tudo
    $info = $sql->fetchAll();

/*
    echo '<pre>';
    print_r($info);
    echo '</pre>';
*/

foreach ($info as $key => $value) {
    echo 'Titulo: ' .$value['titulo']. '<br>';
    echo 'Conteúdo: ' .$value['conteudo']. '<br>';
    echo '<br>';
}

echo '<hr>';















//Pegando as categorias



    $sql = $pdo->prepare("SELECT * FROM categorias");
    $sql->execute();

    $info = $sql->fetchAll();


foreach ($info as $key => $value) {
    echo 'Id: ' .$value['id']. '<br>';
    echo 'Nome: ' .$value['nome']. '<br>';
    echo '<br>';
}

echo '<hr>';


















//Fazendo um Inner Join 


$sql = $pdo->prepare("SELECT * FROM `posts` INNER JOIN `categorias` ON `posts`.`categoria_id` = `categorias`.`id` ");
$sql->execute();

$info = $sql->fetchAll();

echo '<pre>';
print_r($info);
echo '</pre>';



?>