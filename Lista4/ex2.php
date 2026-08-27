<?php  

$ingresso = "não";
$cortesia = "sim";

echo " Bem vindo ao Camarote da FAPI [🐎]<br> ";

if($ingresso >= "sim" || $cortesia == "sim"){
    echo "Pode entrar e curtir a night";
}
else{
    echo "Sem ingresso ou cortesia!";
}

?>