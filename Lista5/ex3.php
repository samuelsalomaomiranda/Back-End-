<?php

$n1 = 8;
$n2 = 10;
$n3 = 9;

$media = ($n1 + $n2 + $n3) / 3;

if($media >= 7){
    echo "Aprovado!";
}

elseif($media >= 5 && $media < 7){
    echo "Tem direito a recuperação!";
}
else{
    echo"Reprovado!";
}

?>