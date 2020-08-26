<?php
    function myAutoLoad($class){
//Trocando as barras invertidas por uma normal, para evitar conflitos nos servidores Linux
        $class = str_replace('\\', '/', $class);
//echo $class;
        if (file_exists('classes/'.$class.'.php')) {
            include('classes/'.$class.'.php');
        }
    }

    spl_autoload_register('myAutoLoad');
?>