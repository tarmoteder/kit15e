<?php

function loendur() {
    
    $file_name = "loendur.txt";
    if (!(file_exists($file_name))){
    $file = fopen($file_name,"w") or die("Ei saanud avad");
    $tekst = 1;
    fwrite($file, $tekst);
    fclose($file);
    echo "Õnnitleme, olete esimene õnnelik külastaja";
    } else {
        $file = fopen($file_name,"r+") or die("Ei saanud avad");
        $loendur = file_get_contents($file_name)+1;
        fwrite($file,$loendur);
        fclose($file);
        echo "Seda lehte on vaadatud ".$loendur." korda<br>";
    }
}


?>