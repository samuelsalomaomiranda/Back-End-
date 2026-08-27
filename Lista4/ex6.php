<?php 

$cliente_idade = 30 ;
$deficiencia = "sim" ;
$gestante = "não" ;


if($cliente_idade == 60 || $deficiencia == "sim" || $gestante == "sim" ){
    echo "Atendimento prioritário";
}
else{
    echo "Atendimento normal";
}

?>