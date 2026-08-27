<?php 

$nome = "John Wick";
$acesso = 3;

if($acesso == 1){
    echo "Bem vindo $nome, você tem acesso básico ao sistema";
}
elseif($acesso == 2){
    echo "Bem vindo $nome, você tem acesso intermediário ao sistema";
}
elseif($acesso == 3){
    echo "Bem vindo $nome, você tem acesso de administrador ao sistema";
}
else{
    echo"Erro, número de acesso inválido" , $acesso;
}

?>