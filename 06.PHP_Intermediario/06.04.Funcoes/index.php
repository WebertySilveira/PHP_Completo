<?php

//Sintaxe de uma função que pode tratar informações passadas nos parâmetros
    function soma($a, $b){
        return $a + $b;
    }
    
//Recebendo o tratamento e manipulando para conseguir resultados
    $result = soma(2,2);
    $result += 2;
    echo $result;

    
?>