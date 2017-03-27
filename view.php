<?php

function back_home(){
    echo '<li><a href="index.php">Tagasi koju</a></li>';
}

function menu(){
    
    $menu = "functions, php, array, file, link1, link2, link3";
    $menu = explode(",",$menu);
    

    for ($i = 0; $i < count($menu); $i++){
        echo '<li><a href="'.$menu[$i].'.php">'.$menu[$i].'</a></li>';
    }
    
}
    
    
    
?>