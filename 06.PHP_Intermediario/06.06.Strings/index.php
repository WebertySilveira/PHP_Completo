<?php

    $conteudo = 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.';


    //Seleciona letras de X a Y em uma String
    echo substr($conteudo, 0, 20), '<br>';
    

    //Separa em índices com base em um caracter dado
    $nome = 'Weberty Silveira de Sousa';

    $nomes = explode(' ',$nome);
//print_r($nomes)


    //Transforma o array em uma String
    $nomes = implode(' ',$nomes);
    print($nomes);



    $tags = '<h1>Teste</h1> <br> <pre>Outro Teste</pre>';
    echo $tags;

    //Retira as tags de um texto
    echo strip_tags($tags), '<br>';

    //Mostra as tags
    echo htmlentities($tags);
?>