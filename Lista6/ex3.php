<?php
    $opcao = 2;
    echo "Bem vindo a ALARES INTERNET <br>";
    echo "1 - Suporte técnico <br>";
    echo "2 - Segunda via da fatura <br>";
    echo "3 - Faltar com atendimento <br>";
    echo "4 - Sair <br><br>";

    switch ($opcao) {
    case 1: 
        echo "Você escolheu: Suporte técnico";
        break;
    case 2:
        echo "Você escolheu: Segunda via da fatura";
        break;
    case 3:
        echo "Você será encaminhado para um atendimento.";
        break;
    case 4:
        echo "Obrigado por utilizar a Alares!";
        break;
    default:
        echo  "Opção invalida.";


    }




?>