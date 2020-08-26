<?php

    include 'interface1.php';

    class Teste implements Interface1{

        public function printOnScreen($parr){
            echo 'olá';
        }
        
    }
    $teste = new Teste;
    $teste->printOnScreen('Olá');
?>