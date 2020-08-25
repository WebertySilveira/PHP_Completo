<?php
//Manipulando datas
date_default_timezone_set('America/Fortaleza');

    $data = date('d/m/Y');
    $hora = date('H:i:s');

    echo $data.'<br>';
    echo $hora.'<br>';
    


//Criando modelo de página com include
    $titulo = 'Titulo do site';
    
    include('header.php');
?>

    <h1>Conteudo Home</h1> 

<?php
    include('footer.php');
?>