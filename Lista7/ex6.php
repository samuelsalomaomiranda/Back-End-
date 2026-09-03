<?php

function calcularMedia($nota1, $nota2, $nota3)

{
    return ($nota1 + $nota2 + $nota3)/3 ;
}

echo calcularMedia(8,6,9), "<br>";
echo calcularMedia(5,9,3), "<br>";
echo calcularMedia(6,9,9), "<br>";
echo calcularMedia(10,9,8), "<br>";
echo calcularMedia(7,3,5),"<br>";
echo calcularMedia(9,5,6),"<br>";

?>