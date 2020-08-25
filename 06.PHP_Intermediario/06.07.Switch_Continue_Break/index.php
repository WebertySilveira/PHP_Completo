<?php

//Estrutura de Condição Switch
    $nome = 'Guilherm';

    switch ($nome) {
        case 'Guilherme':
            echo "Variável = Guilherme";
            break;
        
        default:
            echo "Nome não reconhecido <br>";
            break;
    }


//Break para parar um looping
    for ($i = 0; $i < 10; $i++){ 
        echo $i;
        if ($i == 5) {
            break;
        }
    }


//Continue pula para fora e continua o código
    for ($i = 0; $i < 10; $i++){ 
        echo $i;
        if ($i == 5) {
            continue
            break;
        }
    }
    
    
?>