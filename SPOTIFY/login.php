<?php

$email = $_POST["email"];
$senha = $_POST["senha"];

$usuarios = file("usuarios.txt");

foreach ($usuarios as $usuario) {
    $dados = explode("|" , $usuario);

    if ($email == $dados[1] && $senha == $dados[2]) {
        header ("location: inicio.html");
        exit;
    }
}

echo "E-mail ou senha incorreto. <br>";
echo '<a href= "login.html"> Tentar Novamente </a>';


?>