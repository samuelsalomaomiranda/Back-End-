<?php

$alunos = ["Lucas" , "Kayo" , "Jose" , "Heloisa"];
$soma = 0;
    foreach($alunos as $posicao){
        echo "$posicao <br>";
        $soma ++;
    }
    $posicao = count($alunos);
    echo "<br> Total: $posicao";

?>