<?php

function verificarIdade($idade){

if ($idade >= 18){
    return "Maior de idade. Pode tirar carta <br><br>";
}
else{
    return "Menor de idade. Só de UBER <br><br>";
}

}

echo verificarIdade(17);
echo verificarIdade(44);
echo verificarIdade(15);
echo verificarIdade(18);
echo verificarIdade(19);
echo verificarIdade(45);
echo verificarIdade(50);
echo verificarIdade(11);
echo verificarIdade(16);


?>























?>