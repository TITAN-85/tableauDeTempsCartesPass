<?php
$nums = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13];
$suit = ["♦", "♣", "♥", "♠"];
$deck = [];
$deck1 =[];
$deck2 =[];
$shaffle=[];

for ($i=0; $i < count($suit); $i++){
    for ($j=0; $j < count($nums); $j++) {
        $deck[] = $nums[$j]." ".$suit[$i];
    }
}



//Charle variant
for ($i=0; $i < 52; $i++){
    if ($i < 26 ) $deck1[] = $deck[$i];
    else          $deck2[] = $deck[$i];
}




$shaffle[0] = $deck2[0];
for($i=0; $i < 26; $i++){
    $shaffle[] = $deck1[$i];
    $shaffle[] = $deck2[$i+1];
}
unset($shaffle[52]);


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
    <h1>Environnement de développement web 1</h1>
    <div>
        <?php echo "\$Deck", "</pre>", print_r($deck, true),"</pre>";
echo "</pre></pre></pre>";
echo "\$Deck1", "</pre>", print_r($deck1, true),"</pre>";
echo "</pre></pre></pre>";
echo "\$Deck2", "</pre>", print_r($deck2, true),"</pre>";
echo "</pre></pre></pre>";
echo "\$shaffle", "</pre>", print_r($shaffle, true),"</pre>"; ?>
    </div>
    <nav>
        <a href="projet-final.php" role="menuitem" aria-roledescription="menuitem">Projet final</a>
        <a href="tableauTemps.php" role="menuitem" aria-roledescription="menuitem">Tableau de Temps</a>
        <a href="pass.php" role="menuitem" aria-roledescription="menuitem">Mot de passe</a>
        <a href="cartes.php" role="menuitem" aria-roledescription="menuitem">Paquet de cartes</a>
    </nav>
</body>
</html>