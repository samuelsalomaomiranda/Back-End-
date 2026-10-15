<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $veiculo  = $_POST["veiculo"];
    $problema = $_POST["problema"];
    $servico  = "";
    $desc     = "";

    // Carro
    if ($veiculo == "Carro" && $problema == "Freio"){
        $servico = "Revisão do Sistema de Freios Automotivo";
        $desc = "Verificação do nível de fluido de freio, desgaste das pastilhas e discos.";
    }
    elseif ($veiculo == "Carro" && $problema == "Barulho"){
        $servico = "Diagnóstico Suspensão e Amortecedores";
        $desc = "Inspeção de buchas, pivôs, terminais de direção e amortecedores.";
    }
    elseif ($veiculo == "Carro" && $problema == "Motor"){
        $servico = "Diagnóstico Eletrônico e Injeção (Scanner)";
        $desc = "Leitura da central eletrônica, testes em velas, cabos e bicos injetores.";
    }
    elseif ($veiculo == "Carro" && $problema == "Pneu"){
        $servico = "Geometria, Alinhamento e Balanceamento";
        $desc = "Avaliação de desgaste da banda de rodagem, alinhamento e balanceamento.";
    }

    // Moto
    elseif ($veiculo == "Moto" && $problema == "Freio"){
        $servico = "Manutenção do Sistema de Freio Motociclístico";
        $desc = "Inspeção de pastilhas, fluido hidráulico e estado dos discos/tambores.";
    }
    elseif ($veiculo == "Moto" && $problema == "Barulho"){
        $servico = "Ajuste e Kits de Transmissão / Corrente";
        $desc = "Verificação de folga, lubrificação e desgaste do kit relação.";
    }
    elseif ($veiculo == "Moto" && $problema == "Motor"){
        $servico = "Revisão de Carburador / Injeção e Ignição";
        $desc = "Limpeza de bico/carburador, troca de vela e regulagem de válvulas.";
    }
    elseif ($veiculo == "Moto" && $problema == "Pneu"){
        $servico = "Troca e Balanceamento de Pneus de Moto";
        $desc = "Análise da profundidade dos sulcos e alinhamento das rodas.";
    }

    // Caminhonete
    elseif ($veiculo == "Caminhonete" && $problema == "Freio"){
        $servico = "Manutenção de Freios Alta Carga";
        $desc = "Inspeção do sistema hidráulico, discos ventilados e lonas traseiras.";
    }
    elseif ($veiculo == "Caminhonete" && $problema == "Barulho"){
        $servico = "Inspeção de Cardã, Diferencial e Suspensão Heavy Duty";
        $desc = "Análise de cruzetas, folga no diferencial e feixe de molas.";
    }
    elseif ($veiculo == "Caminhonete" && $problema == "Motor"){
        $servico = "Diagnóstico de Motores Diesel / Flex de Alta Carga";
        $desc = "Teste da pressão de turbo, bomba, bicos injetores e varredura scanner.";
    }
    else {
        $servico = "Alinhamento Caster/Camber e Troca de Pneus Off-Road";
        $desc = "Avaliação de carga por eixo e regulagem de geometria de suspensão.";
    }
}
else {
    header("Location: index.html");
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AutoCheck - Resultado</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="logo (2).png">
</head>

<body>

    <div class="container">

        <img src="logo (2).png" width="200" alt="AutoCheck Logo">

        <h2>Orientação Inicial</h2>

        <div class="resultado">
            <h3><?php echo $servico; ?></h3>
            <p><?php echo $desc; ?></p>
        </div>

        <div class="explicacao">
            <p><strong>Aviso Importante:</strong> O sistema realiza apenas uma pré-avaliação e não substitui o diagnóstico presencial de um mecânico.</p>
        </div>

        <a href="autocheck.html"> <br> <br>
    <img src="backbutton.png" alt = "voltar" width="13" height="13">VOLTAR</a>
            
    </div>

</body>

</html>