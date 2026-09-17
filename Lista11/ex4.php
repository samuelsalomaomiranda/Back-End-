<?php

$n1 = $_POST ['n1'];
$n2 = $_POST ['n2'];

$metrocentimetro = $n1 / 100;
$metromilimetro = $n2 / 1000;

echo $n1 , "metros para centimetros" , $metrocentimetro ;

echo "<br>";

echo $n2 , "metros para milimetros" , $metromilimetro ;

?>