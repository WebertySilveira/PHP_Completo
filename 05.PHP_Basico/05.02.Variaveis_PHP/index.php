<?php
        /*Interação com servidor*/

            echo $_SERVER['SERVER_NAME'], '<br>';

            echo $_SERVER['DOCUMENT_ROOT'], '<br>';

        
        /*Lista de Comandos*/
        
            echo '<pre>';
            print_r($_SERVER);
            echo '</pre>';

?>