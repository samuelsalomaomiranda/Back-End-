<?php
 if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $tipo = $_POST["tipo"];
    $gen  = $_POST["genero"];
    $tam  = $_POST["tamanho"];
    $est  = $_POST["estilo"];
    $obra = "";
    $desc = "";

    //anime

    if ($tipo == "Anime" && $gen == "Ação"){
        $obra = "Attack on Titan";
        $desc = "Humanos lutam pela sobrevivência 
        contra gigantes.";
    }
    elseif ($tipo == "Anime" && $gen == "Romance"){
        $obra = "Your Lie in April";
        $desc = "Um pianista volta a tocar após conhecer 
        uma violinista especial.";
    }
    elseif ($tipo == "Anime" && $gen == "Fantasia"){
        $obra = "One Piece";
        $desc = "Uma aventura em um mundo vasto, acompanhado
        de sua tripulação.";
    }
    elseif ($tipo == "Anime" && $gen == "Terror"){
        $obra = "Berserk";
        $desc = "Um mundo de pura dor e sofrimento, aonde
        um mercenario tem seu espirito destruido.";
    }
     elseif ($tipo == "Anime" && $gen == "Comedia"){
        $obra = "Gintama";
        $desc = "é um anime e mangá de comédia e ação
        ambientado em uma versão alternativa do Japão feudal, que foi 
        invadido e dominado por alienígenas (chamados de Amanto).";
    }

    //manga

    elseif ($tipo == "Manga" && $gen == "Romance"){
        $obra = "Kaguya-Sama";
        $desc = "Um casal que compete quem sera pedido
        primeiro em namoro.";
    }
    elseif ($tipo == "Manga" && $gen == "Fantasia"){
        $obra = "One Piece";
        $desc = "Uma aventura em um mundo vasto, acompanhado
        de sua tripulação.";
    }
    elseif ($tipo == "Manga" && $gen == "Terror"){
        $obra = "Berserk";
        $desc = "Um mundo de pura dor e sofrimento, aonde
        um mercenario tem seu espirito destruido.";
    }
     elseif ($tipo == "Manga" && $gen == "Comedia"){
        $obra = "Gintama";
        $desc = "é um anime e mangá de comédia e ação
        ambientado em uma versão alternativa do Japão feudal, que foi 
        invadido e dominado por alienígenas (chamados de Amanto).";
    }

     elseif ($tipo == "Manga" && $gen == "Ação"){
        $obra = "Chainsaw Man";
        $desc = "Um garoto que vira um demonio motoserra.";

    }
    
    //livro

     elseif ($tipo == "Livro" && $gen == "Romance"){
        $obra = "Crepusculo";
        $desc = "O amor de uma garota humana e um vampiro.";
    }
    elseif ($tipo == "Livro" && $gen == "Fantasia"){
        $obra = "Harry Potter";
        $desc = "Uma historia aonde um mago lendario começa
        sua carreira.";
    }
    elseif ($tipo == "Livro" && $gen == "Terror"){
        $obra = "Drácula";
        $desc = "História do conde e seu terror.";
    }
     elseif ($tipo == "Livro" && $gen == "Comedia"){
        $obra = "Alto da Compadecida";
        $desc = "Dois nordestinos tranbiqueiros.";
    }

     elseif ($tipo == "Livro" && $gen == "Ação"){
        $obra = "Jogos Vorazes";
        $desc = "retrata um futuro distópico onde adolescentes 
        de distritos pobres são obrigados a lutar até a morte.";

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
    <title>GeekIA - Especialista Nerd</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="logogeekai.jpg">
</head>

<body>

    <div class="container">

        <img src="logogeekai.jpg" width="200" alt="GeekIA Logo">

        <h2>Recomendação</h2>
        <?php echo $obra;?>
        <?php echo $desc;?>

    </div>
</body>
</html>