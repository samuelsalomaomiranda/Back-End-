<?php

    $senhacorreta = "2026";
    $senha = "2021";
    $tentativas = 0 ;

    while ($tentativas < 3) {
        $tentativas++;

    if ($senha == $senhacorreta) {
        echo " Senha correta! Acesso permetido.";
        break;
    }
    else {
        echo "Senha incorrenta!<br>";
    }
    }

?>