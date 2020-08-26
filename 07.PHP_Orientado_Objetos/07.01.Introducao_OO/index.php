<?php
//Cliando uma classe, atributos e métodos.
    class Pessoa{
        private $nome = "weberty";
        private $idade = "22";
        private $peso = "70kg";

//O This pode ser usado para chamar uma função quando privada
        public function andar(){
            $this->comer();
            echo "Andando";
        }

        private function comer(){
            echo "Comendo";
        }

    }

//Dessa forma podemos acessar a classe
    $pessoa = new Pessoa;
    
    $pessoa->andar();
    
?>