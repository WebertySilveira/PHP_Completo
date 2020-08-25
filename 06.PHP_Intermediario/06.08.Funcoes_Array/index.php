<?php
//Unir arrays, se forem iguais retorna apenas o último
    $array1 = array("chave1"=>"valor1","chave2"=>"valor2");
    $array2 = array("chave3"=>"valor3","chave4"=>"valor4");
    $result = array_merge($array1, $array2);
    print_r($result);

    echo '<br>';
    echo '<br>';



//Returna valores com a mesma chave
    $array1 = array("chave1"=>"valor1","chave2"=>"valor2");
    $array2 = array("chave1"=>"Outro Valor","chave3"=>"valor3","chave4"=>"valor4");
    print_r(array_intersect_key($array1, $array2));

    echo '<br>';
    echo '<br>';



//Aplicar uma função em todos os valores do Array
    $arr = ['<p>NOME</p>', 'joao', '<h1>fabricio</h1>'];
    print_r(array_map('strip_tags', $arr)); 
    
?>