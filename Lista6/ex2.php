<?php

$opcao = 3;
$saldo = 350;
switch ($opcao){
    case 1: 
        echo "Seu saldo é: $saldo.";
        break;
    case 2: 
        echo "Você escolheu: Sacar dinheiro.";
        break;
    case 3:
        echo "Você escolheu: Depositar dinheiro.";
        break;
    case 4:
        echo "Você escolheu: Consultar extrato";
        break;
    default: 
        echo "Opção invalida.";
}

?>