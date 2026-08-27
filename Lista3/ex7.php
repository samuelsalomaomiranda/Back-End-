<?php

$valor = 60;
$valorminimoentrega = 7;
$idadecliente = 18;
$idademinimabebidaalcoolica =18;
$estoque = 15;
$quantidadepedida = 2;

echo "bem vindo a hamburgueria";

if($valor >= 60){
    echo "<br>pedido feito com sucesso";
}
else{
  echo "<br>o valor do pedido precisa ser igual ou maior que 60$";  
}
if($valorminimoentrega >=  7){
    echo "<br>Seu pedido esta a caminho";
}
else{
  echo "<br>o valor é ",$valor+$valorminimoentrega;  
}
if($idadecliente <= $idademinimabebidaalcoolica){
    echo "<br>você não tem idade para comprar ou ingerir bebida alcoolica, tire do seu carrinho";
}
else{
  echo "<br>seu pedido foi feito com sucesso";  
}
if($estoque = 0){
    echo "<br>nao temos estoque para o seu pedido";
}

?>