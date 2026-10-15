<?php
 if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $grupo = $_POST["grupo_muscular"];
    $obj   = $_POST["objetivo"];
    $niv   = $_POST["nivel"];
    $loc   = $_POST["local"];
    
    $treino = "";
    $desc   = "";

    // PEITO
    if ($grupo == "Peito" && $obj == "Hipertrofia"){
        $treino = "Supino Reto + Crossover";
        $desc = "4 séries de 8 a 10 repetições focadas em ganho de massa muscular.";
    }
    elseif ($grupo == "Peito" && $obj == "Definicao"){
        $treino = "Supino Inclinado + Flexão de Braço";
        $desc = "4 séries de 12 a 15 repetições com descansos curtos de 45 segundos.";
    }
    elseif ($grupo == "Peito" && $obj == "Forca"){
        $treino = "Supino Reto Pesado + Paralelas";
        $desc = "5 séries de 5 repetições com carga alta e foco em força bruta.";
    }
    elseif ($grupo == "Peito" && $obj == "Resistencia"){
        $treino = "Flexão de Braço + Crucifixo";
        $desc = "4 séries de 20 repetições para aumentar a resistência muscular.";
    }

    // COSTAS
    elseif ($grupo == "Costas" && $obj == "Hipertrofia"){
        $treino = "Puxada Frontal + Remada Curvada";
        $desc = "4 séries de 10 repetições para trabalhar a largura e densidade das costas.";
    }
    elseif ($grupo == "Costas" && $obj == "Definicao"){
        $treino = "Remada Baixa no Cabo + Barra Fixa";
        $desc = "4 séries de 15 repetições priorizando cadência e ritmo de movimento.";
    }
    elseif ($grupo == "Costas" && $obj == "Forca"){
        $treino = "Levantamento Terra + Remada Pesada";
        $desc = "5 séries de 5 repetições focadas na construção de força total.";
    }
    elseif ($grupo == "Costas" && $obj == "Resistencia"){
        $treino = "Puxada Alta + Remada Unilateral";
        $desc = "4 séries de 18 a 20 repetições com carga leve a moderada.";
    }

    // PERNAS
    elseif ($grupo == "Pernas" && $obj == "Hipertrofia"){
        $treino = "Agachamento Livre + Leg Press 45°";
        $desc = "4 séries de 10 repetições para volume máximo de quadríceps e glúteos.";
    }
    elseif ($grupo == "Pernas" && $obj == "Definicao"){
        $treino = "Passada / Afundo + Cadeira Extensora";
        $desc = "4 séries de 15 repetições por perna para alta queima calórica.";
    }
    elseif ($grupo == "Pernas" && $obj == "Forca"){
        $treino = "Agachamento Pesado + Stiff com Barra";
        $desc = "5 séries de 5 repetições para máximo recrutamento neuromuscular.";
    }
    elseif ($grupo == "Pernas" && $obj == "Resistencia"){
        $treino = "Agachamento Búlgaro + Elevação de Panturrilha";
        $desc = "4 séries de 20 repetições trabalhando resistência de membros inferiores.";
    }

    // OMBROS
    elseif ($grupo == "Ombros" && $obj == "Hipertrofia"){
        $treino = "Desenvolvimento com Halteres + Elevação Lateral";
        $desc = "4 séries de 10 a 12 repetições para dar volume aos deltoides.";
    }
    elseif ($grupo == "Ombros" && $obj == "Definicao"){
        $treino = "Elevação Frontal + Remada Alta";
        $desc = "4 séries de 15 repetições para trabalhar os detalhes e recortes do ombro.";
    }
    elseif ($grupo == "Ombros" && $obj == "Forca"){
        $treino = "Desenvolvimento Militar com Barra";
        $desc = "5 séries de 5 repetições pesadas executadas em pé.";
    }
    elseif ($grupo == "Ombros" && $obj == "Resistencia"){
        $treino = "Elevação Lateral em Drop-set";
        $desc = "4 séries de 20 repetições até a exaustão com intervalos curtos.";
    }
 }
 else{
    header ("Location: index.html");
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>traneAI - Especialista em Treinos</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="logotraneai.png">
</head>

<body>

    <div class="container">

        <img src="logotraneai.png" width="200" alt="traneAI Logo">

        <h2>Recomendação de Treino</h2>
        
        <h3><?php echo $treino; ?></h3>
        <p><?php echo $desc; ?></p>


<a href="Traineai.html"> <br> <br>
    <img src="backbutton.png" alt = "voltar" width="13" height="13">VOLTAR</a>
            
    </div>
</body>
</html>

