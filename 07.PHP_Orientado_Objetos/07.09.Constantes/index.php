<?php
    class minhaClasse{
        const VALOR = 300;
        
        public function __construct(){
            //Chamando constante
            echo self::VALOR;
        }
    }

//Chamando dentro e fora da classe
    new minhaClasse;
echo '<br>';
    echo minhaClasse::VALOR;
?>