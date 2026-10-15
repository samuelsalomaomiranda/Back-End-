<?php
 
$nome = $_POST["nome"];
$horas = $_POST["horas"];
$veiculo = $_POST["veiculo"];

  
if ($veiculo == 1) {
      
      echo "Motorista: ", $nome, "<br>";
      echo "Tempo: ",$horas, " horas", "<br>";
      echo "Veículo: Carro", "<br>";
  }
elseif ($veiculo == 2) {
      
      echo "Motorista: ", $nome, "<br>";
      echo "Tempo: ",$horas, " horas", "<br>";
      echo "Veículo: moto", "<br>";
  }
     
elseif ($veiculo == 3) {
      
      echo "Motorista: ", $nome, "<br>";
      echo "Tempo: ",$horas, " horas", "<br>";
      echo "Veículo: Caminhonete", "<br>";
  }
else {
      
      echo "Serviço não encontrado.";
  }
?>