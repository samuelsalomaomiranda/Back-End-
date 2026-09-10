<?php

$musicas = ["K.O" , "D4C" , "Bohemian Rhasphoby" , "Wihout me" , "Carlos do Gancho" , "Adeus Carlos do Gancho"];
$soma = 0;
    foreach($musicas as $quantidade){
        echo "$quantidade <br>";
        $soma ++;
    }
    $quantidade = count($musicas);
    echo "<br> Total: $quantidade";

?>
