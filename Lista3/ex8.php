<?php
$nome = "Samuel";
$senha = 2026;
$confirmar_senha = 2026;
$data_nasc = "16/09/2009";

if($senha == $confirmar_senha){
    echo " Acesso confirmado ", $data_nasc  ;}

else{
    echo " Acesso negado ";
}


?>