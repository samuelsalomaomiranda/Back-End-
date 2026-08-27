<?php

$peso = 150;
$altura = 2.04;
$result = $peso/($altura * $altura);


if($result >= 19 && $result <= 24.9){
    echo "Peso ideal";
}
elseif($result >= 25 && $result <= 29.9 ){
    echo "Sobre peso";
}
elseif($result >= 30 && $result <= 34.9 ){
    echo "Obesidade grau I";
}
elseif($result >= 35 && $result <= 39.9 ){
    echo "Obesidade grau II";
}
elseif($result >= 40 ){
    echo "Obesidade grau III";
}

?>