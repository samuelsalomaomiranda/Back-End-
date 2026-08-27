<?php  

$idade = 19;
$ingresso = "sim";

echo " Bem vindo ao CineAmor <br> ";

if($idade >= 18 && $ingresso == "sim"){
    echo "Pode entrar e assistir o filme";
}
else{
    echo "Idade não permitida ou sem ingresso!";
}

?>