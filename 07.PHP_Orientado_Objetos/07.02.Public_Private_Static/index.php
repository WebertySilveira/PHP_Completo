<?php

    include 'exemplo.php';

    $exemplo = new Exemplo();
//Não pode acessar a primeira por ser privada
    //$exemplo->var1 = 'Olá';
    $exemplo->var2 = 'Public';
    echo $exemplo->var2;

echo "<br>";

    $exemplo2 = new Exemplo();
    $exemplo2->var2 = 'Public2';
    echo $exemplo2->var2;


echo "<br>";


    echo Exemplo::$var3;


echo "<br>";


    echo Exemplo::metodo3();




    echo "<br>";







    $n = new Exemplo();
    $n->setN1("Weberty");
    echo $n->getN1();

?>