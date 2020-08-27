
<form method = "post">
    <input type = "text" name = "adress" />
    <input type = "submit" name = "acao" value = "enviar" />
</form>



<?php
//Precisa ter uma chave de acesso para a API


    if (isset($_POST['acao'])) {

        $url = urlencode($_POST['adress']);
        $str = file_get_contents('https://maps.googleapis.com/maps/api/geocode/json?address='.$url.'&sensor=false');
        
        $endereco = json_decode($str);

        print_r($endereco);
    }

?>