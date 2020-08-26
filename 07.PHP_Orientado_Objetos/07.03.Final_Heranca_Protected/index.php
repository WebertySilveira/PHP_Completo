<?php

//Final impede a classe de ser herdada
    //final
            class Pai{
        public function printHello(){
            echo 'Hello';
        }


        /*
        protected function funçãoTeste(){
                PROTECTED SÓ PODER SER USADA PELAS CLASSES PAI E FILHA
        }
        */
    }

    final class Filha extends Pai{
        public function printBye(){
            echo 'Bye';
        }
        
//Sobreescrevendo a função pai
        public function printHello(){
            parent::printHello();
            echo 'Nova função';
        }
    }

    $pai = new Pai;
    $pai->printHello();
echo "<br>";
    $filha = new Filha;
    $filha->printBye();
echo "<br>";
//Após ser extendida, a classe filha pode usar os métodos da classe pai
    $filha->printHello();
?>