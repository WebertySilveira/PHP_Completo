<?php

/*Definindo uma constante*/
    define('DOMINIO', 'http://meusite.com');
    echo DOMINIO;

/*Caso tente definir novamente, ocorre um problema pois o valor é imutável*/
 
    /*            define('DOMINIO', 'MEUSITE.COM.BR');            */
    
?>