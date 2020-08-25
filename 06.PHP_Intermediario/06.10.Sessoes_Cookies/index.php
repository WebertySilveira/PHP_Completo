<?php
//Criando Session
    session_start();
    $_SESSION['nome'] = 'Weberty';
    $_SESSION['idade'] = 22;
    




//Criando Cookies com duração de 24horas
    setcookie('nome', 'Isaque', time() + (60*60*24), '/');


//Para 'destruir' basta colocar o valor negativo no lugar de positivo
?>