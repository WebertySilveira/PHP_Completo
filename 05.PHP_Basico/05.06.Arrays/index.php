<?php
    /*Como armazenar várias informações*/

/*RUIM*/
echo 'DIVERSAS VARIÁVEIS: <br>';

    $nome1 = 'João';
    $nome2 = 'Pedro';
    $nome3 = 'Mateus';

    echo $nome1. '<br>';
    echo $nome2. '<br>';
    echo $nome3. '<br><br>';



/*PODE SER*/
echo 'ARRAY: <br>';

    $nome = array('João', 'Pedro', 'Mateus');
    
    echo $nome[0]. '<br>';
    echo $nome[1]. '<br>';
    echo $nome[2]. '<br><br>';



/*MELHOR NÃO*/
echo 'Ele entende a posição com base na ordem, não é uma boa prática. <br>';
    $nomes[] = "João";
    $nomes[] = "Felipe";

    echo $nomes[0]. '<br>';
    echo $nomes[1]. '<br><br>';



/*IDEAL*/
echo 'Melhor Forma: <br>';
    $variaveis = ['Rafael', 'Isaque', 'Jacó'];
    echo $variaveis[1];




    
    echo '<br><br> EXEMPLOS <br>';

    $cliente['nome'] = 'Weberty';
    $cliente['idade'] = '22';
    $cliente['cidade'] = 'Pacatuba';

    echo $cliente['nome'], '<br>';
    echo $cliente['idade'], '<br>';
    echo $cliente['cidade'], '<br>';
?>