<?php
    $nome = "Weberty";
    if ($nome == 'Weberty') {
        echo 'Verdadeiro <br>';
    }
//Equivalente a
    if ($nome == 'Weberty'):
        echo 'Verdadeiro <br>';
    endif;


    $cont = 0;
    while ($cont < 10):
        $cont++;
        echo $cont;
    endwhile;



//Existe esse formato para quase todas as estruturas
?>