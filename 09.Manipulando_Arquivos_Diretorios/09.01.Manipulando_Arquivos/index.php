<?php

//Testa existência de um arquivo
    if (file_exists('file.txt')) {
        echo 'Arquivo existe!';
    }else{
//Cria um arquivo se não existir
//\r\n -> quebra de linha
        $content = "Conteúdo criado pelo php \r\nUma nova Linha \r\nOutra linha";
        file_put_contents('file.txt', $content);
    }

//nl2br -> Gera um <br>, onde tem o \r\n
    $content = file_get_contents('file.txt');
    echo nl2br($content);
    


/* PEGANDO UM SITE EXTERNO COMPLETO PELO GET
    $getSite = file_get_contents('https://google.com');
    echo $getSite;
*/






//Criando 20 arquivos automaticamente
    for ($i=0; $i < 20; $i++) { 
        $conteudo = 'Conteúdo do arquivo'.$i;
        file_put_contents('file'.$i.'.txt', $conteudo);
    }

//Excluindo os arquivos Criados
    for ($i=0; $i < 20; $i++) { 
        unlink('file'.$i.'.txt');
    }
?>