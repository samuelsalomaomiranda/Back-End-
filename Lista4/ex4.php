<?php

$email = "samuel@gmail.com";
$senha = "1234";
$status = "desativado";

echo "Bem vindo ao FACEBOOK <br>";

if($email == "samuel@gmail.com" && $senha == "123" && $status == "ativa"){
    echo "Acesso Liberado <br>";
    header("Location: https://www.facebook.com");
}

else{
    echo "Email ou senha invalidado!";
}

?>