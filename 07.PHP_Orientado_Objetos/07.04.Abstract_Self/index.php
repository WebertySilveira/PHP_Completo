<?php
//Serve apenas para ser chamada
    abstract class Teste{

        public function func1(){
            echo "Chamando f1";
        }

        abstract function func2();

    }

    class Principal extends teste {
//Métodos abstratos precisam ser criados também na principal
        public function func2(){
            echo "Chamando f2";
        }


        public static function estatico(){
            echo 'Estático';
        }

//Self serve para chamar um método estático dessa classe, seria igual ao usar o Principal
        public function funcao(){
            self::estatico();
        }
    }

    $principal = new Principal;
    $principal->func1();
echo '<br>';
    $principal->func2();
echo '<br>';
    $principal->funcao();
echo '<br>';

    Principal::estatico();

?>