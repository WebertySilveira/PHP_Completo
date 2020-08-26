<?php

    $json = '{
        "a": 1,
        "b": 2,
        "c": 3,
        "d": 4,
        "e": 5
    }';



    var_dump(json_decode($json, true));

    
    echo '<br>';
    echo '<br>';
    echo '<br>';

    $obj = json_decode($json);
    $arr = json_decode($json, true);

    echo $obj->a.'<br>';
    echo $arr['a'].'<br>';



echo '<br>';
echo '<br>';
echo '<br>';




    $arr = [
        'nome' => 'Weberty',
        'idade' => 22,
        'sexo' => 'M'
    ];

    $json = json_encode($arr);
    echo $json;


?>