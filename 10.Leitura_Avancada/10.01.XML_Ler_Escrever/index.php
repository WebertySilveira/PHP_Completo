<?php

    $xml = simplexml_load_file('arquivo.xml');

//Retorna como objeto
    echo $xml->channel->item->title;
?>