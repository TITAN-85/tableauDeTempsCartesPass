<?php

$nums = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13];
$suit = ["♦", "♣", "♥", "♠"];
$deck = [];
$deck1 = [];
$deck2 = [];
$shuffle = [];

for ($i = 0; $i < count($suit); $i++) {
    for ($j = 0; $j < count($nums); $j++) {
        $deck[] = $nums[$j] . " " . $suit[$i];
    }
}

function shuffleCards($deck)
{
    for ($i = count($deck) - 1; $i >= 1; $i--) {
        $ran = mt_rand(0, $i);
        list($deck[$ran], $deck[$i]) = array($deck[$i], $deck[$ran]);
    }
    return $deck;
}

// for ($i=0; $i < 52; $i++){
//     if ($i < 26 ) $deck1[] = $deck[$i];
//     else          $deck2[] = $deck[$i];
// }

// for($i=0; $i < 26; $i++){
//    $shuffle[] = $deck1[$i];
//    $shuffle[] = $deck2[$i];
// }

// for($i=0; $i < count($deck); $i++){
//     echo $deck[$i];
//     if(($i+1)%13 ==0 && $i!=0) {
//         echo "<br>";
//     }
// }
echo "<br><br><br>";

for ($i = 0; $i < count($shuffle); $i++) {
    echo $shuffle[$i];
    if (($i + 1) % 13 == 0 && $i != 0) {
        echo "<br>";
    }
}

$shuffle = shuffleCards($deck);



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Author" content="Alexandru Candu 2295298">
    <link rel="stylesheet" href="style.css">
    <title>Projet Final</title>
</head>

<body>
    <div class="Shuffle">
        <?php
        for ($i = 0; $i < count($shuffle); $i++) {
            echo $shuffle[$i];
            if (($i + 1) % 13 == 0 && $i != 0) {
                echo "<br>";
            }
        }
        ?>
    </div>
    <h1>Environnement de développement web 1</h1>

    <nav>
        <a href="projet-final.php" role="menuitem" aria-roledescription="menuitem">Projet final</a>
        <a href="tableauTemps.php" role="menuitem" aria-roledescription="menuitem">Tableau de Temps</a>
        <a href="pass.php" role="menuitem" aria-roledescription="menuitem">Mot de passe</a>
        <a href="cartes.php" role="menuitem" aria-roledescription="menuitem">Paquet de cartes</a>
    </nav>
</body>

</html>