<?php

$name = $_POST ['name'];
$age = $_POST ['age'];
$hrs = $_POST ['hrs'];

$hrano = $hrs * 365;
$diasano = $hrano / 24;

if($age >= 18){
    echo "Desconecte-se para reconectar!";
}
else{
    echo "Curta mais sua adolecência!";
}

echo $name , "<br>";
echo "Você usa cerca de " , $hrano , "hrs ao ano. ", "<br>";
echo "Isso da cerca de " , $diasano , " dias. ", "<br>";





?>