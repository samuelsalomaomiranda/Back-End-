<?php

$tamanho = $_POST['tamanho'];
$refri = $_POST['refri'];
$sabores = $_POST['sabores'] ?? [];
$texto_sabores = implode(',', $sabores);
$qtd = count($sabores);
$total = 0;


//Validar se o usuario escolheu os sabores corretos
if($qtd > 2 || $qtd < 1){
    echo "Selecione 1 ou 2 sabores! <br>";
    echo "<a href='index.html'> Voltar </a>";
    exit;
}

//Tamanho das pizzas
if($tamanho == 'Broto'){
    $total = 45;
}

else {
    $total = 65;
}


//Validando os refris
if($refri == 'Coca'){
    $total = $total + 12;
}

elseif($refri =='Guarana'){
    $total = $total + 10;
}

elseif($refri =='CocaLata'){
    $total = $total + 6;
}

$msg = "Pedido: Pizza $tamanho com $texto_sabores
+ Refri $refri. Total: R$ $total";
$numero = "5514998224488";
$link = "https://api.whatsapp.com/send?
phone=$numero&text=" . urlencode($msg);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizza</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="box">
        <img src="logo.png" alt="Logo" height="200" width="200">
        <h1>🛒 Resumo do Pedido </h1>
        <p>Pizza: <?php echo $tamanho; ?></p>
        <p>Sabores: <?php echo $texto_sabores; ?></p>
        <p>Refri: <?php echo $refri; ?></p>
        <h2>Total: R$ <?php echo $total; ?></h2>

        <a href="<?php echo$link; ?>" class="btn wsp">
            📱Pedir no whatsapp
        </a>

        <a href="index.html" class = "btn wsp">
            Voltar
        </a>
    </div>
</body>
</html>

