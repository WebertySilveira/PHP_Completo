<?php
//Iniciando session e recuperando os valores do index.php
    session_start();
    if (isset($_SESSION['nome'])) {
        echo $_SESSION['nome'];
    }
echo "<br>";
    if (isset($_SESSION['idade'])) {
        echo $_SESSION['idade'];
    }

//Apagando Session
    unset($_SESSION['nome']);


//Apagando tudo
    session_destroy();

    echo "<br>";

    if (isset($_COOKIE['nome'])) {
        echo $_COOKIE['nome'];
    }
?>