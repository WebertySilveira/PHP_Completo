<?php
    $arr = array('chave1'=>'Wesley', 'Nando', 'Thiago', 'Felipe');


    foreach ($arr as $key => $value) {
        echo $key. '<br>';
        echo $value. '<br>';
        echo '<hr>';
    }


    
    //O For não reconhece a chave
    $arr2 = array('Wesley', 'Nando', 'Thiago', 'Felipe');


    $total = count($arr2);
    for($i = 0; $i < $total; $i++){
        echo $arr2[$i]. '<br>';
    }


?>