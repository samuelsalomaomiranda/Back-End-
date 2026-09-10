<?php 

$seguidores = ["Jubilei9292" , "Marcinho67" , "TobeyMaguire"];
$sum = 0;

foreach ($seguidores as $pessoas){
    echo "$pessoas <br>";
    $sum = $sum + 1;
}

echo "A primeira posição da lista é: $seguidores[0]";
?>