<?php

    namespace Sessao1;
    use Sessao2\Class2;


    class Class1 {
        function __construct(){
            new \Sessao2\Class2();
            echo 'Classe1';
        }
    }
?>