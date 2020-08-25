<?php
    //Array Simples

    $arr = ['Anderson', 'Diego'];
    $arr = array('Anderson', 'chave1'=>'Diego');

    $arr[0] = 'Anderson';
    $arr[] = 'Diego';




    //Array Multidimensionais

    $arr2 = array(
        array('Anderson', 'Diego'),
        array(23,45)
    );

//Podemos entender como [Linha][Item da linha]
    echo $arr2[0][0];
    echo $arr2[1][0].'<br>';
    echo $arr2[0][1];
    echo $arr2[1][1];

?>