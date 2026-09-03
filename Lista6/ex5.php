<?php


$opcao = 4 ;
echo '<h1 style ="color: yellow;"> |⚔️- Pig Swords -⚔️| </h1><br>';
echo "1 - Jogar<hr>";
echo "2 - Ver personagens<br>";
echo "3 - Ver ranking<hr><br>";
echo "4 - Opções<br>";
echo "5 - Sair<br>";

switch ($opcao) {
    case 1: 
        echo "......- Jogo iniciando -......<br> -";
        break;
    case 2:
        echo "........- Personagens -........<br> - Tiblack💣 - <br> - Carlos do Gancho 🪝- <br> - Rondela 🍩 - <br>";
        break;
    case 3:
        echo "........- Ranking -........<br> - 1° Roro 🥇-<br> - 2° Joca 🥈-<br> - 3° Felipinho 🥉-<br>";
        break;
    case 4:
        echo "- Grafico: Alto ✨-<br>- FPS: 60 🪄-<br>- Fogo amigo: Ligado 🔥-<br>";
        break;
    case 5:
        echo "Saindo.....";
        break;
    default:
        echo  "Opção invalida.";
    }

?>