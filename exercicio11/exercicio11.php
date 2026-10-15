<?php
$name = $_POST ['name'];
$age = $_POST ['age'];
$service = $_POST ['service'];

echo $name ;
echo "<br>";
echo "<br>";
echo "Sua idade" , $age ;
echo "<br>";
echo "<br>";


if($service == "Barba"){
    echo "Barba R$ 30,00";
}
elseif($service == "Corte"){
    echo "Corte R$ 20,00";
}
elseif($service == "Corte e Barba"){
    echo "Corte e Barba R$ 45,00";
}


?>