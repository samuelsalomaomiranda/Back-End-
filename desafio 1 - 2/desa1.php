<?php
 
$tipo_combustivel = $_POST["combustivel"];
$litros = $_POST["litros"];
$diesel = 6.0;
$etanol = 4.2;
$gasolina = 6.2;
 
  
if ($tipo_combustivel == "diesel") {
      
      echo "⛽ Você abasteceu ",$litros, "litros.";
      echo "💰 Total a pagar: R$",$litros*$diesel;
  }
elseif ($tipo_combustivel == "etanol") {
      
      echo "⛽ Você abasteceu ",$litros, "litros.";
      echo "💰 Total a pagar: R$",$litros*$etanol;
  }
     
elseif ($tipo_combustivel == "gasolina") {
      
      echo "⛽ Você abasteceu ",$litros, "litros.";
      echo "💰 Total a pagar: R$",$litros*$gasolina;
  }
else {
      
      echo "Serviço não encontrado.";
  }
?>