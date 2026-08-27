<?php

  $aposta = 10;
  $numero = 5;
  $numero_sorteado = 5;

 if($numero == $numero_sorteado + 1){
    echo "Você ganhou R$: ", $aposta * 5;
}
 else{
    echo " Quase acertou, seu numero: $numero <br>";
    echo " Numero sorteado: ", $numero_sorteado + 1;
}

           ?>