<?php

function aeg() {
    date_default_timezone_set("Europe/Tallinn");
    $time = date("H:i:s");
    echo $time."<br>";
    if ($time < "18:45"){
        echo "Peab veel kannatama<br>";
    } else { echo "Kojuminek!"; }
}




?>