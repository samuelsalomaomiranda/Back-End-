<?php
 $contador = 0;

for ($a = 1; $a <= 50; $a++){

    if ($a % 3 == 0){
        echo "$a é múltiplo de 3 <br>";
        $contador++;
    }
}
echo " <br> ";
echo "  Qtd de múltiplo de 3: $contador ";

?>