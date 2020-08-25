<?php
/*Operadores lógicos Matemáticos*/
    $n1 = 10;
    $n2 = 20;

    if($n1 < $n2){
        echo 'Teste 01 <br>';
    }

    if($n1 <= $n2){
        echo 'Teste 02 <br>';
    }

    if($n1 > $n2){
        echo 'Teste 03 <br>';
    }

    if($n1 >= $n2){
        echo 'Teste 04 <br><br>';
    }





/*Opereradores Lógicos*/
    $var1 = 'var1';
    $var2 = 'var2';
    $var3 = 'var1';


    if(($var1 == $var2) && ($var2 == $var3)){
        echo "var 01 <br>";
    } 
    
    if(($var1 == $var3) || ($var2 == $var3)){
        echo "var 02 <br>";
    } 
    

?>