<?php


$password1 = $_GET["time"] ?? "";



function verificationDMDP($password){
    $char = ["a","b","c","d","e","f","g","h","i","j",
    "k","l","m","n","o","p","q","r","s","t","u","v","w",
    "x","y","z","0","1","2","3","4","5","6","7","8","9","0"];

    for($i=0; $i<36; $i++){
        for($j=0; $j<36; $j++){
            for($k=0; $k<36; $k++){
                $Pass3 = $char[$i].$char[$j].$char[$k];
                if ($Pass3 === $password){
                    return true;
                }
                for($l=0; $l<36; $l++){
                    $Pass4 = $char[$i].$char[$j].$char[$k].$char[$l];
                    if ($Pass4 === $password){
                        return true;
                    }
                    for($m=0; $m<36; $m++){
                        $Pass5 = $char[$i].$char[$j].$char[$k].$char[$l].$char[$m];
                        if ($Pass5 === $password){
                            return true;
                        }        
                    }        
                }
            }
        }
    } 
}
// $start_time = microtime(true);
// verificationDMDP($password1);
// $end_time = microtime(true);
// $execution_times = ($end_time - $start_time); 
// echo "Appel 1: ".round($execution_times, 2)."ms<br>";

// $start_time = microtime(true);
// verificationDMDP($password2);
// $end_time = microtime(true);
// $execution_times = ($end_time - $start_time); 
// echo "Appel 1: ".round($execution_times, 2)."ms<br>";

// $start_time = microtime(true);
// verificationDMDP($password3);
// $end_time = microtime(true);
// $execution_times = ($end_time - $start_time); 
// echo "Appel 1: ".round($execution_times, 2)."ms<br>";

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
    <h1 class="title">Projet Final</h1>
    <div class="time">
        
        <div> <?php 

        if ($password1 === ""){
        }else{

            $password1 = trim($password1);
            $start_time = microtime(true);
            verificationDMDP($password1);
            $end_time = microtime(true);
            $execution_times = ($end_time - $start_time); 
            echo "Appel 1: ".round($execution_times, 2)."ms<br>";
        }

?></div>
    </div>
    <div class="formTt infoColor">Entrez un mot de passe de 4 symboles incluant les lettres de l'alphabet en minuscule et les chiffres</div>
    <div>
        <form class="formTt" action="pass.php" method="get">
            <input type="text" name="time" placeholder="Entrez le mot de pass">
            <input type="submit" value="Envoyez">
        </form>
    </div>
    <h1>Environnement de développement web 1</h1>
    <nav>
        <a href="index.php" role="menuitem" aria-roledescription="menuitem">Accueil</a>
        <a href="tableauTemps.php" role="menuitem" aria-roledescription="menuitem">Tableau de Temps</a>
        <a href="pass.php" role="menuitem" aria-roledescription="menuitem">Mot de passe</a>
        <a href="cartes.php" role="menuitem" aria-roledescription="menuitem">Paquet de cartes</a>
    </nav>
</body>
</html>