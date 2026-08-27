<?php

$senha = "jp123456";
$confirmar_senha = "jp123456";

if($senha != $confirmar_senha){//o simbulo != significa diferente e pode ser escrito <>
    echo "senhas não batem";
}
else{
    echo "acesso liberado";
}
?>