<?php

$nome = $_POST["nome"];
$email = $_POST["email"];
$senha = $_POST["senha"];
$date = $_POST["date"];

$dados = $nome . "|" . $email . "|" . $senha . "|" . $date . "\n";

$arquivo = fopen ("usuarios.txt" , "a");

fwrite($arquivo , $dados);
fclose($arquivo);

echo "<h1> Cadastro realizado! </h1>";
echo "<p> Bem-Vindo, $nome! </p>";
echo "<a href= 'login.html'> Ir para o login</a>";

?>
