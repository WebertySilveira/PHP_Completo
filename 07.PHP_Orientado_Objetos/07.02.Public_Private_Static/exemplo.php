<?php
//Publico pode ser chama em qualquer lugar e private só dentro da class

    class Exemplo{
        private $var1;
        public $var2;

//Valores não podem ser alterados por instância simples
        public static $var3 = 'Static';

        public function metodo1(){}

        private function metodo2(){}

        public static function metodo3(){
            echo 'Static Method';
        }














        private $n1;
        private $n2;

        public function setN1($n1){
            $this->n1 = $n1;
        }

        public function getN1(){
            return $this->n1;
        }
    }



?>