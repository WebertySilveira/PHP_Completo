<?php

//Cria pasta no diretório
    //mkdir('pasta');

//Deleta uma pasta
    //rmdir('pasta');


//Verifica se a pasta é valida
    if (is_dir('pasta')) {
        echo "Pasta Válida";
    }else{
        echo "Não existe, ou não é uma pasta";
    }




    if ($handle = opendir('pasta')) {
        while ($file = readdir($handle)) {
            echo "$file\n".'<br>';
        }
    }

    closedir($handle);
    
?>