<?php
$n1 = $_POST ['n1'];

$ante = $n1 - 1;
$suce = $n1 + 1;

echo "(", $n1 ,") " ,"<br>", "antecessor:" , $ante , "<br>" , " sucessor:" , $suce ;

?>