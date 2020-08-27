<?php

    require 'vendor/autoload.php';

    use Carbon\Carbon;
    printf("Now: %s", Carbon::now());

echo '<br>';

    $tomorrow = Carbon::now()->addDay();
    echo $tomorrow;

?>