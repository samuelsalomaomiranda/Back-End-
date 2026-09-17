<?php
$valor_compra = $_POST['valor'];
$dinheiro_pago = $_POST["dinheiro"];

if($dinheiro_pago <$valor_compra){
    echo "Falta dinheiro para compra";
}
else{
    echo "seu troco é R$", $dinheiro_pago - $valor_compra;
}

?>